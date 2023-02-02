@extends('users::layouts.index')

@section('styles')
    <link rel="stylesheet" href="{{ asset('users/css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/cart.css') }}">
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
            </div>
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
