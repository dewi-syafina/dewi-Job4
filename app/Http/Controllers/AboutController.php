<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function about()
    {
        $foto = [
            'foto-visi-misi' => 'al.png',
            'foto-1' => 'al.png',
            'foto-2' => 'al.png',
            'foto-3' => 'al.png',
        ];
         return view('about', compact('foto')) ;
    }
}
