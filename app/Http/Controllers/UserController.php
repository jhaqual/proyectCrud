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
    /*
    public function store( )
    {
        //
    }

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