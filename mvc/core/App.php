<?php

class App
{
    private $controllers = "Home";
    private $action = "page";
    private $params = [];
    function __construct()
    {
        $arr = $this->UrlProcess();

        //Controllers
        if (isset($arr[0]))
        {
            if(!$_SESSION["Username"] && $arr[0] != "Login" && $arr[1] != "enterLogin")
            {
                echo "<script type='text/javascript'>
                        window.location.href = 'http://localhost/PHPAdvanded/Login/enterLogin';
                    </script>";
            }
            if (file_exists("./mvc/controllers/" .$arr[0] .".php"))
            {
                $this->controllers = $arr[0];
                unset($arr[0]);
            }
        }
        else
        {
            if(!$_SESSION["Username"])
            {
                echo "<script type='text/javascript'>
                        window.location.href = 'http://localhost/PHPAdvanded/Login/enterLogin';
                    </script>";
            }
        }
        require_once "./mvc/controllers/".$this->controllers .".php";

        //Action
        if (isset($arr[1]))
        {
            if (method_exists($this->controllers, $arr[1]))
            {
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        else
        {
            if ($this->controllers == "Login")
            {
                $this->action = "enterLogin";
            }
            if ($this->controllers == "Customer")
            {
                $this->action = "showList";
            }
        }

        //Params
        $this->params = $arr?array_values($arr):[];

        call_user_func_array([new $this->controllers, $this->action], $this->params);
    }

    function UrlProcess()
    {
        if (isset($_GET["url"]))
        {
            return explode("/",filter_var(trim($_GET["url"],"/")));
        }
    }
}
?>