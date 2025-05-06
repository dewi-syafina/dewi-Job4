@extends('layouts.app')

@section('title', 'Contact - MyApp')

@section('content')
<style>
    /* Contact Page Styles */
    .contact-container {
        background-color: #eaf7e3; /* Background hijau cerah */
        padding: 60px 0;
        font-family: 'Arial', sans-serif;
    }

    .contact-container h1 {
        font-size: 40px;
        color: #2d6a4f; /* Warna hijau lebih gelap untuk judul */
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .contact-container form {
        max-width: 900px;
        margin: 0 auto;
        background-color: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .contact-container .form-label {
        color: #2d6a4f;
        font-weight: bold;
    }

    .contact-container .form-control {
        border-radius: 8px;
        border: 1px solid #d1e7dd;
        padding: 12px;
        font-size: 16px;
        margin-bottom: 20px;
    }

    .contact-container .form-check-input {
        margin-top: 8px;
    }

    .contact-container .form-check-label {
        font-size: 16px;
        color: #333;
    }

    .contact-container .btn-primary {
        background-color: #52b788; /* Hijau cerah */
        border-color: #52b788;
        color: white;
        padding: 12px 25px;
        border-radius: 30px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .contact-container .btn-primary:hover {
        background-color: #2d6a4f; /* Hijau gelap saat hover */
        border-color: #2d6a4f;
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .contact-container h1 {
            font-size: 32px;
        }

        .contact-container .form-control,
        .contact-container .form-select {
            font-size: 14px;
            padding: 10px;
        }

        .contact-container .btn-primary {
            width: 100%;
            font-size: 16px;
        }
    }

</style>

<div class="container contact-container my-5">
    <h1>Hubungi Saya</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="Jt50D1gPVnITk169RmMRH4gKpgArQb2Kj81bMGkM" autocomplete="off"> 

        <!-- Input Text: Nama Lengkap -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap Anda" required="">
        </div>

        <!-- Input Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email Anda" required="">
        </div>

        <!-- Input Telepon -->
        <div class="mb-3">
            <label for="phone" class="form-label">Telepon</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Masukkan nomor telepon Anda">
        </div>

        <!-- Select: Subjek Pesan -->
        <div class="mb-3">
            <label for="subject" class="form-label">Subjek</label>
            <select class="form-select" id="subject" name="subject" required="">
                <option value="">Pilih subjek pesan</option>
                <option value="pertanyaan">Pertanyaan</option>
                <option value="masukan">Masukan</option>
                <option value="kerjasama">Kerjasama</option>
            </select>
        </div>

        <!-- Textarea: Pesan -->
        <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required=""></textarea>
        </div>

        <!-- File Upload: Lampiran -->
        <div class="mb-3">
            <label for="attachment" class="form-label">Lampiran</label>
            <input type="file" class="form-control" id="attachment" name="attachment">
        </div>

        <!-- Radio Button: Jenis Kelamin -->
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked="">
                <label class="form-check-label" for="male">Pria</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                <label class="form-check-label" for="female">Wanita</label>
            </div>
        </div>

        <!-- Checkbox: Persetujuan Syarat dan Ketentuan -->
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="terms" name="terms" required="">
            <label class="form-check-label" for="terms">Saya menyetujui syarat dan ketentuan</label>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
    </form>
</div>

@endsection
