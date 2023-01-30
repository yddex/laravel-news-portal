@extends('layouts.app')
@section('title', 'feedback')

@section('content')
    <h1>Оставьте отзыв</h1>
    @if(session('status'))
        <x-alert type="success" :message="session('status')" />
    @endif
    <form method="post" action="{{ route('feedback.store') }}">
        @csrf
        @method('POST')
        <x-forms.controls.input label="Ваше имя" id="name"  name="name" type="name" />
        <x-forms.controls.textarea label="Отзыв" id="body" name="body"/>

        <br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection
