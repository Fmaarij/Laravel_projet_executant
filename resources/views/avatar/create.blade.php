@extends('layouts.app')
@section('content')
<div class= p-5>
    <h1 class="mb-5">Add Un Avatar</h1>
    <form action="/storeavatar" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input type="text" name="avatar_name">
        <label for="">Image</label>
        <input type="file" name="img">
        <span class=" btn-outline-danger">
            {{-- @error
            {{$message}}
            @enderror --}}
        </span>
        <button type="submit" class="btn btn-outline-primary"> Save </button>
    </form>
</div>
@endsection
