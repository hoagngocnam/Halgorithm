<nav class="navbar-default navbar-side" role="navigation">
    <div id="sideNav" href=""><i class="fa fa-caret-right"></i></div>
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li>
                <a class="active-menu" href="{{ route('admin.account.list') }}">
                    <i class="fa fa-users"></i>
                    {{ __('sidebar.account') }}
                </a>
            </li>
            <li>
                <a href="{{ route('admin.category.index') }}">
                    <i class="fa fa-th-list" aria-hidden="true"></i>
                    Danh mục
                </a>
            </li>
            <li>
                <a href="{{ route('admin.product.index') }}">
                    <i class="fa fa-picture-o" aria-hidden="true"></i>
                    Sản phẩm
                </a>
            </li>
            <li>
                <a href="{{ route('admin.authenticate.logout') }}">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất
                </a>
            </li>
        </ul>
    </div>
</nav>
