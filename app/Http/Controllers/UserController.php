<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $text=trim($request->get('text'));
        $users=DB::table('users')->select('id', 'name', 'email','created_at','updated_at')
                                 ->where('name','LIKE','%' .$text.'%')
                                 ->orWhere('id','LIKE','%' .$text.'%')
                                 ->orderby('name','asc')
                                 ->paginate(10);
       return view('users.index', compact('users','text'));
    }

    public function create( )
    {
        return view('users.create');
    }

    public function store( Request $request)
    {
        $users = new user;
        $users->name=$request->input('nombre');
        $users->email=$request->input('email');
        $users->created_at=$request->input('Fecha creación');
        $users->updated_at=$request->input('Última actualización');
        $users->save();
        return redirect()->route('user.index');
    }
/*
    public function edit()
    {
        //
    }

    public function destroy()
    {
        //
        }
    */
}

/*
 *public function index()
 *    {
 *        $users = User:: latest()->get();
 *
 *        return view('users.index', [
 *            'users'=> $users
 *        ]);
 *    }
 *
 *    public function store(Request $request)
 *    {
 *        User::create([
 *            'name' => $request->name,
 *            'email' => $request->email,
 *            'password' => $request->password,
 *        ]);
 *
 *        return back();
 *    }
 *
 *    public function edit($id)
 *    {
 *        //
 *    }
 *
 *    public function destroy(User $user)
 *    {
 *        $user->delete();
 *
 *        return back();
 *    }
*/