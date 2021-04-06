<?php

    class MainController{

        public function index(){
            if(!isset($_SESSION['login'])){
                header ("Location:index.php?controller=main&action=login");
            }
            require_once("views/templates/header.php");
            require_once("views/templates/home.php");
            require_once("views/templates/footer.php");
        }

        public function login(){
            require("views/users/login.php");
        }

        public function logout(){
            session_destroy();
            header ("Location:index.php?controller=main&action=login");
        }

    }

?>