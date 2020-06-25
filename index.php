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
    <link href="css/carousel.css" rel="stylesheet">
</head>
<body>
	<?php
		include ('navbar.php');
	?>
	
    <main role="main">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/5.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1><strong style='color:orange'>Sistem Pakar Prodi Idamanmu^^</strong></h1>
                <p>
                  <strong style='color:orange'>Sistem Pakar Untuk Memberikan Solusi Program Studi Apa Yang Cocok Diambil Untuk Jenjang Perkuliahan Mu Nantinya.. </strong></p>
                <p><button style='color:white' type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="image/6.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1><strong style='color: #ffff99'>Jawab Pertanyaannya, Yah..</strong></h1>
                <p>
                  <strong style='color: #ffff99'>Dengan Menjawab Pertanyaan-pertanyaan yang diberikan dapat Membantu kami memutuskan Program Studi yang Mana Yang Cocok Untuk Kamu Ambil..</strong></p>
                <p><button style='color:white' type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="image/4.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1><strong style='color:orange'>Jurusan mu adalah Masa Depanmu</strong></h1>
                <p>
                  <strong style='color:orange'>Dari Sini Kamu Akan Mendapatkan Solusi untuk Masa Depan Kamu Kedepannya.. Jadi,, Jangan Sampai Bimbang Dalam Menjawab Pertanyaannya Yah..</strong></p>
                <p><button style='color:white' type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- Carousel -->

      <!---------------- MODAL ----------------->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Identitas User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nama :</label>
                  <input type="text" name="nama" class="form-control" id="input-ame" placeholder="isikan nama anda" required autofocus >
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Umur :</label>
                  <input type="number" name="umur" class="form-control col-sm-8" placeholder="isikan umur anda" required >
                </div>
                </div>
                <div class="modal-footer">
                  <button style="background-color: #d7118c;" type="submit" class="btn btn-info"><strong>Lanjut ></strong></button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>

      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/1.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Desy Setiawati</h2>
            <p>(17421044)</p>
            <p>Bukan Orang Istimewa, Hanya Orang Biasa Yang Punya Banyak Mimpi.</p>
          </div><!-- /.col-lg-4 -->



    </main>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</html>