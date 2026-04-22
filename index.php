<?php
    require_once  './config.php';
    require_once  './database.php';

    $uri = $_GET['uri'] ?? 'home';
    $uri = str_replace('.php', '', $uri);
    $title= ucfirst($uri);
    $uri = $uri . '.php';
    $pagePath= __DIR__ . '/pages/' . $uri;


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

<!--Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">

    <!-- Left: Brand -->
    <a class="navbar-brand" href="index.php?uri=home">ABC News</a>

    <!-- Toggle for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
      aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Full navbar content -->
    <div class="collapse navbar-collapse justify-content-between" id="navbarContent">

      <!-- Center: Nav Links -->
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php?uri=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?uri=about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?uri=contact">Contact</a>
        </li>
      </ul>

      <!-- Right: Search -->
      <form class="d-flex" action="index.php" method="GET">
        <input type="hidden" name="uri" value="search">
        <input class="form-control me-2" type="search" name="q" placeholder="Search news..." aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav>

<?php
if(file_exists($pagePath) && is_file($pagePath)){
    require $pagePath;
}else{
    echo '<h1> 404 Not Found</h1></>';
}
?>


<footer class="py-3 my-4 footer">
     <ul class="nav justify-content-center border-bottom pb-3 mb-3"> 
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
         <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
          <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
           <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li> 
           <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li> 
        </ul> 
        <p class="text-center text-body-secondary">© 2025 Company, Inc</p> 
    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>