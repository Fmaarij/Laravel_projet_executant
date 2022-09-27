@extends('layouts.app')
@section('content')
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-center mt-3 mb-5"><span style="color: red">{{ Auth::user()->lastname }}
                        </span>welcome to the Dasboard</h3>
                    <div class="card m-auto" style="width: 18rem;">
                        {{-- {{dd(Auth::user()->avatar->img)}} --}}
                        <div class="card-body text-center">
                            <div class="w-50 m-auto mb-2">
                                <img class="w-100 rounded-pill" src="{{ Auth::user()->avatar->img }}" alt="">
                            </div>
                            <h5 class="card-title">{{ Auth::user()->name }} | {{ Auth::user()->age }}</h5>
                            <p class="card-text">{{ Auth::user()->email }}</p>
                            <p>Role : <span class="text-success">{{ Auth::user()->role->role_name }}</span></p>
                            <button class="btn btn-success">
                                <a href="/edit/{{Auth::user()->id}}">Edit</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
