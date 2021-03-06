<?php

    session_start();

    $requestMethod = $_SERVER['REQUEST_METHOD']; // get, post, pu, delete
    $local = $_SERVER['SCRIPT_NAME']; // pw/Aula_14/index.php
    $uri = $_SERVER['PHP_SELF']; // pw/Aula_14/index.php/xxx/123

    $rout = str_replace($local, '', $uri); // /xxx/123

    $uriSegments = explode('/', $rout);

    if(isset($uriSegments[1])){
        $controller = $uriSegments[1];
        switch($controller){
            case 'clients':
                require_once('controllers/ClientsController.php');
                $Clients = new ClientsController();
                switch($requestMethod){
                    case 'GET':
                        if(isset($uriSegments[2]) && $uriSegments[2] != ''){
                            $Clients -> listClient($uriSegments[2]);
                        }else{
                            $Clients -> listClients();
                        }
                    break;
                    case 'POST':
                        $Clients -> insertClient();
                    break;
                    case 'PUT':
                        $Clients -> updateClient($uriSegments[2]);
                    break;
                    case 'DELETE':
                        $Clients -> deleteClient($uriSegments[2]);
                    break;
                }

            break;

            case 'users':
                require_once('controllers/UsersController.php');
                $Users = new UsersController();
                switch($requestMethod){
                    case 'GET':
                        if(isset($uriSegments[2]) && $uriSegments[2] == 'login'){
                            if(!isset($uriSegments[3]) || $uriSegments[3] == ''){
                                $Users -> login();
                            }
                        }
                    break;
                }
                
            break;

            }
    }
    
?>