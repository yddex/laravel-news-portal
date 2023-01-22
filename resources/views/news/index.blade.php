<x-base title='Новости'>
    <h1 class="mt-5 text-center">Свежие новости</h1>
    <div class="row mb-2 mt-5">
        @forelse ( $news as $newsone )
            <x-news.card :news="$newsone"/>       
        @empty
            <h1> Новостей нет</h1>
        @endforelse
    </div>
            
</x-base>