<nav class="pcoded-navbar menupos-fixed menu-light">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                @foreach ($navigation as $item)
                    <li @class([
                        'nav-item',
                        'active' => str_contains($item->route_active, $currentRoute),
                    ])>
                        <a href="{{ route($item->route_redirect) }}" class="nav-link">
                            <span class="pcoded-micon"><i class="{{ $item->icon }}"></i></span>
                            <span class="pcoded-mtext">{{ $item->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
