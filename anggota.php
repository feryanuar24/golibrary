<?php 
session_start();

include "config.php";
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
} else {
    if(isset($_POST['anggota'])) {
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $kontak = $_POST['kontak'];
        $sql = "INSERT INTO anggota VALUES (null,'$nama','$alamat','$kontak')";
        $result = mysqli_query($conn, $sql);
    } else {
        echo"";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoLibrary</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <!-- NavBar -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-dark shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">GoLibrary</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="buku.php">Buku</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="anggota.php">Anggota</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Akhir NavBar -->

    <!-- Buku -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-4">
                <form action="anggota.php" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Anggota</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak</label>
                        <input type="text" name="kontak" id="kontak" class="form-control">
                    </div>
                    <div>
                        <button type="submit" name="anggota" class="btn btn-primary">Buat</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table table-responsive table-light">
                    <thead class="text-center">
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kontak</th>
                        <th>Opsi</th>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT * FROM anggota ORDER BY id DESC";
                    $result = mysqli_query($conn, $sql); 
                    while($row = mysqli_fetch_array($result)){
                        echo"<tr>
                        <td>".$row['nama']."</td>
                        <td>".$row['alamat']."</td>
                        <td>".$row['kontak']."</td>
                        <td class='text-center'>
                            <a href='update_anggota.php?id=$row[id]' class='btn btn-warning me-md-1 my-1'>Perbarui</a>
                            <a href='delete_anggota.php?id=$row[id]' class='btn btn-danger my-1'>Hapus</a>
                        </td>
                        </tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- Akhir Buku -->

    <!-- Footer -->
    <section class="bg-secondary py-3">
      <div class="container text-light text-center">
        Copyright © 2022 Fery Anuar | 2010631250046
      </div>
    </section>
    <!-- Akhir Footer -->
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>

<?php } ?>