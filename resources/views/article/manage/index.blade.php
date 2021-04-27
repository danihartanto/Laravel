@extends('layouts.front.app')
@section('content')

<div class="col-lg-8">
    
    <img src="{{ asset('front/img/ilegal-access2.png') }}" style="height: 400px; weight:400px;">

    @auth
    <h1 class="mt-4">Manajemen Artikel</h1>
    <p class="lead"><a href="{{route('article.create')}}">Tambah Artikel</a></p>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif

    <table class="table table-sm">
        <thead class="center" style="text-align: center;">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Artikel</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
        </thead>

        <body>
            @foreach($articles as $index=>$article)
            <tr>
                <td scope="row">{{$index+1}}</td>
                <td scope="row"><a href="{{route('article.detail',$article->id)}}">{{$article->title}}</a></td>
                <td scope="row">{{$article->category->name}}</td>
                <td scope="row">{{Str::limit($article->content,150)}}</td>
                <td scope="row"><a href="{{route('article.edit',$article->id)}}" class="btn btn-warning">Edit</a></td>
                <td scope="row"><a href="{{route('article.delete',$article->id)}}" class="btn btn-danger">Delete</a></td>

            </tr>
            @endforeach
        </body>
    </table>
    {{$articles->render()}}
    @endauth
</div>

@endsection