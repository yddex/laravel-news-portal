<x-layouts.base>
    <div class="list-group">
        @isset($categories)
            @foreach ($categories as $category)
            <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">{{$category['title']}}</h6>
                    <p class="mb-0 opacity-75">{{$category['id']}}</p>
                  </div>
                </div>
              </a>
            @endforeach
        @endisset
      
      </div>

</x-layouts.base>