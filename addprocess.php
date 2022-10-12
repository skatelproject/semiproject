<?php
include("connection.php");

if(isset($_POST['simpan'])){

  $NIS = $_POST ['NIS'];
  $nama = $_POST ['Nama_lengkap'];
  $ttl  = $_POST ['tgl_Lahir'];
  $kelas = $_POST ['kelas'];
  $Jurusan = $_POST ['Jurusan'];
  $Email  = $_POST ['Email'];
  $Alamat = $_POST['Alamat'];


  $sql = "INSERT INTO data_siswa (NIS, Nama_lengkap, tgl_Lahir, kelas, Jurusan, Email, Alamat) 
  VALUE ('$NIS', '$nama', '$ttl', '$kelas','$Jurusan', '$Email', '$Alamat')";
  $query = mysqli_query($db, $sql);


  if ($query){
    header('Location: list.php?status=sukses');
  }else{
    header('Location: list.php/status=gagal');
  }
}else{
  die ('akses dilarang');
}
?>
