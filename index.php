<?php

session_start();


if($_SESSION['id']){
    include ('auth.php');
}else{
    header('Location: /form.php');
}

