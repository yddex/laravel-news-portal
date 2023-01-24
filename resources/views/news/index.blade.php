@extends('layouts.main')
@section('content')
    <div class="row mb-2">
@forelse($news as $n)
    <x-news.card :news="$n"/>
@empty
    <h2>Новостей нет</h2>
@endforelse
    </div>
@endsection
