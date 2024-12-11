<!-- Menghubungkan dengan view template master -->
@extends('master')

@section('konten')
<div class="container py-5">
    <!-- Header CV -->
    <div class="row align-items-center mb-5">
        <div class="col-md-4 text-center">
            <img src="assets/img/kafka.JPG" class="rounded-circle img-fluid" style="width: 200px; height: 200px;" alt="Foto Profil">
        </div>
        <div class="col-md-8">
            <h1 class="text-primary">Kafka Arko Ardissya</h1>
            <p class="lead">Siswa SMK Wikrama Bogor</p>
            <p>Seorang siswa yang berminat mendalami dunia teknologi dan pengembangan perangkat lunak, dengan tujuan menjadi Back-end Developer.</p>
        </div>
    </div>

    <!-- Profil Singkat dan Keahlian -->
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title text-primary">Profil Singkat</h3>
                    <ul class="list-unstyled">
                        <li>Seorang siswa SMK Wikrama Bogor.</li>
                        <li>Berminat mendalami dunia teknologi dan pengembangan perangkat lunak.</li>
                        <li>Berkeinginan menjadi Back-end Developer.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title text-primary">Keahlian</h3>
                    <ul class="list-unstyled">
                        <li>Laravel</li>
                        <li>React.js</li>
                        <li>Python</li>
                        <li>Microsoft Excel</li>
                        <li>Database (MySQL)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Riwayat Pendidikan -->
    <div class="row mb-5">
        <div class="col">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h3 class="card-title text-primary">Riwayat Pendidikan</h3>
                    <ul class="list-unstyled">
                        <li><b>SMK Wikrama Bogor</b> | Jun 2023 - Jul 2026</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Tentang SMK Wikrama Bogor -->
    <div class="row">
        <div class="col">
            <div class="card shadow-sm border-0">
                <img src="assets/img/gdg.jpg" class="card-img-top" alt="Gedung SMK Wikrama">
                <div class="card-body">
                    <h3 class="card-title text-primary">Tentang SMK Wikrama Bogor</h3>
                    <p>SMK Wikrama Bogor didirikan pada tahun 1996 dan telah berkembang menjadi salah satu institusi pendidikan kejuruan terkemuka di Indonesia. Dengan berbagai kompetensi keahlian, sekolah ini mencetak siswa yang siap kerja dan berprestasi.</p>
                    <ul class="list-unstyled">
                        <li><b>Tahun Berdiri:</b> 1996</li>
                        <li><b>Kompetensi Keahlian:</b>
                            <ul>
                                <li>Pengembangan Perangkat Lunak dan Gim</li>
                                <li>Teknik Jaringan Komputer dan Telekomunikasi</li>
                                <li>Manajemen Perkantoran dan Layanan Bisnis</li>
                                <li>Desain Komunikasi Visual</li>
                                <li>Kuliner</li>
                                <li>Perhotelan</li>
                                <li>Pemasaran</li>
                            </ul>
                        </li>
                        <li><b>Jumlah Siswa Saat Ini:</b> 1596 siswa</li>
                        <li><b>Lokasi:</b> Jalan Raya Wangun, Kelurahan Sindangsari, Kota Bogor</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
