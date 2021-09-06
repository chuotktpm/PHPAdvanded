<?php


class Home extends Controller
{
    public function __construct()
    {
        $this->view("header");
    }

    function page()
    {
        $modelNews = $this->model("NewsModel");
        $listNews = $modelNews->getAllNews();



        $this->view("home", ["listNews" => $listNews]);
    }
}
?>
