<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth as FacadesAuth;
use Iluminate\Http\Request;
use Illuminate\Support\Facedes\Auth;

//use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    //
    public function logout(){
    FacadesAuth::logout();
        return Redirect()->route('login');
    }
}
