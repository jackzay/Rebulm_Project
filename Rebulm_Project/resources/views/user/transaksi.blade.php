@extends('layouts.user')

@section('head')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      body{
          background-image: url(images/bg.png) ;
          background-size: cover;
          
          font-family: 'Open Sans', sans-serif;
          
          
      

      }
      /* Rebulm */
      #btn{
            /* Rectangle 23 */

          width: 267px;
          height: 52px;
          left: 442px;
          top: 561px;

          background: linear-gradient(225deg, #0057A8 17.19%, rgba(0, 87, 168, 0.28) 59.9%, #0057A8 76.56%), rgba(0, 87, 168, 0.67);
          box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
          border-radius: 5px;

      }
      #rebulm{
          margin-left:5%;
          margin-top:3%;
          
      }
      
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
@endsection

@section('content')
  <div class="card w-75"  style="margin-left:15%; position:absolute; margin-top:5%; background-color:rgb(36, 24, 24); color: white;">
    <div class="card-body">
      <h2 style="text-align: center;">Transaction</h2>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-md-3" style="background-color:black;">
          <img src="images/r5.jpg" style="margin-left:20px;">
          </div>
          <div class="col-md-9" style="background-color:#160000;">
            <h2>Judul Film</h2>
            <p>Sinopsis film :</p>
            <p>Pada Oktober 2016, diskusi telah dimulai untuk sekuel Spider-Man: Homecoming, dengan tanggal rilis yang diberikan kepada film sebelum akhir tahun. Holland dikonfirmasi untuk kembali pada bulan Juli 2017, dengan Watts dan penulis juga dikonfirmasi untuk kembali pada akhir tahun itu. Pada tahun 2018, Jackson dan Gyllenhaal bergabung sebagai pemeran sebagai Fury dan Mysterio, masing-masing, mengambil alih peran mentor yang diisi oleh Tony Stark dalam film pertama. Holland mengungkapkan judul sekuelnya sebelum syuting, yang dimulai pada Juli 2018 dan berlangsung di Inggris, Republik Ceko, Italia, dan wilayah metropolitan New York. Produksi dimulai pada Oktober 2018. Pemasaran untuk film berusaha menghindari mengungkapkan spoiler utama untuk Avengers: Endgame, sampai film itu dirilis pada April 2019.</p>
          </div>
        </div>
      </div>
      <br>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Paket</label>
        
        <?php 
        /* 
        
        if ($pilih == '1hari') {
            echo
            "<input type='text' class='form-control' id='formGroupExampleInput2' placeholder=
            'Sewa 1 hari' disabled>";
        }else if ($pilih == '3hari') { 
            echo 
            "<input type='text' class='form-control' id='formGroupExampleInput2' placeholder=
            'Sewa 3 hari' disabled>";
        }else if ($pilih == '1minggu') { 
            echo 
            "<input type='text' class='form-control' id='formGroupExampleInput2' placeholder=
            'Sewa 1 minggu' disabled>";
        }else if ($pilih == '2minggu') { 
            echo 
            "<input type='text' class='form-control' id='formGroupExampleInput2' placeholder=
            'Sewa 2 minggu' disabled>";
        }else if ($pilih == 'selamanya') { 
            echo " <input type='text' class='form-control' id='formGroupExampleInput2' placeholder=
            'Beli film' disabled>";
            } 
            */?>

      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Harga</label>
        <?php 
        /*
        if ($pilih == '1hari') {
            echo 
            "<input type='text' class='form-control' id='formGroupExampleInput2' placeholder=
            'Rp. 10.000' disabled>";
        }else if ($pilih == '3hari') { 
            echo " <input type='text' class='form-control' id='formGroupExampleInput2' placeholder=
            'RP. 15.000' disabled>";
        }else if ($pilih == '1minggu') { 
            echo " <input type='text' class='form-control' id='formGroupExampleInput2' placeholder=
            'RP. 25.000' disabled>";
        }else if ($pilih == '2minggu') { 
            echo " <input type='text' class='form-control' id='formGroupExampleInput2' placeholder=
            'RP. 40.000' disabled>";
        }else if ($pilih == 'selamanya') { 
            echo " <input type='text' class='form-control' id='formGroupExampleInput2' placeholder=
            'RP. 80.000' disabled>";
            }*/
          ?>
      
      </div>
      <div class="mb-3">
        <label for="formSelect" class="form-label">Metode Transaksi</label>
        <select class="form-select" id="formSelect" aria-label="Default select example" required>
            <option selected>Pilih metode</option>
            <option value="1">M-Banking</option>
            <option value="2">Go-Pay</option>
            <option value="2">Dana</option>
            <option value="2">Link aja</option>
            <option value="2">OVO</option>
          </select>
          
      </div>
    </div>
    <div class="mb-3" ><br>
      
      <button type="button" id="btn" href="" style="border: 0ch; margin-left: 38%;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Bayar</button>    

    </div>
  </div>
        </div>  
    </div>

  </div>  
  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: rgb(56, 56, 56); color: white;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pemberitahuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Selamat Transaksi Pembayaran Sukses</p>
        <p>Anda telah menyelesaikan pembayaran, Selamat Menyaksikan !</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/review"><button type="button" class="btn btn-primary">Lanjutkan</button></a>
      </div>
    </div>
  </div>
  </div>  
@endsection
