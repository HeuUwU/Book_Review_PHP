<?php
function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "Ketoisthebest141";
    $dbname = "book_review"; // Thay your_database_name bằng tên cơ sở dữ liệu thực sự của bạn

    // Tạo kết nối
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}


