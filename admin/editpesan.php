<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesan</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
     <!-- CSS -->
     <link rel="stylesheet" href="main.css">
     <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
<?php

include "../koneksi.php";

$sql=mysqli_query($koneksi, "select * from pesan where id_pesan='$_GET[id]'");
$data=mysqli_fetch_array($sql);

?>
<div class="container mt-5"> 
    <div class="card shadow mb-5" >
        <form action="" method="post">
           <div class="container"> 
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="nama" name="nama" value="<?php
                echo $data['nama']; ?>">
                    <label for="nama" placeholder="Masukan nama anda" class="form-label">Nama</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" value="<?php
                echo $data['email']; ?>">
                <label for="email" class="form-label">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="nomor" name="no_telepon" value="<?php
                echo $data['no_telepon']; ?>">
                <label for="nomor" class="form-label">Nomor telepon</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php
                echo $data['tanggal']; ?>">
                <label for="tanggal" class="form-label">tanggal</label>
            </div>
            <div class="form-floating form-area mb-3">
               <textarea class="form-control" placeholder="Silahkan tulis pesan disini" id="pesan" name="pesan" style="height: 200px" value="<?php
                echo $data['pesan']; ?>"></textarea>
               <label for="pesan" class="form-label">Pesan</label>
            </div>
            <button type="submit" class="btn btn-primary mb-5" style="background-color: #004E64" value="simpan" name="kirim">edit</button>
        </div>
        </form> 
    </div>
</div>

<?php
    include "../koneksi.php";

    if(isset($_POST['kirim'])){
        $id_pesan = $data['id_pesan'];
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_telepon = $_POST['no_telepon'];
        $pesan = $_POST['pesan'];
        $tanggal = $_POST['tanggal'];

        mysqli_query($koneksi, "update pesan set
        nama = '$nama',
        email = '$email',
        no_telepon = '$no_telepon',
        pesan = '$pesan',
        tanggal = '$tanggal'
        where id_pesan = '$id_pesan'
        ");

        echo "Pesan telah diedit";
        echo "<meta http-equiv=refresh content=2;URL='admin.php'>";
    }
?>
</body>
</html>