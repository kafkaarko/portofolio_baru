<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('konten')
<section class="section " style="background: #3572EF">
  <h2 class="section-header text-center text-white">Portofolio</h2>
  <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
          <div class="card h-100">
              <img src="../assets/img/p1.png" class="card-img-top" alt="Project 1">
              <div class="card-body  text-white" style="background:#3ABEF9">
                  <h5 class="card-title">Data Siswa</h5> 
                  <p class="card-text">Data Siswa merupakan web yang telah di buat oleh kafka menggunakan SESSESSION,web ini bisa menampung banyak data siswa jika mau.</p>
              </div>
              <div class="card-footer text-center">
                  <a href="http://kafkaproject.free.nf/CRUD/data.php" class="btn btn-primary">Detail</a>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card h-100">
              <img src="../assets/img/p2.png" class="card-img-top" alt="Project 2">
              <div class="card-body  text-white" style="background:#3ABEF9">
                  <h5 class="card-title ">Kasir</h5>
                  <p class="card-text">Di web ini kita dapat mengisi barang apapun itu,lalu kita bisa tentukan harga dari barang tersebut lalu kita bisa bayar dari total uang dari barang yang kita input.</p>
              </div>
              <div class="card-footer text-center">
                  <a href="http://kafkaproject.free.nf/market/" class="btn btn-primary">Detail</a>
              </div>
          </div>
      </div>
      <div class="col">
          <div class="card h-100">
              <img src="../assets/img/p3.png" class="card-img-top" alt="Project 3">
              <div class="card-body  text-white" style="background:#3ABEF9">
                  <h5 class="card-title  ">Shell</h5>
                  <p class="card-text">Di dalam web ini kita bisa memasukan input liter dan memilih jenis bensin apa yang mau kita beli dan di web ini ada fitur cek harga yangg dimana berguna untuk check harga jika barang itu terlalu kemahalan.</p>
              </div>
              <div class="card-footer text-center">
                  <a href="http://kafkaproject.free.nf/TugasShell/app/index.php" class="btn btn-primary">Detail</a>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection