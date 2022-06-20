<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- CSS -->
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
</head>

<body style="background-color:  #004E64;">
    <section class="navbar" style="margin-bottom: 100px">
        <div>
            <nav class="navbar navbar-1 navbar-expand-lg fixed-top shadow">
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
                                    <a class="nav-link active text-white" aria-current="page"
                                        href="/Testing/index.php">Home</a>
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

    <div class="card container">
        <div class="row mt-5">
            <div class="col">
                <form method="post" class=" d-flex">
                    <input type="date" name="tgl_awal" class="form-control" style="width: 300px; margin-left:20px;">
                    <input type="date" name="tgl_akhir" class="form-control" style="width: 300px; margin-left:20px;">
                    <button type="submit" name="filter_tgl" class="btn btn-primary" style="margin-left:20px; background-color: #004E64;;">Filter</button>
                </form>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover table-responsive table-bordered shadow " style="border-color:  #004E64">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th> 
                        <th scope="col">Email</th>
                        <th scope="col">Nomor Telepon</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Tanggal</th>
                        <th colspan="2">Action</th>
                    </tr>  
                </thead>

                <?php
                 include "../koneksi.php";

                if(isset($_POST['filter_tgl'])){
                    $awal =  mysqli_real_escape_string($koneksi, $_POST['tgl_awal']);
                    $akhir = mysqli_real_escape_string($koneksi, $_POST['tgl_akhir']);
                    $ambildata = mysqli_query($koneksi,"select * from pesan where tanggal BETWEEN '$awal'and '$akhir' ");
                }   else {
                    $ambildata = mysqli_query($koneksi,"select * from pesan");
                }

                $no=1;
                while ($tampil = mysqli_fetch_array($ambildata)) {
                    echo "
                    <tr>
                        <td>$no</td>
                        <td>$tampil[nama]</td>
                        <td>$tampil[email]</td>
                        <td>$tampil[no_telepon]</td>
                        <td>$tampil[pesan]</td>
                        <td>$tampil[tanggal]</td>
                        <td><a href=editpesan.php?id=$tampil[id_pesan]> Edit </a></td>
                        <td><a href='?id=$tampil[id_pesan]'> Delete </a></td>
                    </tr>";  
                    $no++;
                }
                ?>
            </table>

            <?php
            if(isset($_GET['id'])){
                mysqli_query($koneksi, "delete from pesan where id_pesan='$_GET[id]'");

                echo "Pesan telah terhapus";
                echo "<meta http-equiv=refresh content=2;URL='admin.php'>";
            }
            ?>
        </div>
    </div>
    </div>

    <footer class="footer-1" style="margin-top: 100px">
        <div class="container">
            <div class="d-flex flex-row justify-content-between pt-3 pb-0 text-white">
                <p class=" fs-14"><span style="color: #00A5CF;">Tech</span> Mayantara Asia</p>
                <p class="fs-14">Company Profile</p>
            </div>
        </div>
    </footer>
</body>

</html>