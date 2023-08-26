<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/HeuUwU.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->

    <title>Education</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--CSS
        ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- my CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    include_once 'head_foot/1header.php';
    ?>

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-9 col-md-12">
                    <h1 class="text-uppercase">
                        We Ensure better book
                        for a better world
                    </h1>
                    <p class="pt-10 pb-10">
                        Read the book if you want to pass the prj301 subject of Mr. Tien aka TienPro <br>
                        -HeuUwU-
                    </p>
                    <a href="reviewBook" class="primary-btn text-uppercase">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>William D. Tan</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                "No relationship is perfect, ever"
                            </p>
                            <button class="primary-btn text-uppercase">Show love</button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>MaNguCaDe Gandhieu</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                "Cherish the heart below, for I spent the entire evening coding it."
                            </p>
                            <button class="primary-btn text-uppercase">Show love</button>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4> J.K. VanBeo</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                "Want to love a man who knows how to pamper<br>
                                Don't love Hieu"
                            </p>
                            <button class="primary-btn text-uppercase">Show love</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- Start popular-course Area -->
    <section class="popular-course-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Popular Book we offer</h1>
                        <p>There is a moment in the life of any aspiring.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-popular-carusel">

                    <?php foreach ($popular as $key => $value) : ?>
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <a href="bookDetail?id=<?php echo $value->proId; ?>">
                                        <img class="img-fluid" src="http://localhost/Book_Review/Book_Review_Code_PHP/img/book/<?php echo $value->image; ?>">
                                    </a>
                                </div>
                                <div class=" meta d-flex justify-content-between">
                                    <p><span class="lnr lnr-users"></span> <?php echo $value->view; ?></p>
                                </div>
                            </div>
                            <div class="details">
                                <a href="bookDetail?id=<?php echo $value->proId; ?>">
                                    <h4>
                                        <?php echo $value->name; ?>
                                    </h4>
                                </a>
                                <p class="limited-words">
                                    <?php echo $value->content; ?>
                                </p>
                                <div class="meta d-flex justify-content-between">
                                    <p><span class="lnr lnr-users"></span> <?php echo $value->view; ?> </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
            <!-- End popular-course Area -->

            <!-- Start fiction Book Area -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Fiction Book we offer</h1>
                        <p>Exploring the realms of fiction allows me to escape reality and delve into a realm of endless possibilities.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-popular-carusel">

                    <?php foreach ($fiction as $key => $value) : ?>
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <a href="bookDetail?id=<?php echo $value->proId; ?>">
                                        <img class="img-fluid" src="http://localhost/Book_Review/Book_Review_Code_PHP/img/book/<?php echo $value->image; ?>">
                                    </a>
                                </div>
                                <div class=" meta d-flex justify-content-between">
                                    <p><span class="lnr lnr-users"></span> <?php echo $value->view; ?></p>
                                </div>
                            </div>
                            <div class="details">
                                <a href="bookDetail?id=<?php echo $value->proId; ?>">
                                    <h4>
                                        <?php echo $value->name; ?>
                                    </h4>
                                </a>
                                <p class="limited-words">
                                    <?php echo $value->content; ?>
                                </p>
                                <div class="meta d-flex justify-content-between">
                                    <p><span class="lnr lnr-users"></span> <?php echo $value->view; ?> </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
            <!-- End fiction Book Area -->

            <!-- Start Science Book Area -->
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Science Book we offer</h1>
                        <p>Science enlightens and educates, offering a glimpse into real-life experiences, knowledge, and events.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-popular-carusel">

                    <?php foreach ($science as $key => $value) : ?>
                        <div class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <a href="bookDetail?id=<?php echo $value->proId; ?>">
                                        <img class="img-fluid" src="http://localhost/Book_Review/Book_Review_Code_PHP/img/book/<?php echo $value->image; ?>">
                                    </a>
                                </div>
                                <div class=" meta d-flex justify-content-between">
                                    <p><span class="lnr lnr-users"></span> <?php echo $value->view; ?></p>
                                </div>
                            </div>
                            <div class="details">
                                <a href="bookDetail?id=<?php echo $value->proId; ?>">
                                    <h4>
                                        <?php echo $value->name; ?>
                                    </h4>
                                </a>
                                <p class="limited-words">
                                    <?php echo $value->content; ?>
                                </p>
                                <div class="meta d-flex justify-content-between">
                                    <p><span class="lnr lnr-users"></span> <?php echo $value->view; ?> </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
    </section>
    <!-- End Science Book Area -->

    <!-- start footer Area -->
    <?php
    include_once 'head_foot/2footer.php';
    ?>

    <!-- End footer Area -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>