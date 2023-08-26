<?php
session_start();
?>
<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>

    <link rel="shortcut icon" href="img/HeuUwU.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="Stylesheet" href="css/signIn.css">

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign in</h3>
                </div>
                <p class="text-danger">
                    <?php
                    if (isset($_GET['mess'])) {
                        echo $_GET['mess'];
                        // Khi tải lại trang sẽ tự đổi đường link lại như bên dưới
                        // Mục đích là để mất đi biến "mess khi tải lại trang 
                        echo "<script>history.replaceState({}, document.title, '/Book_Review/Book_Review_Code_PHP/signin');</script>";
                    }
                    ?>
                </p>

                <div class="card-body">

                    <div class="card-body">

                        <form action="http://localhost/Book_Review/Book_Review_Code_PHP/" method="POST">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input name="email" type="text" class="form-control" placeholder="Email" id="email" onkeyup="showEmailHint()">
                                <!-- Hiện thông báo nếu người dùng nhập sai format của email -->
                                <p class="text-danger" id="emailHint"></p>
                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input name="password" type="password" class="form-control" placeholder="Password" id="password" onkeyup="showPasswordHint()">
                                <!-- Hiện thông báo nếu người dùng nhập sai format của mật khẩu -->
                                <p class="text-danger" id="passwordHint"></p>
                            </div>
                            <div class="row align-items-center remember">
                                <input type="checkbox">Remember Me
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Sign in" name="login" class="btn float-right login_btn">
                            </div>
                        </form>

                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Don't have an account?<a href="signup">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a href="forgetpassword">Forget your password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>

<script src="js/signIn.js"></script>