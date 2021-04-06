<?php

    class ConnectClass{

        var $conn;

        function openConnect(){

            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'pw_exemple1';
            $this -> conn = new mysqli ($servername, $username, $password, $dbname);

        }

        function getConn(){

            return $this -> conn;

        }

    }

?> 