<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login()
    {
       return view('login');
    }
    public function create(){
        return view('anyadat');
    }
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required',
            'password' => 'required'    
        ]);

        $formFields['password'] = Hash::make($formFields['password']);

        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/');
    }

    public function authenticate(Request $request)
    {
    $formFields = $request->validate([
        'name' => 'required',
        'password' => 'required'
    ]);

    if(auth()->attempt($formFields)){
        $request->session()->regenerate();
        
        return redirect('/keszit');

    }

    return back()->withErrors(['name' =>'Invalid bejeletkezés'])->onlyInput('name');
    
    }
}