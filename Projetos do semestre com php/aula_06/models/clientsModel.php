<?php

    class ClientsModel{

        var $result;

        public function ListClients(){
            
            require_once('bd/connectClass.php');
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $Oconn = $Oconn -> getConn();

            $sql = 'SELECT * FROM clients';

            $this -> result = sconn -> query($sql);


        }

        public function getConsult(){
            
            return $this -> result;

        }

    }

?>