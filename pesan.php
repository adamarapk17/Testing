<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
     <!-- CSS -->
     <link rel="stylesheet" href="main.css">
     <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
<section class="pesan">
    <section class="navbar" style="margin-bottom: 100px">
        <div>
            <nav class="navbar navbar-1 navbar-expand-lg fixed-top shadow ">
                <div class="container">
                    <a class="navbar-brand fs-3 text-white fw-bold" href="#/"> 
                        <span style="color: #00A5CF;">Tech</span> Mayantara Asia
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                       <div class="p-2 ">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-white" aria-current="page" href="/Testing/index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-white" href="index.php#tentang">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active text-white" href="index.php#kontak">Kontak</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link active text-white" href="index.php#news">News</a>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link active text-white" href="/Testing/pesan.php">Pesan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>        
        </div>
    </section>


   <div class="container"> 
    <div class="card shadow mb-5" >
        <form action="" method="post">
           <div class="container"> 
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="nama" name="nama">
                    <label for="nama" placeholder="Masukan nama anda" class="form-label">Nama</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email">
                <label for="email" class="form-label">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="nomor" name="no_telepon">
                <label for="nomor" class="form-label">Nomor telepon</label>
            </div>
            <div class="form-floating form-area mb-3">
               <textarea class="form-control" placeholder="Silahkan tulis pesan disini" id="pesan" name="pesan" style="height: 200px"></textarea>
               <label for="pesan" class="form-label">Pesan</label>
            </div>
            <input type="hidden" name="tanggal" value="<?php echo date("d-m-Y"); ?>">
            <button type="submit" class="btn btn-primary mb-5" style="background-color: #004E64" value="simpan" name="kirim">Kirim</button>
        </div>
        </form> 
    </div>
</div>

<?php
    include "koneksi.php";

    if(isset($_POST['kirim'])){
        mysqli_query($koneksi, "insert into pesan set
        nama = '$_POST[nama]',
        email = '$_POST[email]',
        no_telepon = '$_POST[no_telepon]',
        pesan = '$_POST[pesan]',
        tanggal = sysdate()
        ");
        echo "Pesan telah terkirim";
    }
?>
    <!-- Footer -->
<footer class="footer-1" >
    <div class="container">
        <div class="d-flex flex-row justify-content-between pt-3 pb-0 text-white">
            <p class=" fs-14"><span style="color: #00A5CF;">Tech</span> Mayantara Asia</p>
            <p class="fs-14">Company Profile</p>
        </div>
    </div>
</footer>
</section>
<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>