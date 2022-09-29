@extends('layouts.app')
@section('content')
    <div class="p-12 ">
        <form action="/storeeuser" method="post" enctype="multipart/form-data">
            @csrf

            <label for="">Name</label>
            <input type="text" name="name" value="">
            <label for="">Last Name</label>
            <input type="text" name="lastname" value="">
            <label for="">Age</label>
            <input type="number" name="age" value="">

            <label for="">Role</label>
            <select type="text" name="role_id">
                {{-- <option value="{{ $users->role->id}}">{{ $users->role->role_name}}</option> --}}
                @foreach ($roles as $role)
                    {{-- @if ($role->role_id == $users->role->role_id) --}}
                    <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                    {{-- @endif --}}
                @endforeach
            </select>

            <label for="">Avatar</label>
            <select name="avatar_id" id="">
                @foreach ($avatars as $avatar)
                    <option value="{{ $avatar->id }}">{{ $avatar->avatar_name }}</option>
                @endforeach
            </select>

            <label for="">Article</label>
            <select name="article_id">
                @foreach ($articles as $article)
                    <option value="{{ $article->id }}">{{ $article->title }}</option>
                @endforeach
            </select>

            <label for="">Email</label>
            <input type="emil" name="email" value="">

            <label for="">Password</label>
            <input type="text" name="pasword" value="">

            <button class="btn btn-outline-primary"type="submit">Save</button>
        </form>
    </div>
@endsection
