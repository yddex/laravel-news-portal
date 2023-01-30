@extends('layouts.app')
@section('title', 'title')
@section('content')
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Добро пожаловать на {{config('app.name')}}</h1>
            <p class="lead my-3">Здесь для вас собраны все самые горячие новости.</p>
            <p class="lead mb-0"><a href="{{route('news.index')}}" class="text-black fw-bold">И так к новостям...</a></p>
        </div>
    </div>

@endsection
