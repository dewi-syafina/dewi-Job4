@extends('layouts.app')

@section('title', 'Profile Pengguna')

@section('content')
<style>
    .profile-container {
        max-width: 600px;
        margin: 40px auto;
        background-color: #f8fafc;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        font-family: 'Segoe UI', sans-serif;
    }
    .profile-header {
        background: linear-gradient(to right, #86efac, #4ade80);
        padding: 20px;
        color: white;
        text-align: center;
    }
    .profile-body {
        padding: 25px;
        text-align: center;
    }
    .profile-img {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #4ade80;
        margin-bottom: 15px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .profile-name {
        font-size: 1.5rem;
        font-weight: 600;
        color: #065f46;
    }
    .profile-email,
    .profile-bio {
        color: #334155;
        font-size: 1rem;
        margin: 6px 0;
    }
    .skills-title {
        margin-top: 16px;
        font-weight: bold;
        color: #059669;
    }
    .skills-list {
        list-style: disc;
        padding-left: 20px;
        color: #374151;
        font-size: 0.95rem;
        display: inline-block;
        text-align: left;
        margin-top: 5px;
    }
</style>

<div class="profile-container">
    <div class="profile-header">
        <h1>🌿 Profil Pengguna</h1>
    </div>
    <div class="profile-body">
        <img src="{{ asset('image/' . $profile['profile_picture']) }}" alt="Profile Picture" class="profile-img">
        <h2 class="profile-name">{{ $profile['name'] }}</h2>
        <p class="profile-email">📧 {{ $profile['email'] }}</p>
        <p class="profile-bio">📝 {{ $profile['bio'] }}</p>

        @if(count($profile['skills']) > 0)
            <h3 class="skills-title">🛠 Keahlian:</h3>
            <ul class="skills-list">
                @foreach($profile['skills'] as $skill)
                    <li>{{ $skill }}</li>
                @endforeach
            </ul>
        @else
            <p class="text-gray-500 text-sm mt-2">Belum ada skill yang ditampilkan.</p>
        @endif
    </div>
</div>
@endsection
