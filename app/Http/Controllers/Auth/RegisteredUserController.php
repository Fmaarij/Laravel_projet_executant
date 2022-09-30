<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller {
    /**
    * Display the registration view.
    *
    * @return \Illuminate\View\View
    */
    public function index(){
        $users = User::all();
        // $member = User::where('role_id','=','2')->get();
        return view('users.index', compact('users' ));
    }

    public function create() {
        return view( 'auth.register' );
    }

    /**
    * Handle an incoming registration request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\RedirectResponse
    *
    * @throws \Illuminate\Validation\ValidationException
    */

    public function createuser(){
        $roles = Role::all();
        $avatars = Avatar::all();
        $articles = Articles::all();
        $users = User::all();
        return view('users.create', compact('roles', 'avatars', 'articles','users'));
    }

    public function storeuser(Request $request){
        $users = new User;
        $users->name = $request->name;
        $users->lastname = $request->lastname;
        $users->age = $request->age;
        $users->role_id = $request->role_id;
        $users->avatar_id = $request->avatar_id;
        $users->article_id = $request->article_id;
        $users->email = $request->email;
        $users->password = Hash::make( $request->password );
        $users->save();
        return redirect('users');
    }

    public function store( Request $request ) {
        $request->validate( [
            'name' => [ 'required', 'string', 'max:255' ],
            'email' => [ 'required', 'string', 'email', 'max:255', 'unique:users' ],
            'password' => [ 'required', 'confirmed', Rules\Password::defaults() ],
        ] );

        $user = User::create( [
            'name' => $request->name,
            'lastname' => $request->lastname,
            'age' => $request->age,
            'role_id' => $request->role_id,
            'avatar_id' => $request->avatar_id,
            'article_id' => $request->article_id,
            'email' => $request->email,
            'password' => Hash::make( $request->password ),
        ] );

        event( new Registered( $user ) );

        Auth::login( $user );

        return redirect( RouteServiceProvider::HOME );
    }

    public function edit( $id ) {
        $users = User::find( $id );

        $roles = Role::all();
        $avatars = Avatar::all();
        $articles = Articles::all();
        return view( 'users.edit', compact( 'users', 'roles', 'avatars', 'articles') );
    }

    public function update( Request $request, $id ) {

        $users = User::find( $id );
        $users->name = $request->name;
        $users->lastname = $request->lastname;
        $users->age = $request->age;
        $users->role_id = $request->role_id;
        $users->avatar_id = $request->avatar_id;
        $users->article_id = $request->article_id;
        $users->email = $request->email;
        $users->password = Hash::make( $request->password );
        $users->save();

        return redirect()->back();
    }

    public function destroy($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->back();
    }
}
