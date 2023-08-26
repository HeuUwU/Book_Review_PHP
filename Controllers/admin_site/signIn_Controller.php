<?php
// session_start();
// require '../constant.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['email'] == '' || $_POST['password'] == '') {
        $temporaryMess = 'Please enter both email and password';
        // Xử lý khi tài khoản không hợp lệ
        header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/admin?mess=" . urlencode($temporaryMess));
        exit();
    } else {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Thực hiện xử lý đăng nhập với $email và $password
            $account = new Account($email, $password, null, null, null);

            // Kiểm tra tài khoản mật khẩu
            if ($account->checkAccount($email, $password)) {
                if($account->checkRoleAdminByEmail()){
                    header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/admin/customer");
                    exit();
                }else{
                    $temporaryMess = 'Your account has no access to the system';
                    // Xử lý khi tài khoản không hợp lệ
                    header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/admin?mess=" . urlencode($temporaryMess));
                    exit();
                }
            }
        } else {
            $temporaryMess = 'Wrong email or password';
            // Xử lý khi tài khoản không hợp lệ
            header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/admin?mess=" . urlencode($temporaryMess));
            exit();
        }
    }
}
