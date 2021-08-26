<?php
session_start();
include_once ("./Controllers/Ctrl_Customer.php");
include_once ("./Controllers/Ctrl_Login.php");
class Controller{

    public function destination(){
        $ctrlLogin = new Controller_Login();
        $customer = new Controllers_Customer();
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'showList':
                    $customer ->showList();
                    break;
                case 'newCustomer':
                    include_once  './View/addCustomer.php';
                    break;
                case 'addCustomer':
                    $customer ->newCustomer();
                    break;
                case 'login':
                    $ctrlLogin -> Login();
                    break;
                case 'home':
                    include_once ("./View/home.php");
                    break;

                default:
                    break;
            }
        }else{
            include_once ("./View/login.php");
        }
    }
}
