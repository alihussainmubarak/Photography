<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Photography : June 2020">
    <meta name="author" content="Ali Hussain Mubarak">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- CSS styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/style.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/lightbox.css" />

    <title>Photography</title>

</head>

<body>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-1 bg-dark">
            <a class="navbar-brand" href="<?php echo base_url(); ?>" id="geo">Photography</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>signup/profile"><?php
                        if ($this->session->userdata('user_id')) {
                            echo $this->session->userdata['name'];
                        }
                         ?></a>
                    </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="fa fa-user"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right bg-dark mt-1 px-2" aria-labelledby="navbarDropdown">

                            <?php if ($this->session->userdata('user_id')) : ?>

                            <a class="nav-link" href="<?php echo base_url(); ?>gallery/delete">Dashboard</a>
                            <a class="nav-link text-danger" href="<?php echo base_url(); ?>login/logout">Logout</a>
                       
                    <?php else : ?>

                                <a class="nav-link" href="<?php echo base_url(); ?>login">Login</a>
                                <a class="nav-link" href="<?php echo base_url(); ?>signup">Signup</a>
                            </div>
                        </li>

                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        <!-- Navbar /end -->
    </header>

    <!-- Main container -->
    <div class="container-fluid">

        <!-- Main row -->
        <div class="row">