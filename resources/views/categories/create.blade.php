@extends('layouts.app')
@section('content')
    <div class=p-5>
        <form action="/storecategory" method="post" enctype="multipart/form-data">
            @csrf
            <table class="table table-hover border">
                <thead>
                    <tr>
                        <th>Category_name</th>
                        <th>Add</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" name="cat_name">
                        </td>

                        <td>

                            <button class="btn btn-outline-primary " type="submit">
                                Save
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

    </div>
@endsection
