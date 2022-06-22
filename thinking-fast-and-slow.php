<?php 
session_start();
date_default_timezone_set('Asia/Jakarta');

include "config.php";
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
} else {
    if(isset($_POST['thinking-fast-and-slow'])) {
        $nama = $_POST['nama'];
        $komentar = $_POST['komentar'];
        $tanggal = $_POST['tanggal'];
        $sql = "INSERT INTO thinking VALUES (null,'$nama','$komentar','$tanggal')";
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
                    <a class="nav-link active" href="buku.php">Buku</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="anggota.php">Anggota</a>
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

    <!-- Komentar -->
    <section class="container my-5">
        <div class="h5">
            Komentar <hr>
        </div>
        <div class="bg-light p-2">
        <?php
        $sql = "SELECT * FROM thinking ORDER BY id DESC";
        $result = mysqli_query($conn, $sql); 
        while($row = mysqli_fetch_array($result)){
            echo "<div class='text-primary h5'>".$row['nama']."</div>
            <div class='text-secondary'>".$row['komentar']."</div>
            <div class='text-muted text-end fst-italic'>".$row['tanggal']."</div>";
        }
        ?>
        </div>
    </section>
    <!-- Akhir Komentar -->

    <!-- Form -->
    <section class="container">
        <div class="row mb-5">
            <div class="col-md-8">
            <form href="thinking-fast-and-slow.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <textarea name="komentar" id="komentar" cols="30" rows="10" class="form-control text-muted">Komentar</textarea>
                </div>
                <div>
                    <input type="hidden" name="tanggal" value="<?php echo date("d-m-Y (h:i)") ?>">
                </div>
                <button type="submit" class="btn btn-primary" name="thinking-fast-and-slow">Posting Review</button>
            </form>
            </div>
            <div class="col-md-1">
            </div>
            <div class="col-md-3 text-muted">
                Anda dapat meninggalkan komentar Anda tentang buku dan berbagi pengalaman Anda. Pembaca lain tertarik untuk mengetahui pendapat Anda tentang buku yang telah Anda baca. Terlepas Anda suka atau tidak buku itu, jika Anda menceritakan secara jujur dan mendetil, orang dapat menemukan buku baru buat diri mereka, buku yang sesuai dengan minatnya.
            </div>
        </div>
    </section>
    <!-- Akhir Form -->

    <!-- Footer -->
    <section class="bg-secondary py-3">
      <div class="container text-light text-center">
        Copyright © 2022 Fery Anuar | 2010631250046
      </div>
    </section>
    <!-- Akhir Komentar -->
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>

<?php } ?>