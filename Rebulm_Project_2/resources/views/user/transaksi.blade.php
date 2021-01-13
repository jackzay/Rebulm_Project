@extends('layouts.user')

@section('head')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
      body{
          background-image: url({{ URL::asset('images/bg.png') }}) ;
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
      <form action="/home/{{$movie->id_transaksi}}/transaction" method="POST">
        @csrf
        {{-- @method('PUT') --}}
        <h2 style="text-align: center;">Transaction</h2>
        <br>
        <div class="container">
          <div class="row">

            <div class="col-md-3" style="background-color:black;">
            <img src="{{asset('images/'. $movie->movies->img_path)}}" style=" width:250px">
            </div>
            <div class="col-md-9" style="background-color:#160000;">
              <h2>{{$movie->movies->movie_title}}</h2>
              <p>Sinopsis film :</p>
              <p>{{$movie->movies->synopsis}}</p>
            </div>
          </div>
        </div>
        <br>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Paket</label>
          <input type="text" class="form-control" name="paket" value="{{$movie->paket}}">
          <input type="hidden" name="id_transaction" value="{{$movie->id_transaksi}}">
          <input type="hidden" name="id_movie" value="{{$movie->id_movie}}">
          <input type="hidden" name="id_user" value="{{$movie->id_user}}">
        
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label">Harga</label>
          <input type="text" class="form-control" name="total_price" value="{{$movie->total_price}}">
      
        </div>
        <div class="mb-3">
          <label for="formSelect" class="form-label">Metode Transaksi</label>
          <select class="form-select" id="formSelect" name="payment_method" aria-label="Default select example" required>
              <option selected>--Pilih metode--</option>
              <option value="M-Banking">M-Banking</option>
              <option value="Go-Pay">Go-Pay</option>
              <option value="Dana">Dana</option>
              <option value="Link aja">Link aja</option>
              <option value="OVO">OVO</option>
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
        <button type="submit" class="btn btn-primary">Lanjutkan</button>
      </div>
    </div>
  </div>
  </div>
</form>  
@endsection
