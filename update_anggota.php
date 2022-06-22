<?php 
session_start();

include "config.php";
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
} else {
    if(isset($_POST['update_anggota'])){	
      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $kontak = $_POST['kontak'];
      $result = mysqli_query($conn, "UPDATE anggota SET nama='$nama',alamat='$alamat',kontak='$kontak' WHERE id='$id'");
      header("Location: anggota.php");
    }
    
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM anggota WHERE id='$id'"); 
    while($row = mysqli_fetch_array($result)){
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $kontak = $row['kontak'];
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
                <form action="update_anggota.php" method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Anggota</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $nama; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $alamat; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="kontak" class="form-label">Kontak</label>
                        <input type="text" name="kontak" id="kontak" class="form-control" value="<?php echo $kontak; ?>">
                    </div>
                    <div>
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                        <button type="submit" name="update_anggota" class="btn btn-primary">Buat</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8 text-center">
                <img src="img/login.png" alt="Ilustrasi Perpustakaan" width="600">
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