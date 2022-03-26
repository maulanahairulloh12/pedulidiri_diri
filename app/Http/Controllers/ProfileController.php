<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
 public function profile()
 {
     $data_profile = \App\User::all();
     return view('user.profile',['data_profile' => $data_profile]);
 }
}
