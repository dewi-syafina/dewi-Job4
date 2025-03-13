@extends('layouts.app')

@section('title', 'About - MyApp')

@section('content')

<div class='container mb-5'>
    <h1 class="text-center mb-4"> Tentang Kami</h1>
    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h2>Visi & Misi</h2>
            <h4> Visi </h4>
            <p> Mewujudkan aplikasi web yang sederhana, inovatif, dan bermanfaat bagi semua kalangan. </p>
            <h4> Misi </h4>
            <ul>
                <li> Menyediakan solusi teknologi yang mudah dipahami dan diakses. </li>
                <li> Mendorong kolaborasi dan kreativitas dalam pengembangan aplikasi. </li>
                <li> Mengoptimalkan performa dan tampilan dengan teknologi modern. </li>
            </ul>
        </div>
        <div class="col-md-6">
            <img class="img-fluid rounded" src="{{ asset('image/' .$foto['foto-visi-misi']) }}" alt="Visi Misi">
        </div>
    </div>
    <!-- sejarah section -->
    <div class="mb-5">
        <h2 class="text-center"> Sejarah Kami </h2>
        <p> MyApp bermula dari ide sederhana untuk mengembangkan aplikasi web yang user-friendly dan dapat dimodifikasi dengan mudah. Dengan menggunakan Laravel Blade, kami berhasil mengintegrasikan berbagai komponen dan fitur modern dalam satu platform yang dinamis. Proyek ini dibangun dengan semangat kolaborasi dan inovasi, serta didukung oleh tim yang berdedikasi tinggi. </p>
    </div>
    <!-- Tim kAMI SECTION -->
    <div class="mb-5">
        <h2 class="text-center"> Tim Kami </h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('image/' .$foto['foto-1']) }}" alt="Carmen ">
                    <div class="card-body text-center">
                        <h5 class="card-title"> Carmen </h5>
                        <p class="card-text"> Founder & CO </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('image/' .$foto['foto-2']) }}" alt="Carmen ">
                    <div class="card-body text-center">
                        <h5 class="card-title"> Carmen </h5>
                        <p class="card-text"> Founder & CO </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ asset('image/' .$foto['foto-3']) }}" alt="Carmen ">
                    <div class="card-body text-center">
                        <h5 class="card-title"> Carmen </h5>
                        <p class="card-text"> Founder & CO </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hubungi kami -->
    <div class="mb-5">
        <h2 class="text-center"> Hubungi Kami </h2>
        <p class="text-center">  </p>
        <div class="text-center">
            <p> </p>
            <p> </p>
            <p>  </p>
        </div>
    </div>
</div>

@endsection