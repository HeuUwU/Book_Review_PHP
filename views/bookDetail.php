<?php
session_start();
//require '../constant.php';

// require context
require_once('../Context/DBContext.php');

// require models
require_once('../Models/Account_Models.php');
require_once('../Models/Product_Models.php');
require_once('../Models/Comment_Models.php');

// require controllers
require_once '../Controllers/signIn_Controller.php';

if (isset($_GET['id'])) {
    $product = new Product($_GET['id'], null, null, null, null, null, null);
    $comment = new Comment(NULL, null, ['id'], null, null, null, null);

    $detail = $product->getAllListProductById();
    $numComment = $comment->getComId();
    $listComment = $comment->getListCommentById();
}
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!--
        CSS
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
</head>

<body>
    <?php
    include_once 'head_foot/1header.php';
    ?>
    <!-- #header -->

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Book Details Page
                    </h1>
                    <p class="text-white link-nav"><a href="home">Home </a> <span class="lnr lnr-arrow-right"></span><a href="reviewBook">Review Book </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Book Details</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post row">

                        <?php foreach ($detail as $key => $value) : ?>
                            <div class="col-lg-12">
                                <div class="feature-img">
                                    <img class="img-fluid" src="http://localhost/Book_Review/Book_Review_Code_PHP/img/book/<?php echo $value->image; ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-3  col-md-3 meta-details">
                                <ul class="tags">
                                    <li><a href="#">Food,</a></li>
                                    <li><a href="#">Technology,</a></li>
                                    <li><a href="#">Politics,</a></li>
                                    <li><a href="#">Lifestyle</a></li>
                                </ul>

                                <div class="user-details row">
                                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">MaNguCaDe GandHeu</a> <span class="lnr lnr-user"></span></p>
                                    <p class="view col-lg-12 col-md-12 col-6"><a href="#"><?php echo $value->view ?></a> <span class="lnr lnr-eye"></span></p>
                                    <p class="comments col-lg-12 col-md-12 col-6"><a href="#">
                                            <?php
                                            if (isset($numComment)) echo $numComment;
                                            else echo 0;
                                            ?>
                                        </a> <span class="lnr lnr-bubble"></span></p>
                                    <ul class="social-links col-lg-12 col-md-12 col-6">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <h3 class="mt-20 mb-20"><?php echo $value->name; ?></h3>
                                <p class="excert">
                                    <?php echo $value->content; ?>
                                </p>
                            </div>
                        <?php endforeach ?>
                    </div>

                    <div class="comments-area">
                        <h4><?php
                            if (isset($numComment)) echo $numComment;
                            else echo 0;
                            ?> Comments</h4>
                        <div class="comment-list left-padding">

                            <?php foreach ($listComment as $key => $value) : ?>

                                <div class="single-comment justify-content-between d-flex clearfix">
                                    <div class="user justify-content-between d-flex">
                                        <div class="user-item">
                                            <div class="thumb">
                                                <img id="image" src="img/blog/c1.jpg" alt="">
                                            </div>

                                            <div class="desc">
                                                <div class="comment-content">
                                                    <h5><a href="#"><?php echo $value->content ?></a></h5>
                                                    <div class="rating">
                                                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                            <?php if ($value->rating >= $i) { ?>
                                                                <i class="fas fa-star checked"></i>
                                                            <?php } else { ?>
                                                                <i class="fa-regular fa-star"></i>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    </div>

                                                    <p class="comment">
                                                        <?php echo $value->content ?>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            <?php endforeach ?>

                        </div>

                    </div>
                    <div class="comment-form">
                        <?php if (isset($_SESSION["name"])) {
                            echo '<h4>Leave a Comment</h4>
                            <form action="bookDetail" method="post">
                                <div class="rating">
                                    <span class="rating-text">Rating: </span>
                                    <span class="stars">
                                        <input type="radio" name="rating" value="1" class="fas fa-star">
                                        <input type="radio" name="rating" value="2" class="fas fa-star">
                                        <input type="radio" name="rating" value="3" class="fas fa-star">
                                        <input type="radio" name="rating" value="4" class="fas fa-star">
                                        <input type="radio" name="rating" value="5" class="fas fa-star">
                                    </span>
                                </div>
                                <div class="form-group">
                                    <input class="form-control mb-10" type="text" name="comment" placeholder="Message" required="">
                                </div>
                                <button type="submit" class="primary-btn text-uppercase">Post Comment</button>
                            </form>';
                        } else {
                            echo '<h4>You need to sign in to comment</h4>
                            <form>
                                <a href="signin" class="primary-btn text-uppercase">Sign in</a>
                            </form>';
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget user-info-widget">
                            <img id="profile-image" src="img/Employees/Heu.jpg" class="profile-image" onclick="displayModal()">
                            <div id="modal" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="closeModal()">&times;</span>
                                    <img id="modal-image" src="" class="modal-image">
                                </div>
                            </div>
                            <a href="#">
                                <h4>MaNguCaDe Gandhieu</h4>
                            </a>
                            <p>
                                God book writer
                            </p>
                            <ul class="social-links">
                                <li><a href="https://www.facebook.com/profile.php?id=100017892760359"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <p>
                                In the realm of boundless creativity, words become the brushstrokes that paint captivating tales. A writer's pen dances upon the page, crafting stories that enchant and inspire. Through their words, worlds unfold, characters breathe, and emotions resonate. The power of storytelling lies in their hands, shaping narratives that leave an indelible mark on the reader's heart. </p>
                        </div>



                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="popular-title">Popular Books</h4>

                            <?php foreach ($popular as $key => $value) : ?>
                                <div class="popular-post-list">
                                    <div class="single-post-list d-flex flex-row align-items-center">
                                        <div class="thumb">
                                            <a href="bookDetail?id=<?php echo $value->proId ?>">
                                                <img class="img-fluid" src="http://localhost/Book_Review/Book_Review_Code_PHP/img/book/<?php echo $value->image; ?>" style="width: 150px; height: 100px;">
                                            </a>
                                        </div>
                                        <div class="details">
                                            <a href="bookDetail?id=<?php echo $value->proId ?>}">
                                                <h6><?php echo $value->name ?></h6>
                                            </a>
                                            <p><?php echo $value->view ?> views</p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End post-content Area -->

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- my CSS -->
    <script src="js/bookDetail.js"></script>
</body>

</html>