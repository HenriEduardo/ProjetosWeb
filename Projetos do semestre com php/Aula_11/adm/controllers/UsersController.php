<?php

    class UsersController{

        public function validateLogin(){
            $login = $_POST['login'];
            $password = $_POST['password'];
            require_once("models/UsersModel.php");
            $UserModel = new UsersModel();
            $UserModel -> getUser($login);

            $result = $UserModel -> getConsult();

            if ($line = $result->fetch_assoc()){
                if($password == $line['password']){
                    $_SESSION['login'] = $line['user'];
                    header ('Location:index.php?controller=main&action=home');
                }
                else{
                    print ('Senha incorreta');
                }
            }else{
                print ("Usuário não existe");
            }
        }

    }

?>