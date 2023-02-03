@extends('users::layouts.index')

@section('styles')
    <link rel="stylesheet" href="{{ asset('users/css/cart.css') }}">
    <link rel="stylesheet" href="https://cdn.tgdd.vn/mwgcart/vue-pro/css/desktop/cart.min.6375ae88c22475d58e77.css">
    <link rel="stylesheet" href="https://cdn.tgdd.vn/mwgcart/vue-pro/css/cart.6375ae88c22475d58e77.css">
@endsection

@section('main-content')
    <div id="app" class="">
        <section>
            <!---->
            <div class="yourCart top-content"><a href="https://www.dienmayxanh.com" class="buymore">Mua thêm sản phẩm
                    khác</a>
                <!----><span>Giỏ hàng của bạn
                    <!---->
                </span>
                <!---->
            </div>
            <div class="middleCart">
                <ul class="listing-cart">
                    {{-- Danh sách sản phẩm --}}
                    <li class="product-item">
                        <div class="imgsp"><a href="/dien-thoai/samsung-galaxy-s22-ultra" target="_blank"><img
                                    data-src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Burgundy-200x200.jpg"
                                    src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Burgundy-200x200.jpg"
                                    alt="Điện thoại Samsung Galaxy S22 Ultra 5G 128GB" loading="lazy"
                                    class=" ls-is-cached lazyloaded"></a>
                            <div><button><span></span> Xóa </button></div>
                        </div>
                        <div data-tmp-price-original="30990000" data-tmp-price-discount="27990000"
                            data-tmp-product-name="Điện thoại Samsung Galaxy S22 Ultra 5G 128GB" data-tmp-product-type="1"
                            data-tmp-quantity="1" data-tmp-max-quantity="5" class="infosp">
                            <div class="name-price">
                                <div class="name-container"><a href="/dien-thoai/samsung-galaxy-s22-ultra"
                                        class="product-item__name"> Điện thoại Samsung Galaxy S22 Ultra 5G 128GB </a></div>
                                <span> 27.990.000₫
                                    <!----><strike>30.990.000₫</strike>
                                </span>
                            </div>
                            <hr style="width: 65%; visibility: hidden;">
                            <!---->
                            <!---->
                            <div class="promo">
                                <aside>
                                    <!----><small class="promotionName">Giảm giá 2,000,000đ (Không áp dụng kèm Thu cũ Đổi
                                        mới)</small><small class="promotionName">Giảm đến 4,000,000đ khi Thu cũ Đổi mới (tùy
                                        model máy cũ) <a href="http://www.thegioididong.com/thu-cu-doi-moi"> Xem chi
                                            tiết</a></small><small class="promotionName">Ưu đãi phòng chờ hạng thương gia <a
                                            href="http://www.thegioididong.com/tin-tuc/s22-series-uu-dai-phong-cho-hang-thuong-gia-1417400">
                                            Xem chi tiết</a></small><small class="promotionName">Trả góp 0% thẻ tín dụng,
                                        chuyển đổi qua Quà tặng Galaxy <a
                                            href="http://www.thegioididong.com/tin-tuc/mua-samsung-galaxy-tra-gop-0-qua-the-tin-dung-1386100">
                                            Xem chi tiết</a></small><small class="promotionName">Giảm giá 40% gói Bảo hành
                                        mở rộng Samsung Care+ 12 tháng <a
                                            href="https://www.thegioididong.com/tin-tuc/samsung-care-plus-bao-hanh-toan-dien-thiet-bi-cua-ban-1428947">
                                            Xem chi tiết</a></small><small class="promotionName">Nhập mã&nbsp;MWG18 giảm 3%
                                        tối đa 100.000đ khi thanh toán quét QRcode qua App của ngân hàng <a
                                            href="https://www.dienmayxanh.com/khuyen-mai/nhap-ma-mwg18-giam-3-toi-da-100k-khi-thanh-toan-q-1443113">
                                            (click xem chi tiết)</a></small><label class="">6 khuyến mãi</label>
                                </aside>
                                <!---->
                            </div>
                            <!---->
                            <!---->
                            <div class="discountpromotion"><span class="promo-discount" data-tmp-promo-discount="2000000"
                                    data-tmp-price-after-discount="25990000">Giảm <strong
                                        class="discountpromotion__discountbox">2.000.000₫</strong> còn <strong
                                        class="discountpromotion__discountbox">25.990.000₫</strong></span></div>
                            <!--fragment#6ab8537de#head-->
                            <div fragment="6ab8537de" class="choose-color">
                                <div class="product-size-and-color-selection">
                                    <aside><label class=""><span class="color-label">Màu: </span><span
                                                class="color-text">Đỏ</span></label>
                                        <div class="sg-color" style="height: 0px; display: none;">
                                            <div class="select-color active"><img
                                                    data-src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Burgundy-200x200.jpg"
                                                    src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Burgundy-200x200.jpg"
                                                    loading="lazy" class=" ls-is-cached lazyloaded"><small>Đỏ</small></div>
                                            <div class="select-color"><img
                                                    data-src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-White-200x200.jpg"
                                                    src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-White-200x200.jpg"
                                                    loading="lazy" class=" ls-is-cached lazyloaded"><small>Trắng</small>
                                            </div>
                                            <div class="select-color"><img
                                                    data-src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Black-200x200.jpg"
                                                    src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Black-200x200.jpg"
                                                    loading="lazy" class=" ls-is-cached lazyloaded"><small>Đen</small></div>
                                            <div class="select-color"><img
                                                    data-src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Green-200x200.jpg"
                                                    src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Green-200x200.jpg"
                                                    loading="lazy" class=" ls-is-cached lazyloaded"><small>Xanh lá</small>
                                            </div>
                                        </div>
                                    </aside>
                                    <!---->
                                </div>
                                <!--fragment#81cf5d2d33#head-->
                                <div class="choosenumber" fragment="81cf5d2d33">
                                    <div class="minus" style="pointer-events: none;"><i
                                            style="background-color: rgb(204, 204, 204);"></i></div><input type="text"
                                        maxlength="3" class="number" style="border: none; pointer-events: all;">
                                    <div class="plus" style="pointer-events: all;"><i
                                            style="background-color: rgb(40, 138, 214);"></i><i
                                            style="background-color: rgb(40, 138, 214);"></i></div>
                                    <!----><input type="hidden">
                                </div>
                                <!--fragment#81cf5d2d33#tail-->
                            </div>
                            <!--fragment#6ab8537de#tail-->
                            <!---->
                        </div>
                        <!---->
                        <!--fragment#16948a04277#head--><input fragment="16948a04277" type="hidden" value="true">
                        <!---->
                        <!--fragment#16948a04277#tail-->
                        <!---->
                    </li>
                    {{-- Danh sách sản phẩm --}}
                </ul>
                <div class="total-provisional">
                    <span data-tmp-total-product-quantity="2" class="total-product-quantity">
                        <span class="total-label">Tạm tính </span>(2 sản phẩm):
                    </span>
                    <span data-tmp-temp-total-money="42190000" class="temp-total-money">42.190.000₫</span>
                </div>

                <div class="infor-customer">
                    <h4>Thông tin khách hàng</h4>
                    <form class="form-customer">
                        <div class="sex-customer">
                            <input fragment="9b187b9fd6" type="hidden" value="-1">
                            <span fragment="9b187b9fd6" class="">
                                <i class="cartnew-choose"></i>
                                Anh
                            </span>
                            <span fragment="9b187b9fd6" class="">
                                <i class="cartnew-choose"></i> Chị
                            </span>
                        </div>
                        <div class="fillinform">
                            <div class="fillname">
                                <input maxlength="50" id="cusName" name="cusName" required="required"
                                    class="capitalize untouched pristine required">
                                <label for="cusName" class="form-label">Họ và Tên</label>
                            </div>
                            <div class="fillname phoneNumber">
                                <input type="tel" maxlength="10" id="cusPhone" name="cusPhone" required="required"
                                    class="untouched pristine required phoneNumber__input">
                                <label for="cusPhone" class="form-label">Số điện thoại</label>
                            </div>
                        </div>
                        <div class="fillinform">
                            <div class="fillname phoneNumber" style="width: 100%">
                                <select name="order_type" id="order_type">
                                    <option value="topup">Nạp tiền điện thoại</option>
                                    <option value="billpayment">Thanh toán hóa đơn</option>
                                    <option value="fashion">Thời trang</option>
                                    <option value="other">Khác - Xem thêm tại VNPAY</option>
                                </select>
                                <label for="cusPhone" class="form-label">L</label>
                            </div>
                        </div>
                        <div class="fillinform">
                            <div class="fillname" style="width: 100%">
                                <input name="cusName" required="required" class="capitalize untouched pristine required"
                                    value="20220725144030">
                                <label for="cusName" class="form-label">Mã hóa đơn</label>
                            </div>
                        </div>
                        <div class="fillinform">
                            <div class="fillname" style="width: 100%">
                                <input name="amount" required="required" class="capitalize untouched pristine required"
                                    value="10000000">
                                <label for="cusName" class="form-label">Số tiền</label>
                            </div>
                        </div>
                        <div class="fillinform">
                            <div class="fillname" style="width: 100%">
                                <input name="order_desc" required="required"
                                    class="capitalize untouched pristine required" value="Nội dung thanh toán">
                                <label for="cusName" class="form-label">Nội dung thanh toán</label>
                            </div>
                        </div>
                        <div class="fillinform">
                            <div class="fillname" style="width: 100%">
                                <select name="bank_code" id="bank_code" class="form-control">
                                    <option value="">Không chọn</option>
                                    <option value="NCB"> Ngan hang NCB</option>
                                    <option value="AGRIBANK"> Ngan hang Agribank</option>
                                    <option value="SCB"> Ngan hang SCB</option>
                                    <option value="SACOMBANK">Ngan hang SacomBank</option>
                                    <option value="EXIMBANK"> Ngan hang EximBank</option>
                                    <option value="MSBANK"> Ngan hang MSBANK</option>
                                    <option value="NAMABANK"> Ngan hang NamABank</option>
                                    <option value="VNMART"> Vi dien tu VnMart</option>
                                    <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                    <option value="VIETCOMBANK"> Ngan hang VCB</option>
                                    <option value="HDBANK">Ngan hang HDBank</option>
                                    <option value="DONGABANK"> Ngan hang Dong A</option>
                                    <option value="TPBANK"> Ngân hàng TPBank</option>
                                    <option value="OJB"> Ngân hàng OceanBank</option>
                                    <option value="BIDV"> Ngân hàng BIDV</option>
                                    <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                                    <option value="VPBANK"> Ngan hang VPBank</option>
                                    <option value="MBBANK"> Ngan hang MBBank</option>
                                    <option value="ACB"> Ngan hang ACB</option>
                                    <option value="OCB"> Ngan hang OCB</option>
                                    <option value="IVB"> Ngan hang IVB</option>
                                    <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                                </select>
                                <label for="cusName" class="form-label">Ngân hàng</label>
                            </div>
                        </div>
                        <div class="fillinform">
                            <div class="fillname" style="width: 100%">
                                <select name="language" id="language" class="form-control">
                                    <option value="vn">Tiếng Việt</option>
                                    <option value="en">English</option>
                                </select>
                                <label for="cusName" class="form-label">Ngôn ngữ</label>
                            </div>
                        </div>
                        <div class="fillinform">
                            <div class="fillname" style="width: 100%">
                                <input name="txtexpire" required="required"
                                    class="capitalize untouched pristine required" value="20220725145530">
                                <label for="cusName" class="form-label">Thời hạn thanh toán</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="choosegetgoods">
                    <h4>Chọn cách thức nhận hàng</h4><input type="hidden" value="2">
                    <div class="click-choose">
                        <div data-tab="tab-1" class="choose-link current"><i class="cartnew-choose"></i><span>Giao tận
                                nơi</span></div>
                        <div data-tab="tab-2" class="choose-link"><i class="cartnew-choose"></i><span>Nhận tại siêu
                                thị</span></div>
                    </div>
                    <div id="tab-1" class="choose-content current">
                        <!---->
                        <div class="deli-address">
                            <form class="active">
                                <p> Chọn địa chỉ để biết thời gian nhận hàng và phí vận chuyển (nếu có) </p>
                                <!---->
                                <div class="cntry-district">
                                    <div class="btn-click country"><button type="button" class="">Hồ Chí
                                            Minh</button>
                                        <!--fragment#14d779c1c71#head--><input fragment="14d779c1c71" type="hidden"
                                            class="ddlist" value="3">
                                        <div class="select" fragment="14d779c1c71" style="display: none;">
                                            <div class="boxsearch"><input placeholder="Nhập tỉnh, thành để tìm nhanh"><a
                                                    href="javascript:;"><i class="cartnew-search"></i></a></div>
                                            <div class="listName" style="position: relative;">
                                                <aside></aside>
                                                <aside></aside>
                                                <div class="resize-triggers">
                                                    <div class="expand-trigger">
                                                        <div style="width: 1px; height: 1px;"></div>
                                                    </div>
                                                    <div class="contract-trigger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <!--fragment#14d779c1c71#tail-->
                                    </div>
                                    <div class="btn-click district"><button type="button" class="">Chọn Quận /
                                            Huyện</button>
                                        <!--fragment#1b40d610df#head--><input fragment="1b40d610df" type="hidden"
                                            class="ddlist" value="0">
                                        <div class="select" fragment="1b40d610df" style="display: none;">
                                            <div class="boxsearch"><input placeholder="Nhập quận, huyện để tìm nhanh"><a
                                                    href="javascript:;"><i class="cartnew-search"></i></a></div>
                                            <div class="listName" style="position: relative;">
                                                <aside></aside>
                                                <aside></aside>
                                                <div class="resize-triggers">
                                                    <div class="expand-trigger">
                                                        <div style="width: 1px; height: 1px;"></div>
                                                    </div>
                                                    <div class="contract-trigger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <!--fragment#1b40d610df#tail-->
                                    </div>
                                    <div class="wards disable"><button type="button" disabled="disabled"
                                            class="">Chọn
                                            Phường / Xã</button>
                                        <!--fragment#c8e0d6f22f#head--><input fragment="c8e0d6f22f" type="hidden"
                                            class="ddlist" value="0">
                                        <div class="select" fragment="c8e0d6f22f" style="display: none;">
                                            <div class="boxsearch"><input placeholder="Nhập phường, xã để tìm nhanh"><a
                                                    href="javascript:;"><i class="cartnew-search"></i></a></div>
                                            <div class="listName" style="position: relative;">
                                                <aside><span class="active">Chọn Phường / Xã</span></aside>
                                                <aside></aside>
                                                <div class="resize-triggers">
                                                    <div class="expand-trigger">
                                                        <div style="width: 1px; height: 1px;"></div>
                                                    </div>
                                                    <div class="contract-trigger"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <!--fragment#c8e0d6f22f#tail-->
                                    </div>
                                    <div class="filladdress"><input maxlength="255" id="cusAddr" name="cusAddr"
                                            required="required" class="untouched pristine required"><label for="cusAddr"
                                            class="form-label">Số nhà, tên đường</label>
                                        <!---->
                                    </div>
                                </div>
                            </form>
                            <!--fragment#11fd129c098#head-->
                            <!---->
                            <!---->
                            <!--fragment#11fd129c098#tail-->
                        </div>
                        <!---->
                    </div>
                    <div id="tab-2" class="choose-content">
                        <!---->
                        <div class="notsupport">
                            <!--fragment#f33ab071f3#head--><input fragment="f33ab071f3" type="hidden"
                                class="untouched pristine required" value="true">
                            <!--fragment#f33ab071f3#tail--><span>Giỏ hàng đang có sản phẩm không hỗ trợ nhận hàng tại siêu
                                thị</span><small>Smart Tivi Samsung 4K Crystal UHD 55 inch UA55AU8100</small><span>Vui lòng
                                chọn <b>giao tận nơi</b> để đặt hàng</span>
                        </div>
                        <!---->
                    </div>
                    <div id="tab-1" class="choose-content">
                        <div class="mail-and-sms-note"><span> Thông tin sản phẩm sẽ được gửi về <b>email</b> và <b>số điện
                                    thoại</b> của bạn <strong>sau khi thanh toán trực tuyến thành công</strong></span></div>
                        <form class="form-customer">
                            <div class="fillinform">
                                <div class="fillemail"><input placeholder="Địa chỉ email để nhận mã kích hoạt"
                                        maxlength="50" class="lowercase untouched pristine required">
                                    <!---->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="choosegetgoods" style="display: none;">
                    <div id="tab-3" class="choose-content current">
                        <aside>
                            <div class="latch-order">
                                <div class="box-order error-order">
                                    <ul>
                                        <li><strong><b>Sản phẩm tạm ngưng nhận tại siêu thị khu vực bạn chọn</b></strong><a
                                                href="/dien-thoai/samsung-galaxy-s22-ultra" class="img-order"><img
                                                    data-src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Burgundy-200x200.jpg"
                                                    src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Burgundy-200x200.jpg"
                                                    width="40px" height="auto" loading="lazy" class="lazyload"></a><a
                                                href="/dien-thoai/samsung-galaxy-s22-ultra" class="text-order"><a
                                                    href="/dien-thoai/samsung-galaxy-s22-ultra" target="_blank"
                                                    class="text-order__product-name">Điện thoại Samsung Galaxy S22 Ultra 5G
                                                    128GB</a>
                                                <div class="amount-color"><small>Màu: Đỏ</small><small>Số lượng: 1</small>
                                                </div>
                                            </a></li>
                                        <li>
                                            <!----><a href="/tivi/led-4k-samsung-ua55au8100" class="img-order"><img
                                                    data-src="https://cdn.tgdd.vn/Products/Images/1942/235792/led-4k-samsung-ua55au8100-avatar-1-230x140.jpeg"
                                                    src="https://cdn.tgdd.vn/Products/Images/1942/235792/led-4k-samsung-ua55au8100-avatar-1-230x140.jpeg"
                                                    width="40px" height="auto" loading="lazy" class="lazyload"></a><a
                                                href="/tivi/led-4k-samsung-ua55au8100" class="text-order"><a
                                                    href="/tivi/led-4k-samsung-ua55au8100" target="_blank"
                                                    class="text-order__product-name">Smart Tivi Samsung 4K Crystal UHD 55
                                                    inch UA55AU8100</a>
                                                <div class="amount-color"><small>Màu: Đen</small><small>Số lượng: 1</small>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="anotheroption">
                    <div class="customer-note"><input id="cusNote" name="cusNote" required="required"><label
                            for="cusNote" class="form-label">Yêu cầu khác (không bắt
                            buộc)</label></div>
                    <ul>
                        <li><label class=""><i class="cartnew-select"></i><span>Gọi người khác nhận hàng (nếu
                                    có)</span></label>
                            <form class="infouser" style="display: none;">
                                <div class="cough">
                                    <!--fragment#cf62b93548#head--><input fragment="cf62b93548" type="hidden"><span
                                        fragment="cf62b93548" class=""><i class="cartnew-choose"></i> Anh
                                    </span><span fragment="cf62b93548" class=""><i class="cartnew-choose"></i> Chị
                                    </span>
                                    <!--fragment#cf62b93548#tail-->
                                    <!---->
                                </div>
                                <div class="infouser__inputs-container">
                                    <div class="fillinput halfwidth left"><input placeholder="Họ và tên người nhận"
                                            maxlength="50" class="capitalize untouched pristine required">
                                        <!---->
                                    </div>
                                    <div class="fillinput halfwidth left"><input placeholder="Số điện thoại người nhận"
                                            type="tel" maxlength="10" class="untouched pristine required">
                                        <!---->
                                    </div>
                                </div>
                            </form>
                        </li>
                        <li><label class=""><i class="cartnew-select"></i><span>Hướng dẫn sử dụng, giải đáp thắc mắc
                                    sản
                                    phẩm</span></label></li>
                        <!---->
                        <!---->
                        <li><label class=""><i class="cartnew-select"></i><span>Xuất hóa đơn công ty</span></label>
                            <form class="infocompany" style="display: none;">
                                <div class="fillinput"><input placeholder="Tên công ty" maxlength="255"
                                        class="untouched pristine required">
                                    <!---->
                                </div>
                                <div class="fillinput"><input placeholder="Địa chỉ công ty" maxlength="255"
                                        class="untouched pristine required">
                                    <!---->
                                </div>
                                <div class="fillinput"><input placeholder="Mã số thuế"
                                        class="untouched pristine required">
                                    <!---->
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <!---->
                <div class="cate-printing-ink-note" style="display: none;">
                    <div class="cate-printing-ink-note__message"></div>
                </div>
                <div class="finaltotal">
                    <div class="area-total">
                        <!---->
                        <div class="discountcode">
                            <div class="usecode coupon-code singlebox">
                                <div class="usecode__icon"><i class="cartnew-discount"></i></div><span
                                    class="usecode__title">Sử dụng mã giảm giá</span>
                            </div>
                            <!---->
                            <div class="clr"></div>
                            <!---->
                            <div class="line-break"></div>
                        </div>
                        <div>
                            <!---->
                            <!---->
                        </div>

                        <div data-tmp-total-money-in-all="42190000" class="total-price"><strong>Tổng
                                tiền:</strong><strong>42.190.000₫</strong></div>
                    </div>

                    <!----><button type="button" class="submitorder"><b style="text-transform:uppercase">Đặt
                            hàng</b></button>
                    <!----><small> Bạn có thể chọn hình thức thanh toán sau khi đặt hàng </small>
                </div>
                <!---->
                <!---->
                <!---->
            </div>
            <aside>
                <!---->
                <div><small class="footCart">Bằng cách đặt hàng, bạn đồng ý với <span> Điều khoản sử dụng của
                            Dienmayxanh</span></small></div>
                <div>
                    <!---->
                </div>
            </aside>
        </section>
        {{-- loading --}}
        <div class="loading-cart">
            <span class="cswrap">
                <span class="csdot"></span>
                <span class="csdot"></span>
                <span class="csdot"></span>
            </span>
        </div>
        {{-- loading --}}
    </div>
@endsection
