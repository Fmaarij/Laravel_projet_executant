@extends('layouts.app')
@section('content')
    <div class=p-5>
        <div class="row mt-3">
            <div class="col">
                <a href="{{ url('createavatar') }}">
                    <button class="btn btn-outline-primary">Add un avatar</button>
                </a>
            </div>
        </div>
        <hr class="mt-3 mb-3">

        <div class="row">
            @foreach ($avatars as $avatar)
                <div class="col-6">
                    <div class="card mb-3  bg-secondary" style="max-width: 540px; ">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <h5 class="card-title text-info  mt-5">{{ $avatar->avatar_name }}</h5>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    {{-- <img class="rounded-pill" width="20%" src="{{$avatar->img}}" alt="picture"> --}}
                                    {{-- <img class="rounded-pill" width="20%" src="{{ asset('storage/avatar/' . $avatar->img) }}" --}}
                                    <img class="rounded-pill mb-2" width="30%"
                                        src="{{ asset('storage/avatar/' . $avatar->img) }}" class="img-fluid rounded-start"
                                        alt="...">
                                    <p class="card-text">
                                        <form action="/{{$avatar->id}}/delete" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-outline-danger rounded-pill">Delete</button>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
