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

<link rel="stylesheet" href="../dist/css/adminlte.min2167.css?v=3.2.0">

<link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

<link rel="stylesheet" href="../plugins/codemirror/codemirror.css">
<link rel="stylesheet" href="../plugins/codemirror/theme/monokai.css">

<link rel="stylesheet" href="../plugins/simplemde/simplemde.min.html">

</head>
<body class="hold-transition sidebar-mini">
<?php 
require 'inc/header.php';
?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">

<div class="row mb-2">
    <div class="col-md-9">

<div class="card card-primary">
<div class="card-header" style="background-color: #86875b; cursor: pointer;">
<h3 class="card-title">Popular Tours</h3> <a href="viewAllTours.php">
<span style="float: right;">View All Popular Attraction</span></a>
</div>

<form action="querryTourPopulat.php" method="POST" enctype="multipart/form-data">
<div class="card-body">
    <div class="row">
<div class="col-3">
    <label for="exampleInputPassword1"> Tour Name </label>
<input type="text" name="tour_name" class="form-control" placeholder="Tour Name" required>
</div>
<div class="col-4">
<div class="form-group">
<label for="exampleInputFile">Tour Image 1</label>
<input type="file" name="img1" class="form-control" required>
</div>
</div>
<div class="col-5">
<div class="form-group">
<label for="exampleInputFile">Tour Image 2</label>
<input type="file" name="img2" class="form-control" required>
</div>
</div>
<div class="col-5">
<div class="form-group">
<label for="exampleInputFile">Tour Image 3</label>
<input type="file" name="img3" class="form-control" required>
</div>
</div>
<div class="col-5">
<div class="form-group">
<label for="exampleInputFile">Tour Image 4</label>
<input type="file" name="img4" class="form-control" required>
</div>
</div>

<div class="col-4">
<div class="form-group">
<label for="exampleInputFile">Tour Country</label>
<div class="input-group">
<div class="custom-file">
    <select class="form-control" name="country" required>
        <option selected>--- Select Country ---</option>
        <option>Rwanda</option>
        <option>Uganda</option>
        <option>Tanzania</option>
    </select>
</div>
</div>
</div>
</div>
<div class="col-4">
<div class="form-group">
<label for="exampleInputFile">Tour Province (option)</label>
<div class="input-group">
<div class="custom-file">
    <select class="form-control" name="province">
        <option selected>--- Select Province ---</option>
    </select>
</div>
</div>
</div>
</div>
<div class="col-4">
<div class="form-group">
<label for="exampleInputFile">Tour District (option)</label>
<div class="input-group">
<div class="custom-file">
    <select class="form-control" name="district">
        <option selected>--- Select Tour District ---</option>
    </select>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<label for="exampleInputEmail1"> Tour Details</label>
<textarea id="summernote" name="details" required>
Tour Details Here
</textarea>
</div>

</div>

<div class="card-footer">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</form>
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
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<script src="../plugins/codemirror/codemirror.js"></script>
<script src="../plugins/codemirror/mode/css/css.js"></script>
<script src="../plugins/codemirror/mode/xml/xml.js"></script>
<script src="../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>

<script src="../../dist/js/demo.js"></script>
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