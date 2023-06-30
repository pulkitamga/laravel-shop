<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Session;
use Hash;

class AuthController extends Controller
{
    public function Register()
    {
        return view('auth/register');
    }
    public function Login()
    {
        return view('auth/login');
    }
    public function RegisterUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',  //users is table name
            'password'=>'required|max:12|min:5'
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email; 
        $user->password=Hash::make($request->password);
        $res=$user->save();
        if ($res)
        {
            return back()->with('success','Register Successfully');
        }
        else{
            return back()->with('fail','Something is wrong');
        }
    }
    public function Loginuser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',  //users is table name
            'password'=>'required|max:12|min:5'
        ]);
           
        $user=User::where('email','=',$request->email)->first();
        if($user->role_as==1)
        {
             if(Hash::check($request->password, $user->password))
             {
               $request->session()->put('loginId',$user->id);
               return redirect('dashboard');
             }
             else{
                return back()->with('fail','Password Is InCorrect');
             }
        }
         else if($user->role_as==0)
        {
             if(Hash::check($request->password, $user->password))
             {
               $request->session()->put('loginId',$user->id);
               return redirect('user');
             }
             else{
                return back()->with('fail','Password Is InCorrect');
             }
        }
        else
        {
            return back()->with('fail','User Is Not Register,Please register');
        }

    }
    public function dashboard()
    {
        $data=array();
        if(Session::has('loginId'))
        {
            $data=User::where('id','=',Session::has('loginId'))->first();

        }
        return view('adminView/admindashboard',compact('data'));
    }
    public function user()
    {
        return "welcome user";
    }
    Public function Logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}

