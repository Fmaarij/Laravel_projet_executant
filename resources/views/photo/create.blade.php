@extends('layouts.app')
@section('content')
    <div class=p-5>


        <form action="/storephoto" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Photo</label>
            <input type="file" name="pic" id="">

            <label for="">Category</label>
            <select name="category_id" id="">
                @foreach ($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-outline-success">Save</button>

        </form>
        {{--
        $table->string('photo_name');
        $table->string('pic');
        $table->foreignId('category_id')->constrained()->onDelete('cascade'); --}}
    </div>
@endsection
