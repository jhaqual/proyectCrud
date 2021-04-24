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
        $users=DB::table('users')->select('id', 'name', 'email','profession','phone')
                                 ->where('name','LIKE','%' .$text.'%')
                                 ->orWhere('id','LIKE','%' .$text.'%')
                                 ->orderby('id','asc')
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
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->profession=$request->input('profession');
        $users->phone=$request->input('phone');
        $users->save();
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('users.edit',compact('user'));
    }

    public function update( Request $request, $id)
    {
        $user=User::findOrFail($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->profession=$request->input('profession');
        $user->phone=$request->input('phone');
        $user->save();
        return redirect()->route('user.index');




    }

    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }

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