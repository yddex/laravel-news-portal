<nav class="col-md-2 d-none d-md-block bg-light sidebar mt-5">
    <div class="sidebar-sticky mt-5">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.index')) active @endif"
                   href="{{route('admin.index')}}">
                    <span data-feather="home"></span>
                    Главная <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.categories.*')) active @endif"
                   href="{{route('admin.categories.index')}}">
                    <span data-feather="file"></span>
                    Категории
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->routeIs('admin.news.*')) active @endif" href="{{ route('admin.news.index') }}">
                    <span data-feather="shopping-cart"></span>
                    Новости
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Пользователи
                </a>
            </li>

        </ul>
    </div>
</nav>
