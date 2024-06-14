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

    <!-- Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/guideStyle.css" role="stylesheet">
</head>

<body>
   
    <!-- Navbar & Hero Start -->
    <?php
    include 'inc/navbar.php';
    ?>
    <!-- Navbar & Hero End -->

    <?php       
                if(isset($_SESSION["email"])){
                    $fromemail=$_SESSION["email"];
                    $phoneNumber=$_SESSION["phoneNumber"];
                }
                $email=$_REQUEST["email"];
                $conn=new mysqli("Localhost","root","","travel");
                $sql = "SELECT * FROM guide where email='$email'";
                //'$_REQUEST[id]'
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc())
                {
                    
    ?>

    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                    <h3 class="dark-color">About <?php echo $row["firstName"] ?> <?php echo $row["lastName"] ?></h3>
                    <h6 class="theme-color lead">Travel Guider</h6>
                    <p> <?php echo $row["descriptions"] ?></p>
                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Email</label>
                                <p><?php echo $row["email"] ?></p>
                            </div>
                            <div class="media">
                                <label>Phone Number</label>
                                <p><?php echo $row["phoneNumber"] ?></p>
                            </div>
                            <div class="media">
                                <label>location</label>
                                <p><?php echo $row["location"] ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>Gender</label>
                                <p><?php echo $row["gender"] ?></p>
                            </div>

                            
                            <?php
                                $sql2 = "SELECT * FROM language WHERE email = '$email'";
                                $count = 1; // Initialize a counter
                                $result2 = $conn->query($sql2);

                                while ($row2 = $result2->fetch_assoc()) {
                                    // Check if the "language" column is not empty
                                    if (!empty($row2["language"])) {
                                ?>
                                        <div class="media">
                                            <label>Language <?php echo $count; ?></label>
                                            <p><?php echo $row2["language"]; ?></p>
                                        </div>
                                <?php
                                    }
                                    $count++; // Increment the counter
                                }
                            ?>

                        </div>
                    </div>
                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <form action="action/booking.php" method="post">
                                
                                <input type="hidden" name="phone" value="<?php echo $row["phoneNumber"]; ?>">
                                <input type="hidden" name="toemail" value="<?php echo $row["email"]; ?>">
                                <input type="hidden" name="fromemail" value="<?php echo $fromemail; ?>">
                                <input type="hidden" name="userphone" value="<?php echo $phoneNumber; ?>">

                                <label>PickUp :-</label>
                                <input type="text" name="where" class="form-control" required>

                                <label>Where To :-</label>
                                <input type="text" name="whereto" class="form-control" required>

                                <label>Hire Date :-</label>
                                <input type="date" name="hiredate" class="form-control" min="<?php echo date('Y-m-d'); ?>" required>
                                <p></p>
                                <?php

                                    if (isset($_SESSION["email"])) {
                                        echo '<input type="submit" value="Hire" class="btn btn-primary">';
                                    } else {
                                        echo '<input type="submit" value="Hire" class="btn btn-primary" onclick="showAlert()">';
                                        echo '<script>function showAlert() { alert("Please log in first."); }</script>';
                                    }
                                ?>

                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <form action="action/massagesave.php">
                                <input type="hidden" name="toemail" value="<?php echo $row["email"] ?>">
                                <input type="hidden" name="firstName" value="<?php echo $row["firstName"] ?>">
                                <textarea name="massage" id="" cols="30" rows="5" required></textarea>
                                <?php

                                    if (isset($_SESSION["email"])) {
                                        echo '<input type="submit" class="btn btn-primary" value="Massage">';
                                    } else {
                                        echo '<input type="submit" class="btn btn-primary" value="Massage" onclick="showAlert()">';
                                        echo '<script>function showAlert() { alert("Please log in first."); }</script>';
                                    }
                                ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="about-avatar">
                    <img src="action/images/<?php echo $row["profilepic"]; ?>" title alt style="width:100%;">
                    </div>
                    </div>
                    </div>
                    <br>
                    <div class="counter">
                    <div class="row">
                    <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                    <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                    <p class="m-0px font-w-600">Happy Clients</p>
                    </div>
                    </div>
                    <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                    <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                    <p class="m-0px font-w-600">Project Completed</p>
                    </div>
                    </div>
                    <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                    <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                    <p class="m-0px font-w-600">Photo Capture</p>
                    </div>
                    </div>
                    <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                    <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                    <p class="m-0px font-w-600">Telephonic Talk</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>


    <?php
                $email=$_REQUEST["email"];
                $conn=new mysqli("Localhost","root","","travel");
                $sql = "SELECT * FROM transports where email='$email'";
                //'$_REQUEST[id]'
                $result = $conn->query($sql);
                while($row=$result->fetch_assoc())
                {
                    
    ?>
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                    <h3 class="dark-color">About <?php echo $row["firstName"] ?> <?php echo $row["lastName"] ?></h3>
                    <h6 class="theme-color lead">Transport Providers</h6>
                    <p>Vehicle Type :- <mark><?php echo $row["vehicle"] ?></mark></p>
                    <p>Vehicle Number :- <mark><?php echo $row["vehicleNo"] ?></mark></p>
                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Email</label>
                                <p><?php echo $row["email"] ?></p>
                            </div>
                            <div class="media">
                                <label>Phone Number</label>
                                <p><?php echo $row["phoneNumber"] ?></p>
                            </div>
                            <div class="media">
                                <label>location</label>
                                <p><?php echo $row["location"] ?></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>Gender</label>
                                <p><?php echo $row["gender"] ?></p>
                            </div>

                            <?php
                                $sql2 = "SELECT * FROM language WHERE email = '$email'";
                                $count = 1; // Initialize a counter
                                $result2 = $conn->query($sql2);

                                while ($row2 = $result2->fetch_assoc()) {
                                    // Check if the "language" column is not empty
                                    if (!empty($row2["language"])) {
                                ?>
                                        <div class="media">
                                            <label>Language <?php echo $count; ?></label>
                                            <p><?php echo $row2["language"]; ?></p>
                                        </div>
                                <?php
                                    }
                                    $count++; // Increment the counter
                                }
                            ?>

                            
                        </div>
                    </div>
                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <form action="action/booking.php" method="post">
                                
                                <input type="hidden" name="phone" value="<?php echo $row["phoneNumber"]; ?>">
                                <input type="hidden" name="toemail" value="<?php echo $row["email"]; ?>">
                                <input type="hidden" name="fromemail" value="<?php echo $fromemail; ?>">

                                <label>Where :-</label>
                                <input type="text" name="where" class="form-control" required>

                                <label>Where To :-</label>
                                <input type="text" name="whereto" class="form-control" required>

                                <label>Hire Date :-</label>
                                <input type="date" name="hiredate" class="form-control" min="<?php echo date('Y-m-d'); ?>" required>
                                <p></p>
                                <?php

                                    if (isset($_SESSION["email"])) {
                                        echo '<input type="submit" value="Hire" class="btn btn-primary">';
                                    } else {
                                        echo '<input type="submit" value="Hire" class="btn btn-primary" onclick="showAlert()">';
                                        echo '<script>function showAlert() { alert("Please log in first."); }</script>';
                                    }
                                ?>

                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <form action="action/massagesave.php">
                                <input type="hidden" name="toemail" value="<?php echo $row["email"] ?>">
                                <input type="hidden" name="firstName" value="<?php echo $row["firstName"] ?>">
                                <textarea name="massage" id="" cols="30" rows="5" required></textarea>
                                <?php

                                    if (isset($_SESSION["email"])) {
                                        echo '<input type="submit" class="btn btn-primary" value="Massage">';
                                    } else {
                                        echo '<input type="submit" class="btn btn-primary" value="Massage" onclick="showAlert()">';
                                        echo '<script>function showAlert() { alert("Please log in first."); }</script>';
                                    }
                                ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="about-avatar">
                    <img src="action/images/<?php echo $row["pic"]; ?>" title alt>
                    </div>
                    </div>
                    </div>
                    <br>
                    <div class="counter">
                    <div class="row">
                    <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                    <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                    <p class="m-0px font-w-600">Happy Clients</p>
                    </div>
                    </div>
                    <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                    <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                    <p class="m-0px font-w-600">Project Completed</p>
                    </div>
                    </div>
                    <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                    <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                    <p class="m-0px font-w-600">Photo Capture</p>
                    </div>
                    </div>
                    <div class="col-6 col-lg-3">
                    <div class="count-data text-center">
                    <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                    <p class="m-0px font-w-600">Telephonic Talk</p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>
        
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
