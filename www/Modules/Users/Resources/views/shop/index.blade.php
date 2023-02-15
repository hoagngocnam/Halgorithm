<!DOCTYPE html>
<!-- saved from url=(0028)https://www.dienmayxanh.com/ -->
<html lang="vi-VN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siêu thị Điện máy XANH - Mua bán điện tử, điện lạnh, gia dụng</title>
    <link rel="stylesheet" href="{{ asset('assets/users/css/home.css') }}">

    <meta name="d41d8cd98f00b204e9800998ecf8427e_lib_detect" id="d41d8cd98f00b204e9800998ecf8427e_lib_detect"
          content="jQuery:3.5.1,jQuery (Fast path):">
    <script type="text/javascript" async="" src="./index_files/recaptcha__vi.js.tải xuống" crossorigin="anonymous"
            integrity="sha384-c3gV4zRp/lHubmlUCnQFMhATg34E7A4mheGq+kEWEA/rdyzDeH2iM88liX9Y1IyW"></script>
    <script type="text/javascript" crossorigin="anonymous" async="" src="./index_files/index.js.tải xuống"></script>
    <script type="text/javascript" async="" src="./index_files/ec.js.tải xuống"></script>
    <script async="" src="./index_files/fbevents.js.tải xuống"></script>
    <script type="text/javascript" async="" src="./index_files/js"></script>
    <script type="text/javascript" async="" src="./index_files/analytics.js.tải xuống"></script>
    <script src="chrome-extension://dliaalfkjmbndglefhimbmmecfbljnbc/library/libraries.js"></script>
    <script src="chrome-extension://dliaalfkjmbndglefhimbmmecfbljnbc/content_scripts/lib_detect.js"></script>
</head>

<body class="dmx-site">

<div class="header-top-bar">
    <div class="banner-media" style="background-color: rgb(33, 114, 185);">
        <div class="media-slider" data-size="3">
            <div class="nav">
                <div class="prev">
                    <div class="arrow-left"></div>
                </div>
                <div class="next">
                    <div class="arrow-right"></div>
                </div>
            </div>
            <div class="item visible" data-background-color="#2172B9" data-order="1">
                <a aria-label="slide" data-cate="0" data-place="1295"
                   href="https://www.dienmayxanh.com/mua-online-gia-re-hon"
                   onclick="jQuery.ajax({ url: &#39;/bannertracking?bid=69377&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img
                        width="1200" height="44" src="./index_files/1200-44-1200x44-13.png" alt="Máy lọc nước"></a>
            </div>
            <div class="item" data-background-color="#7A9DEC" data-order="2">
                <a aria-label="slide" data-cate="0" data-place="1295"
                   href="https://www.dienmayxanh.com/may-loc-nuoc-ldp"
                   onclick="jQuery.ajax({ url: &#39;/bannertracking?bid=69221&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img
                        width="1200" height="44" loading="lazy" class="lazyload owl-lazy"
                        data-src="//cdn.tgdd.vn/2023/01/banner/1200X44-copy-1200x44-1.png" alt="Máy lọc nước"></a>
            </div>
            <div class="item" data-background-color="#008DD1" data-order="3">
                <a aria-label="slide" data-cate="0" data-place="1295"
                   href="https://www.dienmayxanh.com/xe-dap?v=ldp"
                   onclick="jQuery.ajax({ url: &#39;/bannertracking?bid=63186&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img
                        width="1200" height="44" loading="lazy" class="lazyload owl-lazy"
                        data-src="//cdn.tgdd.vn/2023/01/banner/1200x44-1200x44.png" alt="Topbar Xe đạp"></a>
            </div>
        </div>
        <style>
            .banner-media {
                background-color: #2172B9;
            }
        </style>

    </div>
</div>
@include('users::layouts.header')
<div class="bg-ellipse"></div>
<div class="locationbox__overlay"></div>
<div class="locationbox-v2">
    <div class="locationbox__item locationbox__item--right">
        <div class="top-location">
            <p class="default-title ">Quý khách vui lòng cho biết <b>Địa Chỉ Nhận Hàng</b> để biết chính xác thời
                gian giao hàng</p>
            <p class="full-location hide">
                <span class="choose-text">Địa chỉ đã chọn: </span>
                <span class="fulladdress-v2"></span>
            </p>
            <a onclick="OpenLocation()" class="cls-location" href="javascript:void(0)"><i
                    class="close-symbol"></i>Đóng</a>
        </div>
        <div class="location-title hide">
            <a href="javascript:;" class="back-ic" onclick="backLocation()">
            </a>
            <div class="location-title-text">
                <span class="choose-text">Chọn </span>
                <span class="ward-name-default"></span>
                <span class="district-name-default"></span>
                <span class="province-name-default"></span>
            </div>
            <a onclick="OpenLocation()" class="cls-location" href="javascript:void(0)">
                <i class="close-symbol"></i>Đóng
            </a>
        </div>

        <div class="location-search">
            <i class="icon-search"></i>
            <input class="" onkeyup="suggestLocation(event);" id="locationSearch" name="locationSearch"
                   placeholder="Tìm nhanh tỉnh thành, quận huyện, phường xã">
            <a href="javascript:;" class="clear-searchbox" onclick="clearSearchBox()">
                    <span class="box-relative">
                        <i class="close-symbol"></i>
                    </span>
            </a>
        </div>
    </div>
    <strong class="choose-province">Hoặc chọn tỉnh, thành phố</strong>
    <div class="listing-location">
        <div id="suggest-location"></div>
        <div id="lst-prov">

            <div class="listing-locale">
                <ul>

                    <li>
                        <a class="" data-value="3" href="javascript:void(0)"
                           onclick="changePoupProvinceV2(3, this)">
                            Hồ Chí Minh
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div id="lst-dis" class="hide">
        </div>
        <div id="lst-ward" class="hide">
        </div>
    </div>
</div>
<div class="locationbox__popup new-popup hide" id="lc_pop--sugg">
    <div class="locationbox__popup--cnt locationbox__popup--suggestion new-locale">
        <div class="flex-block">
            <i class="icon-location"></i>
            <p>Hãy chọn <b>địa chỉ cụ thể</b> để chúng tôi cung cấp <b>chính xác</b> thời gian giao hàng và tình
                trạng hàng.</p>
        </div>
        <div class="btn-block">
            <a href="javascript:;" class="btn-location" onclick="OpenLocation()"><b>Chọn địa chỉ</b></a>
            <a href="javascript:;" class="btn-location gray" onclick="SkipLocation()"><b>Đóng</b></a>
        </div>
    </div>
</div>
<div class="big-banner">
    <a aria-label="slide" data-cate="0" data-place="2008" href="https://www.dienmayxanh.com/mua-online-gia-re-hon"
       onclick="jQuery.ajax({ url: &#39;/bannertracking?bid=55096&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img
            width="1920" height="920" src="{{ asset('assets/users/images/banner-home.jpg') }}"
            alt="Banner Big Campaign - Desk"></a>
</div>
<section class="main-container">
    <div class="bg-tophome">
        <div class="home-slider big-campaign" id="owl-home">
            <div class="slider-banner home-top owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(0px, 0px, 0px); transition: all 1.5s ease 0s; width: 6655px;">
                        <div class="owl-item active" style="width: 595px; margin-right: 10px;"><a aria-label="slide"
                                                                                                  data-cate="0"
                                                                                                  data-place="2048"
                                                                                                  href="https://www.dienmayxanh.com/tivi#c=1942&amp;o=5&amp;pi=0"
                                                                                                  onclick="jQuery.ajax({ url: &#39;/bannertracking?bid=69025&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img
                                    width="600" height="180" src="./index_files/720x220-720x220-57.png"
                                    alt="Tivi chung"></a></div>
                        <div class="owl-item active" style="width: 595px; margin-right: 10px;"><a aria-label="slide"
                                                                                                  data-cate="0"
                                                                                                  data-place="2048"
                                                                                                  href="https://www.dienmayxanh.com/gia-dung"
                                                                                                  onclick="jQuery.ajax({ url: &#39;/bannertracking?bid=69565&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img
                                    width="600" height="180" src="./index_files/720x220-720x220-106.png"
                                    alt="Gia dụng ngày đẹp"></a></div>
                        <div class="owl-item" style="width: 595px; margin-right: 10px;"><a aria-label="slide"
                                                                                           data-cate="0"
                                                                                           data-place="2048"
                                                                                           href="https://www.dienmayxanh.com/tivi-samsung"
                                                                                           onclick="jQuery.ajax({ url: &#39;/bannertracking?bid=69485&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img
                                    width="600" height="180" loading="lazy" class="owl-lazy lazyloaded"
                                    data-src="//cdn.tgdd.vn/2023/01/banner/720-220-720x220-159.png"
                                    alt="2023 - FE - Samsung TV" src="./index_files/720-220-720x220-159.png"></a>
                        </div>
                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev"><span
                            aria-label="Previous">‹</span></button>
                    <button type="button" role="presentation"
                            class="owl-next"><span aria-label="Next">›</span></button>
                </div>
                <div class="owl-dots disabled"></div>
            </div>

        </div>
    </div>


    <ul class="option-promo">

        <li>
            <a href="https://www.dienmayxanh.com/hang-cao-cap">
                <img width="50" height="50" data-src="https://cdn.tgdd.vn//content/Frame-232388-100x100.png"
                     class=" lazyloaded" alt="Sản phẩm cao cấp" src="./index_files/Frame-232388-100x100.png">
                <span>
                        Sản phẩm cao cấp
                    </span>
            </a>
        </li>


    </ul>

{{--    @include('users::shop.flashsale')--}}

{{--    @include('users::shop.hotdeal')--}}

    <!-- End -->
    <!-- List Product Slide Promote -->
    <div class="prd-promo prd-another" style="background-color:#0048D5;">
        <p class="prd-promo__title text">
            TUẦN LỄ GIA DỤNG
        </p>
        <div class="home-slider another-slider" id="owl-home">
            <div class="slider-banner owl-carousel owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(0px, 0px, 0px); transition: all 0.5s ease 0s; width: 1967px;">

                        <div class="owl-item active" style="width: 393.333px;">
                            <div class="item">
                                <a aria-label="slide" data-cate="0" data-place="2010"
                                   href="https://www.dienmayxanh.com/may-loc-nuoc-ldp"
                                   onclick="jQuery.ajax({ url: &#39;/bannertracking?bid=53262&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img
                                        width="380" height="200" loading="lazy" class="owl-lazy lazyloaded"
                                        data-src="//cdn.tgdd.vn/2023/02/banner/MLN-DESK-380x200-1.png"
                                        alt="Tuần lễ thương hiệu - desk lọc nước"
                                        src="./index_files/MLN-DESK-380x200-1.png"></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev"><span
                            aria-label="Previous">‹</span></button>
                    <button type="button" role="presentation"
                            class="owl-next"><span aria-label="Next">›</span></button>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
            <div id="counter" class="counter"></div>
        </div>
        <div class="box-scroll">
            <div class="listproduct slider-promo owl-carousel hideCompare owl-loaded owl-drag" data-size="20">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                         style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 4720px;">

                        <div class="owl-item active" style="width: 236px;">
                            <div class="item" data-id="147243" data-pos="1">
                                <a href="https://www.dienmayxanh.com/noi-com-dien/delites-ncr1502"
                                   class=" main-contain" data-s="Nomal" data-site="2" data-pro="3"
                                   data-cache="True" data-name="Nồi cơm điện Delites 1.5 lít NCR1502"
                                   data-id="147243" data-price="350000.0" data-brand="Delites"
                                   data-cate="Nồi cơm điện" data-box="BoxHomeV2">
                                    <div class="item-label">
                                    </div>
                                    <div class="item-img">
                                        <img
                                            data-src="https://cdn.tgdd.vn/Products/Images/1922/147243/delites-ncr1502-281022-033255-600x600.jpg"
                                            class=" lazyloaded" alt="Nồi cơm nắp rời Delites 1.5 lít NCR1502"
                                            width="207" height="207"
                                            src="./index_files/delites-ncr1502-281022-033255-600x600.jpg">
                                        <img data-src="https://cdn.tgdd.vn/ValueIcons/Label_01-05.png" width="40"
                                             height="40"
                                             class="lbliconimg lbliconimg_1922 dmx ls-is-cached lazyloaded"
                                             src="./index_files/Label_01-05.png">
                                    </div>
                                    <p class="result-label temp1"><img width="20" height="20"
                                                                       class=" ls-is-cached lazyloaded" alt="Giảm sốc"
                                                                       data-src="https://cdn.tgdd.vn/2020/10/content/icon1-50x50.png"
                                                                       src="./index_files/icon1-50x50.png"><span>Giảm sốc</span>
                                    </p>
                                    <h3>Nồi cơm điện Delites 1.5 lít NCR1502</h3>
                                    <strong class="price">
                                        350.000₫

                                        <small>-33%</small>
                                    </strong>
                                    <p class="vote-txt">
                                        <b>4.3</b><i class="iconnewglobal-vote"></i>(344)
                                    </p>


                                </a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a class="seeall" href="https://www.dienmayxanh.com/gia-dung"><span>Xem tất cả sản phẩm</span></a>
    </div>
    <!-- End -->
    <!-- Block promote mùa nóng -->
    <div class="prd-promo promo-muanong has-banner" style="background-color:#0048D4; " data-html-id="0"
         data-cate-id="1942">
        <div class="prd-promo__top clearfix">
            <a aria-label="slide" data-cate="0" data-place="2124" href="https://www.dienmayxanh.com/tivi"
               onclick="jQuery.ajax({ url: &#39;/bannertracking?bid=63324&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });">
                <img width="1200" height="120" loading="lazy" class=" lazyloaded"
                     data-src="//cdn.tgdd.vn/2022/12/banner/BannerCE-1200x120.webp" alt="world cup 2022"
                     src="./index_files/BannerCE-1200x120.webp"></a>
        </div>
        <div class="box-common">
            <ul class="box-common__tab">
                <li class="active-tab" `data-cate-id="1942">Tivi</li>
                <li data-cate-id="1944">Máy Giặt</li>
            </ul>
            <div class="box-common__main relative ">
                <div class="preloader">
                    <div class="loaderweb"></div>
                </div>
                <div class="box-common__content">
                    <div class="listproduct slider-promo owl-carousel owl-loaded owl-drag" data-size="10">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2360px;">

                                <div class="owl-item active" style="width: 236px;">
                                    <div class="item" data-id="235794" data-pos="1">
                                        <a href="https://www.dienmayxanh.com/tivi/led-4k-samsung-ua65au8100"
                                           class=" main-contain" data-s="OnlineSavingCMS" data-site="2"
                                           data-pro="3" data-cache="True"
                                           data-name="Smart Tivi Samsung 4K Crystal UHD 65 inch UA65AU8100"
                                           data-id="235794" data-price="14790000.0" data-brand="Samsung"
                                           data-cate="Tivi" data-box="BoxHomeV2">
                                            <div class="item-label">
                                            </div>
                                            <div class="item-img">
                                                <img
                                                    data-src="https://cdn.tgdd.vn/Products/Images/1942/235794/TimerThumb/led-4k-samsung-ua65au8100-(65).jpeg"
                                                    class=" ls-is-cached lazyloaded"
                                                    alt="Samsung Smart TV Crystal UHD UA65AU8100" width="207"
                                                    height="207"
                                                    src="./index_files/led-4k-samsung-ua65au8100-(65).jpeg">
                                            </div>
                                            <h3>Samsung Smart TV Crystal UHD UA65AU8100</h3>
                                            <p class="item-txt-online">Online giá rẻ</p>
                                            <strong class="price">
                                                14.790.000₫

                                                <small>-9%</small>
                                            </strong>
                                            <p class="vote-txt">
                                                <b>4.4</b><i class="iconnewglobal-vote"></i>(109)
                                            </p>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button>
                            <button type="button" role="presentation"
                                    class="owl-next"><span aria-label="Next">›</span></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>

                    <a class="readmore-btn" href="https://www.dienmayxanh.com/tivi"><span>Xem thêm Tivi</span></a>
                </div>


            </div>
        </div>
    </div>

    <!-- End -->
    <!-- Xu hướng mua sắm -->

    <div class="shopping-trends">
        <strong class="name-box">Xu hướng mua sắm</strong>
        <ul>
            <li>
                <a aria-label="slide" data-cate="0" data-place="2012" href="https://www.dienmayxanh.com/tivi"
                   onclick="jQuery.ajax({ url: &#39;/bannertracking?bid=52029&amp;r=&#39;+ (new Date).getTime(), async: true, cache: false });"><img
                        width="280" height="236" loading="lazy" class=" lazyloaded"
                        data-src="//cdn.tgdd.vn/2023/01/banner/Group-46564-280x235.png" alt="Tết Lớn - Sắm Tivi To"
                        src="./index_files/Group-46564-280x235.png"><span>Tết Lớn - Sắm Tivi To</span><strong>Giảm
                        đến 40%</strong></a>
            </li>
        </ul>
    </div>

{{--    @include('users::shop.featured_category')--}}

{{--    @include('users::shop.covenient_service')--}}

{{--    @include('users::shop.orther')--}}
</section>

<section class="page1 prmotebannerbhx">
    <div class="prmotebanner-bhx">
    </div>
</section>
<div class="preloader preall">
    <div class="loaderweb"></div>
</div>
<p id="gb-top-page" class="hide">↑</p>

<div id="dldingtext">Bạn vui lòng chờ trong giây lát...</div>

@include('users::layouts.footer')
</body>

</html>
