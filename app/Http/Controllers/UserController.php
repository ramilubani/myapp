<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{


    public function logout(){
        auth()->logout();
        return redirect('/');
    }
    public function register(Request $request){
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:255', Rule::unique ('users', 'name')],
            'email' => ['required', 'email', 'max:255', Rule::unique ('users', 'email')],
            'password' => ['required', 'min:6', 'max:255']
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        // $user = User::create($incomingFields);
        auth()->login(User::create($incomingFields));

        return redirect('/');
    }
}
