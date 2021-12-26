<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <title>Welcome to Josephweb</title>
    <meta name="author" content="Joseph">
    <meta name="description" content="Joseph">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php wp_head();?>
</head>

<body>
    <header class="header">

    <header>
        <nav class="navbar navbar-expand-sm navbar-light" style="box-shadow: 0 1px 2px rgb(99 99 99 / 30%)">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="<?=get_template_directory_uri().'/svg/Logo.svg'?>" alt="Josef" style="height: 24px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('/gallery'); ?>">Project</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> 
    </header>
        
    <!--nav class="menu">
            <ul>
                <li>
                    <img id="logo" src="<?=get_template_directory_uri().'/svg/Logo.svg'?>">
                </li>
            </ul>
            <ul>
                <li>
                    <div class="item">
                    <a href="<?php echo site_url('/gallery'); ?>"> Project </a>
                    <a href="<?php echo site_url('/gallery'); ?>"> Contact </a>
                    </div>
                </li>
            </ul>
        </nav>
    </header-->