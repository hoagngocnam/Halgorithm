<ul class="sub-menu">
    @foreach($categories as $category)
        <li>
            <a class="navbar-menu-item cathot"
               href="{{ route('users.category', ['category_id' => $category->id]) }}">
                {{ $category->name }}
            </a>
        </li>
    @endforeach
</ul>
