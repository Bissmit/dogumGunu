<!DOCTYPE html>
<html lang="tr">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken Theme">
    <meta name='robots' content='noindex,nofollow' />
	<!-- Page Title -->
	<title>Doğum Günü !</title>
	<!-- Google Fonts css-->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
	<!-- Bootstrap css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- Font Awesome icon css-->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" media="screen">
	<!-- Main custom css -->
	<link href="css/custom.css" rel="stylesheet" media="screen">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
	<script>
	  var OneSignal = window.OneSignal || [];
	  OneSignal.push(function() {
	    OneSignal.init({
	      appId: "82fd971b-31fe-4179-8dc0-ab5aca74ea8c",
	      notifyButton: {
	        enable: true,
	      },
	    });
	  });
	</script>


</head>
<body style="background-image: url('https://i.pinimg.com/originals/11/a7/56/11a75676504c93cc32153c7c7aae23f6.gif');">

	<!-- Coming Soon Wrapper starts -->
	<div class="comming-soon">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="coming-soon-box">
						<!-- Logo Start -->
						<div style="color: white;">
							<h1>Ali Emre KOCATÜRK</h1>
							<p>En yakın zamanda sizlerle...</p>
						</div>
						<!-- Logo end -->

						<!-- Types Information start -->
						<div class="coming-text">
							<p>Sakin ol</p>
							<h2><span class="typed-title">Yükleniyor...</span></h2>
							<div class="typing-title">
								<p> 1'Nisana çok az kaldı</p>
								<p>Takipte kal</p>
								<p>31 Mart 24:00 !</p>
								<p>Burada Olacağız !</p>
							</div>
						</div>
						<!-- Types Information end -->

						<!-- Countdown start -->
						<div class="countdown-timer-wrapper">
							<div class="timer" id="countdown"></div>
						</div>
						<!-- Countdown end -->

						<!-- kendi geri sayim basladi -->
						<p id="demo"></p>

						<!-- kendi gerisayim bitti -->

						<!-- Social Media start -->
						<div class="social-link">
							<a href=""><i class="fab fa-facebook"></i></a>
							<a href=""><i class="fab fa-twitter"></i></a>
							<a href=""><i class="fab fa-linkedin"></i></a>
							<a href=""><i class="fab fa-pinterest"></i></a>
							<a href=""><i class="fab fa-instagram"></i></a>
						</div>
						<!-- Social Media end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Coming Soon Wrapper end -->

    <!-- Jquery Library File -->
	<script src="js/jquery-1.12.4.min.js"></script>
	<!-- Timer counter js file -->
	<script src="js/countdown-timer.js"></script>
	<!-- Typed js file -->
	<script src="js/typed.js"></script>
	<!-- SmoothScroll -->
	<script src="js/SmoothScroll.js"></script>
    <!-- Bootstrap js file -->
	<script src="js/bootstrap.min.js"></script>
    <!-- Main Custom js file -->
	<script src="js/function.js"></script>
	<!-- Timer counter start -->
	<script>
        $(document).ready(function (){
			var myDate = new Date("Mar 31, 2020 24:00:00");
			//var myDate = new Date();vv
			myDate.setDate(myDate.getDate());
            $("#countdown").countdown(myDate, function (event) {
                $(this).html(
                    event.strftime(
                        '<div class="timer-wrapper"><div class="time">%D</div><span class="text">Gün</span></div><div class="timer-wrapper"><div class="time">%H</div><span class="text">Saat</span></div><div class="timer-wrapper"><div class="time">%M</div><span class="text">Dakika</span></div><div class="timer-wrapper"><div class="time">%S</div><span class="text">Saniye</span></div>'
                    )
                );
            });

        });
    </script>

    <script>
// Set the date we're counting down to
var countDownDate = new Date("Mar 31, 2020 24:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Beklenen an geldi, 3sn içinde yönlendiriliyorsunuz...";
    window.setTimeout(function(){location.href = 'giris/';}, 3000);
  }
}, 1000);
</script>
	<!-- Timer counter end -->
</body>
