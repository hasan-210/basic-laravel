<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
    return view('auth.register');
    }
    public function login(){
        return view('auth.login');
    }
     public function store(AuthRequest $request){
     $user=User::create([
        'name'=>$request->name,
        'password'=>Hash::make($request -> password),
        'email'=>$request->email,
        'phone'=>$request->phone
     ]);
     Auth::login($user);
     return redirect()->route('store.index');
     }
    }
