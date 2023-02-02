<?php

namespace Modules\Users\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Users\Repositories\CategoryRepository;
use Modules\Users\Repositories\ProductRepository;

class CartController extends Controller
{
    private CategoryRepository $categoryRepository;
    private ProductRepository $productRepository;

    public function __construct(
        CategoryRepository $categoryRepository,
        ProductRepository  $productRepository
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * Màn hình Cart
     */
    public function index()
    {
        $categories = $this->categoryRepository->list();

        return view('users::cart.index', compact('categories'));
    }

    public function success()
    {
        $categories = $this->categoryRepository->list();

        return view('users::cart.success', compact('categories'));
    }

    public function paygate()
    {
        $categories = $this->categoryRepository->list();

        return view('users::cart.paygate', compact('categories'));
    }

    public function create(Request $request)
    {
        $vnp_TxnRef = $request->input('order_id', '20220725144034'); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $request->input('order_desc', 'Noi dung thanh toan');
        $vnp_OrderType = $request->input('order_type', 'fashion');
        $vnp_Amount = $request->input('amount', 10000) * 100;
        $vnp_Locale = $request->input('language', 'vn');
        $vnp_BankCode = $request->input('bank_code', 'NCB');
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        //Add Params of 2.0.1 Version
        $vnp_ExpireDate = $request->input('txtexpire', date('YmdHis', strtotime('+15 minutes', strtotime(now()))));
        //Billing
        $vnp_Bill_Mobile = $request->input('txt_billing_mobile', '0934998386');
        $vnp_Bill_Email = $request->input('txt_billing_email', 'hoagngocnam@mail.com');
        $fullName = trim($request->input('txt_billing_fullname', 'Hoàng Ngọc Nam'));
        if (isset($fullName) && trim($fullName) != '') {
            $name = explode(' ', $fullName);
            $vnp_Bill_FirstName = array_shift($name);
            $vnp_Bill_LastName = array_pop($name);
        }
        $vnp_Bill_Address = $request->input('txt_inv_addr1', '22 Láng Hạ, Phường Láng Hạ, Quận Đống Đa, TP Hà Nội');
        $vnp_Bill_City = $request->input('txt_bill_city', 'Hà Nội');
        $vnp_Bill_Country = $request->input('txt_bill_country', 'VN');
        $vnp_Bill_State = $request->input('txt_bill_state');
        // Invoice
        $vnp_Inv_Phone = $request->input('txt_inv_mobile', '02437764668');
        $vnp_Inv_Email = $request->input('txt_inv_email', 'pholv@vnpay.vn');
        $vnp_Inv_Customer = $request->input('txt_inv_customer', 'Hoàng Ngọc Nam');
        $vnp_Inv_Address = $request->input('txt_inv_addr1', '22 Láng Hạ, Phường Láng Hạ, Quận Đống Đa, TP Hà Nội');
        $vnp_Inv_Company = $request->input('txt_inv_company', 'Công ty Hoàng Nam');
        $vnp_Inv_Taxcode = $request->input('txt_inv_taxcode', '0102182292');
        $vnp_Inv_Type = $request->input('cbo_inv_type', 'I');
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => env('VNP_TMNCODE'),
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => route('users.return-vnpay'),
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_ExpireDate" => $vnp_ExpireDate,
            // "vnp_Bill_Mobile" => $vnp_Bill_Mobile,
            // "vnp_Bill_Email" => $vnp_Bill_Email,
            // "vnp_Bill_FirstName" => $vnp_Bill_FirstName,
            // "vnp_Bill_LastName" => $vnp_Bill_LastName,
            // "vnp_Bill_Address" => $vnp_Bill_Address,
            // "vnp_Bill_City" => $vnp_Bill_City,
            // "vnp_Bill_Country" => $vnp_Bill_Country,
            // "vnp_Inv_Phone" => $vnp_Inv_Phone,
            // "vnp_Inv_Email" => $vnp_Inv_Email,
            // "vnp_Inv_Customer" => $vnp_Inv_Customer,
            // "vnp_Inv_Address" => $vnp_Inv_Address,
            // "vnp_Inv_Company" => $vnp_Inv_Company,
            // "vnp_Inv_Taxcode" => $vnp_Inv_Taxcode,
            // "vnp_Inv_Type" => $vnp_Inv_Type
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = env('VNP_URL') . "?" . $query;
        $vnp_HashSecret = env('VNP_HASHSECRET');
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array(
            'code' => '00', 'message' => 'success', 'data' => $vnp_Url
        );
        header('Location: ' . $vnp_Url);
        die();
        if (!empty($request->input('redirect'))) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
    }

    public function returnVnpay(Request $request)
    {
        dd($request->all());
        echo 'return vnpay';
    }
}
