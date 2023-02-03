@extends('users::layouts.index')

@section('styles')
    <link rel="stylesheet" href="{{ asset('users/css/product.css') }}">
@endsection

@section('main-content')
    <section data-id="235838" data-cate-id="42" class="detail detail_42 ">
        @include('users::components.breadcrumb')
        <h1>{{ $product->name }}</h1>
        <div class="box02">
            <div class="box02__left">
                <div class="detail-rate">
                    <p>
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star"></i>
                        <i class="icondetail-star-dark"></i>
                    </p>
                    <p class="detail-rate-total">133 <span>đánh giá</span></p>
                </div>
            </div>
        </div>
        <div class="box_main">
            <div class="box_left">
                <div class="box01 ">
                    <div class="box01__show">
                        <div class="show-tab active" data-gallery-id="featured-images-gallery" data-color-id="0">
                            <div class="detail-slider owl-carousel owl-loaded owl-drag">
                                <div class="owl-stage-outer owl-height" style="height: 396.75px;">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 5680px;">
                                        {{-- Danh sách hình ảnh --}}
                                        @foreach ($product->multimedia as $index => $item)
                                            <div class="owl-item active" style="width: 710px;">
                                                <a href="javascript:void(0)" class="slider-item video-item">
                                                    <img src="{{ asset($item->path) }}" alt="">
                                                    <i class="icondetail-videoop iconvideo"></i>
                                                </a>
                                            </div>
                                        @endforeach
                                        {{-- Danh sách hình ảnh --}}
                                    </div>
                                </div>
                                <div class="owl-nav"><button type="button" role="presentation"
                                        class="owl-prev disabled"></button><button type="button" role="presentation"
                                        class="owl-next"></button></div>
                                <div class="owl-dots disabled"></div>
                            </div>
                            <div class="total-imgslider">
                                <a style="display: block" href="javascript:void(0)" class="read-full">
                                    Xem tất cả điểm nổi bật
                                </a>
                                <div class="counter">(1/8)</div>
                            </div>
                        </div>

                    </div>
                    <div class="scrolling_inner scroll-right">
                        <div class="box01__tab scrolling">
                            {{-- Danh sách thumbnail --}}
                            <div id="thumb-featured-images-gallery-0" class="item itemTab active "
                                data-gallery-id="featured-images-gallery" data-color-id="0" data-is-full-spec="False"
                                data-color-order-id="0" data-isfeatureimage="True">
                                <div class="item-border">
                                    <i class="icondetail-noibat"></i>
                                </div>
                                <p>Điểm nổi bật</p>
                            </div>
                            {{-- Danh sách thumbnail --}}
                        </div>
                    </div>
                </div>

                @include('users::product.block-tab')

                {{-- @include('users::product.policy') --}}

                {{-- @include('users::product.posts') --}}

                {{-- @include('users::product.rating') --}}
            </div>
            <div class="box_right">
                <div class="scrolling_inner scroll-right">
                    <div class="box03 group desk">
                        {{-- Danh sách thông sô --}}
                        <a href="https://www.dienmayxanh.com/dien-thoai/samsung-galaxy-s22-ultra" data-index="0"
                            class="box03__item item act">8GB - 128GB</a>
                        {{-- Danh sách thông sô --}}
                    </div>
                </div>

                <div class="scrolling_inner scroll-right">

                    <div class="box03 color group desk">
                        {{-- Màu sắc --}}
                        <a href="https://www.dienmayxanh.com/dien-thoai/samsung-galaxy-s22-ultra?code=0131491002959"
                            data-color="2" data-code="0131491002959" class="box03__item item act">Đỏ</a>
                        {{-- Màu sắc --}}
                    </div>
                </div>


                <div class="box04 box_normal">

                    <div class="price-one">
                        <div class="box-price">
                            <p class="box-price-present">{{ $product->promotional_price }}</p>
                            <p class="box-price-old">{{ $product->original_price }}</p>
                            <p class="box-price-percent">
                                {{ percent_promotion((int) $product->original_price, (int) $product->promotional_price) }}
                            </p>
                            <span class="label label--black">Trả góp 0%</span>
                        </div>
                    </div>

                    <div class="block block-price1">
                        <div class="block__promo">
                            <div class="pr-top">
                                <p class="pr-txtb">Khuyến mãi </p>
                                <i class="pr-txt">Giá và khuyến mãi dự kiến áp dụng đến 23:00 31/07</i>
                            </div>
                            <div class="pr-content">
                                <div class="pr-item">

                                    <div class="divb t5" data-promotion="1111314" data-group="WebNote"
                                        data-discount="0" data-productcode="" data-tovalue="7500">
                                        <span class="nb">1</span>
                                        <div class="divb-right">
                                            <p>Giảm đến 4,000,000đ khi Thu cũ Đổi mới (tùy model máy cũ) <a
                                                    href="http://www.thegioididong.com/thu-cu-doi-moi"> Xem chi
                                                    tiết</a></p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div id="status-delivery">

                            <div id="thoi-gian-giao-hang" class="xtoydays rslt none">
                                <div class="quickdelivery ">
                                    <div class="deliverytime">
                                        <p><a href="javascript:" onclick="OpenLocation(true)"
                                                class="onoffdelibox unline"><i class="icondetail-address"></i>Chọn
                                                địa chỉ nhận hàng</a> để biết thời gian giao.</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="block-button normal">
                            <button class="btn-buynow jsBuy" id="add_to_cart"
                                data-product_id="{{ $product->id }}">THÊM
                                VÀO GIỎ HÀNG</button>
                        </div>

                        <p class="callorder">
                            Gọi đặt mua <a href="tel:18001061">1800.1061</a> (7:30 - 22:00)
                        </p>

                        <div class="promoadd" data-max="2">
                            <p class="promoadd__ttl">
                                <em><b class="bonus_count">5</b> ưu đãi thêm</em>
                                <span>Dự kiến áp dụng đến 23:00 31/07</span>
                            </p>
                            <ul class="promoadd__list">
                                <li class="bhx">
                                    <i class="icondetail-tick"></i>
                                    <div class="promo_BHX">
                                        <div class="l2">
                                            <span>
                                                Tặng cho khách lần đầu mua hàng online tại web <a
                                                    href="https://www.bachhoaxanh.com/?utm_source=dmx_ttc_tct_20%&amp;utm_medium=link_tct&amp;utm_campaign=dmx">BachhoaXANH.com</a>
                                            </span>
                                            <div class="content">
                                                <p class="first-pap">Mã giảm <strong>100.000đ áp dụng đơn hàng từ
                                                        400.000đ</strong></p>

                                                <p>Đại siêu thị Online với <b>15.000</b> sản phẩm tiêu dùng, thịt, cá,
                                                    rau…</p>
                                                <p><b>FREEship</b> đơn hàng từ 300.000đ hoặc thành viên VÀNG</p>
                                                <p>Giao nhanh trong <b>2 giờ</b></p>
                                            </div>
                                            <span>
                                                Áp dụng tại Tp.HCM và 22 tỉnh thành
                                            </span>
                                            <a href="https://www.bachhoaxanh.com/kinh-nghiem-hay/tang-phieu-mua-hang-bachhoaxanhcom-khi-mua-sam-tai-thegioididongcom-va-dienmayxanhcom-1276540?utm_source=dmx_ttc_tct_the_le_20%&amp;utm_medium=link_tct&amp;utm_campaign=dmx"
                                                target="_blank">(Xem chi tiết)</a>
                                        </div>
                                    </div>
                                </li>

                                <li class="" data-tovalue="97" data-promotion="1110448">
                                    <i class="icondetail-tick"></i>
                                    <p>Tặng suất mua xe đạp Giảm đến 30% (không kèm khuyến mãi khác) <a
                                            href="https://www.dienmayxanh.com/khuyen-mai/xe-dap-giam-den-20-khi-mua-kem-tv-tu-lanh-may-g-1377323"
                                            target="_blank">(click xem chi tiết)</a></p>
                                </li>
                                <li class="hide" data-tovalue="90" data-promotion="1109431">
                                    <i class="icondetail-tick"></i>
                                    <p>Tặng suất mua kèm đồng hồ Beu giảm 30% (không áp dụng khuyến mãi khác của đồng
                                        hồ)</p>
                                </li>
                                <li class="hide" data-tovalue="0" data-promotion="1127639">
                                    <i class="icondetail-tick"></i>
                                    <p>Ốp lưng giảm 24% khi mua kèm điện thoại Galaxy S22 Ultra</p>
                                </li>
                                <li class="hide" data-tovalue="0" data-promotion="1115467">
                                    <i class="icondetail-tick"></i>
                                    <p>Mua Đồng hồ thời trang giảm 40% cho Đồng hồ dưới 3 triệu, giảm 30% cho Đồng hồ từ
                                        3 triệu trở lên</p>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
                <div class="border7"></div>


                {{-- @include('users::product.parameter') --}}

            </div>

            {{-- @include('users::product.similar')

            @include('users::product.watched') --}}
        </div>
    </section>
@endsection

@section('script')
    <script>
        let cart = {
            firstName: 'Fred',
            lastName: 'Flintstone'
        };

        $(function() {
            $("#add_to_cart").click(function() {
                // Call to api to add products to cart
                axios.post('/api/cart/add', cart)
                    .then(function(response) {
                        let numberProductsInCart = response.data.number;
                        let cartSelector = $('#number-of-products-in-cart');
                        if (numberProductsInCart > 0) {
                            cartSelector.addClass('has-cart');
                            cartSelector.text(numberProductsInCart);
                        }
                    })
                    .catch(function(error) {
                        console.log(error);
                    });

            });

        });
    </script>
@endsection
