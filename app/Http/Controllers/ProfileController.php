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
            'bio' => 'Murid Skansay [SMK N 1 Sayung]',
            'profile_picture' => 'al-removebg-preview.png',
            'skills' => ['Memasak', 'Coding (masih belajar)']
        ];
            return view('profile', compact('profile'));
    }
}
