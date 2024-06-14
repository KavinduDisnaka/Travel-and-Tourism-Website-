<?php
session_start();
$page = "G03";
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
                        <img src="images/benthota beach.jpg" alt="">
                    </div> <!-- /.project-slider -->
                    <div class="project-infos col-md-12">
                        <div class="box-content">
                            <h2 class="project-title">Bentota beach</h2>
                            <p>Bentota is a small town situated on coastal areas in Sri Lanka. Positioned 65 kilometers south of Colombo the capital, in the Bentota region of the Southern Province
                                It is quite famous for its breath taking view, and especially the Bentota Beach.
                                <br>
                                If you are looking to spend your holidays and give yourself a calm and natural treat, with no bars and restaurants, this is the most refreshing and relaxing site.
                                The Bentota Beach which extends across 7-8 kilometers is truly a symbol of peace, calmness and cleanness.
                                One of its strongest points is its quiet surroundings which, according to many people, run the natural and relaxing environment of the beach. There is plenty of space of everyone to settle in perfectly and enjoy the sun bath to the fullest.                                
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
