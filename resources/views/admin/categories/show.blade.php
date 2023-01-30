@extends('layouts.admin')
@section('title')
    {{$category->slug}}
@endsection
@section('content')
    <div class="row">
        <form method="POST" action="{{route('admin.categories.destroy', ['category' => $category->id])}}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
        <a href="{{route('admin.categories.edit', ['category'=>$category->id])}}" class="btn btn-info ml-3">
            Редактировать
        </a>
    </div>
    <div class="row mt-5">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom change">
                #ID {{$category->id}}
            </h3>

            <div class="blog-post">
                <h4>Title</h4>
                <p class="blog-post-title">
                    {{ $category->title}}
                </p>
                <h4>Slug</h4>
                <p class="blog-content">
                   {{$category->slug}}
                </p>
                <h4>Description</h4>
                <p class="blog-description">
                    {!! $category->description !!}
                </p>
                <h4>Meta</h4>
                <p class="blog-post-meta">Создана {{ $category->created_at }}</p>
                <p class="blog-post-meta">Количество постов: {{ $category->news()->count() }}</p>
            </div>
        </div>
    </div>
@endsection
