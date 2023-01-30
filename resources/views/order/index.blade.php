@extends('layouts.main')
@section('title', 'order')
@section('content')
    <h1>Выгрузка данных</h1>
    @if(session('status'))
        <x-alert type="success" :message="session('status')" />
    @endif
    @if ($errors->any())
        @foreach($errors->all() as $error)
            <x-alert type="danger" :message="$error"></x-alert>
        @endforeach
    @endif
    <form method="post" action="{{ route('order.store') }}">
        @csrf
        @method('POST')
        <x-forms.controls.input label="Ваше имя" id="name"  name="name" type="text" />
        <x-forms.controls.input label="Ваш телефон" id="phone"  name="phone" type="text" />
        <x-forms.controls.input label="Ваш email" id="email"  name="email" type="email" />
        <x-forms.controls.textarea label="Какие данные вам нужны" id="body" name="body"/>

        <br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
