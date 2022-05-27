<!DOCTYPE html> 

<html lang="en"> 

<head> 

  <meta charset="UTF-8"> 

  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <title>WeddingTools</title> 

  <link rel="stylesheet" href="confirm-style.css"> 

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

</head> 

<body> 

<nav class="navbar navbar-dark bg-dark"> 

    <a class="navbar-brand" href="#"> 

      <img src="https://img.lovepik.com/original_origin_pic/18/09/26/0edb0294807f36eb33d7c61466cf31b3.png_wh860.png" width="30" height="30" class="d-inline-block align-top" alt=""> 

      WeddingTools 

    </a> 

  </nav> 

  <div class="wrapper"> 

    <div class="container"> 

      <h2 class="text-center" style="margin: 20px 0;">Pemesanan Dikonfirmasi</h2> 

      <p>Dengan senang hati kami informasikan bahwa permintaan pemesanan Anda telah diterima.</p> 

      <p style="margin-top: 7px;">Pemesanan Anda telah dikonfirmasi.</p> 

      <h3 style="margin-top: 20px; margin-bottom: 12px;">Detail Pemesanan</h3> 

      <div class="row"> 

        <div class="col"> 

            <p class="p-top">ID Pemesanan:</p> 

            <p class="p-bottom"> 

              <?php 

                $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 

                $numbers = '0123456789'; 

                $charactersLength = strlen($characters); 

                $numbersLength = strlen($numbers); 

                $randomString = ''; 

                for ($i = 0; $i < 3; $i++) { 

                    $randomString .= $characters[rand(0, $charactersLength - 1)]; 

                } 

                for ($i = 0; $i < 2; $i++) { 

                  $randomString .= $numbers[rand(0, $numbersLength - 1)]; 

                } 

                echo $randomString; 

              ?> 

            </p> 

          </div> 

        <div class="col"> 

          <p class="p-top"> Dipesan oleh:</p> 

          <p class="p-bottom"> 

            <?php 

              echo $firstname = $_POST['first-name']; 

              echo ' '; 

              echo $firstname = $_POST['last-name']; 

            ?> 

          </p> 

        </div> 

        <div class="col"> 

        <p class="p-top">Wedding Type : </p> 

          <p class="p-bottom"> 

            <?php 

              $pakettype = $_POST['paket-type']; 

              if ($pakettype == 'paket1') { 

                echo 'Full Wedding Package'; 

                $price = 14800000; 

              } else if($pakettype == 'paket2') { 

                echo 'Wedding Venue Package'; 

                $price = 17000000; 

              } else if($pakettype == 'paket3') { 

                echo 'Basic Wedding Package'; 

                $price = 20900000; 

              } else if($pakettype == 'paket4') { 

                echo 'Intimate Wedding Package'; 

                $price = 38000000; 

              } 

            ?> 

          </p> 

        </div> 

        <div class="col"> 

          <p class="p-top">MC:</p> 

          <p class="p-bottom"> 

            <?php  

              $mc = $_POST['exampleRadios']; 

              if ($mc == 'option1') { 

                echo 'Menggunakan MC'; 

                $price += 750000; 

              } else if($mc == 'option2') { 

                echo 'Tidak Menggunakan MC'; 

              } 

            ?> 

          </p> 

        </div> 

        <div class="col"> 

          <p class="p-top">Dipesan untuk: </p> 

          <p class="p-bottom"> 

            <?php 

              $booktime = $_POST['book-time']; 

              switch ($booktime) { 

                case 1: 

                  echo '1 hari'; 

                  break; 

                case 2: 

                  echo '2 hari'; 

                  $price *= 2; 

                  break; 
      

              } 

            ?> 

          </p> 

        </div> 

        <div class="col no-border"> 

        <p class="p-top">Total:</p> 

          <p class="p-bottom"> 

            <?php 

            $price = number_format($price , 0, ',', '.'); 

              echo "Rp {$price}"; 

            ?> 

          </p> 

        </div> 

      </div> 

      <p style="margin-top: 20px;">Detail pemesanan telah dikirim ke email Anda: <?php echo $email = $_POST['email']; ?></p> 

    </div> 

  </div> 

</body> 

<?php 

	//class pendefinisi method
	class pendefinisi {

		public function staysafe (string $noun1, string $noun2) {
	  	echo "Terima kasih atas pesanan $noun1 dan $noun2";
		}

	}

	//$objek merupakan instance dari class pendefinisi
	$objek = new pendefinisi(); 
	
// OOP pada PHP menggunakan -> bukan . 
  echo "<hr>";
	$objek -> staysafe('anda', 'pesanan anda akan segera kami proses') ;

?>

<!DOCTYPE html> 

<html lang="en"> 

<head> 

  <meta charset="UTF-8"> 

  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <title>WeddingTools.com</title> 

  <link rel="stylesheet" href="confirm-style.css"> 

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 

</head> 

<body> 

<nav class="navbar navbar-blue bg-blue"> 

    <a class="navbar-brand" href="#"> 

      <img src="data:image/png;base64,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" width="30" height="30" class="d-inline-block align-top" alt="">

       Contact Person : 0895324082372 (Kumala Dewi)

    </a> 

  </nav> 

  <div class="wrapper">