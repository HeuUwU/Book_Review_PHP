<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['email'] == '' || $_POST['password'] == '') {
        $temporaryMess = 'Please enter both email and password';
        // Xử lý khi tài khoản không hợp lệ
        header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/signin?mess=" . urlencode($temporaryMess));
        exit();
    } else {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Thực hiện xử lý đăng nhập với $email và $password
            $account = new Account($email, $password, null, null, null);
            $product = new Product(null, null, null, null, null, null, null);

            // Kiểm tra tài khoản mật khẩu
            if ($account->checkAccount($email, $password)) {
                //Kiểm tra status xem tài khoản có bị khoá không
                if ($account->checkStatus($email, $password)) {
                    $name = $account->getNameByEmail();
                    $_SESSION["name"] = "$name";

                    $popular = $product->getListProductByViews();
                    $fiction = $product->getListProductByFiction();
                    $science = $product->getListProductByScience();
                } else {
                    $temporaryMess = 'Your account has been locked or has no access to the system';
                    // Xử lý khi tài khoản không hợp lệ
                    header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/signin?mess=" . urlencode($temporaryMess));
                    exit();
                }
            } else {
                $temporaryMess = 'Wrong email or password';
                // Xử lý khi tài khoản không hợp lệ
                header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/signin?mess=" . urlencode($temporaryMess));
                exit();
            }
        }
    }
} else {
    $account = new Account(null, null, null, null, null);
    $product = new Product(null, null, null, null, null, null, null);

    $popular = $product->getListProductByViews();
    $fiction = $product->getListProductByFiction();
    $science = $product->getListProductByScience();
}
