<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('index')}}"> {{config('app')['name']}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @isset($links)
                @foreach ($links as $link)
                <li class="nav-item">
                    <a class="nav-link {{$link['active'] ? 'active' : ''}}" 
                    aria-current="page" 
                    href="{{$link['href']}}">{{$link['title']}}</a>
                  </li>
                @endforeach
            @endisset
        </ul>
      </div>
    </div>
  </nav>