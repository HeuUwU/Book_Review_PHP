<?php

class Category
{

    public $cateId;
    public $name;

    public function __construct($cateId, $name)
    {
        $this->cateId = $cateId;
        $this->name = $name;
    }

    public function getCateId()
    {
        return $this->cateId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getListCategory()
    {
        $conn = connect();
        $data = array();
        try {
            $strSelect = "SELECT * FROM Categories";
            $stm = $conn->query($strSelect);
            while ($row = $stm->fetch_assoc()) {
                $cateId = $row['CategoryID'];
                $name = $row['CategoryName'];
                $data[] = new Category($cateId, $name);
            }
        } catch (Exception $e) {
            echo "getListCategory: " . $e->getMessage();
        }
        return $data;
    }

    public function getListCategoryByID($id)
    {
        $conn = connect();
        $data = array();
        try {
            $strSelect = "SELECT * FROM Categories WHERE CategoryID = ?";
            $pstm = $conn->prepare($strSelect);
            $pstm->bind_param("s", $id);
            $pstm->execute();
            $result = $pstm->get_result();
            while ($row = $result->fetch_assoc()) {
                $cateId = $row['CategoryID'];
                $name = $row['CategoryName'];
                $data[] = new Category($cateId, $name);
            }
        } catch (Exception $e) {
            echo "getListCategoryByID: " . $e->getMessage();
        }
        return $data;
    }

    public function addCategory($name)
    {
        $conn = connect();
        try {
            // Chuyển đổi chữ cái đầu tiên thành chữ hoa nếu nó là chữ thường
            if (ctype_lower($name[0])) {
                $name = ucfirst($name);
            }

            $strUpdate = "INSERT INTO Categories(CategoryName) VALUES(?)";
            $pstm = $conn->prepare($strUpdate);
            $pstm->bind_param("s", $name);
            $pstm->execute();
        } catch (Exception $e) {
            echo "addCategory: " . $e->getMessage();
        }
    }

    public function deleteCategory($id)
    {
        $conn = connect();
        try {
            $strUpdate = "DELETE FROM Categories WHERE CategoryID=?";
            $pstm = $conn->prepare($strUpdate);
            $pstm->bind_param("s", $id);
            $pstm->execute();
        } catch (Exception $e) {
            echo "deleteCategory: " . $e->getMessage();
        }
    }

    public function updateCategory($name, $id)
    {
        $conn = connect();
        try {
            $strUpdate = "UPDATE Categories SET CategoryName = ? WHERE CategoryID = ?";
            $pstm = $conn->prepare($strUpdate);
            $pstm->bind_param("ss", $name, $id);
            $pstm->execute();
        } catch (Exception $e) {
            echo "updateCategory: " . $e->getMessage();
        }
    }
}
