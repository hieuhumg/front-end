<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Enterprise software Developement">
    <meta name="description" content="Enterprise software Developement">
    <meta property="og:title" content="Enterprise software Developement">
    <meta property="og:description" content="Enterprise software Developement">
    <meta property="og:url" content="Enterprise software Developement">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Enterprise software Developement">
    <meta property="og:image" content="image/banner.jpg">
    <meta property="og:image:height" content="300">
    <meta property="og:image:width" content="300">
    <meta name="twitter:title" content="Enterprise software Developement">
    <meta name="twitter:description" content="Enterprise software Developement">
    <title>Contact</title>
    <link rel="icon" href="images/logo2.png">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:200,200i,300,300i,400,400i,500,500i,600,600i,700&display=swap" rel="stylesheet">
    <link media="all" type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link media="all" type="text/css" rel="stylesheet" href="css/font-awesome.min.css">-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="shadow"></div>
<div class="show"></div>
<!-- wrap -->
<div class="wrapper">
    <!-- header -->
    <div class="header">
        <div class="menu-mobile">
            <ul>
                <li>
                    <a href="contact-us" class="btn-mb">Get in touch</a>
                </li>
                <i class="fa fa-times close" aria-hidden="true"></i>
                <li>
                    <a href="/">Homepage</a>
                </li>
                <li>
                    <a href="about-us">About us</a>
                </li>
                <li>
                    <a href="services">Services</a>
                </li>
                <li>
                    <a href="industry">Industry</a>
                </li>
            </ul>
        </div>
        <section class="navigation clearfix">
            <div class="container">
                <div class="brand">
                    <a href="/"><img src="images/logo.png" alt=""></a>
                </div>

                <nav>
                    <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                    <ul class="nav-list">
                        <li>
                            <a href="/">Homepage</a>
                        </li>
                        <li>
                            <a href="about-us">About us</a>
                        </li>
                        <li>
                            <a href="services">Services</a>
                        </li>
                        <li>
                            <a href="industry">Industry</a>
                        </li>
                        <li>
                            <a href="contact-us" class="btn-ct">Get in touch</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </div>
    <!-- //header -->
    <!-- about-banner, service-banner -->
    <div class="about-banner services-banner">
        <div class="about-images">
            <img src="images/contact.jpg" alt="">
        </div>
        <div class="container">
            <div class="about-title">
                <h1>
                    Contact us
                </h1>
                <p>Find out how Axe-Mob can help you and your business reach new levels of success.
                    We would be happy to discuss the possibilities at your convenience.</p>
            </div>
        </div>
    </div>
    <!-- //about banner -->
    <!-- mission -->
    <section class="mission">
        <div class="img-background">
            <img src="images/Bitmap.jpg" alt="">
        </div>
        <div class="container">
            <div class="c-title text-center mx-auto">
                <h4>Let’s have a conversation</h4>
            </div>
            <div class="card-contact text-center">
                <div class="row">
                    <div class="col-12 col-sm-4">
                        <div class="card-img">
                            <img src="images/Mail.png" alt="">
                        </div>
                        <h5>contact@axe-mob.com </h5>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="card-img">
                            <img src="images/Phone.png" alt="">
                        </div>
                        <h5>+1 899 123 456</h5>
                    </div>
                    <div class="col-12 col-sm-4">
                        <div class="card-img">
                            <img src="images/Place.png" alt="">
                        </div>
                        <h5> 20 S Santa Cruz Ave #300, Los Gatos, CA 95030, USA</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact-->
    <?php include "include/contact_form.php"; ?>
    <!--//contact-->
    <!-- footer -->
    <?php include "include/footer.php"; ?>
    <!-- //footer -->
</div>
<!-- //wrapper -->

<script src="js/jquery-3.4.1.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="js/sweetalert2/sweet-alert.init.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        //Khi bàn phím được nhấn và thả ra thì sẽ chạy phương thức này
        $("#formContact").validate({
            rules: {
                username: "required",
                email:{
                    required:true,
                    email:true,
                },
                phone: {
                    required: true,
                    number: true
                }
            }

        });
    });
</script>
</body>
</html>