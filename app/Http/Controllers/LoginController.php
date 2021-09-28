<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $noticias = Noticias::get(); 
        return view('welcome', compact('noticias'));
    }
}
