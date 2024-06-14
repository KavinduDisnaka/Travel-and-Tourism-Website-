<?php
session_start();
$page = "team";
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

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/hotelBooking.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link type="text/css" rel="stylesheet" href="css/hotelimage.css" />
</head>

<body>

    <!-- Navbar & Hero Start -->
    <?php
    include 'inc/navbar.php';
    ?>
    <!-- Navbar & Hero End -->

    <!-- Guide Team Start -->
    <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="section-title bg-white text-center text-primary px-3">Travel Guide</h6>
              <h1 class="mb-5">Meet Your Guide</h1>
          </div>
          <div class="row g-4">

          <?php
                $seachlocation = $_REQUEST['seachlocation'];
                $conn=new mysqli("Localhost","root","","travel");
                $sql = "SELECT * FROM guide WHERE location = '$seachlocation' ORDER BY id DESC";
                //'$_REQUEST[id]'
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc())
                {
                    
            ?>

              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item">
                      <div class="overflow-hidden">
                          <a href="userdetails.php?email=<?php echo $row["email"] ?>"><img class="img-fluid" src="action/images/<?php echo $row["profilepic"]; ?>" alt="Guide-01"></a>
                      </div>
                      <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                          <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-center p-4">
                          <h5 class="mb-0"><?php echo $row["firstName"]; ?> <?php echo $row["lastName"]; ?></h5>
                          <small><?php echo $row["location"]; ?></small>
                      </div>
                  </div>
              </div>

              <?php } ?>

          </div>
      </div>
  </div>
  <!-- Team End -->
  <!--Transport Providers Team Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="section-title bg-white text-center text-primary px-3">Transport Providers</h6>
              <h1 class="mb-5">Meet Your Transport Providers</h1>
          </div>
          <div class="row g-4">
          <?php
                $seachlocation = $_REQUEST['seachlocation'];
                $conn=new mysqli("Localhost","root","","travel");
                $sql = "SELECT * FROM transports WHERE location = '$seachlocation' ORDER BY id DESC";
                //'$_REQUEST[id]'
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc())
                {
                    
            ?>

              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="team-item">
                      <div class="overflow-hidden">
                          <a href="userdetails.php?email=<?php echo $row["email"] ?>"><img class="img-fluid" src="action/images/<?php echo $row["pic"]; ?>" alt="Guide-01"></a>
                      </div>
                      <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                          <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                          <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                          <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                      </div>
                      <div class="text-center p-4">
                          <h5 class="mb-0"><?php echo $row["firstName"]; ?> <?php echo $row["lastName"]; ?></h5>
                          <small><?php echo $row["location"]; ?></small>
                      </div>
                  </div>
              </div>

              <?php } ?>
              
          </div>
      </div>
  </div>
  <!-- Team End -->

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
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Travel & Tourism, Badulla, Sri Lanka</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+94 718 585858</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>travel&tourism@gmail.com</p>
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

	<script src="js/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>