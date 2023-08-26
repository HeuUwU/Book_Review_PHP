<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Hàm để edit
    $category = new Category(null, null);

    if (isset($_POST['editName']) && isset($_POST['editID'])) {
        $name = $_POST['editName'];
        $id = $_POST['editID'];
        $category->updateCategory($name, $id);

        header("Location: http://localhost/Book_Review/Book_Review_Code_PHP/admin/category");
        exit();
    }

}
