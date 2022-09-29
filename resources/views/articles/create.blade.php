@extends('layouts.app')
@section('content')
    <div class="p-5">

        <form action="/storearticle" method="post" enctype="multipart/form-data">
            @csrf

            <table class="table table-hover border">
                <thead>
                    <tr>
                        <th> <label for="">Title</label></th>
                        <th> <label for="">Text</label></th>
                        <th>Add</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <input type="text" name="title" id=""></td>
                        <td>
                            <textarea name="text" id="" cols="30" rows="10"></textarea>
                        </td>
                        <td> <button class="btn btn-outline-primary">Save</button></td>
                    </tr>
                </tbody>
            </table>
        </form>

    </div>
@endsection
