<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="tampilan.css">
</head>
<body>
<div class= "halaman">
  <br>
  <center><h1 class="teks_halaman">Booking Classic's Barbershop</h1><center>
  <br>
  </div>
<div class="input">
<center><h1 class="kode">kode booking anda</h1></center>
  <center><h3>20A8DT03</h3></center>
    <?php
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $telp = $_POST['telpon'];
        $gender = $_POST['gender'];
        $usia = $_POST['usia'];

        echo "Nama Costumer         : ".$firstname." ".$lastname."<br>"; 
        echo "No. Telpon            : ".$telp."<br>";
        echo "Gender                : ".$gender."<br>";
        echo "Usia                  : ".$usia."<br> <br>";
    ?>
</div>


 
</body>
</html>
