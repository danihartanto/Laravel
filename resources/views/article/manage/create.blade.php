@extends('layouts.front.app')
@section('content')

<div class="col-lg-8">
    <h1 class="mt-4">Create Article</h1>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>

    @endif
    <form method="POST" action="{{route('article.store')}}">
        @csrf
        <div class="form-group">
            <label>Kategori</label>
            <select name="category" class="form-control">
                <option value="">Pilih Kategori</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label>Artikel</label>
            <textarea class="form-control" name="content" rows="7"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Create</button>

    </form>
</div>

@endsection