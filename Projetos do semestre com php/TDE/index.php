<?php

    if(!isset($_GET['controller'])){
        require_once("controllers/site.php");
        $site = new siteController();
        $site -> home();
    }else{
        switch ($_REQUEST['controller']) {
            case 'site':
                require_once("controllers/site.php");
                $site = new siteController();
                if(!isset($_GET['action'])){
                    $site -> home();
                }else{
                    switch ($_REQUEST['action']) {
                        case 'home':
                            $site -> home();
                        break;
                        case 'sobre':
                            $site -> sobre();
                        break;
                        case 'produtos':
                            $site -> produtos();
                        break;
                        case 'contato':
                            $site -> contato();
                        break;
                    }
                }
            break;

            case 'clients':
                require_once("controllers/clients.php");
                $client = new clientsController();
                if(!isset($_GET['action'])){
                    $client -> index();
                }else{
                    switch ($_REQUEST['action']) {
                        case 'register':
                            $client -> register();
                        break;
                        case 'registerView':
                            $client -> registerView();
                        break;
                        case 'listclient':
                            $client -> listClients();
                        break;
                    }
                }
            break;

        }
    }

    $path = $_SERVER['REQUEST_URI']; 
    $path = rtrim($path, '/'); 
    $path = filter_var($path, FILTER_SANITIZE_URL); 
    $path = explode('/', $path); 

    $this->controller = $path[1]; 
    $this->action = $path[2];
    
?>