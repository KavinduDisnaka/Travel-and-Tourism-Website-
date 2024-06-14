<?php
session_start();
$page = "G05";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Travel & Tourism Web Site</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar & Hero Start -->
    <?php
    include 'inc/navbar.php';
    ?>
    <!-- Navbar & Hero End -->

        <div class="content-wrapper">
            <div class="inner-container container">
                <div class="row">
                    <div class="section-header col-md-12">
                        <h2>Gallery</h2>
                        <span class="project-subtitle">Beach</span>
                    </div> <!-- /.section-header -->
                </div> <!-- /.row -->
                <div class="project-detail row">
                    <div class="project-slider col-md-12">
                        <img src="images/Hikkaduwa.jpg" alt="">
                    </div> <!-- /.project-slider -->
                    <div class="project-infos col-md-12">
                        <div class="box-content">
                            <h2 class="project-title">Hikkaduwa</h2>
                            <p>Hikkaduwa is the name of a small town which is located on the south coast of Sri lank around 98 KM on the south of Colombo. It is well known for the Hikkaduwa beach which is labeled as one of the best surfing site in Sri Lanka and for Hikkaduwa Coral Sanctuary which is located a few meters away from the shore. 
                                Hikkaduwa Beach and Surfing Hikkaduwa beach is one of the most popular tourist places in Sri lanka Known for the harmonized and calm environment. 
                                The Beach is considered to be one of the finest places in the country for surfing and it is also well known for seafood currie which gives an extraordinary touch while having the perfect day on the beach. You can enjoy Surfing to the fullest in the months of November to March when waves rise up. 
                                Many tourists have recommended surfing in these months. While enjoying the beach and the sea, it is necessary to have a look inside the sea to investigate and examine the aquatic life. 
                                Whoever has visited the Beach has highly recommended snorkeling. It is very much suitable if one wants to watch all the beautiful fishes and marine life closely. 
                                People get a chance to look at a lot of different types of small and big fishes and turtles etc. very closely. 
                                So, whenever you get the chance to visit Sri Lanka and especially Hikkaduwa beach, don’t forget to experience surfing as well as snorkeling, it will be an experience of a life time.                                
                            </p>
                            <ul class="project-meta">
                                <li><i class="fa fa-folder-open"></i>Photography</li>
                                <li><i class="fa fa-calendar-o"></i>31 October 2084</li>
                                <li><i class="fa fa-envelope-o"></i><a href="mailto:info@company.com">info@company.com</a></li>
                            </ul>
                        </div> <!-- /.box-content -->
                    </div> <!-- /.project-infos -->
                </div> <!-- /.project-detail -->
            </div> <!-- /.inner-content -->
        </div> <!-- /.content-wrapper -->
        
         <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Enjoy Sri Lanka</h4>
                    <a class="btn btn-link" href="aboutus.html">About Us</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">FAQs & Help</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Uva Wellassa University, Badulla, Sri Lanka</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+94 718 585858</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p> Subscribe now to our newsletter and embark on a journey of discovery. Enter your email below to join our travel community.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <!-- Footer End -->

     <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
