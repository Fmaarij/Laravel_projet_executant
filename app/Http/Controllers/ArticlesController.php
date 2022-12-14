<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Http\Requests\StoreArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;
use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;

class ArticlesController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $articles = Articles::paginate( 4 );
        // $users = User::all();
        return view( 'articles', compact( 'articles' ) );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {
        return view('articles.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \App\Http\Requests\StoreArticlesRequest  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        $articles = new Articles;
        $articles->title = $request->title;
        $articles->text = $request->text;
        $articles->save();
        return redirect('/');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\Models\Articles  $articles
    * @return \Illuminate\Http\Response
    */

    public function show( Articles $articles ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Articles  $articles
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {

        $articles = Articles::find( $id );
        return view( 'articles.edit', compact( 'articles' ) );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \App\Http\Requests\UpdateArticlesRequest  $request
    * @param  \App\Models\Articles  $articles
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        $articles = Articles::find( $id );
        $articles->title = $request->title;
        $articles->text = $request->text;
        $articles->save();
        return redirect()->back();
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Articles  $articles
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        $articles = Articles::find( $id );
        $users = User::where( 'article_id', '=', $id )->get();

        foreach ( $users as $user ) {

            $user->article_id = 1;
            $user->save();
        }

        $articles->delete();
        return redirect()->back();
    }
}
