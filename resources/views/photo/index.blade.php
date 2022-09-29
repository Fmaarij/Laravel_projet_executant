@extends('layouts.app')
@section('content')
    <div class=p-5>
        <div class="add_photos">
            <a href="{{url('createphotos')}}">
                <button class="btn btn-primary">New Photo</button>
            </a>
        </div>
        <hr class="mt-3 ">
        <div class="display_photos mt-3">
            <table>
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Photo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($photos as $pic )
                    <tr>

                        <td>{{$pic->category->cat_name}}</td>
                        <td width="10%">
                            <img  class="img-fluid rounded" width="" src="{{asset('storage/photos/'. $pic->pic)}}" alt="picture">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>

        </div>
    </div>
@endsection
