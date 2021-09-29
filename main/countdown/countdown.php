<!---<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../login/index.html');
	exit;
}
?>-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Unk Copy Coming Soon</title>
  <!-- Custom styles for this template -->
  <link href="../../css/countdown.css" rel="stylesheet">
  <link rel="icon" href="images/itachi-anime.gif"/>
  <link href="https://fonts.googleapis.com/css?family=Lato:300i,400,700,900" rel="stylesheet">


</head>
  <body class="content">
  <div class="Comingsoonpage">
    <div class="main">
      <h3 class="title">2022</h3>
      <h1 class="tagname">Coming Soon</h1>
      <!-- Progressive-Effects -->
      <div class="progressive-effects" id="skills">
        <div class="container">
         <!-- Skills -->
          <div id="about-us" class="parallax">
            <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="progress">
                  <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" id="demo"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- //Skills -->
        </div>
      </div>
     <!-- //Progressive-Effects -->
     
   </div>
  </div>
  <script>
    var countDownDate = new Date("Jan 1, 2022 0:0:0").getTime();
    var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
    sleep(10)
    window.location.reload("../login/index.html");
    }
    }, 1000);
  </script>
</body>
</html>