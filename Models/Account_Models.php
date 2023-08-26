<?php

class Account
{

    private $email, $password, $customerID, $EmployeeID, $role;

    public function __construct($email, $password, $customerID, $EmployeeID, $role)
    {
        $this->email = $email;
        $this->password = $password;
        $this->customerID = $customerID;
        $this->EmployeeID = $EmployeeID;
        $this->role = $role;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPass()
    {
        return $this->password;
    }

    public function getCusId()
    {
        return $this->customerID;
    }

    public function getEmId()
    {
        return $this->EmployeeID;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function checkAccount($email, $password)
    {
        $conn = connect();
        try {
            $strSelect = "select * from accounts
            where email = ? and password = ?";
            $pstm = $conn->prepare($strSelect);
            $pstm->bind_param("ss", $email, $password);
            $pstm->execute();
            $result = $pstm->get_result();

            if ($result->num_rows > 0) {
                return true;
            }
        } catch (Exception $e) {
            echo "checkAccount: " . $e->getMessage();
        }
        return false;
    }

    public function checkStatus()
    {
        $conn = connect();
        try {
            $strSelect = "SELECT *
                          FROM Accounts a
                          JOIN Customers c ON a.CustomerID = c.CustomerID
                          WHERE a.Email = '{$this->email}'
                          AND a.Password = '{$this->password}'
                          AND c.Status = '1'";

            $pstm = $conn->prepare($strSelect);
            $pstm->execute();
            $result = $pstm->get_result();

            while ($row = $result->fetch_assoc()) {
                return true;
            }
        } catch (Exception $e) {
            echo "checkStatus: " . $e->getMessage();
        }

        return false;
    }

    public function getNameByEmail()
    {
        $conn = connect();
        try {
            $strSelect = "SELECT c.FirstName, c.LastName
                          FROM Customers c
                          JOIN Accounts a ON c.CustomerID = a.CustomerID
                          WHERE a.Email = '{$this->email}'";

            $stm = $conn->query($strSelect);

            while ($row = $stm->fetch_assoc()) {
                $name = $row['FirstName'] . ' ' . $row['LastName'];
                return $name;
            }
        } catch (Exception $e) {
            echo "getNameByEmail: " . $e->getMessage();
        }

        return "";
    }

    public function getPasswordByEmail()
    {
        $conn = connect();
        try {
            $strSelect =   "SELECT a.password
                            FROM Customers c
                            JOIN Accounts a ON c.CustomerID = a.CustomerID
                            WHERE a.Email = 'a@gmail.com'
                            and a.role = '1'";

            $stm = $conn->query($strSelect);

            while ($row = $stm->fetch_assoc()) {
                $password = $row['password'];
                return $password;
            }
        } catch (Exception $e) {
            echo "getPasswordByEmail: " . $e->getMessage();
        }

        return "";
    }

    public function getIDByEmail()
    {
        $conn = connect();
        try {
            $strSelect = "SELECT CustomerID
                          FROM Accounts
                          WHERE Email = '{$this->email}'";

            $preparedStatement = $conn->prepare($strSelect);
            $preparedStatement->execute();
            $resultSet = $preparedStatement->get_result();

            if ($row = $resultSet->fetch_assoc()) {
                $userID = $row['CustomerID'];
                return $userID;
            }
        } catch (Exception $e) {
            echo "getIDByEmail: " . $e->getMessage();
        }
        return null;
    }

    public function checkRoleAdminByEmail()
    {
        $conn = connect();
        try {
            $strSelect =   "SELECT Role
                            FROM accounts 
                            WHERE email = '{$this->email}'";

            $pstm = $conn->prepare($strSelect);
            $pstm->execute();
            $result = $pstm->get_result();

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $role = $row['Role'];
                return $role == 2; // Trả về true nếu $role là 2, ngược lại trả về false
            } else {
                return false; // Không tìm thấy dữ liệu
            }
        } catch (Exception $e) {
            echo "checkRoleAdminByEmail: " . $e->getMessage();
            return false; // Không tìm thấy dữ liệu
        }
    }
}
