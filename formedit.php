<?php
include("connection.php");

if (!isset($_GET['id'])){
  header('Location: list.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM data_siswa WHERE id=$id";
$query = mysqli_query ($db, $sql);
$murid = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/formedit.css">
  <title>OP/ edit</title>
</head>
<body>
  <!--nav-->
  <nav>
    <label class="logo">OP</label>
    <ul>
      <li><a href="list.php">Back</a></li>
    </ul>
  </nav>

  <!-- edit -->
  <div class="circlesatu"></div>
  <div class="circledua"></div>
  <div class="circletiga"></div>


  <form method="POST" action="editprocess.php">
    <div class="loginbox">
      <h1>Edit as u like</h1>
      <div class="textbox">
        <input type="hidden" name="id" value="<?php echo $murid['id']?>">
        <input type="text" name="NIS" placeholder="NIS" value="<?php echo $murid['NIS']?>" required>
      </div>

      <div class="textbox">
        <input type="text" name="Nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $murid['Nama_lengkap']?>" required>
      </div>

      <div class="textbox">
        <input type="date" name="tgl_Lahir" placeholder="Tanggal Lahir" value="<?php echo $murid['tgl_Lahir']?>" required>
      </div>

      <div>
        <select name="kelas" required>
          <option disabled selected hidden><?php echo $murid['kelas']?></option>
          <option>X</option>
          <option>XI</option>
          <option>XII</option>
        </select>
      </div>

      <div>
        <select name="Jurusan" required>
          <option disabled selected hidden><?php echo $murid['Jurusan']?></option>
          <option>TJAT</option>
          <option>TKJ</option>
          <option>RPL</option>
          <option>MM</option>
          <option>DKV</option>
          <option>Animasi</option>
        </select>
      </div>

      <div class="textbox">
        <input type="text" name="Email" placeholder="Email" value="<?php echo $murid['Email']?>" required>
      </div>

      <div class="textbox">
        <input type="textarea" name="Alamat" placeholder="Alamat" value="<?php echo $murid['Alamat']?>" required>
      </div>

      <input class="button" type="submit" name="submit" value="Confirm">
    </div>
  </form>
</body>
</html>