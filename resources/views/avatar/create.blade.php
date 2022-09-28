@extends('layouts.app')
@section('content')
<div class= p-5>
    <form action="/storeavatar" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input type="text" name="avatar_name">
        <label for="">Image</label>
        <input type="file" name="img">
        <button type="submit" class="btn btn-outline-primary"> Add </button>
    </form>
</div>
@endsection
