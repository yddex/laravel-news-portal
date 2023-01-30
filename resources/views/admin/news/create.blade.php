
@extends('layouts.admin')
@section('title', 'Create news')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Добавить новость</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <div>
        <x-forms.errors/>

        <form method="post" action="{{ route('admin.news.store') }}">
            @csrf
            @method('POST')
            <select name="categories[]" class="form-control" required autocomplete="categories" multiple>
                <option disabled selected>Категория</option>
                @forelse($categories as $category)
                    <option value="{{ $category->id }}" @if(in_array($category->id, old('categories') ?? [])) selected @endif>
                        {{ $category->title }}
                    </option>
                @empty
                    <option value="1">Other</option>
                @endforelse
            </select>

            <x-forms.controls.input label="Заголовок" id="title"  name="title" type="text" />
            <x-forms.controls.textarea label="Короткое описание" id="description" name="description"/>
            <x-forms.controls.textarea label="Текст" id="content" name="content"/>

            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
