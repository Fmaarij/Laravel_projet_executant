@extends('layouts.app')
@section('content')
    <div class=p-5>
        <div class="row">
            @foreach ($photos as $pic)
                <div class="col">
                    <div class="img">
                        <img class="img-fluid rounded" width="" src="{{ asset('storage/photos/' . $pic->pic) }}"
                        alt="picture">
                    </div>
                    <div class="btn">
                        <button class="btn btn-info">Download</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
