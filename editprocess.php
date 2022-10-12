<?php

include("connection.php");

if(isset($_POST['submit'])){

    $id  = $_POST ['id'];
    $NIS = $_POST ['NIS'];
    $nama = $_POST ['Nama_lengkap'];
    $ttl  = $_POST ['tgl_Lahir'];
    $kelas = $_POST ['kelas'];
    $Jurusan = $_POST ['Jurusan'];
    $Email  = $_POST ['Email'];
    $Alamat = $_POST['Alamat'];

    $sql = "UPDATE data_siswa SET id='$id', NIS='$NIS', Nama_lengkap='$nama', tgl_Lahir='$ttl', kelas='$kelas', Jurusan='$Jurusan', Email='$Email', Alamat='$Alamat' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if($query){
      header('Location: list.php');
    } else {
      die("gagal edit");
    }
}  else {
  die("Akses dilarang");
}
?>