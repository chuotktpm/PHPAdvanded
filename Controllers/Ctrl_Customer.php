<?php
    include_once("./Model/M_Customer.php");

    class Controllers_Customer
    {
        public function __construct()
        {

        }

        public function showList()
        {
            $modelCustomer = new Model_Customer();
            $customerList = $modelCustomer->getAllCustomer();
            include_once  './View/showListCustomer.php';
        }

        public function newCustomer()
        {

            $modelCustomer = new Model_Customer();
            if (isset($_POST['btnAdd']))
            {
                $name = $_POST["txtName"];
                $email = $_POST["txtEmail"];
                $creatDate = $_POST["txtCreateDate"];
                $updatedDate = $_POST["txtUpdatedDate"];
                if ($modelCustomer->insertCustomer($name, $email, $creatDate, $updatedDate))
                {
                    echo "<script type='text/javascript'>alert('Thêm thành công');</script>";
                    header("location: ?action=showList");
                }
                else
                {
                    echo "<script type='text/javascript'>alert('Thêm thất bại!');</script>";
                }

            }
        }
    };
?>