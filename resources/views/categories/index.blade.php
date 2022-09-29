@extends('layouts.app')
@section('content')
    <div class=p-5>
        <table class="table table-hover border">
            <thead>
                <tr>
                    <th>Category_ID</th>
                    <th>Category_name</th>
                    {{-- <th>Photo</th> --}}
                    <th>
                    <th>
                        Delete
                    </th>
                    </th>
                </tr>

            </thead>
            <tbody>
                @foreach ($category as $cat)
                {{-- {{dd($cat->photos)}} --}}
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->cat_name }}</td>
                        {{-- <td width="10%">
                            @if ($cat->photos != null)
                            <img class="img-fluid rounded" width=""
                            src="{{ asset('storage/photos/' . $cat->photos->pic) }}" alt="picture">
                            @endif
                        </td> --}}
                        <td>


                            <form action="/{{$cat->id}}/deletecategory" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')
                        <td>
                            <button class="btn btn-outline-danger " type="submit">
                                Delete
                            </button>
                        </td>

                        </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
