@extends('layouts.app')
@section('content')
    <div class="p-12 ">
        <form action="/{{ $users->id }}/updateuser" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <label for="">Name</label>
            <input type="text" name="name" value="{{ $users->name }}">
            <label for="">Last Name</label>
            <input type="text" name="lastname" value="{{ $users->lastname }}">
            <label for="">Age</label>
            <input type="number" name="age" value="{{ $users->age }}">

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

            {{-- {{dd($articles)}} --}}
            <label for="">Article</label>
            <select name="article_id">
                @foreach ($articles as $article)
                    <option value="{{ $article->id }}">{{ $article->title }}</option>
                @endforeach
            </select>

            <label for="">Email</label>
            <input type="emil" name="email" value="{{ $users->email }}">

            <label for="">Password</label>
            <input type="text" name="pasword" value="{{ $users->password }}">

            <button type="submit">Update</button>
        </form>
    </div>
@endsection
