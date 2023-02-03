@extends('users::layouts.index')

@section('main-content')
    <link rel="stylesheet" href="https://cdn.tgdd.vn/mwgcart/vue-pro/css/desktop/cart-result.min.6375ae88c22475d58e77.css">
    <link rel="stylesheet" href="https://cdn.tgdd.vn/mwgcart/vue-pro/css/cart-result.6375ae88c22475d58e77.css">
    <div id="app" class="">
        <section>
            <div class="middleCart">
                <div class="alertsuccess-new"><i class="new-cartnew-success"></i><strong>Đặt hàng thành công</strong></div>
                <div class="ordercontent">
                    <div>
                        <p>Cảm ơn Anh <b>111</b> đã cho Điện Máy Xanh cơ hội được phục vụ.</p>
                        <!---->
                        <!---->
                    </div>
                    <!---->
                    <div>
                        <!---->
                        <div class="info-order" style="">
                            <div class="info-order-header">
                                <h4>Đơn hàng: <span>#59604660</span></h4>
                                <div class="header-right"><a href="/lich-su-mua-hang">Quản lý đơn hàng</a>
                                    <div class="cancel-order-new">
                                        <div>
                                            <div class="cancel-order-new"><span style="margin: 0px 8px;">•</span><a
                                                    href="javascript:;">Hủy</a></div>
                                        </div><span class="cancel-order-popup" style="display: none;"><span
                                                class="helper"></span>
                                            <div class="cancel-order-popup__content">
                                                <h1>Hủy đơn hàng</h1>
                                                <p>Dienmayxanh.com mong nhận được sự góp ý của anh để phục vụ được tốt hơn.
                                                </p>
                                                <!--fragment#f6efccae91#head-->
                                                <p fragment="f6efccae91" class="cancel-order-popup__content__reason"><span
                                                        class="cancel-order-popup__content__reason__item"><span
                                                            class=""><i class="cartnew-choose"></i> Đổi ý, không mua
                                                            nữa </span>
                                                        <!---->
                                                    </span><span class="cancel-order-popup__content__reason__item"><span
                                                            class=""><i class="cartnew-choose"></i> Tìm thấy giá rẻ
                                                            hơn ở chỗ khác </span>
                                                        <!---->
                                                    </span><span class="cancel-order-popup__content__reason__item"><span
                                                            class=""><i class="cartnew-choose"></i> Muốn thay đổi sản
                                                            phẩm trong đơn hàng (màu sắc, số lượng,...) </span>
                                                        <!---->
                                                    </span><span class="cancel-order-popup__content__reason__item"><span
                                                            class=""><i class="cartnew-choose"></i> Lý do khác </span>
                                                        <!---->
                                                    </span></p>
                                                <!--fragment#1260317c9ec#head--><input fragment="1260317c9ec"
                                                    type="hidden"><label fragment="1260317c9ec"
                                                    class="error cancel-order-popup__content__error"></label>
                                                <!--fragment#1260317c9ec#tail-->
                                                <!--fragment#f6efccae91#tail-->
                                                <p class="cancel-order-popup__content__actions"><button
                                                        class="cancel-order-popup__content__actions__button cart-result-fl confirm-cancel-popup">Đóng</button><button
                                                        class="cancel-order-popup__content__actions__button cart-result-fr close-cancel-popup">Xác
                                                        nhận</button></p>
                                                <p class="cancel-order-popup__content__note"> Lưu ý: <br> - Quà khuyến mãi
                                                    có thể thay đổi theo thời điểm đặt hàng. </p>
                                            </div>
                                        </span>
                                        <div class="success-popup" style="display: none;"><span class="helper"></span>
                                            <div>
                                                <div>
                                                    <h1>Hủy đơn hàng thành công</h1>
                                                    <p>Đơn hàng đã được hủy thành công.</p>
                                                </div><button class="success-cencell-popup">Đóng</button>
                                                <p class="conut-success"> Tự động đóng trong <b>5</b> giây </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><label><span class=""><i class="info-order__dot-icon"></i><span><strong>Người nhận
                                            hàng: </strong>Anh 111, 0341111111</span>
                                    <!---->
                                </span></label><label><span class=""><i
                                        class="info-order__dot-icon"></i><span><strong>Giao đến: </strong>abc, Phường An
                                        Lạc, Quận Bình Tân, Hồ Chí Minh (nhân viên sẽ gọi xác nhận trước khi giao).</span>
                                    <!---->
                                </span></label><label><span class=""><i
                                        class="info-order__dot-icon"></i><span><strong>Tổng tiền: </strong><b
                                            class="red">42.190.000₫</b></span>
                                    <!---->
                                </span></label>
                            <!---->
                            <!---->
                            <!---->
                            <!---->
                        </div>
                    </div>
                    <!---->
                    <div>
                        <!---->
                        <h4 class="order-infor-alert"> Đơn hàng chưa được thanh toán </h4>
                    </div>
                    <!---->
                    <!---->
                    <!---->
                    <!---->
                    <div class="payment-method-new">
                        <!---->
                        <div>
                            <!---->
                            <!---->
                            <h3 style="text-transform: none;">Chọn hình thức thanh toán:</h3>
                            <!---->
                            <ul class="formality-pay-new">
                                <li class="normal-payment"><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-default"></i><span>Thanh
                                                    toán tiền mặt khi nhận hàng</span></span></div>
                                    </a>
                                    <!---->
                                </li>
                                <li class=""><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-bank"></i><span>Chuyển
                                                    khoản ngân hàng</span></span></div>
                                    </a>
                                    <div data-v-2ee4ba4e="" transactiontype="[object Object]" style="display: none;">
                                        <div data-v-2ee4ba4e="" class="companypaymentinfo__content">
                                            <div data-v-2ee4ba4e="" class="company-logo"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class=""><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-atm"></i><span>Qua thẻ ATM
                                                    (có Internet Banking)</span></span></div>
                                    </a>
                                    <!---->
                                </li>
                                <li class="qrcode"><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-QR-Code"></i><span>Qua QR
                                                    Code</span></span></div>
                                    </a>
                                    <!---->
                                </li>
                                <li class="momo"><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-MOMO"></i><span>Ví
                                                    MoMo</span></span></div>
                                    </a>
                                    <!---->
                                </li>
                                <li class="active"><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-VMJ"></i><span>Qua thẻ quốc
                                                    tế Visa, Master, JCB</span>
                                                <div class="listcard"><i class="cartnew-visa"></i><i
                                                        class="cartnew-mastercard"></i><i class="cartnew-jcb"></i></div>
                                            </span></div>
                                    </a>
                                    <!---->
                                </li>
                                <li class="moca"><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i class="choose-payment-Moca-Grab"></i><span>Qua Ví
                                                    điện tử Moca trên Grab</span></span></div>
                                    </a>
                                    <!---->
                                </li>
                                <li class="normal-payment"><a><i class="cartnew-choose-dot"></i>
                                        <div class="text-payment"><span><i
                                                    class="choose-payment-use-card-when-receive"></i><span>Nhân viên mang
                                                    máy cà thẻ khi nhận hàng</span></span></div>
                                    </a>
                                    <!---->
                                </li>
                            </ul><button class="confirm-payment-button"> Xác nhận </button>
                            <!---->
                            <!---->
                            <!---->
                        </div>
                        <div name="refund-popup" class="refund-popup"><span></span><a href="javascript:void(0)"
                                class="refund-policy"> Xem chính sách hoàn tiền online</a>
                            <div class="popup-hoantien">
                                <div class="bg-hoantien"></div>
                                <div class="hoantienonline">
                                    <div class="row-ht"><strong>Chính sách hoàn tiền khi thanh toán Online</strong><a
                                            href="javascript:;">Đóng</a></div>
                                    <p> Trong trường hợp quý khách hàng đã mua hàng &amp; thanh toán trực tuyến thành công
                                        nhưng dư tiền, hoặc trả sản phẩm, Điện Máy Xanh sẽ hoàn tiền vào thẻ quý khách đã
                                        dùng để thanh toán, theo thời hạn như sau: </p>
                                    <p> - Đối với thẻ ATM: Thời gian khách hàng nhận được tiền hoàn từ 7-10 ngày (trừ thứ 7,
                                        chủ nhật và ngày lễ). Nếu qua thời gian trên không nhận được tiền, Điện Máy Xanh sẽ
                                        hỗ trợ liên hệ ngân hàng của khách hàng để giải quyết. </p>
                                    <p> - Đối với thẻ Visa/Master card/JCB: Thời gian Khách hàng nhận được tiền hoàn 7-15
                                        ngày. Nếu qua thời gian trên khách hàng không nhận được tiền, khách hàng liên hệ
                                        ngân hàng để giải quyết. </p>
                                    <p> - Đối với thanh toán bằng hình thức Ví MoMo: Thời gian Khách hàng nhận được tiền
                                        hoàn 3 - 5 ngày. Tiền được hoàn sẽ cập nhật vào tài khoản Ví MoMo. Nếu qua thời gian
                                        trên khách hàng không nhận được tiền, khách hàng liên hệ Điện Máy Xanh để được giải
                                        quyết. </p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <!---->
                    <div class="timetakegoods">
                        <h4>Thời gian nhận hàng</h4>
                        <div class="box-order">
                            <!---->
                            <!--fragment#d31dd61b49#head-->
                            <div fragment="d31dd61b49" class="rowtime"><span>Lần 1: Giao trước 10h00 Hôm nay
                                    (24/07)</span></div>
                            <!---->
                            <!--fragment#d31dd61b49#tail-->
                            <ul>
                                <li><a href="/dien-thoai/samsung-galaxy-s22-ultra" target="_blank" class="img-order"><img
                                            data-src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Burgundy-200x200.jpg"
                                            src="https://cdn.tgdd.vn/Products/Images/42/235838/Galaxy-S22-Ultra-Burgundy-200x200.jpg"
                                            loading="lazy" class=" ls-is-cached lazyloaded"></a>
                                    <div class="text-order"><a href="/dien-thoai/samsung-galaxy-s22-ultra"
                                            target="_blank" class="text-order__product-name">Điện thoại Samsung Galaxy S22
                                            Ultra 5G 128GB</a>
                                        <div class="amount-color"><small>Màu: <small>Đỏ</small></small>
                                            <!----><small>Số lượng: <small>1</small></small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!--fragment#be016cb269#head-->
                            <div fragment="be016cb269" class="lastrow">
                                <!---->
                            </div>
                            <!---->
                            <!--fragment#be016cb269#tail-->
                        </div>
                        <div class="box-order">
                            <!---->
                            <!--fragment#9aef8583e3#head-->
                            <div fragment="9aef8583e3" class="rowtime"><span>Lần 2: Giao trước 14h00 Hôm nay
                                    (24/07)</span></div>
                            <!---->
                            <!--fragment#9aef8583e3#tail-->
                            <ul>
                                <li><a href="/tivi/led-4k-samsung-ua55au8100" target="_blank" class="img-order"><img
                                            data-src="https://cdn.tgdd.vn/Products/Images/1942/235792/led-4k-samsung-ua55au8100-avatar-1-230x140.jpeg"
                                            src="https://cdn.tgdd.vn/Products/Images/1942/235792/led-4k-samsung-ua55au8100-avatar-1-230x140.jpeg"
                                            loading="lazy" class=" ls-is-cached lazyloaded"></a>
                                    <div class="text-order"><a href="/tivi/led-4k-samsung-ua55au8100" target="_blank"
                                            class="text-order__product-name">Smart Tivi Samsung 4K Crystal UHD 55 inch
                                            UA55AU8100</a>
                                        <div class="amount-color"><small>Màu: <small>Đen</small></small>
                                            <!----><small>Số lượng: <small>1</small></small>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!--fragment#11e8926e022#head-->
                            <div fragment="11e8926e022" class="lastrow">
                                <!---->
                            </div>
                            <!---->
                            <!--fragment#11e8926e022#tail-->
                        </div>
                        <!---->
                        <div class="bhxb"><a data-cate="0" data-place="1372"
                                href="https://www.bachhoaxanh.com/khuyen-mai"
                                onclick="jQuery.ajax({ url: 'https://www.dienmayxanh.com/bannertracking?bid=54140&amp;r='+ (new Date).getTime(), async: true, cache: false });"><img
                                    style="cursor:pointer" src="https://cdn.tgdd.vn/2022/05/banner/20Des1-560x112.png"
                                    alt="Promote BHX" width="560" height="112"></a></div>
                        <!----><a href="https://www.dienmayxanh.com" class="buyanotherNew"> Mua thêm sản phẩm khác </a>
                    </div><span class="customer-rating">
                        <div class="customer-rating__top">
                            <div class="customer-rating__top__desc"> Anh 111 có hài lòng về trải nghiệm mua hàng? </div>
                            <div class="customer-rating__top__rating-buttons"><button
                                    class="customer-rating__top__rating-buttons__good"><i class="iconrating-good"></i> Hài
                                    lòng </button><button class="customer-rating__top__rating-buttons__bad"><i
                                        class="iconrating-bad"></i> Không hài lòng </button></div>
                            <div class="customer-rating__top__thank-you"> Cám ơn Anh 111 đã dành thời gian góp ý để Điện
                                Máy Xanh cải thiện dịch vụ tốt hơn. </div>
                        </div>
                        <div class="customer-rating__bottom"><span>
                                <textarea placeholder="Điều gì khiến Anh 111 không hài lòng? (không bắt buộc)" maxlength="300"
                                    class="customer-rating__bottom__input"></textarea>
                                <!---->
                            </span>
                            <div class="customer-rating__bottom__button-container"><button
                                    class="customer-rating__bottom__button-container__btn">Gửi góp ý</button></div>
                        </div>
                    </span>
                </div>
            </div>
        </section>
        <div class="error-handler">
            <div class="alert2-popup"><span class="alert2-popup__helper"></span>
                <div class="alert2-popup__content">
                    <h1 class="alert2-popup__content__title">Thông báo</h1>
                    <p class="alert2-popup__content__message"></p><button
                        class="alert2-popup__content__confirm-button">Đóng</button>
                </div>
            </div>
        </div>
        <div class="loading-cart"><span class="cswrap"><span class="csdot"></span><span class="csdot"></span><span
                    class="csdot"></span></span></div>
    </div>
@endsection
