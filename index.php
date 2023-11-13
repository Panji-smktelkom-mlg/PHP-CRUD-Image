<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>

<head>
  <style type="text/css">
  body {
    background-image: url('5043226.jpg');
    background-size : cover;
    font-family: "Segoe UI", Arial, sans-serif;
  }

  * {
    font-family: "Trebuchet MS";
  }

  h1 {
    background-color: #a27331;
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    font-size: 60px;
    margin-top: 50px;
    text-shadow: 5px 5px 5px rgba(0, 0, 0, 0.2);
    animation: bounce 2s infinite;
    /* Aturan lainnya... */
    animation: bounce 2s infinite;
    width: fit-content;
    padding: 1rem 2rem;
    border-radius: 10px;

    @keyframes bounce {

      0%,
      20%,
      50%,
      80%,
      100% {
        transform: translateY(0);
      }

      40% {
        transform: translateY(-30px);
      }

      60% {
        transform: translateY(-15px);
      }
    }

  }

  @keyframes bounce {

    0%,
    20%,
    50%,
    80%,
    100% {
      transform: translateY(0);
    }

    40% {
      transform: translateY(-30px);
    }

    60% {
      transform: translateY(-15px);
    }
  }

  table {
    border: solid 3px black;
    border-collapse: collapse;
    border-spacing: 0;
    width: 80%;
    margin: 40px auto;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  table thead th {
    background-color: #a27331;
    border: solid 3px black;
    color: #fff;
    padding: 12px;
    text-align: center;
    text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
  }

  table tbody td {
    border: solid 3px black;
    color: black;
    padding: 30px;
    text-align: center;
    font-weight: 600;
    font-size: 20px;
  }

  table tbody tr {
    background-color: #dfc197;
  }

  a {
    background-size: cover;
    background-color: #a27331;
    color: white;
    padding: 20px;
    text-decoration: wavy;
    font-size: 20px;
    border-radius: 9px;
    transition: background-color 1.3s, transform 1.3s, box-shadow 1.3s;
  }

  a {
    background-color: #a27331;
    transform: scale(4.4);
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
  }
  </style>


</head>

<body>
  <center>
    <h1>Data Produk</h1>
    <center>
      <center>
        <br />
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Produk</th>
              <th>Dekripsi</th>
              <th>Harga Beli</th>
              <th>Harga Jual</th>
              <th>Gambar</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM produk ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?> <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $row['nama_produk']; ?></td>
              <td><?php echo substr($row['deskripsi'], 0, 20); ?>...</td>
              <td>Rp <?php echo number_format($row['harga_beli'],0,',','.'); ?></td>
              <td>Rp <?php echo $row['harga_jual']; ?></td>
              <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_produk']; ?>"
                  style="width: 120px;"></td>
              <td>
                <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a> |
                <a href="proses_hapus_produk.php?id=<?php echo $row['id']; ?>"
                  onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
              </td>
            </tr>

            <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
          </tbody>
        </table>
        <center><a href="tambah_produk.php">+ &nbsp; Tambah Produk</a>
        
</body>

</html>