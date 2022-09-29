@extends('layouts.app')
@section('content')
    <div class=p-5>
        <form action="/{{$category->id }}/updatecategory" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
        <table class="table table-hover border">
            <thead>
                <tr>
                    <th> <label for="">Category_name</label></th>
                    <th><label for="">Update</label></th>
                </tr>

            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="cat_name" value="{{ $category->cat_name }}">
                    </td>
                    <td>

                            <button class="btn btn-outline-success " type="submit">
                                Update
                            </button>

                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    </div>
@endsection
