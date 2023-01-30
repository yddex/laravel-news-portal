@extends('layouts.admin')
@section('title', 'Show')
@section('content')
    <div class="row">
        <form action="{{route('admin.news.destroy', ['news' => $news->id])}}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
        <a href="{{route('admin.news.edit', ['news'=>$news->id])}}" class="btn btn-info ml-3">
            Редактировать
        </a>
    </div>
    <div class="row mt-5">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom change">
              #ID {{$news->id}}
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
