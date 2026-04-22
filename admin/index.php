<?php
require_once  '../config.php';

if(!isset($_SESSION['user'])){
    redirect('login.php');
}

require_once  '../database.php';

$uri =$_GET['uri'] ?? "dashboard";
$uri = str_replace('.php', '', $uri);
$url= $uri . '.php';
$title= ucfirst($uri);
$pagePath=__DIR__ . '/pages/' . $url;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCA :: <?= $title;?></title>
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Londrina+Sketch&display=swap" rel="stylesheet">

     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center mt-5">Welcome:<?=$_SESSION['user']['name']?></h1>
                <a href="<?= base_url('admin/logout') ?>"><i class="bi bi-box-arrow-right"></i> Logout</a>
               
               </div>

               <div class="col-md-12">
                <a href="<?=base_url('admin/users')?>">Show Users</a> &nbsp; &nbsp;


                <a href="<?= base_url('admin/add-news') ?>">Add News</a>  &nbsp; &nbsp;
                <a href="">Show News</a>

               </div>
            
            <div class="col-md-12">
                    <?php

                    if(file_exists($pagePath) && is_file($pagePath)){
                        require $pagePath;
                    }else{
                        echo "<h1>404 Not Found</h1>";
                    }
                    ?>
            </div>
        </div>
    </div>
 


 
 












     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>