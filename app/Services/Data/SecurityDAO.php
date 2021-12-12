<?php
namespace App\Services\Data;
use App\Models\UserModel;

class SecurityDAO {
    
    
    public $servername = "localhost";
    public $username = "root";
    public $password = "root";
    public $database_in_use = "cst-236";
    
    // Create connection
    
    function getConn() {
        $conn = new \MySQLi($this->servername, $this->username, $this->password, $this->database_in_use);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }
    
    
    public function findByUser(UserModel $UserModel) {
        $user = $UserModel->username();
        $pass = $UserModel->password();
        $sql = "SELECT * FROM activity2";
        $result = $this->getConn()->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($row["USERNAME"] == $user && $row["PASSWORD"] == $pass) {
                    return true;
                }
            }
            return false;
        }
        
    }

}
