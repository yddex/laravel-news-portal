@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Добавить новость</h1>
    <div class="btn-toolbar mb-2 mb-md-0">

    </div>
</div>
<div>
    @if ($errors->any())
        @foreach($errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>
        @endforeach
    @endif

    <form method="post" action="{{ route('admin.news.store') }}">
       @csrf
       @method('POST')
        <x-forms.controls.input label="Заголовок" id="title"  name="title" type="text" />
        <x-forms.controls.input label="Автор" id="author"  name="author" type="text" />
        <x-forms.controls.textarea label="Короткое описание" id="description" name="description"/>
        <x-forms.controls.textarea label="Текст" id="text" name="text"/>

        <br>
        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
</div>
@endsection
