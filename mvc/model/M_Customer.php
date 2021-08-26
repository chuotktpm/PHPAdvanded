<?php

    include_once("./model/E_Customer.php");
    class Model_Customer
    {

        private $servername = "localhost";
        private $database = "news";
        private $username = "root";
        private $password = "";
        private $conn;

        public function __construct()
        {
            // Create connection
            $this->conn = mysqli_connect($this->servername,$this->username,$this->password,$this->database);
            // Check connection
            if (!$this->conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        }

        public function getAllCustomer()
        {
            $sql = "SELECT id, name, email, create_date, updated_date FROM customer";
            $result = $this->conn->query($sql);
            
            return $result;
            mysqli_close($this->conn);
        }

        public function insertCustomer($name, $email, $create_date, $updated_date)
        {
            $sql = "INSERT INTO `customer` (`id`, `name`, `email`, `create_date`, `updated_date`) VALUES (NULL, '$name', '$email', '$create_date', '$updated_date');";
            if ($this->conn->query($sql) === TRUE) {
                echo "New record created successfully";
                return true;
            } else {
                echo "Error: " . $sql . "<br>" . $this->conn->error;
                return false;
            }
        }

        public function getCustomerDetail($stid)
        {
            $allCustomer = $this->getAllCustomer();
            return $allCustomer[$stid];
        }

        
    }
    

?>