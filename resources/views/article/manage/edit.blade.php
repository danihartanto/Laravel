@extends('layouts.front.app')
@section('content')

<div class="col-lg-8">
    <h1 class="mt-4">Edit Article</h1>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>

    @endif
    <form method="POST" action="{{route('article.update',$articles->id)}}">
    {{method_field('PUT')}}
        @csrf
        <div class="form-group">
            <label>Kategori</label>
            <select name="category" class="form-control">
                <option value="">Pilih Kategori</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}" @if(old('category',$articles->category_id)==$category->id) selected="selected" @endif>{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="title" value="{{old('title',$articles->title)}}">
        </div>
        <div class="form-group">
            <label>Artikel</label>
            <textarea class="form-control" name="content" rows="7">{{old('content',$articles->content)}}</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Edit Data</button>

    </form>
</div>

@endsection