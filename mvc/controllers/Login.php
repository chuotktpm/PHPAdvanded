<?php

class Login extends Controller
{
    public function enterLogin()
    {
        $this->view("login");
    }

    public function checkLogin()
    {
        $modelLogin = $this->model("UserModel");
        $user = $_POST["txtUsername"];
        $pass = $_POST["txtPassword"];
        $s = $modelLogin->checkUserPass($user,$pass);
        switch ($s)
        {
            case 0:
                echo "<script type='text/javascript'>alert('UserName or PassWord incorrect!');</script>";
                echo "<script type='text/javascript'>
                        window.location.href = 'http://localhost/PHPAdvanded/Login/enterLogin';
                    </script>";
                break;
            case 1:
                $_SESSION["Username"] = $_POST["txtUsername"];
                echo "<script type='text/javascript'>
                        window.location.href = 'http://localhost/PHPAdvanded/Customer/showList';
                    </script>";
                break;
            case 2:
                $_SESSION["Username"] = $_POST["txtUsername"];
                echo "<script type='text/javascript'>
                        window.location.href = 'http://localhost/PHPAdvanded/Home/page';
                    </script>";
                break;

        }
    }

    public function logout()
    {
        $_SESSION["Username"] = null;
        echo "<script type='text/javascript'>
                        window.location.href = 'http://localhost/PHPAdvanded/Login/enterLogin';
                    </script>";
    }
}

?>