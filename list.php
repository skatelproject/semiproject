<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/list.css">
  <title>OP/Data List</title>
</head>

<body>
  <nav>
    <label class="logo">OP</label>
    <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="list.php">List Data Siswa</a></li>
      <li><a href="add.php">Add Data Siswa</a></li>
    </ul>
  </nav>
  <!--se-->
   <form action="list.php" method="get">
  <div class="search">
    <input type="text" name="cari" placeholder="Type..">
    <input type="submit" value="cari">
  </div>
   </form>
  <?php
  if (isset($_GET['cari'])){
  $cari = $_GET['cari'];
  }
  ?>
  <!--table-->
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>NIS</th>
          <th>Nama</th>
          <th>TTL</th>
          <th>Kelas</th>
          <th>Jurusan</th>
          <th>Email</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php
          if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          $query = "SELECT * FROM data_siswa WHERE NIS like '%$cari%' OR Nama_lengkap like '%$cari%' or tgl_Lahir like '%$cari%' or kelas like '%$cari%' or Jurusan like '%$cari%'  or Email like '%$cari%'  or Alamat like '%$cari%'";
          }else{
          $query = "SELECT * FROM data_siswa"; 
          
          }
          $query = mysqli_query($db, $query);
          while ($murid = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>", $murid["NIS"]. "</td>";
            echo "<td>", $murid["Nama_lengkap"]. "</td>";
            echo "<td>", $murid["tgl_Lahir"]. "</td>";
            echo "<td>", $murid["kelas"]. "</td>";
            echo "<td>", $murid["Jurusan"]. "</td>";
            echo "<td>", $murid["Email"]. "</td>";
            echo "<td>", $murid["Alamat"]. "</td>";
          
            echo "<td>";
            echo "<a href='formedit.php?id=".$murid['id'] . "'>EDIT </a> ";
            echo "<a href='delete.php?id=".$murid['id'] . "'> Hapus</a> ";
            echo "</td>";
          }
          ?>
      </tbody>
    </table>
  </div>
</body>

</html>