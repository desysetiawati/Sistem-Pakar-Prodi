<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include ('navbar.php'); ?>
    
    <main class="batas-atas">
        <div class="card text-white bg-success mb-3">
          <h5 style='color:yellow' class="card-header"><strong>Solusi</strong></h5>
          <div class="card-body text-left ukuran-20">

            <form method="post" action="solusi.php" enctype="multipart/form-data" role="form">

                <?php
                include ('koneksi.php');
                //$kode='m01';
                session_start();
                echo "<p>Nama : ".$_SESSION['nama']."</p>";
                echo "<p>Umur : ".$_SESSION['umur']."</p>";
                    
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }   
                ?>
                <hr>
                <p>Kami Melihat Kamu Sepertinya :</p>
                <?php
                 include "fungsi.php";
                 solusi($kode);  
                ?>
                

                <hr> 
                <?php
                $sql = "SELECT * from tb_solusi WHERE kode_solusi='$kode'";
                $data = mysqli_query($connect,$sql);
                $row = mysqli_fetch_assoc($data);

                if ($row['kode_solusi']=="x-1" || $row['isi_solusi']=="x-2" || $row['isi_solusi']=="x-3" || $row['isi_solusi']=="x-4" || $row['isi_solusi']=="x-5") {
                     echo "<center><p><strong style='color:purple'>Maaf, Sayang Sekali..Sistem Tidak Menemukan Jawaban.. Silahkan Ulangi Menjawab Pertanyaannya Yah.. ^_^</strong></p></center><hr>";
                     ?>              
                     <?php
                }else{
                    echo "<p>Maka kamu harus mengambil program studi : <strong style='color:purple'>".$row['isi_solusi']."</strong></p>";
                }
                
                ?>
            </form>
            <br>
            <div class="text-center">
                <a style='color:blue' style="margin-bottom: 10px;" href="hapus-session.php" class="btn btn-outline-light col-sm-2"><strong>Akhiri</strong></a>
            </div>
          </div>
          
        </div>
    



    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>