<link rel="stylesheet" href="tampilan.css">

<body>
<div class="bg"><center> <h1>ini kode booking anda</h1> <center></div>
<div class = "form">
  <center><h1>kode booking anda</h1></center>
  <br>
  <center><h3>20A8DT03</h3></center>
  <br>
<?php
if (isset($_POST["firstname"]))
        {
            $name_awal = $_POST["firstname"];
        }
if (isset($_POST["lastname"]))
        {
            $name_belakang = $_POST["lastname"];
        }
if (isset($_POST["email"]))
        {
            $email = $_POST["email"];
        }
        $password = $_POST['password']; 
        $password2 = $_POST['konfirmasipassword']; 
 
        if($name_awal==""){
            echo " firstname tidak boleh kosong ";
        }
        if($name_belakang==""){
            echo " lastname tidak boleh kosong ";
        }
        if($password==$password2){
            echo " nama = ". $name_awal  ." " . $name_belakang  ."<br>";  
            echo " email = ". $email ."";
            if (isset($_POST['gender'])) {
                $jenis_kelamin=$_POST['gender'];
                echo "<br>gender= ".$jenis_kelamin;
            }
            if (isset($_POST['tombolregistrasi'])) {
                $usia = $_POST['usia'];
                echo "<br>usia = $usia";
                }
                if (isset($_POST["penjelasan"]))
                {
                    $penjelasan = $_POST["penjelasan"];
                    echo "<br>Data diri = ". $penjelasan ."";  
                }
           }else{ 
            echo 'Maaf password anda tidak sama, silahkan coba lagi ' ; 
           }    
?>




</div>


  
</body>

