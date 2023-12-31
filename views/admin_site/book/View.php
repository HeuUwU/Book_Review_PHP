<?php
    //reqire Context
    require_once('../../../Context/DBContext.php');

    //require Models
    require_once('../../../Models/Product_Models.php');

    $product = new Product(null, null, null, null, null, null, null);

    $book = $product->getAllListProduct();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <style>
        .limited-words {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 5;
            /* Số từ tối đa cần giới hạn */
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product List | Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- favicon
                    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
    <!-- Google Fonts
                    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/bootstrap.min.css">
    <!-- Bootstrap CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/font-awesome.min.css">
    <!-- nalika Icon CSS
                ============================================ -->
    <link rel="stylesheet" href="../css2/nalika-icon.css">
    <!-- owl.carousel CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/owl.carousel.css">
    <link rel="stylesheet" href="../css2/owl.theme.css">
    <link rel="stylesheet" href="../css2/owl.transitions.css">
    <!-- animate CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/animate.css">
    <!-- normalize CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/normalize.css">
    <!-- meanmenu icon CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/meanmenu.min.css">
    <!-- main CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/main.css">
    <!-- morrisjs CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../css2/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../css2/calendar/fullcalendar.print.min.css">
    <!-- style CSS
                    ============================================ -->
    <link rel="stylesheet" href="../style.css">
    <!-- responsive CSS
                    ============================================ -->
    <link rel="stylesheet" href="../css2/responsive.css">
    <!-- modernizr JS
                    ============================================ -->
    <script src="../js2/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <?php 
        include '../head/head.php';
    ?>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="fa-solid fa-book"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Books List</h2>
                                                <p>All books we have</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Books List</h4>
                            <div class="add-product">
                                <a href="product-edit.html">Add Books</a>
                            </div>
                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>ProductName</th>
                                    <th>ProductDescription</th>
                                    <th>Category</th>
                                    <th>Employee</th>
                                    <th>Views</th>
                                    <th>Setting</th>
                                </tr>

                                <?php foreach ($book as $key => $value) : ?>
                                    <tr>
                                        <td><?php echo $value->proId ?></td>
                                        <td><img src="../img/book/<?php echo $value->image ?>" alt="" /></td>
                                        <td><?php echo $value->name ?></td>
                                        <td class="limited-words"><?php echo $value->content ?></td>
                                        <td><?php echo $value->catId ?></td>
                                        <td><?php echo $value->emID ?></td>
                                        <td><?php echo $value->view ?></td>
                                        <td>
                                            <button class="pd-setting-ed" onclick="redirectToHref('edit?id=${item.getProId()}')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button class="pd-setting-ed" onclick="redirectToHref('edit?id=${item.getProId()}')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach ?>

                            </table>
                            <div class="custom-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
                    ============================================ -->
    <script src="../js2/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
                    ============================================ -->
    <script src="../js2/bootstrap.min.js"></script>
    <!-- wow JS
                    ============================================ -->
    <script src="../js2/wow.min.js"></script>
    <!-- price-slider JS
                    ============================================ -->
    <script src="../js2/jquery-price-slider.js"></script>
    <!-- meanmenu JS
                    ============================================ -->
    <script src="../js2/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
                    ============================================ -->
    <script src="../js2/owl.carousel.min.js"></script>
    <!-- sticky JS
                    ============================================ -->
    <script src="../js2/jquery.sticky.js"></script>
    <!-- scrollUp JS
                    ============================================ -->
    <script src="../js2/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
                    ============================================ -->
    <script src="../js2/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../js2/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
                    ============================================ -->
    <script src="../js2/metisMenu/metisMenu.min.js"></script>
    <script src="../js2/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
                    ============================================ -->
    <script src="../js2/sparkline/jquery.sparkline.min.js"></script>
    <script src="../js2/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
                    ============================================ -->
    <script src="../js2/calendar/moment.min.js"></script>
    <script src="../js2/calendar/fullcalendar.min.js"></script>
    <script src="../js2/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
                    ============================================ -->
    <script src="../js2/plugins.js"></script>
    <!-- main JS
                    ============================================ -->
    <script src="../js2/main.js"></script>

</body>

</html>