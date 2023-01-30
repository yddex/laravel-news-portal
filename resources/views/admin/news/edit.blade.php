@extends('layouts.admin')
@section('title', 'Edit news')
@section('content')
    <h1>Редактирование новости</h1>
    <x-forms.errors/>

    <form method="post" action="{{ route('admin.news.update',['news' => $news->id]) }}">
        @csrf
        @method('put')
        <select name="categories[]" class="form-control" required autocomplete="categories" multiple>
            <option disabled>Категория</option>
            @forelse($categories as $category)
                <option
                    @if($news->categoriesIdx()->contains($category->id)) selected @endif
                value="{{ $category->id }}">
                    {{ $category->title }}
                </option>
            @empty
                <option value="1">Other</option>
            @endforelse
        </select>
        <x-forms.controls.input label="Заголовок" id="title"  name="title" type="text" value="{{$news->title}}"/>
        <x-forms.controls.textarea label="Короткое описание" id="description" name="description" value="{{$news->description}}"/>
        <x-forms.controls.textarea label="Текст" id="content" name="content" value="{{$news->content}}"/>

        <br>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>


@endsection
