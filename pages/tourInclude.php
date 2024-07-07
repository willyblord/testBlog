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
<link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">

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

<div class="col-md-6">
<div class="card card-primary">
<div class="card-header" style="background-color: #86875b;">
<h3 class="card-title">Tour Include</h3>
</div>

<form action="querryToursIncludes.php" method="POST" enctype="multipart/form-data">
<div class="card-body">
<div class="row">
<div class="col-12">
    <label for="exampleInputPassword1">Select Tour Name </label>
    <select class="form-control" name="tourId">
        <option selected>---- Select Tour Name ----</option>
            <?php
             require '../config.php';
            $result = $db->prepare("SELECT * FROM tours");
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){
              ?>
        <option value="<?php echo $row['id'];?>"> <?php echo $row['tour_name'];?> - <?php echo $row['country']?></option>
    <?php }?>
    </select>
</div>
<div class="col-12">
<label for="exampleInputPassword1"> Tour Include </label>
<input type="text" name="include" class="form-control" placeholder="Tour Includes" required>
</div>

</div>

</div>

<div class="card-footer">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
</div>


<div class="col-md-6">
<section class="content pb-3">
<div class="container-fluid h-100">
<div class="card card-row card-secondary">
<div class="card-header">
<h3 class="card-title">
All Tour Includes
</h3>
</div>
<div class="card-body">
<?php
             require '../config.php';
            $result = $db->prepare("SELECT * FROM tourincludes");
            $result->execute();
            for($i=0; $row = $result->fetch(); $i++){
              ?>
<div class="card card-info card-outline">
 <div class="card-header">
<h5 class="card-title">Create Labels</h5>
</div>
<div class="card-body">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox1" disabled>
<label for="customCheckbox1" class="custom-control-label">Bug</label>
</div>
</div>
</div>
<?php } ?>





</div>
</div>
</div>
</section>
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

<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>

<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="../dist/js/adminlte.min2167.js?v=3.2.0"></script>

<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>

<script src="../dist/js/demo.js"></script>



<script src="../dist/js/demo.js"></script>
</body>
</html>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
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