<?php

session_start()

require_once "connect.php";

$connect_check = @new mysqli($host, $db_user, $db_password, $db_name);

?>