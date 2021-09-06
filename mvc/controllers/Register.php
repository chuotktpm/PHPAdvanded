<?php

class Register extends Controller
{
    public function enterRegister()
    {
        $this->view("register");
    }

    public function checkRegister()
    {
        $modelRegister = $this->model("UserModel");
        $user = $_POST["txtUsername"];
        $pass = $_POST["txtPassword"];
        $name = $_POST["txtName"];
        $email = $_POST["txtEmail"];
        $confirmpass = $_POST["txtConfirmPassword"];

        date_default_timezone_set('Asia/Bangkok');
        $date = date('Y/m/d', time());

        if ($modelRegister->findUsername($user))
        {
            if ($pass == $confirmpass)
            {
                if($modelRegister->insertUser($user, $pass, $name, $email, $date))
                {
                    echo "<script type='text/javascript'>
                        alert('Register successfully!');
                        window.location.href = 'http://localhost/PHPAdvanded/Login/enterLogin';
                    </script>";
                }
                else
                {
                    echo "<script type='text/javascript'>
                        alert('An error occurred! Please try again!');
                        window.location.href = 'http://localhost/PHPAdvanded/Register/enterRegister';
                    </script>";
                }
            }
            else
            {
                echo "<script type='text/javascript'>
                alert('Confirm Password must same Password!');
                window.location.href = 'http://localhost/PHPAdvanded/Register/enterRegister';
            </script>";
            }
        }
        else
        {
            echo "<script type='text/javascript'>
                alert('Username already exist!');
                window.location.href = 'http://localhost/PHPAdvanded/Register/enterRegister';
            </script>";
        }
    }
}

?>