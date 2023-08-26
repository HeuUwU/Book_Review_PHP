<?php
session_start();
?>
<!DOCTYPE html>
<style>
    html,
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url("http://localhost/Book_Review/Book_Review_Code_PHP/img/Tan5.png");
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
    }

    .container {
        height: 100%;
        align-content: center;
    }

    .card {
        height: auto;
        margin-top: auto;
        margin-bottom: auto;
        width: 400px;
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .social_icon span {
        font-size: 60px;
        margin-left: 10px;
        color: #009688;
    }

    .social_icon span:hover {
        color: white;
        cursor: pointer;
    }

    .card-header h3 {
        color: white;
    }

    .social_icon {
        position: absolute;
        right: 20px;
        top: -45px;
    }

    .input-group-prepend span {
        width: 50px;
        background-color: #009688;
        color: black;
        border: 0 !important;
    }

    input:focus {
        outline: 0 0 0 0 !important;
        box-shadow: 0 0 0 0 !important;

    }

    .remember {
        color: white;
    }

    .remember input {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
    }

    .login_btn {
        color: black;
        background-color: #009688;
        width: 100px;
    }

    .login_btn:hover {
        color: black;
        background-color: white;
    }

    .links {
        color: white;
    }

    .links a {
        margin-left: 4px;
    }

    .text-danger {
        margin-top: 10px;
        padding-left: 20px;
        margin-bottom: 0px;
    }
</style>

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

</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Admin site</h3>
                </div>
                <p class="text-danger">
                    <?php
                    if (isset($_GET['mess'])) {
                        echo $_GET['mess'];
                        // Khi tải lại trang sẽ tự đổi đường link lại như bên dưới
                        // Mục đích là để mất đi biến "mess khi tải lại trang 
                        echo "<script>history.replaceState({}, document.title, '/Book_Review/Book_Review_Code_PHP/admin);</script>";
                    }
                    ?>
                </p>

                <div class="card-body">

                    <div class="card-body">

                        <form action="http://localhost/Book_Review/Book_Review_Code_PHP/admin" method="POST">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input name="email" type="text" class="form-control" placeholder="Admin account" id="email">

                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input name="password" type="password" class="form-control" placeholder="Password" id="password">

                            </div>
                            <div class="form-group">
                                <input type="submit" value="Sign in" name="login" class="btn float-right login_btn">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
</body>

</html>