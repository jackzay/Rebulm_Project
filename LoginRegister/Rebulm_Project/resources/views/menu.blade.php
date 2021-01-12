
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(images/bg.png) ;
            background-size: cover;
            padding-bottom: 100px;
            
            
        

        }
        /* Rebulm */
        #btn{
            /* Rectangle 23 */

width: 267px;
height: 52px;
left: 442px;
top: 561px;
text-align: center;

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
</head>
<body >
<nav>
<div id="rebulm">
    <img src="images/logo.png">
        
</div>    
</nav><br> 
<div class="container">   
<form action="/transaksi" method = "post">
    <h1 style="text-align: center; color: aliceblue ;">Menu Paket</h1>     
    <br>           
<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card" style="background-color: rgb(36, 24, 24); color: white;">
        
        <div class="card-body"  >
          <h5 class="card-title" style="text-align: center;">Sewa 1 Hari</h5>
          <br>
          <p class="card-text" style="color: gray;">Anda dapat menyaksikan film yang anda pilih selama 1 hari.</p>
          <hr size="5px">
          <h6>Rp. 10.000</h6>
        </div>
        <div class="mb-3" name="pkt"><br>
        <button type ="submit" style="border: 0ch; margin-left: 30%;" class="btn btn-primary" id="btn" name="book" value = "1hari" href="/transaksi">Pilih Paket</button>
        </div>
    </div>
    </div>
    <div class="col">
      <div class="card" style="background-color: rgb(36, 24, 24); color: white;">
       
        <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Sewa 3 Hari</h5>
          <br>
          <p class="card-text" style="color: gray;">Anda dapat menyaksikan film yang anda pilih selama 3 hari.</p>
          <hr size="5px">
          <h6>Rp. 15.000</h6>
        </div>
        <div class="mb-3" ><br>
        <button type ="submit" style="border: 0ch; margin-left: 30%;" class="btn btn-primary" id="btn" name="book" value = "3hari" href="transaksi.php">Pilih Paket</button>
           
          </div>
    </div>
    </div>
    <div class="col">
      <div class="card" style="background-color: rgb(36, 24, 24); color: white;">
        <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Sewa 1 Minggu</h5>
          <br>
          <p class="card-text" style="color: gray;">Anda dapat menyaksikan film yang anda pilih selama 1 minggu.</p>
          <hr size="5px">
          <h6>Rp. 25.000</h6></div>
        <div class="mb-3" ><br>
        <button type ="submit" style="border: 0ch; margin-left: 30%;" class="btn btn-primary" id="btn" name="book" value = "1minggu" href="transaksi.php">Pilih Paket</button>    
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="background-color: rgb(36, 24, 24); color: white;">  
        <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Sewa 2 Minggu</h5>
          <br>
          <p class="card-text" style="color: gray;">Anda dapat menyaksikan film yang anda pilih selama 2 minggu.</p>
          <hr size="5px">
          <h6>Rp. 40.000</h6>
        </div>
        <div class="mb-3" ><br>
        <button type ="submit" style="border: 0ch; margin-left: 30%;" class="btn btn-primary" id="btn" name="book" value = "2minggu" href="transaksi.php">Pilih Paket</button>
            
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="background-color: rgb(36, 24, 24); color: white;">  
        <div class="card-body">
          <h5 class="card-title" style="text-align: center;">Beli Film</h5>
          <br>
          <p class="card-text" style="color: gray;">Anda dapat menyaksikan film yang anda pilih selamanya.</p>
          <hr size="5px">
          <h6>Rp. 80.000</h6>
        </div>
        <div class="mb-3" ><br>
        <button type ="submit" style="border: 0ch; margin-left: 30%;" class="btn btn-primary" id="btn" name="book" value = "selamanya" href="transaksi.php">Pilih Paket</button>
        
        </div>
      </div>
    </div>
  </div>
      </form>
  </div>
 
</body>
</html>