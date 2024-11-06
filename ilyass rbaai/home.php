<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <title>Home</title>
    <style>
        :root {
            --primary-color: #4e57d4;
            --text-color: #727272;
            --font-primary: 'ClashDisplay', sans-serif;
        }
        body {
            font-family: var(--font-primary);
            line-height: 1.7;
            color: var(--text-color);
        }
        h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
            font-weight: 600;
        }
        a {
            text-decoration: none;
            color: var(--primary-color);
            transition: all 0.5s ease;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .section-padding {
            padding-top: 140px;
            padding-bottom: 140px;
        }
        #hero {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('backim.webp');
            background-size: cover;
            background-position: center;
            color: white;
        }
        .section-title {
            margin-bottom: 40px;
        }
        .btn-brand {
            background-color: var(--primary-color);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        .btn-brand:hover {
            background-color: #3949ab;
        }
    </style>
</head>
<body>

<?php 
    include("nav.php");
?>

<!-- Hero Section -->
<div id="hero" class="min-vh-100 d-flex align-items-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="text-uppercase fw-semibold display-1">WELCOME TO ILCLOT</h1>
                <h5>Discover the Latest Trends in Fashion and Express Your Unique Style with ILCLOT</h5>
                <div>
                    <a href="#" class="btn btn-brand">LOGIN</a>
                    <a href="#" class="btn btn-brand">Signup</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Us Section -->
<div id="About" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">About Us</h1>
                    <p>At ILCLOT, we believe that fashion is more than just clothing; it's a powerful way to express who you are. Our mission is to bring you the latest trends with a blend of comfort, style, and individuality. Whether you’re dressing up for a special occasion or looking for everyday essentials, ILCLOT offers pieces that let you stand out and feel confident. We are dedicated to quality, creativity, and making fashion accessible to everyone, ensuring that you always have the perfect outfit to express your unique style. Join us on this journey to celebrate fashion and make every look count!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <img src="pers.webp" alt="A stylish person representing ILCLOT">
            </div>
            <div class="col-lg-6">
                <h2>Our Story</h2>
                <p>We started with a passion for making high-quality, stylish clothing accessible to everyone. Every piece in our collection is carefully crafted to help you express your unique identity and style. At ILCLOT, we are more than a clothing brand; we are a community that celebrates individuality and creativity.</p>
            </div>
        </div>
    </div>
</div>
<!--the rest -->
<h1>Welcome to ILClot</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2 class="text text-primary">Explore Our Latest Collection</h2>
            <p>ILClot brings you the latest trends in fashion with a perfect blend of comfort and style. Whether you're looking for casual wear, formal attire, or accessories to complete your look, we have everything to match your unique style. Our new collection features high-quality fabrics, unique designs, and colors that will make you stand out wherever you go.</p>
        </div>
        <div class="col-md-4">
            <h2 class="text text-success">Shop by Category</h2>
            <ul>
                <li><a href="#">Men's Clothing</a></li>
                <li><a href="#">Women's Clothing</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Shoes</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid">
    <h2>Why Choose ILClot?</h2>
    <p>At ILClot, we believe in making fashion accessible to everyone. Our team is committed to bringing you stylish, high-quality clothing at affordable prices. We work directly with designers to offer you exclusive pieces you won't find anywhere else. Whether you're dressing for work, play, or anything in between, you'll find something you love at ILClot.</p>
</div>

<br><br><br><br>

<section id="team" class="team section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h5>Customer Reviews</h5>
                    <p>Our customers' feedback speaks volumes about the ILClot experience. From stylish pieces to exceptional customer service, our clients love shopping with us. Read some of their reviews below.</p>
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="review1.jpeg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">John Doe</h3>
                        <p class="card-txt">"Shopping at ILClot was an amazing experience! The collection is fresh and trendy, and the customer service was top-notch. I found everything I was looking for and more!"</p>
                        <br>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="review2.jpeg" alt="" class="img-fluid rounded-circle">
                        <h3 class="card-title py-2">Jane Smith</h3>
                        <p class="card-txt">"I love ILClot! The clothes are so fashionable and comfortable. I was able to find outfits for every occasion, and the online shopping experience was super easy!"</p>
                        <br>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<br><br>
<footer class="bg-dark text-white pt-5 pb-4" id="cntc">
    <div class="container text-center text-md-left">
       <div class="row text-center text-md-left"> 
           <div class="col-md-3 col-lg-3 mx-auto mt-3">
               <h5 class="text-uppercase mb-4 font-weight-bold text-warning">ILClot</h5>
               <p>Your go-to destination for the latest fashion trends and timeless pieces that elevate your style.</p>
           </div>
           <div class="col-md-2 col-lg-2 mx-auto mt-3">
               <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Shop</h5>
               <p><a href="#" class="text-white" style="text-decoration: none;">Men's Collection</a></p>
               <p><a href="#" class="text-white" style="text-decoration: none;">Women's Collection</a></p>
               <p><a href="#" class="text-white" style="text-decoration: none;">Sale</a></p>
               <p><a href="#" class="text-white" style="text-decoration: none;">New Arrivals</a></p>
           </div>
           <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3"> 
               <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Quick Links</h5>
               <p><a href="#" class="text-white" style="text-decoration: none;">My Account</a></p>
               <p><a href="#" class="text-white" style="text-decoration: none;">Order Status</a></p>
               <p><a href="#" class="text-white" style="text-decoration: none;">Returns & Exchanges</a></p>
               <p><a href="#" class="text-white" style="text-decoration: none;">Help Center</a></p>
           </div>
           <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
               <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contact Us</h5>
               <p><i class="fas fa-home mr-3"> Marrakech, Geuli, Avenue Abd El Karim Lkhtabi</i></p>
               <p><i class="fas fa-envelope mr-3"> support@ilclot.com</i></p>
               <p><i class="fas fa-phone mr-3">+212 691314250</i></p>
               <p><i class="fas fa-phone mr-3">+01 335 633 88</i></p>
           </div>
       </div>
       <hr class="mb-4">
       <div class="row align-items-center">
           <div class="col-md-7 col-lg-8">
               <p>Copyright  ©2020 All rights reserved by: <strong class="text-warning">ILClot</strong></p>
           </div>
           <div class="col-md-5 col-lg-4">
               <div class="text-center text-md-right">
                   <ul class="list-unstyled list-inline">
                       <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a></li>
                       <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a></li>
                       <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a></li>
                       <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-telegram"></i></a></li>
                       <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>
    </div>
</footer>


</body>
</html>
