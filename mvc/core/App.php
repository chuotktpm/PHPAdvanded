<?php

class App
{
    //https://localhost/PHPAdvanded/Home/sayhi/1/2/3
    private $controllers = "Home";
    private $action = "page";
    private $params = [];
    function __construct()
    {
        $arr = $this->UrlProcess();

        //Controllers
        if (file_exists("./mvc/controllers/" .$arr[0] .".php"))
        {
            $this->controllers = $arr[0];
            unset($arr[0]);
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