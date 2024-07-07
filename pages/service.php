<?php
    session_start();
    if(isset($_SESSION['user'])){
    include("../config.php");
        $selectUser = $db->prepare("SELECT * FROM users WHERE role = 'Admin' AND id = '".$_SESSION['user']."' AND status = 'Active'");
        $selectUser->execute();
        if ($userFound = $selectUser->fetch()) {
            ?>
             <?php 
    if(isset($_GET['delete_id']))
    {    
        $stmt_delete=$db->prepare('DELETE FROM service WHERE id = "'.$_GET['delete_id'].'"');
        if($stmt_delete->execute())
        {
            ?>
            <script>
            alert("Service Are Deleted Well!!!!");
            window.location.href=('service.php');
            </script>
            <?php 
        }else
 
        ?>
            <script>
            alert("Can not delete item");
            window.location.href=('service.php');
            </script>
            <?php 
 
    }
 
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
<div class="col-md-6">
<div class="card card-primary">
<div class="card-header" style="background-color: #86875b; cursor: pointer;">
<h3 class="card-title">Tours Service</h3>
</div>

<form action="querryservice.php" method="POST" enctype="multipart/form-data">
<div class="card-body">
    <div class="row">
<div class="col-12">
    <label for="exampleInputPassword1">Service Name</label>
<input type="text" name="title" class="form-control" placeholder="Service Title" required>
</div>
</div>

</div>
<div class="card-footer">
<button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
</div>
</form>
</div>
</div>
 <?php
          require '../config.php'; 
                    $selectAllUsers = $db->prepare("SELECT id, title FROM service ");
                    $selectAllUsers->execute();
                    if ($row = $selectAllUsers->fetch()) {
                        ?>
<!-- all Services -->
<div class="col-md-6">
<div class="card card-primary">
<div class="card-header" style="background-color: #86875b; cursor: pointer;">
<h3 class="card-title">All Services</h3>
</div>
<table class="table">
  <thead>
    
    <tr>
      <th>#</th>
      <th>Service Name</th>
      <th>Action</th>
    </tr>
     
  </thead>
  <tbody>
<?php
            do{
              ?>
    <tr>
      <th>#</th>
      <td><?php echo $row['title'];?></td>
      <td>
         <a href="#">
        <button class="btn btn-secondary btn-sm" > <i class="fa fa-edit"></i> Edit</button> </a>
        <a href="?delete_id=<?php echo $row['id']?>" title="click for delete" onclick="return confirm('Sure to delete this record?')">
        <button class="btn btn-danger btn-sm" > <i class="fa fa-trash"></i> Delete</button></td>
        </a>
    </tr>
    <?php
                }while($row = $selectAllUsers->fetch());
            ?>
  </tbody>
</table>
</div>
</div>
   <?php
                    }
                    else{ 
                    }
                ?>
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