@extends('layouts.admin')
@section('title', 'Edit category')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Редактирование категории</h1>
        <div class="btn-toolbar mb-2 mb-md-0">

        </div>
    </div>
    <div>
        <x-forms.errors/>

        <form method="post" action="{{ route('admin.categories.update', ['category' => $category->id]) }}">
            @csrf
            @method('put')

            <x-forms.controls.input label="Короткий URI" id="slug"  name="slug" type="text" value="{{$category->slug}}"/>
            <x-forms.controls.textarea label="Название" id="title" name="title" value="{{$category->title}}"/>
            <x-forms.controls.textarea label="Короткое описание" id="description" name="description" value="{{$category->description}}"/>

            <br>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
@endsection
