<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function index()
    {
        return "This is my user  !";
    }

    public function signup()
    {
        return view('user.signup');
    }

    public function subscribe(Request $request)
    {
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $ville = $request->input('ville');
        $email = $request->input('email');
        $password = $request->input('password');

        // TODO: dd() fonction usuel de debug Laravel
        // dd($request->path());

        return [
            'nom' => $nom,
            'prenom' => $prenom,
            'ville' => $ville,
            'email' => $email,
        ];
    }
}
