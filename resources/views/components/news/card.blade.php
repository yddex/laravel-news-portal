<div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250">
        <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">{{ $news->author}}</strong>
            <h3 class="mb-0">
                <a class="text-dark" href="{{ route('news.show', ['id' => $news->id]) }}">{{ $news->title }}</a>
            </h3>
            <div class="mb-1 text-muted">{{ $news->created_at }}</div>
            <p class="card-text mb-auto">{{ $news->description }}</p>
            <a class="btn-info" href="{{ route('news.show', ['id' => $news->id]) }}">Читать далее</a>
        </div>
    </div>
</div>
