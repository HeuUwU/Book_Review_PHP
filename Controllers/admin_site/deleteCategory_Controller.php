<?php
    require '../../constant.php';
    //require Context
    require_once DIR . '\Context/DBContext.php';
    
    //require Models            
    require_once DIR . '\Models\Category_Modes.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "co post";

    $category = new Category(null, null);

    //Hàm để xoá
    if (isset($_POST['categoryID'])) {
        $idDelete = $_POST['categoryID'];
        $category->deleteCategory($idDelete);
        header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/admin/category");
        exit();
    }

    //Hàm để thêm
    if (isset($_POST['categoryName'])) {
        $categoryName = $_POST['categoryName'];
        $category->addCategory($categoryName);
        header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/admin/category");
        exit();
    }
}else{
    echo "none";
}
