<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function about()
    {
        $foto = [
            'foto-visi-misi' => 'al-removebg-preview.png'
        ];
    
        return view('about', compact('foto'));
    }
    
}
