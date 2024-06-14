<?php
session_start();
$page = "profile";
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
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body {
            background: #f5f5f5;
        }

        /* ===========
    Profile
    =============*/
        .card-box {
            padding: 20px;
            box-shadow: 0 2px 15px 0 rgba(0, 0, 0, 0.06), 0 2px 0 0 rgba(0, 0, 0, 0.02);
            -webkit-border-radius: 5px;
            border-radius: 5px;
            -moz-border-radius: 5px;
            background-clip: padding-box;
            margin-bottom: 20px;
            background-color: #ffffff;
        }

        .header-title {
            text-transform: uppercase;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.04em;
            line-height: 16px;
            margin-bottom: 8px;
        }

        .social-links li a {
            -webkit-border-radius: 50%;
            background: #EFF0F4;
            border-radius: 50%;
            color: #7A7676;
            display: inline-block;
            height: 30px;
            line-height: 30px;
            text-align: center;
            width: 30px;
        }

        /* ===========
    Gallery
    =============*/
        .portfolioFilter a {
            -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
            -moz-transition: all 0.3s ease-out;
            -ms-transition: all 0.3s ease-out;
            -o-transition: all 0.3s ease-out;
            -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
            -webkit-transition: all 0.3s ease-out;
            box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.1);
            color: #333333;
            padding: 5px 10px;
            display: inline-block;
            transition: all 0.3s ease-out;
        }

        .portfolioFilter a:hover {
            background-color: #228bdf;
            color: #ffffff;
        }

        .portfolioFilter a.current {
            background-color: #228bdf;
            color: #ffffff;
        }

        .thumb {
            background-color: #ffffff;
            border-radius: 3px;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.1);
            margin-top: 30px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 10px;
            width: 100%;
        }

        .thumb-img {
            border-radius: 2px;
            overflow: hidden;
            width: 100%;
        }

        .gal-detail h4 {
            margin: 16px auto 10px auto;
            width: 80%;
            white-space: nowrap;
            display: block;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .gal-detail .ga-border {
            height: 3px;
            width: 40px;
            background-color: #228bdf;
            margin: 10px auto;
        }

        .tabs-vertical-env .tab-content {
            background: #ffffff;
            display: table-cell;
            margin-bottom: 30px;
            padding: 30px;
            vertical-align: top;
        }

        .tabs-vertical-env .nav.tabs-vertical {
            display: table-cell;
            min-width: 120px;
            vertical-align: top;
            width: 150px;
        }

        .tabs-vertical-env .nav.tabs-vertical li.active>a {
            background-color: #ffffff;
            border: 0;
        }

        .tabs-vertical-env .nav.tabs-vertical li>a {
            color: #333333;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-weight: 500;
            white-space: nowrap;
        }

        .nav.nav-tabs>li.active>a {
            background-color: #ffffff;
            border: 0;
        }

        .nav.nav-tabs>li>a {
            background-color: transparent;
            border-radius: 0;
            border: none;
            color: #333333 !important;
            cursor: pointer;
            line-height: 50px;
            font-weight: 500;
            padding-left: 20px;
            padding-right: 20px;
            font-family: 'Roboto', sans-serif;
        }

        .nav.nav-tabs>li>a:hover {
            color: #228bdf !important;
        }

        .nav.tabs-vertical>li>a {
            background-color: transparent;
            border-radius: 0;
            border: none;
            color: #333333 !important;
            cursor: pointer;
            line-height: 50px;
            padding-left: 20px;
            padding-right: 20px;
        }

        .nav.tabs-vertical>li>a:hover {
            color: #228bdf !important;
        }

        .tab-content {
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
            color: #777777;
        }

        .nav.nav-tabs>li:last-of-type a {
            margin-right: 0px;
        }

        .nav.nav-tabs {
            border-bottom: 0;
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        }

        .navtab-custom li {
            margin-bottom: -2px;
        }

        .navtab-custom li a {
            border-top: 2px solid transparent !important;
        }

        .navtab-custom li.active a {
            border-top: 2px solid #228bdf !important;
        }

        .nav-tab-left.navtab-custom li a {
            border: none !important;
            border-left: 2px solid transparent !important;
        }

        .nav-tab-left.navtab-custom li.active a {
            border-left: 2px solid #228bdf !important;
        }

        .nav-tab-right.navtab-custom li a {
            border: none !important;
            border-right: 2px solid transparent !important;
        }

        .nav-tab-right.navtab-custom li.active a {
            border-right: 2px solid #228bdf !important;
        }

        .nav-tabs.nav-justified>.active>a,
        .nav-tabs.nav-justified>.active>a:hover,
        .nav-tabs.nav-justified>.active>a:focus,
        .tabs-vertical-env .nav.tabs-vertical li.active>a {
            border: none;
        }

        .nav-tabs>li.active>a,
        .nav-tabs>li.active>a:focus,
        .nav-tabs>li.active>a:hover,
        .tabs-vertical>li.active>a,
        .tabs-vertical>li.active>a:focus,
        .tabs-vertical>li.active>a:hover {
            color: #228bdf !important;
        }

        .progress.progress-sm .progress-bar {
            font-size: 8px;
            line-height: 5px;
        }
    </style>
</head>

<body>
    <!-- Navbar & Hero Start -->
    <?php
    include 'inc/navbar.php';
    ?>
    <!-- Navbar & Hero End -->
    <?php

    $email = $_SESSION["email"];
    $usertype = $_SESSION["usertype"];

    if ($usertype == "tourist") {
        $table = "users";
    } elseif ($usertype == "transportProvider") {
        $table = "transports";
    } else {
        $table = "guide";
    }

    $conn = new mysqli("Localhost", "root", "", "travel");

    $sql = "SELECT * FROM $table where email='$email'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $user_id = $row["id"];
        $user_name = $row["username"];
        $firstName = $row["firstName"];
        $lastName = $row["lastName"];
        $user_email = $row["email"];
        $user_phone = $row["phoneNumber"];
        $gender = $row["gender"];

        $location = isset($row["location"]) ? $row["location"] : "";
        $vehicle = isset($row["vehicle"]) ? $row["vehicle"] : "";
        $vehicleNo = isset($row["vehicleNo"]) ? $row["vehicleNo"] : "";
        $pic = isset($row["pic"]) ? $row["pic"] : "";
        $descriptions = isset($row["descriptions"]) ? $row["descriptions"] : "";
        $profilepic = isset($row["profilepic"]) ? $row["profilepic"] : "";

        $conn->close();
    } else {

        exit();
    }

    ?>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="text-center card-box">
                    <div class="member-card">
                        <div class="thumb-xl member-thumb m-b-10 center-block">

                            <?php if ($table == "guide") { ?>
                                <img src="action/images/<?php echo $profilepic ?>" class="img-circle img-thumbnail"
                                    alt="profile-image" height="200px" width="200px">
                            <?php } ?>

                            <?php if ($table == "transports") { ?>
                                <img src="action/images/<?php echo $pic ?>" class="img-circle img-thumbnail"
                                    alt="profile-image"  height="200px" width="200px">
                            <?php } ?>

                        </div>
                        <div class>
                            <h4 class="m-b-5">
                                <?php echo $user_name ?>
                            </h4>
                        </div>
                        <div class="text-left m-t-40">
                            <p class="text-muted font-13"><strong>Full Name :</strong> <span class="m-l-15">
                                    <?php echo $firstName ?>
                                    <?php echo $lastName ?>
                                </span></p>
                            <p class="text-muted font-13"><strong>Mobile :</strong><span class="m-l-15">
                                    <?php echo $user_phone ?>
                                </span></p>
                            <p class="text-muted font-13"><strong>Email :</strong> <span class="m-l-15">
                                    <?php echo $user_email ?>
                                </span></p>
                            <p class="text-muted font-13"><strong>Gender :</strong> <span class="m-l-15">
                                    <?php echo $gender ?>
                                </span></p>
                            <?php if (!empty($location)) { ?>
                                <p class="text-muted font-13"><strong>Location :</strong> <span class="m-l-15">
                                        <?php echo $location ?>
                                    </span></p>
                            <?php } ?>


                            <?php
                            if ($usertype != 'tourist') {
                                $conn = new mysqli("Localhost", "root", "", "travel");
                                $sql = "SELECT * FROM language where email='$email'";
                                $count = 1;
                                //'$_REQUEST[id]'
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {


                                    ?>
                                    <p class="text-muted font-13"><strong>Language
                                            <?php echo $count; ?> :
                                        </strong> <span class="m-l-15">
                                            <?php echo $row["language"] ?>
                                        </span></p>

                                    <?php $count++;
                                }
                            } ?>





                        </div>
                        <ul class="social-links list-inline m-t-30">
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                <div class>
                    <div class>
                        <ul class="nav nav-tabs navtab-custom">
                            <li class>
                                <a href="#home" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-user"></i></span>
                                    <span class="hidden-xs">ABOUT ME</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#profile" data-toggle="tab" aria-expanded="true">
                                    <span class="visible-xs"><i class="fa fa-photo"></i></span>
                                    <span class="hidden-xs">MESSAGE</span>
                                </a>
                            </li>
                            <li class>
                                <a href="#settings" data-toggle="tab" aria-expanded="false">
                                    <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                    <span class="hidden-xs">SETTINGS</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="home">
                                <div class="m-t-30">

                                    <?php if ($table == "guide") { ?>
                                        <h4>I Am Guide</h4>
                                        <p class="m-b-5">
                                            <?php echo $descriptions ?>
                                        </p>

                                        <h4>Booked Date</h4>
                                        <?php
                                        $conn = new mysqli("Localhost", "root", "", "travel");
                                        $sql = "SELECT * FROM bookings where bookingto ='$email'";
                                        //'$_REQUEST[id]'
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <p class="m-b-5">
                                                <?php echo $row['date']; ?> = Phone Number
                                                <?php echo $row['userphone']; ?>
                                            </p>
                                        <?php } ?>
                                    <?php } ?>

                                    <?php if ($table == "transports") { ?>
                                        <h4>I Am Transport Providers</h4>
                                        <p class="m-b-5">Vehicle Type :-
                                            <?php echo $vehicle ?>
                                        </p>
                                        <p class="m-b-5">Vehicle Number :-
                                            <?php echo $vehicleNo ?>
                                        </p>

                                        <h4>Booked Date</h4>
                                        <?php
                                        $conn = new mysqli("Localhost", "root", "", "travel");
                                        $sql = "SELECT * FROM bookings where bookingto ='$email'";
                                        //'$_REQUEST[id]'
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <p class="m-b-5">
                                                <?php echo $row['date']; ?> = Phone Number
                                                <?php echo $row['userphone']; ?>
                                            </p>
                                        <?php } ?>

                                    <?php } ?>

                                    <?php if ($table == "users") { ?>
                                        <h4>I Am Tourist</h4>
                                        <h4>Your Booking date and Contact Number</h4>
                                        <?php
                                        $conn = new mysqli("Localhost", "root", "", "travel");
                                        $sql = "SELECT * FROM bookings where bookingfrom ='$email'";
                                        //'$_REQUEST[id]'
                                        $result = $conn->query($sql);
                                        while ($row = $result->fetch_assoc()) {
                                            ?>
                                            <p class="m-b-5">
                                                <?php echo $row['date']; ?> = Phone Number
                                                <?php echo $row['phone']; ?>
                                            </p>
                                        <?php } ?>

                                    <?php } ?>




                                </div>
                            </div>
                            <div class="tab-pane active" id="profile">
                                <div class="row">
                                    <?php
                                    $conn = new mysqli("Localhost", "root", "", "travel");
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $email = $_SESSION["email"];
                                    $sql = "SELECT * FROM massage WHERE (toEmail='$email' AND usertype!='') OR (fromEmail='$email' AND usertype!='')";

                                    $result = $conn->query($sql);

                                    if ($result === false) {
                                        die("Query failed: " . $conn->error);
                                    }

                                    while ($row = $result->fetch_assoc()) {
                                        $from = ($row['toEmail'] == $email) ? $row["fromEmail"] : $row["toEmail"];

                                        $con = new mysqli("Localhost", "root", "", "travel");

                                        $sql1 = "SELECT username FROM users WHERE email = '$from'";
                                        $result1 = $con->query($sql1);

                                        $sql2 = "SELECT username FROM guide WHERE email = '$from'";
                                        $result2 = $con->query($sql2);

                                        $sql3 = "SELECT username FROM transports WHERE email = '$from'";
                                        $result3 = $con->query($sql3);

                                        if ($result1->num_rows > 0) {
                                            $row1 = $result1->fetch_assoc();
                                            $name = $row1["username"];
                                            $role = 'Turist';
                                        } elseif ($result2->num_rows > 0) {
                                            $row1 = $result2->fetch_assoc();
                                            $name = $row1["username"];
                                            $role = 'Guid';
                                        } elseif ($result3->num_rows > 0) {
                                            $row1 = $result3->fetch_assoc();
                                            $name = $row1["username"];
                                            $role = 'Transport';
                                        }
                                        ?>

                                        <div class="col-sm-4">
                                            <div class="gal-detail thumb">
                                                <form action="massage.php" method="post" enctype="multipart/form">
                                                    <input type="hidden" name="replyemail" value="<?= $from ?>">
                                                    <h4 class="text-center">
                                                        <?= $name ?>
                                                    </h4>
                                                    <h6 class="text-center" style='opacity: 0.5;'>
                                                        <?= $from ?>
                                                    </h6>
                                                    <div class="ga-border"></div>
                                                    <p class="text-muted text-center"><small>
                                                            <?= $role ?>
                                                        </small></p>
                                                    <input type="submit" value="View Massage" class="btn btn-primary"
                                                        style="margin-left:75px;">
                                                </form>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    $conn->close();
                                    ?>

                                </div>

                            </div>
                            <div class="tab-pane" id="settings">
                                <form role="form" action="action/update.php" method="post" enctype="multipart/form">
                                    <input type="hidden" value="<?php echo $user_id; ?>" id="FullName"
                                        class="form-control" name="id">
                                    <input type="hidden" value="<?php echo $table; ?>" id="FullName"
                                        class="form-control" name="table">
                                    <input type="hidden" value="<?php echo $email; ?>" id="FullName"
                                        class="form-control" name="email">
                                    <div class="form-group">
                                        <label for="FullName">User Name</label>
                                        <input type="text" value="<?php echo $user_name ?>" id="FullName"
                                            class="form-control" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="FullName">Phone Number</label>
                                        <input type="text" value="<?php echo $user_phone ?>" id="FullName"
                                            class="form-control" name="phoneNumber">
                                    </div>
                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input type="password" placeholder="6 - 15 Characters" id="Password"
                                            class="form-control" name="password1">
                                    </div>
                                    <div class="form-group">
                                        <label for="RePassword">Re-Password</label>
                                        <input type="password" placeholder="6 - 15 Characters" id="RePassword"
                                            class="form-control" name="password2">
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light w-md"
                                        type="submit">Update</button>
                                </form>

                                <?php if ($usertype != 'tourist') { ?>
                                    <form role="form" action="action/language.php" method="post" enctype="multipart/form"
                                        style="margin-top: 25px;">
                                        <h4>Add Your Languages</h4>
                                        <input type="hidden" value="<?php echo $email; ?>" id="FullName"
                                            class="form-control" name="email">
                                        <div class="form-group">
                                            <label for="FullName">Language</label>
                                            <input type="text" id="FullName" class="form-control" name="language">
                                        </div>
                                        <button class="btn btn-primary waves-effect waves-light w-md"
                                            type="submit">Add</button>
                                    </form>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">

    </script>


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
                    <p> Subscribe now to our newsletter and embark on a journey of discovery. Enter your email below to
                        join our travel community.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
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
