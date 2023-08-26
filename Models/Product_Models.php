<?php
class Product {
    public $proId;
    public $name;
    public $content;
    public $catId;
    public $image;
    public $emID;
    public $view;

    public function __construct($proId, $name, $content, $catId, $image, $emID, $view) {
        $this->proId = $proId;
        $this->name = $name;
        $this->content = $content;
        $this->catId = $catId;
        $this->image = $image;
        $this->emID = $emID;
        $this->view = $view;
    }

    public function getProId() {
        return $this->proId;
    }

    public function getName() {
        return $this->name;
    }

    public function getContent() {
        return $this->content;
    }

    public function getCatId() {
        return $this->catId;
    }

    public function getImage() {
        return $this->image;
    }

    public function getEmID() {
        return $this->emID;
    }

    public function getView() {
        return $this->view;
    }

    public function getListProductByViews() {
        $conn = connect();
        $data = array();
        try {
            $strSelect = "SELECT * FROM Products
                          ORDER BY Views DESC
                          LIMIT 6";
            $result = $conn->query($strSelect);
            
            while ($row = $result->fetch_assoc()) {
                $proId = $row['ProductID'];
                $name = $row['ProductName'];
                $content = $row['ProductDescription'];
                $catId = $row['CategoryID'];
                $image = $row['image'];
                $emId = $row['EmployeeId'];
                $view = $row['Views'];
                $data[] = new Product($proId, $name, $content, $catId, $image, $emId, $view);
            }
        } catch (Exception $e) {
            echo "getListProductByViews: " . $e->getMessage();
        }
        return $data;
    }

    public function getListProductByFiction() {
        $conn = connect();
        $data = array();
        try {
            $strSelect = "SELECT * FROM Products
                          WHERE CategoryID = 1
                          ORDER BY Views DESC
                          LIMIT 6";
            $result = $conn->query($strSelect);
            
            while ($row = $result->fetch_assoc()) {
                $proId = $row['ProductID'];
                $name = $row['ProductName'];
                $content = $row['ProductDescription'];
                $catId = $row['CategoryID'];
                $image = $row['image'];
                $emId = $row['EmployeeId'];
                $view = $row['Views'];
                $data[] = new Product($proId, $name, $content, $catId, $image, $emId, $view);
            }
        } catch (Exception $e) {
            echo "getListProductByFiction: " . $e->getMessage();
        }
        return $data;
    }

    public function getListProductByScience() {
        $conn = connect();
        $data = array();
        try {
            $strSelect = "SELECT * FROM Products
                          WHERE CategoryID = 3
                          ORDER BY Views DESC
                          LIMIT 6";
            $result = $conn->query($strSelect);
            
            while ($row = $result->fetch_assoc()) {
                $proId = $row['ProductID'];
                $name = $row['ProductName'];
                $content = $row['ProductDescription'];
                $catId = $row['CategoryID'];
                $image = $row['image'];
                $emId = $row['EmployeeId'];
                $view = $row['Views'];
                $data[] = new Product($proId, $name, $content, $catId, $image, $emId, $view);
            }
        } catch (Exception $e) {
            echo "getListProductByScience: " . $e->getMessage();
        }
        return $data;
    }

    public function getAllListProductById() {
        $conn = connect();
        $data = array();
        try {
            $strSelect = "SELECT p.ProductID, p.ProductName, p.ProductDescription, c.CategoryName, p.image, e.LastName, e.FirstName, p.Views
                          FROM Products p
                          JOIN Categories c ON c.CategoryID = p.CategoryID
                          JOIN Employees e ON e.EmployeeID = p.EmployeeId
                          WHERE p.ProductID = '$this->proId'
                          ORDER BY ProductID DESC";
            $result = $conn->query($strSelect);
            
            while ($row = $result->fetch_assoc()) {
                $proId = $row['ProductID'];
                $name = $row['ProductName'];
                $content = $row['ProductDescription'];
                $catId = $row['CategoryName'];
                $image = $row['image'];
                $emId = $row['LastName'] . " " . $row['FirstName'];
                $view = $row['Views'];
                $data[] = new Product($proId, $name, $content, $catId, $image, $emId, $view);
            }
        } catch (Exception $e) {
            echo "getAllListProductById: " . $e->getMessage();
        }
        return $data;
    }

    public function getAllListProduct(){
        $conn = connect();
        $data = array();
        try {
            $strSelect = "SELECT p.ProductID, p.ProductName, p.ProductDescription, c.CategoryName, p.image, e.LastName, e.FirstName, p.Views
                          FROM Products p
                          JOIN Categories c ON c.CategoryID = p.CategoryID
                          JOIN Employees e ON e.EmployeeID = p.EmployeeId
                          ORDER BY ProductID DESC";
            $result = $conn->query($strSelect);
            
            while ($row = $result->fetch_assoc()) {
                $proId = $row['ProductID'];
                $name = $row['ProductName'];
                $content = $row['ProductDescription'];
                $catId = $row['CategoryName'];
                $image = $row['image'];
                $emId = $row['LastName'] . " " . $row['FirstName'];
                $view = $row['Views'];
                $data[] = new Product($proId, $name, $content, $catId, $image, $emId, $view);
            }
        } catch (Exception $e) {
            echo "getAllListProductById: " . $e->getMessage();
        }
        return $data;
    }
}
