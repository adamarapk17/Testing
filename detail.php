<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail News</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
     <!-- CSS -->
     <link rel="stylesheet" href="main.css">
     <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
    <section class="navbar">
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

<section class="news">
   <div class="container">
   <?php
            
            $id_berita = (isset($_GET['id_berita']) ? $_GET['id_berita'] : '');
            include "koneksi.php";

            $sql = mysqli_query($koneksi, "select *from berita where id_berita = '".$id_berita."' ");
            while ($b = mysqli_fetch_array($sql)) {
                    extract($b);
             echo'   
     
                <div>
                    <h2 class="text-center" style="margin-top: 100px;">'.$judul.'</h2>
                </div>
                    <div>          
                        <img src="'.$gambar.'" class="mx-auto d-block mt-5" style="width: 700px">        
                            <div class="category bg-black mx-auto d-block" style="width: 700px">
                                <div class="d-flex justify-content-between">
                                    <div class="mr-auto px-3 py-2">
                                            <p class="font-footer text-white mb-0">'.$kategori.'</p>
                                    </div>
                                    <div class="px-3 py-2">
                                            <p class="font-footer text-white mb-0">'.$tanggal.'</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <p class="mt-5">'.$isi.'</p>
                            </div>
                ';
                    
            }
            ?>
        </div>   
   </div>
</section>
  
    <!-- Footer -->
<footer class="footer-1" style="margin-top: 100px;">
    <div class="container">
        <div class="d-flex flex-row justify-content-between pt-3 pb-0 text-white">
            <p class=" fs-14"><span style="color: #00A5CF;">Tech</span> Mayantara Asia</p>
            <p class="fs-14">Company Profile</p>
        </div>
    </div>
</footer>

<!-- Javascript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>