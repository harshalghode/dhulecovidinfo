<?php 
  require 'config.php';
  session_start();
  error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet"  href="fontawesome-free-5.13.1-web/css/all.css">
  <title>Dhule Covid Info</title>
  <link rel="shortcut icon" type="image/png" href="image/logo.png">
</head>
<body style="overflow-x:hidden">

<header>
<!-- 
<nav class="navbar navbar-dark  navbar-expand-md" style="background-color:#33FF4B">
 <a class="nav-brand text-white" href="admin-panel.php" >
 <img src="image/123.png" height="50px" alt="" style="margin-top:-10px"> <strong style="color:red; font-size:1.5em;"> Dhule Covid Info</strong>
      </a>

    </div>
</nav>
-->
<div class="row">
<div class="col-12 text-center">
<img src="image/heromain.png" alt="">
</div>
</div>

<nav class="navbar navbar-dark bg-dark navbar-expand-md">
<ul class="navbar-nav ml-auto mr-auto">
    <li class="nav-item">
              <a href="index.php" class="nav-link btn btn-light  text-dark"><i class="fas fa-bed"></i> Beds</a>
    </li>  
    <li class="nav-item active pl-2">
              <a href="tiffin.php" class="nav-link btn btn-warning  text-dark"><i class="fas fa-box"></i> Tiffin</a>
    </li>
    <li class="nav-item pl-2">
              <a href="ambulance.php" class="nav-link btn btn-light  text-dark"><i class="fas fa-ambulance"></i> Ambulance</a>
    </li>  
    <li class="nav-item pl-5 ml-5">
              <a href="hospital/" class="nav-link text-light"><i class="fas fa-hospital"></i> Hospital</a>
    </li>  
    
</ul>              
</nav>

</header>


<div class="container">


<div class="row">
<div class="col-12">
<div id="result"></div>
</div>
</div>
</div>














  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script>
  
  $(document).ready(function(){
      $.ajax({
        url:"getresulttiffin.php",
        success:function(response){
          $("#result").html(response);
         }
      })
  })

</script>
</body>
</html>