<?php
include('config.php');
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GetInn - A few clicks is all it takes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicon -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!--  CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <script src="//code.tidio.co/ajdgqxyquihi5kncovyshnsvdej8mbfi.js" async></script>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
           <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="movies.php">Movies</a></li>
                <li><a href="locations.php">Locations</a></li>
                <li><a href="food-menu.php">Food Menu</a></li>
                <li><?php if(isset($_SESSION['user'])){
                            $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
                            $user=mysqli_fetch_array($us);?><a href="profile.php"><?php echo $user['name'];?></a></li> <li><a href="logout.php">Logout</a></li><?php }else{?><li><a href="login.php">Login</a></li><?php }?>  

            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>
    </div>
  </header><!-- End Header -->