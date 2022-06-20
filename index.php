<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Landing page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>

<body>
    <section class="navbar">
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
                                    <a class="nav-link active text-white" href="#tentang">Tentang Kami</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-white" href="#kontak">Kontak</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active text-white" href="#news">News</a>
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

    <section class="carousel">
        <div>
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.pexels.com/photos/267507/pexels-photo-267507.jpeg?cs=srgb&dl=pexels-pixabay-267507.jpg&fm=jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.goodnewsfromindonesia.id/uploads/post/large-small-group-business-meeting-ee31f775ae7ed68aa9e8b50c85a5441b.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/3184632/pexels-photo-3184632.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </section>

    <section class="industry">
        <div>
            <div class="container text-white">
                <h1 class="text-center pt-1 pb-3">Industry</h1>
                <div class="box">
                    <div class="col-4">
                        <div class="icon">
                            <i class="fa-solid fa-desktop"></i>
                        </div>
                        <h4>Computer Systems Design</h4>
                    </div>
                    <div class="col-4">
                        <div class="icon">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <h4>Professional Scientific</h4>
                    </div>
                    <div class="col-4">
                        <div class="icon">
                            <i class="fa-solid fa-database fa-shake"></i>
                        </div>
                        <h4>Technical Services </h4>
                    </div>
                    <div class="col-4">
                        <div class="icon">
                            <i class="fa-solid fa-server"></i>
                        </div>
                        <h4>Computer related consulting services</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="tentang" class="card container card-2" style="margin-top: 50px;">
        <h1 class="text-1">Tentang <span style="color: #00A5CF;">Kami</span></h1>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <h3><span style="color: #00A5CF;">Tech</span> Mayantara Asia</h3>
                    <p>TMA is a company built ona strong belief of results, people, and integrity. This
                        combination is essential to accomplishing the Company's primary purpose of
                        providing a solution that will significantly improve all forms of customer
                        communication and IT solutions</p>
                    <br>
                    <p>
                        TMA's values are the foundation of the company culture and create the
                        environment in which hard & smart work is done with passion. Its values are deeply
                        held beliefs that guide the behavior, decision-making, and framework building for
                        daily interactions amongst the team.
                    </p>
                    <br>
                    <p>
                        The TMA team recognizes that quality, reputation, consistent performance, and
                        satisfaction with its products will be the measure and vehicle for the company's
                        success. The Company believes that its values create a competitive advantage that
                        allows TMA to discover, design plan, develop, and deliver the solution to its cSlients.
                    </p>
                    <br>
                </div>

                <div class="col-md-3">
                    <img class="gambar-1 img-fluid"
                        src="https://images.pexels.com/photos/3182774/pexels-photo-3182774.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="">
                    <br>
                    <img class="gambar-1 img-fluid"
                        src="https://images.pexels.com/photos/3182774/pexels-photo-3182774.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                        alt="">
                    <br>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="text-center mb-5">
            <h1 id="news">NEWS</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="box col-6" >
                    <?php
                    include "koneksi.php";

                    $sql = mysqli_query($koneksi, "select *from berita where layers='1' order by id_berita desc limit 1");
                    
                    while ($b = mysqli_fetch_array($sql)) {
                        extract($b);
                    echo'    
                    
                    <a href="detail.php?id_berita='.$id_berita.'">
                            <img src="'.$gambar.'" class="img-fluid img-besar"></a>
                        <div class="align-items-end ">
                            <div class="category bg-black">
                                <div class="d-flex justify-content-between">
                                    <div class="mr-auto px-3 py-2">
                                        <p class="font-footer text-white mb-0" style="">'.$kategori.'</p>
                                    </div>
                                    <div class="px-3 py-2">
                                        <p class="font-footer text-white mb-0">'.$tanggal.'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="title bg-gray text-justify">
                                <p class="text-truncate font-subtitle text-dark p-3 mb-0">'.$judul.'</p>
                            </div>
                            <div class="summary bg-white text-justify">
                                <p class="text-truncate-4 font-article text-dark mx-3 my-2" style="opacity: 0.5;">'.$deskripsi.'
                                   </p>
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mt-5" type="button" style="background-color: #004E64">Lihat
                                Berita Lainnya</button>
                        </div>

                    ';
                    
                    }
                    ?>
                </div>

                <div class="col-6 ">
                    <div class="row">
                            <?php
                            include "koneksi.php";
                            $ter = mysqli_query($koneksi, "select * from berita where layers='2' order by id_berita asc limit 4"); 
                            while ($b = mysqli_fetch_array($ter)) {
                                extract($b);
                                echo'
                                <div class="box col-6">
                                <a href="detail.php?id_berita='.$id_berita.'">
                                    <img src="'.$gambar.'" class="img-fluid img-kecil"> </a>
                                    <div class="align-items-end">
                                        <div class="category bg-black">
                                            <div class="d-flex justify-content-between">
                                                <div class="mr-auto px-3 py-2">
                                                    <p class="font-footer text-white mb-0">'.$kategori.'</p>
                                                </div>
                                                <div class="px-3 py-2">
                                                    <p class="font-footer text-white mb-0">'.$tanggal.'</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="title bg-gray text-justify">
                                            <p class="text-truncate font-subtitle text-dark p-3 mb-0">'.$judul.'</p>
                                        </div>
                                        <div class="summary bg-white text-justify">
                                            <p class="text-truncate-4 font-article text-dark mx-3 my-2" style="opacity: 0.5;">'.$deskripsi.'</p>
                                        </div>
                                    </div>
                                </div> 
                             ';

                            }
                            ?>
                           
                           
                    </div>
                </div>
            </div>
        </div>
    </div>

        <section id="kontak" class="kontak shadow">
            <div class=" container text-center text-white mt-5">
                <h1 class="pt-3">Kontak</h1>
                <div class="box box-1">
                    <div class="col-4">
                        <div class="icon icon-1">
                            <i class="fa-solid fa-house"></i>
                        </div>
                        <h4>Office & Workspace</h4>
                        <p> MAGNA COMMERCIAL SUMMARECON BANDUNG, JL. MAGNA TIMUR BLOCK MC NO.070, Rancabolang, Kec.
                            Gedebage, Kota Bandung, Jawa Barat 40296</p>
                    </div>
                    <div class="col-4">
                        <div class="icon icon-1">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <h4>Phone/Whatsapp</h4>
                        <p>(022) 87505672</p>
                    </div>
                    <div class="col-4">
                        <div class="icon icon-1">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <h4>Email</h4>

                    </div>
                    <div class="col-4">
                        <div class="icon icon-1">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <h4>Work Hours</h4>
                        <p>Senin-Jumat
                            <br>
                            08.00 - 17.00
                        </p>
                    </div>
                </div>
            </div>
    </section>
    <!-- Footer -->
    <footer class="footer-1 ">
        <div class="container">
            <div class="d-flex flex-row justify-content-between pt-3 pb-0 text-white">
                <p class=" fs-14"><span style="color: #00A5CF;">Tech</span> Mayantara Asia</p>
                <p class="fs-14">Company Profile</p>
            </div>
        </div>
    </footer>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>