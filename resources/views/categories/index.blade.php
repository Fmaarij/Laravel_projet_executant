@extends('layouts.app')
@section('content')
    <div class=p-5>
        <table class="table table-hover border">
            <thead>
                <tr>
                    <th>Category_ID</th>
                    <th>Category_name</th>
                    {{-- <th>Photo</th> --}}
                    <th>Edit</th>
                    <th>

                        Delete

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
                                <a href="/editcategory/{{$cat->id}}">
                                <button class="btn btn-outline-warning">Edit</button>
                                </a>
                            </td>
                            <td>
                            <form action="/{{$cat->id}}/deletecategory" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('DELETE')

                            <button class="btn btn-outline-danger " type="submit">
                                Delete
                            </button>
                        </form>
                    </td>


                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr>
        <div class="mt-5 mb-5">
                <a href="{{ url('createcategory') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
                    <button class="fs-5 btn btn-outline-primary">

                        Add a category

                    </button>
                </a>
            </h3>
        </div>

    </div>
@endsection
