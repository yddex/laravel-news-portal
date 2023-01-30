@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 blog-main">
        <h3 class="pb-3 mb-4 font-italic border-bottom change">
            From the Firehose
        </h3>

        <div class="blog-post">
            <h2 class="blog-post-title">{{ $news->title}}</h2>
            <p class="blog-post-meta">{{ $news->created_at }} by {{ $news->author }}</p>
            <p class="blog-description">
                {!! $news->description !!}
            </p>
            <div class="blog-post-body">
                {!! $news->content!!}
            </div>
        </div>
    </div>
</div>
@endsection

