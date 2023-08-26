<?php
//reqire Context
require('../../../Context/DBContext.php');

//require Models
require('../../../Models/Category_Modes.php');

$category = new Category(null, null);

$category = $category->getListCategory();
?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <style>
        /* Lớp overlay */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Màu đen với độ mờ 50% */
            z-index: 9999;
            /* Đảm bảo nằm trên tất cả các phần tử khác */
        }

        /* Hiển thị bảng add category */
        .add-category-table {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 10000;
            /* Đảm bảo nằm trên overlay */
            padding: 20px;
            max-width: 400px;
            width: 100%;
        }

        /* Hiển thị lớp overlay và bảng add category */
        .show-overlay .overlay {
            display: block;
        }

        .show-overlay .add-category-table {
            display: block;
        }

        /* CSS cho nút Add và Close */
        button {
            padding: 10px 20px;
            border: none;
            background-color: #1b2a47;
            color: white;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* CSS cho các trường input */
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        /* CSS cho tiêu đề */
        h2 {
            margin-top: 0;
            margin-bottom: 20px;
        }

        .add-category-table .close-button {
            float: left;
            background-color: red;
            color: white;
        }

        .add-category-table .add-button {
            float: right;
            background-color: #333333;
            color: white;
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
                                                <h2>Category List</h2>
                                                <p>All Category of books</p>
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
                                <a href="#" onclick="showAddCategoryTable()">Add Category</a>
                            </div>

                            <div class="overlay"></div>

                            <div class="add-category-table">

                                <form action="http://localhost/Book_Review/Book_Review_Code_PHP/admin/deleteCategory" method="POST" style="display: inline;">
                                    <h2>Add Category</h2>
                                    <table>
                                        <tr>
                                            <td style="color: black">Category Name:</td>
                                            <td><input style="color: black" type="text" name="categoryName">
                                            </td>
                                        </tr>
                                    </table>

                                    <button class="close-button" onclick="closeAddCategoryTable()">Close</button>

                                    <button class="add-button" type="submit">Add</button>
                                </form>

                            </div>

                            <table>
                                <tr>
                                    <th>CategoryId</th>
                                    <th>CategoryName</th>
                                    <th>Setting</th>
                                </tr>

                                <?php foreach ($category as $key => $value) : ?>
                                    <tr>
                                        <td><?php echo $value->cateId ?></td>
                                        <td><?php echo $value->name ?></td>
                                        <td>
                                            <button class="pd-setting-ed" onclick="editCategory(<?php echo $value->cateId ?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>

                                            <button class="pd-setting-ed" onclick="confirmDelete(<?php echo $value->cateId ?>)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                            <form id="deleteForm" action="" method="post" style="display: none;">
                                                <input type="hidden" name="categoryID" value="">
                                            </form>
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

    <script>
        // Hàm này được gọi khi người dùng nhấp vào liên kết "Add Category"
        function showAddCategoryTable() {
            // Thêm class "show-overlay" vào thẻ body
            document.body.classList.add("show-overlay");
        }

        // Hàm này được gọi khi người dùng nhấp vào nút "Close"
        function closeAddCategoryTable() {
            // Xóa class "show-overlay" khỏi thẻ body
            document.body.classList.remove("show-overlay");
        }


        function editCategory(categoryId) {
            var editUrl = "editCategory?id=" + categoryId;
            window.location.href = editUrl;
        }


        function confirmDelete(categoryId) {
            var confirmation = confirm("Are you sure you want to delete category with ID " + categoryId + "?");
            if (confirmation) {
                var deleteForm = document.getElementById("deleteForm");
                deleteForm.action = "http://localhost/Book_Review/Book_Review_Code_PHP/admin/deleteCategory";
                deleteForm.categoryID.value = categoryId;
                deleteForm.submit();
            }
        }
    </script>

</body>

</html>