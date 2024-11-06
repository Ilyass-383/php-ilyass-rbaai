<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style> 
      : root {
        --c-dark: #212529 ; 
        --c-brand: #4e57d4;
        --c-brand-light: #6970dd ;
      }
      body {
          font-family: var("ClashDisplay",sans-serif) ;
          line-height:1.7 ;
          color: var(#727272) ;
      }
      h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{
        font-weight:600;
      }
      a{
        text-decoration: none ;
        color: var(#4e57d4) ;
        transition:var(all 0.5s ease);
      }
      img {
        max-width:100% ;
        height: auto ;
      }
      .section-padding {
        padding-top: 140px ;
        padding-bottom:140px ;
      }
      #br{
        max-width:120px ;
        height: 45px ;
      }
      .navbar-nav .nav-link{
        font-weight:500;
        color:black;
      }
      .navbar-nav .nav-link.active{
        color:var(#4e57d4) ;
      }
      .btn {
        font-weight:600;
        font-size:14px ;
        text-transform: uppercase;
      }
      .btn-brand{
        background-color: black ;
        color:white ; 
        margin-left:5px; 

            }
      .btn-brand:hover{
        background-color:white ;
        border-color: white;
      }
      .navbar{
        box-shadow:black;
      }
    </style>
</head>
<body> 
<nav class="navbar navbar-expand-lg bg-white sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img  id="br" src="brand.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav  ms-auto">
        <li class="nav-item">
          <a class="nav-link " href="home.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="home.php">contact</a>
          <li class="nav-item">
          <a class="nav-link " href="home.php">Service</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-brand " href="home.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-brand " href="home.php">Sigp up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>