<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/add.css">
  <title>OP/Add Data Siswa</title>
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

  <!--aksesoris-->
  <div class="circlesatu"></div>
  <div class="circledua"></div>
  <div class="circletiga"></div>
  <div class="circleempat"></div>

  <!--from-->
  <form method="POST" action="addprocess.php">
    <div class="loginbox">
      <h1>Tambah Data</h1>
      <div class="textbox">
        <input type="text" name="NIS" placeholder="NIS" required>
      </div>

      <div class="textbox">
        <input type="text" name="Nama_lengkap" placeholder="Nama Lengkap" required>
      </div>

      <div class="textbox">
        <input type="date" name="tgl_Lahir" placeholder="Tanggal Lahir" required>
      </div>

      <div>
        <select name="kelas" required>
          <option disabled selected hidden>Kelas</option>
          <option>X</option>
          <option>XI</option>
          <option>XII</option>
        </select>
      </div>

      <div>
        <select name="Jurusan" required>
          <option disabled selected hidden>Jurusan</option>
          <option>TJAT</option>
          <option>TKJ</option>
          <option>RPL</option>
          <option>MM</option>
          <option>DKV</option>
          <option>Animasi</option>
        </select>
      </div>

      <div class="textbox">
        <input type="text" name="Email" placeholder="Email" required>
      </div>

      <div class="textbox">
        <input type="textarea" name="Alamat" placeholder="Alamat" required>
      </div>
      <input class="button " type="submit" name="simpan" value="SIMPAN">
    </div>
  </form>
</body>

</html>