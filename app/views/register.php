<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carbook - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/Front/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/assets/Front/css/animate.css">

    <link rel="stylesheet" href="/assets/Front/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/Front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/Front/css/magnific-popup.css">

    <link rel="stylesheet" href="/assets/Front/css/aos.css">

    <link rel="stylesheet" href="/assets/Front/css/ionicons.min.css">

    <link rel="stylesheet" href="/assets/Front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/assets/Front/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/assets/Front/css/flaticon.css">
    <link rel="stylesheet" href="/assets/Front/css/icomoon.css">
    <link rel="stylesheet" href="/assets/Front/css/style.css">
</head>
<?php
function isActive($route)
{
    $request = $_SERVER['REQUEST_URI'];

    return $request === $route ? 'active' : '';
}
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Car<span>Book</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo isActive('/'); ?>"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item <?php echo isActive('/about'); ?>"><a href="/about" class="nav-link ">About</a></li>
                <li class="nav-item <?php echo isActive('/cars'); ?>"><a href="/cars" class="nav-link">Cars</a></li>
                <li class="nav-item <?php echo isActive('/blog'); ?>"><a href="/blog" class="nav-link">Blog</a></li>
                <li class="nav-item <?php echo isActive('/contact'); ?>"><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="container my-5">
    <form class="row g-3 mb-4" method="POST" action="register.php">
        <div class="col-md-6">
            <label for="fullname" class="form-label">FullName</label>
            <input type="text" name="fullname" class="form-control" id="inputCity">
        </div>

        <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="inputCity">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>

        <div class="col-md-4">
            <label for="phone" class="form-label">Phone</label>
            <input type="number" name="phone" class="form-control" id="inputZip">
        </div>

        <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4">
        </div>

        <div class="col-12 ">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </form>

<div"><?php include 'Partials/footer.php'; ?></div>