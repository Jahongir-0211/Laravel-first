<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function create()
  {
    return view('user.create');
  }

  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required',
      'email' => 'required|email|unique:users',
      'password' => 'required|confirmed',
    ]);

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => bcrypt($request->password),
    ]);
    session()->flash('success', 'Регистрацыя пройдена');
    Auth::login($user);
    return redirect()->home();
  }



  public function loginForm()
  {
    return view('user.login');
  }



  public function login(Request $request)
  {
    $request->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if (Auth::attempt([
      'email' => $request->email,
      'password' => $request->password
    ])) {
      session()->flash('success', 'You are loggened');
      if (Auth::user()->is_admin) {
        return redirect()->route('admin.index');
      } else {
        return redirect()->home();
      }
    }
    return redirect()->back()->with('error', 'Incorrrect login or password');
  }


  public function loginout()
  {
    Auth::logout();
    return redirect()->route('login.create');
  }










  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    //
  }
}
