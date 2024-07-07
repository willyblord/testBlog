<div class="wrapper">

<nav class="main-header navbar navbar-expand navbar-white navbar-light">

<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="../index3.html" class="nav-link">Home</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
<a href="#" class="nav-link">Contact</a>
</li>
</ul>

<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a class="nav-link" data-widget="navbar-search" href="#" role="button">
<i class="fas fa-search"></i>
</a>
<div class="navbar-search-block">
<form class="form-inline">
<div class="input-group input-group-sm">
<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" type="button" data-widget="navbar-search">
<i class="fas fa-times"></i>
</button>
</div>
</div>
</form>
</div>
</li>


<li class="nav-item">
<a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
<i class="fas fa-th-large"></i>
</a>
</li>
</ul>
</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">

<a href="admin_index" class="brand-link">
<img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
<span class="brand-text font-weight-light">Apogee Tours</span>
</a>

<div class="sidebar">

<div class="user-panel mt-3 pb-3 mb-3 d-flex">
<div class="image">
<img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
</div>
<div class="info">
<a href="#" class="d-block"><?php echo $userFound['username'];?></a>
</div>
</div>
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-tachometer-alt"></i>
<p>
Tours And Safaris
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="destination.php" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Tours Mgt</p>
</a>
</li>
<li class="nav-item">
<a href="tourInclude.php" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Tours Include</p>
</a>
</li>
<li class="nav-item">
<a href="tourRequarement.php" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Tours Requarement</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Popular Tours Mgt
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="populartours.php" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Add Popular Tours</p>
</a>
</li>
</ul>
</li>

<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
Tours Service Mgt
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="service.php" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Add New Service</p>
</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-th"></i>
<p>
News Mgt
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="blog.php" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Add News</p>
</a>
</li>
</ul>
</li>

<li class="nav-item">
<a href="#" class="nav-link">
<i class="nav-icon fas fa-sliders-h"></i>
<p>
Web Setting
<i class="right fas fa-angle-left"></i>
</p>
</a>
<ul class="nav nav-treeview">
<li class="nav-item">
<a href="destination.php" class="nav-link">
<i class="far fa-circle nav-icon"></i>
<p>Add News</p>
</a>
</li>
</ul>
</li>

</ul>
</nav>

</div>

</aside>