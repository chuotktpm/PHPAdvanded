<?php
class Model_User
{
    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        $this->stringConnect = new mysqli('localhost','root','','news');
        if (!$this->stringConnect) {
            die("Connection failed: " . mysqli_connect_error());
        }
        mysqli_set_charset($this->stringConnect,'utf8');
    }

    public function checklogin($user,$pass)
    {
        $sql="SELECT * FROM user WHERE username = '".$user."'  AND password = '".$pass."' ";
        $result = $this->stringConnect->query($sql);
        if ($result->num_rows == 0)
        {
            $data = 0;
        }
        else
        {
            while ($row=$result->fetch_assoc())
            {
                $data[]=$row;
            }
        }
        return $data;
    }
}