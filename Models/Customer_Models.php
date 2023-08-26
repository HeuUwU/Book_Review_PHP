<?php

class Customer {
    public $CusId;
    public $LastName;
    public $FirstName;
    public $Phone;
    public $BirthDate;
    public $Address;
    public $Status;

    public function __construct($CusId, $LastName , $FirstName , $Phone , $BirthDate , $Address , $Status ) {
        $this->CusId = $CusId;
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->Phone = $Phone;
        $this->BirthDate = $BirthDate;
        $this->Address = $Address;
        $this->Status = $Status;
    }

    public function getCusId() {
        return $this->CusId;
    }

    public function getLastName() {
        return $this->LastName;
    }

    public function getFirstName() {
        return $this->FirstName;
    }

    public function getPhone() {
        return $this->Phone;
    }

    public function getBirthDate() {
        return $this->BirthDate;
    }

    public function getAddress() {
        return $this->Address;
    }

    public function getStatus() {
        return $this->Status;
    }

    public function getListCustomer() {
        $conn = connect();
        $data = array();
        try {
            $strSelect = "SELECT *
                          FROM Customers";
            $result = $conn->query($strSelect);

            while ($row = $result->fetch_assoc()) {
                $CusId = $row['CustomerID'];
                $LastName = $row['LastName'];
                $FirstName = $row['FirstName'];
                $Phone = $row['Phone'];
                $BirthDate = ($row['BirthDate'] != null) ? date('d-m-Y', strtotime($row['BirthDate'])) : '';
                $Address = $row['Address'];
                $Status = ($row['Status'] === "1") ? "True" : "False";
                $data[] = new Customer($CusId, $LastName, $FirstName, $Phone, $BirthDate, $Address, $Status);
            }
        } catch (Exception $e) {
            echo "getListCustomer: " . $e->getMessage();
        }
        return $data;
    }

    public function changeStatus($id, $status) {
        $conn = connect();
        $st = True;
        try {
            $strUpdate = "UPDATE Customers
                          SET Status = ?
                          WHERE CustomerID = ?";
            $pstm = $conn->prepare($strUpdate);
            if ($status === "True") {
                $st = False;
            }
            $pstm->bind_param("ss", $st, $id);
            $pstm->execute();
        } catch (Exception $e) {
            echo "changeStatus: " . $e->getMessage();
        }
    }
}

    