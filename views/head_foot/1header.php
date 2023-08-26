<header id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                        <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+84 365551401</span></a>
                        <a href="mailto:Keto1412002@gmail.com"><span class="lnr lnr-envelope"></span> <span class="text">Keto1412002@gmail.com</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="home"><img src="img/logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">


                        <?php
                        if (isset($_SESSION["name"])) {
                            // Hiển thị menu khi có giá trị trong $_SESSION["name"]
                            echo '<li><a style="color: #f7631b" >Welcome ' . $_SESSION["name"] . '</a></li>
                            <li><a href="http://localhost/Book_Review/Book_Review_Code_PHP/">Home</a></li>
                            <li><a href="About.jsp">About</a></li>
                            <li><a href="reviewBook">Review Book</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="signout">Sign out</a></li>';
                        } else {
                            // Hiển thị menu khi không có giá trị trong $_SESSION["name"]
                            echo '<li><a href="http://localhost/Book_Review/Book_Review_Code_PHP/">Home</a></li>
                            <li><a href="About.jsp">About</a></li>
                            <li><a href="reviewBook">Review Book</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="signin">Sign in</a></li>
                            <li><a href="signup">Sign up</a></li>';
                        }
                        ?>

                    </ul>
                </nav>

            </div>

        </div>
    </header><!-- #header -->