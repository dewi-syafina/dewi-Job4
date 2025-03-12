<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Dewi Syafina',
            'email' => 'dewisyafinaaa118@gmail.com',
            'bio' => 'Murid Marapthon',
            'profile_picture' => 'al.png',
            'skills' => ['Memasak']
        ];
            return view('profile', compact('profile'));
    }
}
