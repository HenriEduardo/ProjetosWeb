<?php

    class clientsController{

        public function register(){
            require_once("views/templates/header.php");
            require_once("views/clients/register.php");
            require_once("views/templates/footer.php");
        }

        public function registerView(){
            $client = array(
                'name' => $_POST['name'],
                'login' => $_POST['login'],
                'password' => $_POST['password'],
                'sex' => $_POST['sex'],
                'ageRange' => $_POST['ageRange'],
                'birthday' => $_POST['birthday'],
                'time' => $_POST['time']
            );

            require_once("views/templates/header.php");
            require_once("views/clients/registerView.php");
            require_once("views/templates/footer.php");
            
        }

        public function listClients(){

            require_once('models/clientsModel.php');
            $client = new clientsModel();
            $client -> listClients();
            $result = $client -> getConsult();

            $arrayClients = array();

            while ($line = $result -> fetch_assoc()){
                array_push($arrayClients, $line);
            }

            require_once("views/templates/header.php");
            require_once("views/clients/listClients.php");
            require_once("views/templates/footer.php");

        }

    }

?>