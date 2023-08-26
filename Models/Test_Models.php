<?php
require_once('Account_Models.php');
require_once('Product_Models.php');
require_once('Customer_Models.php');
require_once('../Context/DBContext.php');

// Tạo đối tượng Account
$account = new Account('a@gmail.com', '123', null, null, null);
$product = new Product(null,null,null,null,null,null, null);
$customer = new Customer(null,null, null, null, null, null, null);

// Thay đổi thông tin email và password tùy theo tài khoản bạn muốn kiểm tra
$emailToCheck = 'Lazer@gmail.com';
$passwordToCheck = '123';

// Gọi hàm checkAccount từ đối tượng
if ($account->checkStatus()) {
    echo "Account is valid!";
} else {
    echo "Invalid account.";
}

// $result = $customer->changeStatus('1', '0'); // Để chuyển trạng thái sang True

if (!empty($result)) {
        // echo "ok";
        // var_dump($result);
        echo '<pre>';
        print_r($result);
        echo '</pre>';
    
} else {
    echo "not ok";
}

// foreach ($result as $key => $value) {
//         echo $value->proId;
// }

?>
