@extends('layouts.navbar')

@section('content')
<div class="container">
    <h2 class="text-center">PENGHARGAAN</h2>
    <p class="text-center">foto-foto di bawah adalah penghargaan siswa siswa rpl yang berupa sertifikat</p> 
    <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card" style="width: 20rem;">
                <img src="{{'assets/img/1.jpeg'}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                <p class="card-text fs-5">Sertifikat milik Jovanka Alexandro Siswa RPL Gen 5 yang memenangkan lomba Teknik Design Laman(Web Technologies) dan mendapatkan juara 1 di acara kegiatan Lomba Kompetensi Siswa (LKS) SMK Tingkat Kabupaten Karawang yang di selenggarakan secara daring pada tanggal 7-10 Juli 2021.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center pt-2">
            <div class="card" style="width: 20rem;">
                <img src="{{'assets/img/2.jpeg'}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <p class="card-text fs-5">Sertifikat milik Daffa Muqsith Ismoro Siswa RPL Gen 5 yang memenangkan lomba Graphic Design dan mendapatkan juara 1 di acara TECHNO COMPETITION AND FESTIVAL pada tanggal 5 januari 2020 di Karawang.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center pt-2">
            <div class="card" style="width: 20rem;">
                <img src="{{'assets/img/3.jpeg'}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                <p class="card-text fs-5">Sertifikat milik Jovanka Alexandro Siswa RPL Gen 5 yang memenangkan lomba Teknik desain laman (web Technologies) dan mendapatkan juara 1 di acara Lomba Kompetensi Siswa (LKS) SMK Tingkat Provinsi Jawa Barat secara daring yang di selenggarakan pada tanggal 24 juli 2021 s.d 7 agustus 2021.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 d-flex justify-content-center pt-2">
            <div class="card" style="width: 20rem;">
                <img src="{{'assets/img/4.jpeg'}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                <p class="card-text fs-5">Sertifikat milik Rizqya Sanria Juliana Siswa RPL Gen 5 yang memenangkan lomba IT Software Solution For Business dan mendapatkan juara 1 di acara Lomba Kompetensi Siswa (LKS) SMK Tingkat Kabupaten Karawang secara daring yang di selenggarakan pada tanggal 7-10 juli 2021.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center pt-2">
            <div class="card" style="width: 20rem;">
                <img src="{{'assets/img/5.jpeg'}}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                <p class="card-text fs-5">Sertifikat milik Daffa Muqsith Ismoro Siswa RPL Gen 5 yang memenangkan lomba Teknologi Desain Grafis (Graphic Design Technology) dan mendapatkan juara 1 di acara Lomba Kompetensi Siswa (LKS) SMK Tingkat Kabupaten Karawang secara daring yang di selenggarakan pada tanggal 7-10 juli 2021.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<link rel="stylesheet" href="{{ 'assets/css/achievements.css' }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>