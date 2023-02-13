<nav class="pcoded-navbar menupos-fixed menu-light">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar " style="display: block;">
                <li class="nav-item pcoded-hasmenu active pcoded-trigger">
                    <a href="{{ route('admin.account.list') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Tài khoản</span>
                    </a>
                    <ul class="pcoded-submenu" style="display: block;">
                        <li class="active"><a href="{{ route('admin.account.list') }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.account.csv.import') }}">Nhập Csv</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu active pcoded-trigger">
                    <a href="{{ route('admin.shop.list') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Cửa hàng</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('admin.shop.list') }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.shop.csv.import') }}">Nhập Csv</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu active pcoded-trigger">
                    <a href="{{ route('admin.category.list') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Danh mục</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li><a href="{{ route('admin.category.list') }}">Danh sách</a></li>
                        <li><a href="{{ route('admin.category.csv.import') }}">Nhập Csv</a></li>
                    </ul>
                </li>
                <li class="nav-item pcoded-hasmenu active pcoded-trigger">
                    <a href="{{ route('admin.product.list') }}" class="nav-link ">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Sản phẩm</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li>
                            <a href="{{ route('admin.product.list') }}">Danh sách</a>
                        </li>
                        <li>
                            <a href="{{ route('admin.product.csv.import') }}">Nhập Csv</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
