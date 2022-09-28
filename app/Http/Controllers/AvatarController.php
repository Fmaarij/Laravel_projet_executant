<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Http\Requests\StoreAvatarRequest;
use App\Http\Requests\UpdateAvatarRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $avatars = Avatar::all();
        return view( 'avatar.index', compact( 'avatars' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        // $avatars = Avatar::all();
        return view( 'avatar.create' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreAvatarRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $avatars = new Avatar;
        $avatars ->avatar_name = $request->avatar_name;
        Storage::put( 'public/avatar/',  $request->file( 'img' ) );
        $avatars->img = $request->file( 'img' )->hashName();
        $avatars->save();
        return redirect()->back();
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Avatar  $avatar
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        $avatars = Avatar::find( $id );
        return view( 'avatar.show', $avatars );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Avatar  $avatar
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        $avatars = Avatar::find( $id );
        return view( 'avatar.edit', compact( 'avatars' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateAvatarRequest  $request
    * @param  \App\Models\Avatar  $avatar
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $avatars = Avatar::find( $id );
        $avatars ->avatar_name = $request->avatar_name;
        if ( $request->file( 'img' ) != null ) {
            Storage::delete( 'public/avatar/', $request->img );
            Storage::put( 'public/avatar/', $request->file( 'img' ) );
            $avatars->img = $request->file( 'img' )->hashName();
        }
        $avatars->save();
        return redirect()->back();

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Avatar  $avatar
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id) {
        $avatars = Avatar::find( $id );
        Storage::delete( 'public/avatar/'.$avatars->img );
        // $avatars->delete();

        return redirect()->back();
    }
}
