<?php
    class CustomerModel extends Database
    {
        public function getAllCustomer()
        {
            $sql = "SELECT * FROM customer";
            return mysqli_query($this->connect, $sql);
        }

        public function insertCustomer($name, $email, $create_date, $updated_date)
        {
            $sql = "INSERT INTO `customer` (`id`, `name`, `email`, `create_date`, `updated_date`) VALUES (NULL, '$name', '$email', '$create_date', '$updated_date');";
            if (mysqli_query($this->connect, $sql)) {
                return true;
            } else {
                echo "<script type='text/javascript'>alert('Error:'. $sql .$this->connect->error);</script>";
                return false;
            }
        }

        public function updateCustomer($id, $name, $email, $create_date, $updated_date)
        {
            $sql = "UPDATE `customer` SET `name` = '$name', `email` = '$email', `create_date` = '$create_date', `updated_date` = '$updated_date' WHERE `customer`.`id` = $id;";
            if (mysqli_query($this->connect, $sql)) {
                return true;
            } else {
                echo "<script type='text/javascript'>alert('Error:'. $sql .$this->connect->error);</script>";
                return false;
            }
        }

        public function deleteCustomer($id)
        {
            $sql = "DELETE FROM `customer` WHERE `customer`.`id` = $id";
            if (mysqli_query($this->connect, $sql)) {
                return true;
            } else {
                echo "<script type='text/javascript'>alert('Error:'. $sql .$this->connect->error);</script>";
                return false;
            }
        }



        public function getCustomerById($id)
        {
            $sql = "SELECT * FROM `customer` WHERE `id` = $id";
            $result = mysqli_query($this->connect, $sql);
            if ($result->num_rows > 0)
            {
                while($row = mysqli_fetch_row($result))
                {
                    $dataCustomer[] = $row;
                }
                return $dataCustomer[0];
            }
        }
    }
?>