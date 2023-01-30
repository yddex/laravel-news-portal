<header class="blog-header py-3 container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand btn btn-light"  href="{{route('index')}}">{{config('app.name')}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="btn btn-light @if(request()->routeIs('news.*')) active @endif" href="{{route('news.index')}}">Новости</a>
                    <a class="btn btn-light @if(request()->routeIs('feedback.*')) active @endif" aria-current="page" href="{{route('feedback.index')}}">Обратная связь</a>
                    <a class="btn btn-light @if(request()->routeIs('order.*')) active @endif" aria-current="page" href="{{route('order.index')}}">Заказ выгрузки</a>
                </div>
            </div>
        </div>
    </nav>
</header>


