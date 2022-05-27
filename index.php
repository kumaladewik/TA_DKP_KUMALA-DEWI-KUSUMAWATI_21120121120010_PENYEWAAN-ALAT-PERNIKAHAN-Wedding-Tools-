<!DOCTYPE html> 

<html lang="en"> 

<head> 

  <meta charset="UTF-8"> 

  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <title>WeddingTools.com</title> 

  <link rel="stylesheet" href="style.css"> 

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

</head> 

<body> 

  <nav class="navbar navbar-dark bg-dark"> 

    <a class="navbar-brand" href="#"> 

      <img src="https://img.lovepik.com/original_origin_pic/18/09/26/0edb0294807f36eb33d7c61466cf31b3.png_wh860.png" width="30" height="30" class="d-inline-block align-top" alt=""> 

      WeddingTools.com 

    </a> 

  </nav> 

  <div class="wrapper"> 

    <div class="container"> 

      <h2 style="margin: 12px 0;">Pilih paket terbaik yang Anda inginkan!</h2> 

      <form class="form" action="confirm.php" method="post" id="form"> 

        <label for="exampeInputName">Masukkan nama Anda</label> 

        <div class="row"> 

          <br> 

          <div class="col"> 

            <input type="text" class="form-control" placeholder="First name" name="first-name" required> 

          </div> 

          <div class="col"> 

            <input type="text" class="form-control" placeholder="Last name" name="last-name" required> 

          </div> 

        </div> 

        <div class="form-group"> 

          <label class="form-label" for="exampleInputEmail1">Masukkan alamat email Anda</label> 
           <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan email Anda" required> 
          <small id="emailHelp" class="form-text text-muted">Kami tidak akan pernah membagikan email Anda kepada orang lain..</small> 

        </div> 

        <p>Daftar harga paket yang tersedia</p> 

        <table class="table table-sm"> 

          <thead> 

            <tr> 

              <th scope="col">#</th> 

              <th scope="col">Paket pernikahan</th> 

              <th scope="col">Harga </th> 

            </tr> 

          </thead> 

          <tbody> 

            <tr> 

              <th scope="row">1</th> 

              <td>Full Wedding Package</td> 

              <td>Rp 14.800.000</td> 

            </tr> 

            <tr> 

              <th scope="row">2</th> 

              <td>Wedding Venue Package</td> 

              <td>Rp 17.000.000</td> 

            </tr> 

            <tr> 

              <th scope="row">3</th> 

              <td>Basic Wedding Package</td> 

              <td>Rp 20.900.000</td> 

            </tr> 

            <tr> 

              <th scope="row">4</th> 

              <td>Intimate Wedding Package</td> 

              <td>Rp 38.000.000</td> 

            </tr> 

          </tbody> 

        </table> 

        <div class="form-group"> 

          <label for="exampleFormControlSelect1">Pilih yang Anda inginkan</label> 

          <select class="form-control" id="exampleFormControlSelect1" name="paket-type"> 

            <option value="paket1" selected>Full Wedding Package</option> 

            <option value="paket2">Wedding Venue Package</option> 

            <option value="paket3">Basic Wedding Package</option> 

            <option value="paket4">Intimate Wedding Package</option> 

          </select> 

        </div> 

        <div class="form-check form-check-inline"> 

          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked> 

          <label class="form-check-label" for="exampleRadios1"> 

            Menggunakan MC

          </label> 

        </div> 

        <div class="form-check form-check-inline"> 

          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"> 

          <label class="form-check-label" for="exampleRadios2"> 

            Tidak Menggunakan MC

          </label> 

        </div> 

        <small id="radioHelp" class="form-text text-muted">Biaya tambahan jika menggunakan MC: Rp 750.000</small> 

        <div class="form-group"> 

          <label class="form-label" for="exampleFormControlSelect2">Masa Sewa (hari)</label> 

          <select multiple class="form-control" name="book-time" required> 

            <option value="1">1</option> 

            <option value="2">2</option> 


          </select> 

        </div> 

        <div class="custom-control custom-checkbox"> 

          <input type="checkbox" class="custom-control-input" id="customCheck1" required> 

          <label class="form-label custom-control-label" for="customCheck1">Saya setuju dengan syarat dan ketentuan yang berlaku</label> 

        </div> 

        <button class="btn btn-outline-dark btn-block" type="submit" value="Submit" name="Submit" style="margin: 12px 0">Submit</button> 

      </form> 

    </div> 

  </div> 

</body> 

</html>

<?php
include("userService.php");

$user = new userService($_POST['email'], $_POST['password']);

if($get_user = $user->login()) {
    echo 'Selamat Datang '.$user->getRole();
    echo ', Masuk Sebagai email: '.$get_user;
} else {
    echo 'Invalid Login';
}
