<?php

class News extends Controller
{
    public function __construct()
    {
        $this->view("header");
    }

    public function details($id)
    {
        $modelNews = $this->model("NewsModel");
        $newsById = $modelNews->getNewsById($id);


        $this->view("newDetail", ["newsById" => $newsById]);
    }

    public function newPost()
    {
        $this->view("newPost");
    }

    public function post()
    {
        $modelCustomer = $this->model("NewsModel");
        if (isset($_POST['btnPost']))
        {
            $title = $_POST["txtTitle"];
            $urlImage = $_POST["txtUrlImage"];
            $content = $_POST["txtContent"];
            switch ($_POST["selectType"])
            {
                case "Pháp luật":
                    $type = 1;
                    break;
                case "Thể thao":
                    $type = 2;
                    break;
            }
            date_default_timezone_set('Asia/Bangkok');
            $datePost = date('Y/m/d H:i:s', time());

            $result = $modelCustomer->insertNews($type, $title, $urlImage, $content, $datePost);
            if ($result)
            {
                echo "<script type='text/javascript'>alert('Add successfully!');</script>";
            }
            else
            {
                echo "<script type='text/javascript'>alert('Failed!');</script>";
            }
        }
    }
}