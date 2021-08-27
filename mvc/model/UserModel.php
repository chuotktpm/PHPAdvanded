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
                        return true;
                    }
                }
            }
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>