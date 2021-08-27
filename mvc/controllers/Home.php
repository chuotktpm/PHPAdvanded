<?php


class Home extends Controller
{
    public function __construct()
    {
        $this->page();
    }

    function page()
    {
        $this->view("home");
    }

    function show()
    {
        echo "Đây là Home - show";
    }
}
?>
