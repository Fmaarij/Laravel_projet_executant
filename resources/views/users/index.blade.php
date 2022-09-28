@extends('layouts.app')
@section('content')
    <div class=p-5>
        <table class="table table-hover border">
            <tr>
                <thead>
                    <th>PROFILE</th>
                    <th>USER</th>
                    <th>NAME</th>
                    <th>AGE</th>
                    <th>ROLE</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td width=10%>
                                <img class="rounded-pill w-100" src="{{ $user->avatar->img }}" alt="">
                            </td>
                            <td>{{ $user->lastname }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->role->role_name }}</td>
                            <td>
                                <a href="/edituser/{{$user->id}}">
                                    <button class="btn btn-outline-warning">
                                        Edit
                                    </button>
                                </a>
                            </td>
                            <td>
                                <form action="/{{$user->id}}/deleteuser" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">
                                        Delete
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </tr>
        </table>
    </div>
@endsection
