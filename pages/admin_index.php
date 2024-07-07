<?php
    session_start();
    if(isset($_SESSION['user'])){
    include("../config.php");
        $selectUser = $db->prepare("SELECT * FROM users WHERE role = 'Admin' AND id = '".$_SESSION['user']."' AND status = 'Active'");
        $selectUser->execute();
        if ($userFound = $selectUser->fetch()) {
            ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>admin | Apogee</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
<link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="../../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="../dist/css/adminlte.min2167.css?v=3.2.0">
</head>
<body class="hold-transition sidebar-mini">
<?php 
require 'inc/header.php';
?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>Widgets</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Widgets</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<h5 class="mb-2">Info Box</h5>
<div class="row">
<div class="col-md-3 col-sm-6 col-12">
<div class="info-box">
<span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
<div class="info-box-content">
<span class="info-box-text">Messages</span>
 <span class="info-box-number">1,410</span>
</div>

</div>

</div>

<div class="col-md-3 col-sm-6 col-12">
<div class="info-box">
<span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
<div class="info-box-content">
<span class="info-box-text">Bookmarks</span>
<span class="info-box-number">410</span>
</div>

</div>

</div>

<div class="col-md-3 col-sm-6 col-12">
<div class="info-box">
<span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
<div class="info-box-content">
<span class="info-box-text">Uploads</span>
<span class="info-box-number">13,648</span>
</div>

</div>

</div>

<div class="col-md-3 col-sm-6 col-12">
<div class="info-box">
<span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
<div class="info-box-content">
<span class="info-box-text">Likes</span>
<span class="info-box-number">93,139</span>
</div>

</div>

</div>

</div>

<h5 class="mb-2">My Blog</h5>
<div class="card card-success">
<div class="card-body">
<div class="row">
<div class="col-md-12 col-lg-6 col-xl-4">
<div class="card mb-2 bg-gradient-dark">
<img class="card-img-top" src="../dist/img/photo1.png" alt="Dist Photo 1">
<div class="card-img-overlay d-flex flex-column justify-content-end">
<h5 class="card-title text-primary text-white">Card Title</h5>
<p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
<a href="#" class="text-white">Last update 2 mins ago</a>
</div>
</div>
</div>
<div class="col-md-12 col-lg-6 col-xl-4">
<div class="card mb-2">
<img class="card-img-top" src="../dist/img/photo2.png" alt="Dist Photo 2">
<div class="card-img-overlay d-flex flex-column justify-content-center">
<h5 class="card-title text-white mt-5 pt-2">Card Title</h5>
<p class="card-text pb-2 pt-1 text-white">
Lorem ipsum dolor sit amet, <br>
consectetur adipisicing elit <br>
sed do eiusmod tempor.
</p>
<a href="#" class="text-white">Last update 15 hours ago</a>
</div>
</div>
</div>
<div class="col-md-12 col-lg-6 col-xl-4">
<div class="card mb-2">
<img class="card-img-top" src="../dist/img/photo3.jpg" alt="Dist Photo 3">
<div class="card-img-overlay">
<h5 class="card-title text-primary">Card Title</h5>
<p class="card-text pb-1 pt-1 text-white">
Lorem ipsum dolor <br>
sit amet, consectetur <br>
adipisicing elit sed <br>
do eiusmod tempor. </p>
<a href="#" class="text-primary">Last update 3 days ago</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
<i class="fas fa-chevron-up"></i>
</a>
</div>

<?php 
require 'inc/footer.php';
?>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="../plugins/jquery/jquery.min.js"></script>

<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../dist/js/adminlte.min2167.js?v=3.2.0"></script>

<script src="../dist/js/demo.js"></script>
</body>
</html>
 <?php
        }
        else{
            header('location:../index.php');   
        }
    }
    else{
        header('location:../index.php');
    }
?>