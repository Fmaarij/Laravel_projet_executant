@extends('layouts.app')
@section('content')
    <div class="p-12 ">
        <form action="/{{ $articles->id }}/updatearticle" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <label for="">Title</label>
            <input type="text" name="title" value="{{ $articles->title }}">
            <label for="">Last Name</label>
            <input type="text" name="text" value="{{ $articles->text }}">
            <button type="submit">Update</button>
        </form>
    </div>
@endsection
