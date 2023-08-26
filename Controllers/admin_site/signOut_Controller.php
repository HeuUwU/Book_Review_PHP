<?php
session_start();

// Xoá tất cả các biến trong session
session_unset();

// Hủy toàn bộ session
session_destroy();

header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/admin");
exit();
