<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "biodata_omegaproject";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (!$db) {
  die ("Failed : ". mysqli_connect_error());
}

?>