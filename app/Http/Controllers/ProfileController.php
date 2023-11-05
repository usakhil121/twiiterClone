<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

        dump(Profile::all());
        return view('profile' ,[ 'profiles'=>Profile::all()]);
    }
}
