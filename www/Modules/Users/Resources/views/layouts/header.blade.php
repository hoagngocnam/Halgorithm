<header class="header header-v2  " data-sub="0">
    <div class="header__top">
        <div>
            {{-- <a href="/" class="header__logo">
                <i class="iconnewglobal-logoheaddmx"></i>
            </a> --}}
            <a href="javascript:void(0)" class="header__address" onclick="OpenLocation()">
                Xem giá, tồn kho tại:
                <span data-province="3" data-district="0" data-ward="0">Hồ Chí Minh</span>
            </a>
            <form onsubmit="return suggestSearch(event);" class="header__search">
                <input id="skw" type="text" class="input-search" onkeyup="suggestSearch(event);"
                    placeholder="Bạn tìm gì..." name="key" autocomplete="off" maxlength="100">
                <button type="submit">
                    <i class="icon-search"></i>
                </button>
                <div id="search-result"></div>
            </form>
            <a href="/lich-su-mua-hang" class="name-order">
                Lịch sử đơn hàng
            </a>
            <a href="/cart" class="header__cart" id="cart-box">
                <div class="box-cart">
                    <i class="iconnewglobal-whitecart"></i>
                    <span id="number-of-products-in-cart" class="cart-number"></span>
                </div>
                <span>Giỏ hàng</span>
            </a>
            <div class="header__listtop">
                <div class="divitem">
                    <a href="/kinh-nghiem-hay">Tư vấn<br>chọn mua</a>
                </div>
                <div class="bordercol"></div>
                <div class="divitem">
                    <a href="/khuyen-mai">Khuyến mãi</a>
                </div>
                <div class="bordercol"></div>
                <div class="divitem">
                    <a href="/vao-bep">Vào bếp</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header__main">
        <div>
            <ul class="main-menu-header">
                <li class="category">
                    <i class="iconnewglobal-whitemenu"></i>
                    <a href="" class="category__all">Tất cả danh mục</a>
                    <div class="bar-top-left" style="display: none;">
                        <ul class="main-menu">
                            <li data-submenu-id="submenu-1">
                                <div class="dropdown">
                                    <span>
                                        <img src="./namhn_files/LabelHOT.png" alt="label hot" width="26">
                                    </span>
                                    <a href="">Tivi</a>, <a href="/loa-ldp">Loa, Dàn
                                        Karaoke</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                @foreach ($categories as $category)
                    <li>
                        <a href="{{ route('users.category', ['category_id' => $category->id]) }}"
                            class="list-category">
                            <span>{{ $category->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
