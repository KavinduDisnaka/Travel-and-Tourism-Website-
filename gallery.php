<?php
session_start();
$page = "gallery";
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

    <!-- Stats Gallery Section -->
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Gallery</h6>
        <h1 class="mb-5">Beach</h1>
    </div>
  <div class="gallery">
    <div class="thumbnail"> <a href="G01.php"><img src="images/dalawella beach.jpg" alt="G01" width="2000" class="cards"/></a>
        <a href="G01.html"><h4>Dalawella beach</h4></a>
      <p class="tag">Sri Lanka</p>
      <p class="text_column">Dalawella beach is located on the south coast of Sri Lanka in the Unawatuna area and is one of the beautiful Sri Lanka beaches. 
        Though the main beach is pretty nice it's also a touristy place because of the two main attractions that attracts many people to this beach.</p>
    </div>
    <div class="thumbnail"> <a href="G02.php"><img src="images/hiriketiya beach.jpg" alt="" width="2000" class="cards"/></a>
      <h4>Hiriketiya beach</h4>
      <p class="tag">Sri Lanka</p>
      <p class="text_column">Hiriketiya Beach is one of the places we had heard least about when we were planning our 3 week trip around Sri Lanka. 
        I wouldn’t quite call it the hidden gem of the south coast, as it is growing in popularity, but it’s not too far off it.</p>
    </div>
    <div class="thumbnail"> <a href="G03.php"><img src="images/benthota beach.jpg" alt="" width="2000" class="cards"/></a>
      <h4>Bentota beach</h4>
      <p class="tag">Sri Lanka</p>
      <p class="text_column">Bentota is a small town situated on coastal areas in Sri Lanka. Positioned 65 kilometers south of Colombo the capital, in the Bentota region of the Southern Province
        It is quite famous for its breath taking view, and especially the Bentota Beach.</p>
    </div>
    <div class="thumbnail"> <a href="G04.php"><img src="images/mirissa.jpg" alt="" width="2000" class="cards"/></a>
      <h4>Mirissa beach </h4>
      <p class="tag">Sri Lanka</p>
      <p class="text_column">Mirissa is a small heaven located in the South Coast of Sri Lanka, only about 200km away from the Equator. The small town is ever-famous for it's natural beaches which are mostly untouched by any man-made modernization, 
        which makes it well-loved and very sought after when it comes to holidays and vacations, even—honeymoons.</p>
    </div>
  </div>
  <div class="gallery">
    <div class="thumbnail"> <a href="G05.php"><img src="images/Hikkaduwa.jpg" alt="" width="2000" class="cards"/></a>
      <h4>Hikkaduwa</h4>
      <p class="tag">Sri Lanka</p>
      <p class="text_column">Hikkaduwa is the name of a small town which is located on the south coast of Sri lank around 98 KM on the south of Colombo. 
        It is well known for the Hikkaduwa beach which is labeled as one of the best surfing site in Sri Lanka and for Hikkaduwa Coral Sanctuary which is located a few meters away from the shore.</p>
    </div>
    <div class="thumbnail"> <a href="G06.php"><img src="images/arugam bay.jpg" alt="" width="2000" class="cards"/></a>
      <h4>Arugam bay</h4>
      <p class="tag">Sri Lanka</p>
      <p class="text_column">Arugam Bay is in the dry zone of Sri Lanka's southeastern drift of the Indian Ocean. The bay is almost of 320 kilometers 
        (200 mi) due east of Arugam Bay, and covers an area of roughly 4 kilometers (2.5 mi) south of the market town of Pottuvil.</p>
    </div>
  </div>
  <!--End Gallery Section-->

  <!-- Stats Gallery Section -->
  <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
    <h6 class="section-title bg-white text-center text-primary px-3">Gallery</h6>
    <h1 class="mb-5">Traditional</h1>
</div>
<div class="gallery">
<div class="thumbnail"> <a href=""><img src="images/polonnaruwa vatadage.jpg" alt="G01" width="2000" class="cards"/></a>
    <a href="G01.html"><h4>Polonnaruwa Vatadage</h4></a>
  <p class="tag">Polonnaruwa</p>
  <p class="text_column">Polonnaruwa Vatadage is a well-preserved Vatadage in the famous Dalada Maluwa quadrangle of the ancient city of ruins, Polonnaruwa. 
    Vatadages are typical Buddhist structures found in Sri Lanka.</p>
</div>
<div class="thumbnail"> <a href=""><img src="images/Temple of the tooth.jpg" alt="" width="2000" class="cards"/></a>
  <h4>Temple of the Tooth</h4>
  <p class="tag">Kandy</p>
  <p class="text_column">Sri Dalada Maligawa is the Sinhalese name for this holy shrine. Famously called Temple of the Sacred Tooth Relic, it is touted to be the most sacred Buddhist temple in the whole world. 
    It houses the tooth of Buddha nestled in a golden chamber and is within the premises of the royal palace complex (formerly a princely state).</p>
</div>
<div class="thumbnail"> <a href=""><img src="images/Sri Maha Bodhi.jpg" alt="" width="2000" class="cards"/></a>
  <h4>Sri Maha Bodhi</h4>
  <p class="tag">Anuradhapura</p>
  <p class="text_column">Anuradhapura is a historical place in Sri Lanka as it houses several heritage monasteries, palaces and monuments. It is known for its vast dagobas or brick stupas, ancient ponds and pools and magnificent temples.</p>
</div>
<div class="thumbnail"> <a href=""><img src="images/sigiriya.jpg" alt="" width="2000" class="cards"/></a>
  <h4>Sigiriya Rock</h4>
  <p class="tag">Sri Lanka</p>
  <p class="text_column">Declared a world heritage site by UNESCO, Sigiriya serves as a fine example of ancient urban planning. Sigiriya is a significant site of the Cultural Triangle and perhaps is an iconic historical places in Sri Lanka.</p>
</div>
</div>
<div class="gallery">
<div class="thumbnail"> <a href=""><img src="images/Dambulla Cave Temple.jpg" alt="" width="2000" class="cards"/></a>
  <h4>Dambulla Cave Temple</h4>
  <p class="tag">Sri Lanka</p>
  <p class="text_column">The Dambulla Cave Temple is also called the Golden Temple of Dambulla. It is a UNESCO World Heritage Site, located in the Matale District, 
    in the central province of Sri Lanka and is the best-preserved and largest cave temple complex of the country.</p>
</div>
<div class="thumbnail"> <a href=""><img src="images/Adam's Peak.jpg" alt="" width="2000" class="cards"/></a>
  <h4>Adam's Peak</h4>
  <p class="tag">Sri Lanka</p>
  <p class="text_column">As one of the most famous pilgrimage sites in the Indian subcontinent, Adam’s Peak is a 7,359 feet tall mountain in Sri Lanka, frequently visited by people of almost all major religions.</p>
</div>
<div class="thumbnail"> <a href=""><img src="images/Mihintale.jpg" alt="" width="2000" class="cards"/></a>
    <h4>Mihinthale</h4>
    <p class="tag">Anuradhapura</p>
    <p class="text_column">Ceylon, as it was formerly known, rests on a beautiful landscape down south of India; hills, beaches, valleys and waterfalls adorn this country.</p>
  </div>
  <div class="thumbnail"> <a href=""><img src="images/Yapahuwa.jpg" alt="" width="2000" class="cards"/></a>
    <h4>Yapahuwa</h4>
    <p class="tag">Sri Lanka</p>
    <p class="text_column">Yapahuwa is one of the historical places in Sri Lanka and lies between Karunagala and Anuradhapura. 
        A short-lived capital of the country in the 13th century, Yapahuwa was the site of preservation of the Sacred Tooth Relic of Lord Buddha.</p>
  </div>
</div>
<!--End Gallery Section-->

     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Enjoy Sri Lanka</h4>
                    <a class="btn btn-link" href="aboutus.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
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

     <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>