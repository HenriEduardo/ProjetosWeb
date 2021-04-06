<?php

    class ConnectClass{

        var $conn;

        function openConnect(){

            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'pw_ap2';
            $this -> conn = new mysqli ($servername, $username, $password, $dbname);

        }

        function getConn(){

            return $this -> conn;

        }

    }

?> 