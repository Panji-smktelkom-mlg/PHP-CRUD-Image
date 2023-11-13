<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>

<head>
  <title>CRUD Produk dengan gambar - Gilacoding</title>
  <style type="text/css">
  * {
    font-family: "Trebuchet MS";
  }

  body {
    background-image: url('5043226.jpg');
    background-size : cover;
  }


  h1 {
    background-color: #a27331;
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    font-size: 30px;
    margin-top: 150px;
    text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);
    width: fit-content;
    padding: 1rem 2rem;
    border-radius: 10px;

  }

  button {
    background-color: #a27331;
    color: #fff;
    padding: 12px;
    text-decoration: wavy;
    font-size: 30px;
    border-radius: 10px;
    margin-top: 40px;
    cursor: pointer;
  }

  label {
    margin-top: 20px;
    float: left;
    text-align: left;
    width: 100%;
  }

  input {
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    background: #f8f8f8;
    border: 4px solid #ccc;
    outline-color: salmon;
  }

  div {
    width: 100%;
    height: auto;
  }

  .base {
    width: 400px;
    height: auto;
    padding: 25px;
    margin-left: auto;
    margin-right: auto;
    background: #ededed;
  }
  </style>
</head>

<body>
  <center>
    <h1>Tambah Produk</h1>
    <center>
      <form method="POST" action="proses_tambah_produk.php" enctype="multipart/form-data">
        <section class="base">
          <div>
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" autofocus="" required="" />
          </div>
          <div>
            <label>Deskripsi</label>
            <input type="text" name="deskripsi" />
          </div>
          <div>
            <label>Harga Beli</label>
            <input type="text" name="harga_beli" required="" />
          </div>
          <div>
            <label>Harga Jual</label>
            <input type="text" name="harga_jual" required="" />
          </div>
          <div>
            <label>Gambar Produk</label>
            <input type="file" name="gambar_produk" required="" />
          </div>
          <div>
            <button type="submit">Simpan Produk</button>
          </div>
        </section>
      </form>
</body>

</html>