<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Log in</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<link rel="stylesheet" href="dist/css/adminlte.min2167.css?v=3.2.0">
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
 <?php include('js.php'); ?>
</head>

<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<img src="../images/logo.webp" style="width: 100%;">

</div>

<div class="card">
<div class="card-body login-card-body">
<p class="login-box-msg">Sign in to start your session</p>

<form method="post"  class="login-form" id="login_form">
	    <div class="alert alert-success successMessage" role="alert" style="display: none; margin-left: 10px; margin-right: 10px; margin-top: 10px; margin-bottom: 10px;">
             Success
        </div>
        <div class="alert alert-danger errorMessage" role="alert" style="display: none; margin-left: 10px; margin-right: 10px;  margin-top: 10px; margin-bottom: 10px;" >
            error
        </div>
<div class="input-group mb-3">
<input class="form-control" type="text" name="email" id="email" placeholder="email | Username">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
 <input class="form-control" type="password" name="password" id="password" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
<div class="row">

<div class="col-4">
 <button type="submit" class="btn btn-primary btn-small" name="login_btn" type="submit"> Login</button>
      <div style="color:red;" id="form"></div></div>
</div>
</form>
</div>

</div>
</div>


<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="dist/js/adminlte.min2167.js?v=3.2.0"></script>
</body>
</html>
