@extends('layouts.app')
@section('content')
    <div class="relative items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <div class="d-flex flew-direction-row justify-content-center  ">
            <div class=" my-5 p-5">
                <div class="row">
                    @foreach ($articles as $article)
                        {{-- {{dd($article->user->lastname)}} --}}
                        {{-- {{dd($article->avatar->img)}} --}}
                        <div class="card" style="width: 28rem;">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-5">
                                        <p>{{ $article->created_at }} </p>
                                    </div>
                                    <div class="col-2">
                                        @if ($article->avatar != null)
                                            <img class="rounded-pill w-100" src="{{ $article->avatar->img }}" class=""
                                                alt="...">
                                        @else
                                            <p>
                                                Pas d'image
                                            </p>
                                        @endif
                                    </div>
                                    <div class="col-5">
                                        @if ($article->user != null)
                                            <p>{{ $article->user->lastname }}</p>
                                        @else
                                            <p>
                                                Pas d'auteur
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text">{{ $article->text }} </p>

                                {{-- edit et delete articles --}}
                                {{-- @auth


                                <div class="text-center mt-3 d-flex justify-between" >
                                    <div class="">
                                        <button class="btn btn-primary">
                                            <a href="/editarticles/{{ $article->id }}">Edit</a>
                                        </button>
                                    </div>
                                    <div>
                                        <form action="/{{ $article->id }}/deletearticle" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>

                                </div>
                                @endauth --}}

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        {{-- Paginattion --}}
        <div class="d-flex justify-center">
            {{$articles->links()}}
        </div>
    </div>


@endsection
