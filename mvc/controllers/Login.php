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
        if ($s)
        {
            header("location: ../Customer/showList");
        }
        else
        {
            echo "<script type='text/javascript'>alert('UserName or PassWord incorrect!');</script>";
            $this->enterLogin();
        }

    }
}

?>