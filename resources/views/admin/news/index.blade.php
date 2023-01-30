@extends('layouts.admin')
@section('title', 'News list')
@section('content')
    <div class="mt-2 mb-5">
        <a class="btn-outline-primary" href="{{route('admin.news.create')}}">Создать новость</a>
    </div>

    <table class="table table-responsive-sm table-striped">
        <x-status/>
        <thead>
            <tr>
                <th>#ID</th>
                <th>Author</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created</th>
                <th>Move</th>
            </tr>
        </thead>
        <tbody>
            @forelse($news as $newsRow)
                <tr>
                    <td>{{$newsRow->id}}</td>
                    <td>{{$newsRow->user->name}}</td>
                    <td>{{Str::limit($newsRow->title, 20)}}</td>
                    <td>{{Str::limit($newsRow->description, 20)}}</td>
                    <td>{{$newsRow->created_at}}</td>
                    <td>
                        <a href="{{route('admin.news.show',  ['news'=>$newsRow->id])}}" class="btn btn">Show</a>
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
    <div>
        {{$pagination->links()}}
    </div>

@endsection
