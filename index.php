<?php
include('admin/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>STARDUST HOTEL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

</head>

<body>
    <div class="w3_navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.php">STAR <span>DUST</span>
                            <p class="logo_w3l_agile_caption">Your Perfect Vacation</p>
                        </a></h1>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="menu menu--iris">
                        <ul class="nav navbar-nav menu__list">
                            <li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a>
                            </li>
                            <li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
                            <li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
                            <li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
                            <li class="menu__item"><a href="#rooms" class="menu__link scroll">Book Now</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>

        </div>
    </div>


    <div id="home" class="w3ls-banner">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides callbacks callbacks1" id="slider4">
                    <li>
                        <div class="w3layouts-banner-top">

                            <div class="container">
                                <div class="agileits-banner-info">
                                    <h4>STAR DUST</h4>
                                    <h3>Welcome to our hotel</h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3layouts-banner-top w3layouts-banner-top1">
                            <div class="container">
                                <div class="agileits-banner-info">
                                    <h4>STAR DUST</h4>
                                    <h3>Stay with friends & family</h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3layouts-banner-top w3layouts-banner-top2">
                            <div class="container">
                                <div class="agileits-banner-info">
                                    <h4>STAR DUST</h4>
                                    <h3>Elegant and friendly</h3>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="availability-agileits">
            <div class="col-md-12 book-form-left-w3layouts">
                <a href="reservation.php">
                    <h2>BOOK YOUR STAY NOW!</h2>
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>


    <div class="banner-bottom">
        <div class="container">
            <div class="agileits_banner_bottom">
                <h3 class="title-w3-agileits title-black-wthree">Enjoy an amazing stay</h3>
            </div>
            <div class="w3ls_banner_bottom_grids">
                <ul class="cbp-ig-grid">
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_road"></span>
                            <h4 class="cbp-ig-title">SPACIOUS ROOMS</h4>
                            <span class="cbp-ig-category">STAR DUST</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_cube"></span>
                            <h4 class="cbp-ig-title">BEAUTIFUL VIEW</h4>
                            <span class="cbp-ig-category">STAR DUST</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_users"></span>
                            <h4 class="cbp-ig-title">MODERN RESTAURANT</h4>
                            <span class="cbp-ig-category">STAR DUST</span>
                        </div>
                    </li>
                    <li>
                        <div class="w3_grid_effect">
                            <span class="cbp-ig-icon w3_ticket"></span>
                            <h4 class="cbp-ig-title">HIGH SPEED WIFI</h4>
                            <span class="cbp-ig-category">STAR DUST</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <section class="portfolio-w3ls" id="gallery">
        <h3 class="title-w3-agileits title-black-wthree">Gallery</h3>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="col-md-3 gallery-grid gallery1">
            <a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
                <div class="textbox">
                    <h4>STAR DUST</h4>
                    <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                </div>
            </a>
        </div>
        <div class="clearfix"> </div>
    </section>


    <div class="plans-section" id="rooms">
        <div class="container">
            <h3 class="title-w3-agileits title-black-wthree">Rooms</h3>
            <div class="priceing-table-main">
                <div class="col-md-3 price-grid">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="img/1.jpg" alt=" " class="img-responsive" />
                            <h4>Standard Room</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>$</span>100</h3>
                                <a href="reservation.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid ">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="img/4.jpg" alt=" " class="img-responsive" />
                            <h4>Deluxe Room</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>$</span>150</h3>
                                <a href="reservation.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid lost">
                    <div class="price-block agile">
                        <div class="price-gd-top">
                            <img src="img/5.jpg" alt=" " class="img-responsive" />
                            <h4>Jr Suite</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>$</span>200</h3>
                                <a href="reservation.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 price-grid wthree lost">
                    <div class="price-block agile">
                        <div class="price-gd-top ">
                            <img src="img/6.jpg" alt=" " class="img-responsive" />
                            <h4>Executive Suite</h4>
                        </div>
                        <div class="price-gd-bottom">
                            <div class="price-list">
                                <ul>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                            <div class="price-selet">
                                <h3><span>$</span>300</h3>
                                <a href="reservation.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>


    <section class="contact-w3ls" id="contact">
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
                <div class="contact-agileits">
                    <h4>Contact Us</h4>
                    <p class="contact-agile2">Sign Up For Our Newsletter</p>
                    <form method="post" name="sentMessage" id="contactForm">
                        <div class="control-group form-group">

                            <label class="contact-p1">Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                            <p class="help-block"></p>

                        </div>
                        <div class="control-group form-group">

                            <label class="contact-p1">Phone:</label>
                            <input type="tel" class="form-control" name="phone" id="phone">
                            <p class="help-block"></p>

                        </div>
                        <div class="control-group form-group">

                            <label class="contact-p1">Email:</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <p class="help-block"></p>

                        </div>


                        <input type="submit" name="sub" value="Send Now" class="btn btn-primary">
                    </form>
                    <?php
                    if (isset($_POST['sub'])) {
                        $name = $_POST['name'];
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $sql = "INSERT INTO `contact`(`name`, `phone`, `email`,`data_inscriere`) VALUES ('$name','$phone','$email',now())";


                        if (mysqli_query($conn, $sql))
                            echo "OK";

                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
                <h4>Connect With Us</h4>
                <p class="contact-agile1"><strong>Phone :</strong>0765464684684</p>
                <p class="contact-agile1"><strong>Email :</strong> <a
                        href="mailto:hotel-stardust@gmail.com">hotel-stardust@gmail.com</a></p>
                <p class="contact-agile1"><strong>Address :</strong> Somewhere in Alba Iulia</p>

                <div class="social-bnr-agileits footer-icons-agileinfo">
                    <ul class="social-icons3">
                        <li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
                        <li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
                        <li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>
                    </ul>
                </div>
                <iframe width="600" height="500" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=Universitatea%20Alba%20Iulia&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>



            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>


    <link rel="stylesheet" href="css/swipebox.css">
    <script src="js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
        jQuery(function ($) {
            $(".swipebox").swipebox();
        });
    </script>


    <script src="js/responsiveslides.min.js"></script>
    <script>
        $(function () {
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
    </script>

    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>