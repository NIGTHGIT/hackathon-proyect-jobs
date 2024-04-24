<?php

namespace App\Http\Controllers\empresa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authControler extends Controller
{
    //


    public function dashboard(){
        return view('empresa/auth/auth_vista');
    }

}
