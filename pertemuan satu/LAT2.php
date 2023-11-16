<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>toko wayang kami</title>
  </head>
  <body>
    <div class="container">
    <h1>toko wayang kami</h1>
    <div>program aplikasi sederhana untuk menghitung penjualan barang toko wayang kami</div><br>
    <form method="POST">
        <div class="form-group">
            <label>Nama Barang</label>
            <input name="namabarang" class="form-control">
</div>
        <div class="form-group">
            <label>Harga Barang</label>
            <input name="hargabarang" class="form-control">
</div>
<div class="form-group">
    <label>jumlah barang</label>
    <input name="jumlahbarang" class="form-control">
</div>
<div class="form-group">
    <label>diskon barang</label>
    <input name="diskonbarang" class="form-control">
</div>
<button type="submit" name="hitung" class="btn btn-primary">hitung</button>
</form>
<hr>
<?php
if(isset($_POST['hitung'])){
    $nama = $_POST['namabarang'];
    $harga = $_POST['hargabarang'];
    $jumlah = $_POST['jumlahbarang'];
    $diskon = $_POST['diskonbarang'];
    $hasil = $harga * $jumlah;
    $total = $hasil * $diskon/100;
    
    echo"
    <h3>jumlah yang harus dibayar</h3>
    <div>Nama Barang : $nama</div>
    <div>harga barang : $harga</div>
    <div>jumlah barang : $jumlah<div>
    <div>Diskon : $diskon</div>
    <h3>Rp. $hasil</h3>
    ";
}
    ?>  
  </body>
</html>
