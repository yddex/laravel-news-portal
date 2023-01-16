<x-layouts.base>
    <h1>Новости</h1>
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
          <div class="h-100 p-5 text-white bg-dark rounded-3">
            <h2>Change the background</h2>
            <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
            <button class="btn btn-outline-light" type="button">Example button</button>
          </div>
        </div>
        @isset($news)
            @foreach ($news as $new)
            <div class="col-md-6">
                <div class="h-100 p-5 bg-{{$loop->index % 2 ? 'dark text-white' : 'light'}} border rounded-3">
                  <h2>{{$new['title']}}</h2>
                  <p>{{$new['body']}}</p>
                  <a href="{{route('news.show', ['id' => $new['id']])}}" class="btn btn-outline-secondary" type="button">Show</a>
                </div>
              </div>
            @endforeach
        @endisset
    </div>
</x-layouts.base>