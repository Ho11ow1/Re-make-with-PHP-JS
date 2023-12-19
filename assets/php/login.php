<?php

session_start()

require_once "connect.php";

$connect_check = @new mysqli($host, $db_user, $db_password, $db_name);

if($connect_check -> connect_errno != 0)
    {
        print ("Error: ".$connect_check -> connect_errno);
    }
    else
    {
        $login = $_POST['login'];
        $password = $_POST['password'];

        $connect_check -> close();

        
    }



?>