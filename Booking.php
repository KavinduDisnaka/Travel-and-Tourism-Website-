<?php
session_start();
$page = "booking";
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

        <!-- Start Hotel -->
      <div  class="our_room">
        <div class="container">
           <div class="row">
              <div class="col-md-4 col-sm-6">
                 <div id="serv_hover"  class="room">
                    <div class="room_img">
                       <figure><img src="images/98 Acres Hotel - ella.jpg" alt="#"/></figure>
                    </div>
                    <div class="hotel">
                       <h3>98 Acres Resort and Spa <br> <h4>Ella</h4> </h3>
                       <p>xperience the beauty and serenity of Sri Lanka’s scenic hill country within the luxurious comforts of a boutique hotel par excellence. 98 Acres Resort and Spa is an elegant, 
                        chic hotel that stands on a scenic 98 acre tea estate, surrounded by a stunning landscape. </p>
                    </div>
                 </div>
              </div>
              <div class="col-md-4 col-sm-6">
                 <div id="serv_hover"  class="room">
                    <div class="room_img">
                       <figure><img src="images/blue water hotel - wadduwa.jpg" alt="#"/></figure>
                    </div>
                    <div class="hotel">
                       <h3>The Blue Water Hotel<br> <h4>Wadduwa</h4> </h3>
                       <p>Designed by world-renowned architect Geoffrey Bawa, The Blue Water Hotel and Spa offers 5 star luxury accommodation among Sri Lanka beach resorts with breathtaking views of the Indian Ocean. 
                        Nestled amongst the wild coconut groves of Wadduwa, The Blue Water Hotel and Spa is truly a laid back paradise.</p>
                    </div>
                 </div>
              </div>
              <div class="col-md-4 col-sm-6">
                 <div id="serv_hover"  class="room">
                    <div class="room_img">
                       <figure><img src="images/EKHO Lake House  - polonnaruwa.jpg" alt="#"/></figure>
                    </div>
                    <div class="hotel">
                       <h3>EKHO Lake House <br> <h4>Polonnaruwa</h4> </h3>
                       <p>Built in 1870 as a circuit bungalow for British Government Agents, the Old Polonnaruwa Rest House and once the 
                        Queen of England’s holiday destination in the 1960’s, has now been restored and renamed as EKHO Lake House, Polonnaruwa.</p>
                    </div>
                 </div>
              </div>
              <div class="col-md-4 col-sm-6">
                 <div id="serv_hover"  class="room">
                    <div class="room_img">
                       <figure><img src="images/heritance hotel - negambo.jpg" alt="#"/></figure>
                    </div>
                    <div class="hotel">
                       <h3>Heritence Hotel <br> <h4>Negambo</h4> </h3>
                       <p>If you’re looking for a luxury hotel in Negombo, look no further than Heritance Negombo.
                        <br><br>
                        For those interested in checking out popular landmarks while visiting Negombo, Heritance Negombo is located a short distance from Negombo Public Cemetery (0.3 mi) and Dutch Clock Tower (0.8 mi).</p>
                    </div>
                 </div>
              </div>
              <div class="col-md-4 col-sm-6">
                 <div id="serv_hover"  class="room">
                    <div class="room_img">
                       <figure><img src="images/heven seven hotel - nuwara eliya.jpg" alt="#"/></figure>
                    </div>
                    <div class="hotel">
                       <h3>Heven Seven Hotel <br> <h4>Nuwara Eliya</h4> </h3>
                       <p>Standing on the balcony of the Heaven Seven, the gentle breeze flowing past you, will make your soul feel loved and joyous. The alluring fragrance of the multi-hued blossoms will fill up your lungs as the 
                        grandstand view of the Race Course and the breath-taking view of the City of Nuwara Eliya will definitely mesmerise you. If such a heavenly ambience can be experienced in the Balcony, 
                        imaging the height of comforts you’ll be wrapped in at Heaven Seven Nuwara Eliya.</p>
                    </div>
                 </div>
              </div>
              <div class="col-md-4 col-sm-6">
                 <div id="serv_hover"  class="room">
                    <div class="room_img">
                       <figure><img src="images/hilton yala resort - yala.jpg" alt="#"/></figure>
                    </div>
                    <div class="hotel">
                       <h3>Hilton Yala Resort <br> <h4>Yala</h4> </h3>
                       <p>Find us on the southern edge of Yala National Park, overlooking the Indian Ocean. Our resort, designed with care to protect the environment, blends with the surrounding landscape. We offer adventure and relaxation with 42 rooms, 
                        suites and villas all with their own pools, an elephant trail running through the resort, spa, and unique dining experiences.</p>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- end Hotel -->
        

    <!--Booking Start-->
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="booking-cta">
							<h1>Make your reservation</h1>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">
							<form>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="text">
											<span class="form-label">Name</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="email">
											<span class="form-label">Email</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="tel">
											<span class="form-label">Phone</span>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<span class="form-label">Rooms</span>
											<select class="form-control">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group">
											<span class="form-label">Guests</span>
											<select class="form-control">
												<option>1 Person</option>
												<option>2 People</option>
												<option>3 People</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="date" required>
											<span class="form-label">Check In</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" type="date" required>
											<span class="form-label">Check Out</span>
										</div>
									</div>
								</div>
                                <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Reservation</span>
                                        <select class="form-control">
                                            <option>Lotus</option>
                                            <option>Covanro</option>
                                            <option>Shrangila</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                </div>
								<div class="form-btn">
									<button class="submit-btn">Book Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Company</h4>
                <a class="btn btn-link" href="">About Us</a>
                <a class="btn btn-link" href="">Contact Us</a>
                <a class="btn btn-link" href="">Privacy Policy</a>
                <a class="btn btn-link" href="">Terms & Condition</a>
                <a class="btn btn-link" href="">FAQs & Help</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Location, City, Country</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-3">Newsletter</h4>
                <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
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
