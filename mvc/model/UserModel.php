<?php
class UserModel extends Database
{
    public function checkUserPass($username, $password)
    {
        $sql = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
        $result = mysqli_query($this->connect, $sql);
        if ($result->num_rows > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                $dataLogin[] = $row;
            }
            foreach ($dataLogin as $key => $col)
            {
                if ($col['username']== $_POST['txtUsername'])
                {
                    if ($col['password']== $_POST['txtPassword'])
                    {
                        $level = $col['lvaccess'];
                        return $level;
                    }
                    else
                    {
                        return 0;
                    }
                }
            }
        }
    }

    public function findUsername($username)
    {
        $sql = "SELECT * FROM `user` WHERE `username` = '$username'";
        $result = mysqli_query($this->connect, $sql);
        if ($result->num_rows == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function insertUser($username, $password, $name, $email, $create_date)
    {
        $sql1 = "INSERT INTO `customer` (`name`, `email`, `create_date`, `updated_date`)
                VALUES('$name', '$email','$create_date','$create_date');";
        $sql2 = "INSERT INTO `user` (`username`, `password`,`lvaccess`,`idCustomer`)
                VALUES('$username', '$password','2',LAST_INSERT_ID());";
        mysqli_query($this->connect, $sql1);
        $result = mysqli_query($this->connect, $sql2);
        if ($result)
        {
            return true;
        }
        else
        {
            echo "<script type='text/javascript'>
                        alert('Error:' $this->connect->console.error());
                    </script>";
            return false;
        }
    }


}
?>