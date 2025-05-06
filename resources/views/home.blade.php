@extends('layouts.app')

@section('title', 'Home - MyApp')

@section('content')

<style>

    /* Custom Button Style */
    .btn-primary {
        background-color: #98df8a; /* Hijau muda */
        border-color: #98df8a;
        color: white;
        padding: 12px 25px;
        font-size: 18px;
        border-radius: 30px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #52b788; /* Hijau sedikit lebih gelap saat hover */
        border-color: #52b788;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .jumbotron h1 {
            font-size: 36px;
        }

        .jumbotron p {
            font-size: 16px;
        }

        .btn-primary {
            font-size: 16px;
            padding: 10px 20px;
        }
    }

</style>

    <div class="jumbotron text-center bg-light py-5">
        <h1 class="display-4">Selamat Datang di My App 👋</h1>
        <p class="lead">Saya sedang belajar membuat Aplikasi Laravel sederhana dengan Laravel Blade</p>
        <a class="btn btn-primary btn-lg" href="profile">Lihat Profile</a>
    </div>
    
@endsection