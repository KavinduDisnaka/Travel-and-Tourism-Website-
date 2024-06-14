<?php
session_start();
$page = "index";
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

     <<!-- Stats Gallery Section -->
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
        <div class="thumbnail"> <a href="G01.html"><img src="images/polonnaruwa vatadage.jpg" alt="G01" width="2000" class="cards"/></a>
            <a href="G01.html"><h4>Polonnaruwa Vatadage</h4></a>
          <p class="tag">Polonnaruwa</p>
          <p class="text_column">Polonnaruwa Vatadage is a well-preserved Vatadage in the famous Dalada Maluwa quadrangle of the ancient city of ruins, Polonnaruwa. 
            Vatadages are typical Buddhist structures found in Sri Lanka.</p>
        </div>
        <div class="thumbnail"> <a href="G02.html"><img src="images/Temple of the tooth.jpg" alt="" width="2000" class="cards"/></a>
          <h4>Temple of the Tooth</h4>
          <p class="tag">Kandy</p>
          <p class="text_column">Sri Dalada Maligawa is the Sinhalese name for this holy shrine. Famously called Temple of the Sacred Tooth Relic, it is touted to be the most sacred Buddhist temple in the whole world. 
            It houses the tooth of Buddha nestled in a golden chamber and is within the premises of the royal palace complex (formerly a princely state).</p>
        </div>
        <div class="thumbnail"> <a href="G03.html"><img src="images/Sri Maha Bodhi.jpg" alt="" width="2000" class="cards"/></a>
          <h4>Sri Maha Bodhi</h4>
          <p class="tag">Anuradhapura</p>
          <p class="text_column">Anuradhapura is a historical place in Sri Lanka as it houses several heritage monasteries, palaces and monuments. It is known for its vast dagobas or brick stupas, ancient ponds and pools and magnificent temples.</p>
        </div>
        <div class="thumbnail"> <a href="G04.html"><img src="images/sigiriya.jpg" alt="" width="2000" class="cards"/></a>
          <h4>Sigiriya Rock</h4>
          <p class="tag">Sri Lanka</p>
          <p class="text_column">Declared a world heritage site by UNESCO, Sigiriya serves as a fine example of ancient urban planning. Sigiriya is a significant site of the Cultural Triangle and perhaps is an iconic historical places in Sri Lanka.</p>
        </div>
        </div>
  </div>
  <!--End Gallery Section-->

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
            <h1 class="mb-5">Our Services</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5>Sri Lankan Tours</h5>
                        <p>Welcome to Sri Lankan Tours, your trusted gateway to the enchanting wonders of Sri Lanka. We are your dedicated partners in crafting memorable journeys, offering a diverse range of experiences that capture the essence of this teardrop-shaped paradise.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-paper-plane text-primary mb-4"></i>
                        <h5>Find Your Journey</h5>
                        <p>Welcome to our Destination Service, where dreams of travel come to life. We're here to guide you through the world's most captivating destinations, ensuring your adventures are nothing short of extraordinary.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user text-primary mb-4"></i>
                        <h5>Travel Guides</h5>
                        <p>Welcome to our Travel Guide Service, your trusted companion in exploring the world's wonders. We are dedicated to turning your travel dreams into reality by providing expert guidance, insider knowledge, and unforgettable experiences.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                        <h5>Transport Supply</h5>
                        <p>Welcome to our Transport Supply Service, your trusted provider of transportation solutions designed to make your journeys seamless and enjoyable. We are committed to delivering safe, reliable, and comfortable travel experiences to individuals, families, and businesses alike.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Service End -->

    <!-- Footer Start -->
    <?php
        include 'inc/footer.php';
    ?>
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