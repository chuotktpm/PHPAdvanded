<?php
    class Customer extends Controller
    {
        public function __construct()
        {
            if ($_SESSION["Username"] == null)
            {
                echo "<script type='text/javascript'>
                        window.location.href = 'http://localhost/PHPAdvanded/Login/enterLogin';
                    </script>";
            }
            else
            {
                if ($_SESSION["Username"] != "admin")
                {
                    echo "<script type='text/javascript'>
                        alert('Please login admin to access this page!')
                        window.location.href = 'http://localhost/PHPAdvanded/Home/';
                    </script>";
                }
            }
        }

        public function showList()
        {
            $modelCustomer = $this->model("CustomerModel");
            $listCustomer = $modelCustomer->getAllCustomer();
            $this->view("header");
            $this->view("showListCustomer",[
                "ListCustomer" => $listCustomer,
            ]);
            $this->view("footer");
        }

        public function newCustomer()
        {
            $this->view("addCustomer");
        }

        public function addCustomer()
        {
            $modelCustomer = $this->model("CustomerModel");
            if (isset($_POST['btnAdd']))
            {
                $name = $_POST["txtName"];
                $email = $_POST["txtEmail"];
                $creatDate = $_POST["txtCreateDate"];
                $updatedDate = $_POST["txtUpdatedDate"];
                $result = $modelCustomer->insertCustomer($name, $email, $creatDate, $updatedDate);
                if ($result)
                {
                    echo "<script type='text/javascript'>alert('Add successfully!');</script>";
                    $this->showList();
                }
                else
                {
                    echo "<script type='text/javascript'>alert('Faile!');</script>";
                }
            }
        }

        public function editCustomer($id)
        {
            $infoCustomer = $this->model("CustomerModel")->getCustomerById($id);
            $this->view("editCustomer",[
                "info" => $infoCustomer,
            ]);
        }

        public function saveInfoCustomer($id)
        {
            if (isset($_POST['btnEdit']))
            {
                $saveCustomer = $this->model("CustomerModel");
                $name = $_POST["txtName"];
                $email = $_POST["txtEmail"];
                date_default_timezone_set('Asia/Bangkok');
                $updatedDate = date('Y/m/d', time());
                $result = $saveCustomer->updateCustomer($id,$name, $email, $updatedDate);
                if ($result)
                {
                    header("location: ../showList");
                }
                else
                {
                    echo "<script type='text/javascript'>alert('Update Faile!');</script>";
                    $this->editCustomer($id);
                }
            }
        }

        public function deleteCustomer($id)
        {
            $modelCustomer = $this->model("CustomerModel");
            $result = $modelCustomer->deleteCustomer($id);
                if ($result)
                {
                    echo "<script type='text/javascript'>alert('Delete successfully!');</script>";
                    header("location: ../showList");
                }
                else
                {
                    echo "<script type='text/javascript'>alert('Delete Faile!');</script>";
                }
        }
    };
?>