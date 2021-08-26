<?php
include_once("./model/M_User.php");
class Login{

    private $modelUser;
    private $leveladmin = 0;

    public function __construct()
    {
        $this->modelUser = new Model_User();
    }

    public function Login(){
        if (isset($_POST['btnLogin']))
        {
            $data_login = $this->modelUser->checklogin($_POST['txtUsername'], $_POST['txtPassword']);
            if ($data_login == 0)
            {
                echo "<script type='text/javascript'>alert('Đăng nhập thất bại!');</script>";
                include_once("./view/login.php");
            }
            else
            {
                foreach ($data_login as $id => $value)
                {
                    if ($value['username'] == $_POST['txtUsername'])
                    {
                        if ($value['password'] == $_POST['txtPassword'])
                        {
                            if ($value['level'] == $this->leveladmin)
                            {
                                $_SESSION['username'] = $value['username'];
                                header('location: ?action=showList');
                            }
                            else
                            {
                                header('location: ?action=home');
                            }
                        }
                    }
                }
            }

        }
    }
}