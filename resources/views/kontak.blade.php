<!-- Menghubungkan dengan view template master -->
@extends('master')
 
@section('konten')
 <div class="d-flex justify-content-center mt-50 p-5 "style="background: #3572EF">
    <section class="section">
        <h2 class="section-header text-center text-white ">Social Media</h2>
        <div class="card" style="width: 18rem;">
          <img src="../assets/img/kafka.JPG" class="card-img-top" alt="...">
          <div class="card-body  text-white"style="background:#3ABEF9">
            <h5 class="card-title">Contact me</h5>
            <p class="card-text">tertarik dengan saya?? ayo hubungi media sosial yang ada di bawah ini.</p>
          </div>
          <div class="card-body bg-info">
            <a href="https://www.instagram.com/kafka.svg/" class="card-link"><img src="../assets/img/ig.png" height="20px">Instagram</a>
            <a href="https://www.linkedin.com/in/kafkaarrr/" class="card-link"><img src="../assets/img/li.png" height="20px" alt="">Linkedin</a>
          </div>
        </div>
      </section>
      </div>
      <hr>
      <!-- Contact -->
      <div class="d-flex justify-content-center">

        <section class="section">
          <h2 class="section-header">Address</h2>
          <p><b>Home Address </b>: Perumahan Daigo  </p>
         
        </section>
      </div>
@endsection