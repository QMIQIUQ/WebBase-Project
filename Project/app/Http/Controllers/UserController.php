<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function UserView() {
        $users=DB::table('users')
        ->select('users.*')
        ->get();
        
        return view('admin.showUser')->with('users',$users);
    }

    public function editUser($id){
        $users=DB::table('users')
        ->select('users.*')
        ->where('users.id',$id)
        ->get();

        return view('admin.editUser')->with('users',$users);

    }


    public function updateUser(){

        $r=request();
        $users=User::find($r->user_id);
        

            $users->name=$r->userName ;
            $users->email=$r->userEmail ;
            $users->role_as=$r->userRole ;

            $users->save();
        

        return redirect()->route('viewUser')->with('status','User Data update Successfully');

    }
}
