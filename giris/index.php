<?php
$kok = "http://".$_SERVER['HTTP_HOST'];
$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'yok';

 /*echo "kok= $kok <br> refere= $referer";*/
 if(!$_SERVER['HTTP_REFERER']==$kok)
 header("Location: $kok")

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Doğum Günü!</title>
  </head>
  <body class="bg-warning text-center">

<script>
$(document).ready(function(){
play()
});
</script>

    <div class="ustmenu" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); padding-bottom: 2px; ">
    	<div class="solResim bg-warning float-right"></div>
    	<div class="solResim bg-warning float-left"></div>
  		<h1 class="" style="text-shadow: 2px 2px 5px #4f4b4b; margin-top: 20px; padding-top: 3px;"> Ali Emre KOCATÜRK!<br><span style=" background-image: url();margin-bottom: 0px; margin-top: 0px;" class="badge badge-info badge-pill">20</span> </h1>
    </div>



    <div class="container " style="background-image: url(img/glitter-gif-png-5-original.gif); padding-bottom: 10px;">


    	<img class="resim" src="img/pngguru.com.png" width="90%">

		<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		        <img src="img/slideFirst.png" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/slideSecond.png" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/slideThird.png" class="d-block w-100" alt="...">
		    </div>
		  </div>
		</div>


		<img class="resim" src="img/celebrate.png" width="90%">

		<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="img/slide2.png" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/slideFirst.png" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="img/slide3.png" class="d-block w-100" alt="...">
		    </div>
        <div class="carousel-item">
          <img src="img/slideSecond.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/slide4.png" class="d-block w-100" alt="...">
        </div>
		  </div>

    </div>

		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
    </div>







        <blockquote class="blockquote text-center ">
      		<p class="mb-0">Dogum gunun kutlu olsun kivircik nice senelere seviliyosun notu var karsim.</p>
      		<footer class="blockquote-footer"><cite title="Senin İçin Yazdı">Mustafa SEZİŞLİ</cite></footer>
    	</blockquote>
        <blockquote class="blockquote text-center">
      		<p class="mb-0">Sayın ae bey. Bundan tam 19 yıl önce doğup dünyamızı şenlendirdiğiniz için size teşekkür ediyorum.</p>
      		<footer class="blockquote-footer"><cite title="Senin İçin Yazdı">Enes CEYLAN</cite></footer>
    	</blockquote>
    	<blockquote class="blockquote text-center">
      		<p class="mb-0">İyi ki doğdun Ali.</p>
      		<footer class="blockquote-footer"><cite title="Senin İçin Yazdı">Selim ERVÜZ</cite></footer>
    	</blockquote>
    	    <blockquote class="blockquote text-center">
      		<p class="mb-0">Ama coşkun, ama yorgun, bir yıl daha geçiyor yaşamından.. Olsun. Sevgilerin en güzeli ile yoğrul, Sene-i tevellüdünüz ferruh ola.</p>
      		<footer class="blockquote-footer"><cite title="Senin İçin Yazdı">Hamza ÇELİK</cite></footer>
    	</blockquote>
<button onclick="play()" type="button" class="btn btn-primary btn-sm">Sesi Aç</button>
<button onclick="pause()" type="button" class="btn btn-primary btn-sm">Sesi Kıs</button>
<button onclick="playgif()" type="button" class="btn btn-primary btn-sm">Gif Oynat</button>
<button onclick="pausegif()" type="button" class="btn btn-primary btn-sm">Gif Durdur</button>


<video class="vid" id="vid" style="width: 100%; text-align:center;" autoplay="autoplay" loop muted>

<source src="img/vid.mp4" type="video/mp4">

</video>
<script type="text/javascript">
  audio = new Audio();

  audio.src = "img/cem.mp3";

  audio.loop = true;

  audio.play();

	function playgif() {
	document.getElementById('vid').play();

    }

    function pausegif() {
      document.getElementById('vid').pause();
    }

	function play() {

      audio.play();
    }

    function pause() {
      audio.pause();
    }
</script>
	<div class="hero-image">

  		<div class="hero-text">
    	<h3>We are Jali's Best Friends</h3>
    	</div>

	</div>


	<div class="alt">
		<div class="container alt text-light">
			Bu site Ali Emre KOCATÜRK' için en best arkadaşları tarafından yapılmıştır. Nice mutlu yıllara... © 2020</div>


	</div>

    <!-- Optional JavaScript -->
    <script>
    	document.getElementById('vid').play();
	</script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
