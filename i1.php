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
  <link rel="shortcut icon" type="image/png" href="imgs/new_logo_black.png">
</head>
<body>

<header>

<nav class="navbar navbar-dark bg-success navbar-expand-md">
  <a class="nav-brand text-white" href="admin-panel.php" >
  Dhule Covid Info
      </a>

 

 


    </div>
</nav>

<nav class="navbar navbar-dark bg-dark navbar-expand-md">
<ul class="navbar-nav ml-auto mr-auto">
    <li class="nav-item active">
              <a href="index.php" class="nav-link btn btn-warning text-dark"><i class="fas fa-bed"></i> Beds</a>
    </li>  
</ul>              
</nav>

</header>


<div class="container-fluid">
<div class="row">
<div class="col-12 pt-1 pb-1 text-center">
<form action="" method="post" class="form-submit"> 
<input type="submit" name="login"  value="Without Oxygen" class="btn border-warning  nooxygen" id="nooxygen">
<input type="hidden" class="nooxy" value="withoutoxygen">

<input type="submit" name="login"  value="With Oxygen" class="btn border-danger  yesoxygen" id="yesoxygen">
<input type="hidden" class="yesoxy" value="withoxygen">

<input type="submit" name="login"  value="ICU" class="btn border-danger  icu" id="icu">
<input type="hidden" class="withicu" value="withicu">

<input type="submit" name="login"  value="ICU With Ventilator" class="btn border-danger  icuwithven" id="icuwithven">
<input type="hidden" class="withicuven" value="withicuven">



</form>
</div>
</div>

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
            url:"getresult5.php",
            success:function(response){
              $("#result").html(response);
             }
          })
      })

    </script>
    
</body>
</html>