@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<style>
    .profile-container {
        max-width: 700px;
        margin: 40px auto;
        background-color: #f8fafc;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        font-family: 'Segoe UI', sans-serif;
    }

    .profile-header {
        background: linear-gradient(to right, #a7f3d0, #34d399);
        padding: 20px;
        color: white;
        text-align: center;
    }

    .profile-body {
        padding: 30px;
        text-align: center;
    }

    .profile-img {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #34d399;
        margin-bottom: 20px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.12);
    }

    .section-title {
        font-size: 1.4rem;
        color: #059669;
        font-weight: 600;
        margin-top: 25px;
    }

    .section-text {
        font-size: 1rem;
        color: #334155;
        line-height: 1.7;
        margin-top: 10px;
        text-align: justify;
    }

    .section-list {
        list-style: disc;
        padding-left: 30px;
        text-align: left;
        margin-top: 10px;
        color: #374151;
    }

    .contact-info {
        margin-top: 30px;
        font-size: 1rem;
        color: #065f46;
    }

    .contact-info p {
        margin: 6px 0;
    }

    .btn-kontak {
        display: inline-block;
        margin-top: 12px;
        background-color: #10b981;
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
    }

    .btn-kontak:hover {
        background-color: #059669;
    }
</style>

<div class="profile-container">
    <div class="profile-header">
        <h1>🌱 Tentang Kami</h1>
    </div>
    <div class="profile-body">
        <img src="{{ asset('image/' . $foto['foto-visi-misi']) }}" alt="Visi Misi" class="profile-img">

        <h2 class="section-title">Visi</h2>
        <p class="section-text">Mewujudkan aplikasi web yang sederhana, inovatif, dan bermanfaat bagi semua kalangan.</p>

        <h2 class="section-title">Misi</h2>
        <ul class="section-list">
            <li>Menyediakan solusi teknologi yang mudah dipahami dan diakses.</li>
            <li>Mendorong kolaborasi dan kreativitas dalam pengembangan aplikasi.</li>
            <li>Mengoptimalkan performa dan tampilan dengan teknologi modern.</li>
        </ul>

        <h2 class="section-title">Asal Usul</h2>
        <p class="section-text">
            MyApp bermula dari sebuah tugas yang diberikan oleh guru sebagai bagian dari pembelajaran di jurusan Rekayasa Perangkat Lunak dan Gim. Dari tugas sederhana itu, tumbuh sebuah ide untuk mengembangkan aplikasi web yang user-friendly dan mudah dimodifikasi. Dengan memanfaatkan Laravel Blade, kami berhasil menggabungkan berbagai komponen dan fitur modern dalam satu platform dinamis. Proyek ini dikerjakan dengan semangat belajar, kolaborasi, dan inovasi, didukung oleh dedikasi tinggi dari tim pengembang muda yang bersemangat.
        </p>

        <div class="contact-info">
            <h2 class="section-title">Hubungi Saya</h2>
            <p>📧 Email: dewisyafinaaa118@gmail.com</p>
            <p>📞 Telepon: +62 882-0083-26604</p>
            <a href="{{ url('contact') }}" class="btn-kontak">Kontak Kami</a>
        </div>
    </div>
</div>
@endsection
