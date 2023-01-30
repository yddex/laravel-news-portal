@extends('layouts.admin')
@section('title', 'Categories')
@section('content')
    <div class="mt-2 mb-5">
        <a class="btn-outline-primary" href="{{route('admin.categories.create')}}">Создать категорию</a>
    </div>

    <table class="table table-responsive-sm table-striped">
    <x-status/>
        <thead>
            <tr>
                <th>#ID</th>
                <th>Slug</th>
                <th>Title</th>
                <th>Move</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->title}}</td>
                    <td>
                        <a href="{{route('admin.categories.show',  ['category'=>$category->id])}}" class="btn btn">Show</a>
                    </td>
                </tr>
            @empty
                    <tr>
                        <td colspan="?">
                            Записей нет
                        </td>
                    </tr>
            @endforelse
        </tbody>
    </table>
@endsection
