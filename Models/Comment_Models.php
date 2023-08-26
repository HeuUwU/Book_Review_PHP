<?php 
class Comment {
    private $comId;
    private $content;
    private $proId;
    private $cusId;
    private $rating;
    private $name;
    private $emId;

    public function __construct($comId = null, $content = null, $proId = null, $cusId = null, $rating = null, $name = null, $emId = null) {
        $this->comId = $comId;
        $this->content = $content;
        $this->proId = $proId;
        $this->cusId = $cusId;
        $this->rating = $rating;
        $this->name = $name;
        $this->emId = $emId;
    }

    public function getEmId() {
        return $this->emId;
    }

    public function getComId() {
        return $this->comId;
    }

    public function getContent() {
        return $this->content;
    }

    public function getProId() {
        return $this->proId;
    }

    public function getCusId() {
        return $this->cusId;
    }

    public function getRating() {
        return $this->rating;
    }

    public function getName() {
        return $this->name;
    }

    public function getCommentById() {
        $conn = connect();
        try {
            $strSelect = "SELECT COUNT(CommentId) AS CommentCount
                          FROM Comment
                          WHERE ProductId = '$this->proId'";
            $result = $conn->query($strSelect);
            
            while ($row = $result->fetch_assoc()) {
                $commentCount = intval($row['CommentCount']);
                return $commentCount;
            }
        } catch (Exception $e) {
            echo "getCommentById: " . $e->getMessage();
        }
        return 0;
    }

    public function getListCommentById() {
        $conn = connect();
        $data = array();
        try {
            $strSelect = "SELECT *
                          FROM Comment co
                          JOIN Customers cu ON co.CustomerId = cu.CustomerID
                          WHERE co.ProductId = '$this->proId;'";
            $result = $conn->query($strSelect);
            
            while ($row = $result->fetch_assoc()) {
                $content = $row['Content'];
                $rating = $row['Rating'];
                $emId = $row['EmployeeId'];
                $name = $row['FirstName'] . " " . $row['LastName'];

                $data[] = new Comment($content, $rating, $name, $emId);
            }
        } catch (Exception $e) {
            echo "getListCommentById: " . $e->getMessage();
        }
        return $data;
    }
}
