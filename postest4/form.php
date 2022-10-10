<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="tampilan.css">
</head>
<body>
<div class= "halaman">
  <br>
  <center><h1 class="teks_halaman">Booking Classic's Barbershop</h1><center></div>

<div class="input">
<form action="tampil.php" method="post">
  <table>
    <tr>
      <td> First Name</td>
      <td> : </td>
      <td><input type="text" name="firstname" required= "Firstname"><br></td>
    </tr>
    <tr>
      <td>Last Name</td>
      <td>:</td>
      <td><input type="text" name="lastname"required= "Lastname"><br></td>
    </tr>
    <tr>
      <td>No. Telpon</td>
      <td>:</td>
      <td><input type="text" name="telpon" required= "No. Telpon"><br></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>:</td>
      <td><input type="radio" name="gender" value="Laki-laki"> Laki-laki<br>
      <input type="radio" name="gender" value="Perempuan"> Perempuan</td>
    </tr>
    <tr>
      <td>Usia</td>
      <td>:</td>
      <td><select name="usia" > 
      <option value="Dewasa">Dewasa</option>
      <option value="Anak-anak">Anak-anak</option>
      </select></td>
      <br>
    </tr>
    <tr>
      <td><input type="submit" name="tombolregistrasi" value="Booking"> <br></td>
    </tr>
  </table>
        
   
</form>

</div>


 
</body>
</html>
