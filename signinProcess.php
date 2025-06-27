<?php

session_start();
require "connection.php";

$email = $_POST["e"];
$password = $_POST["p"];
$rememberme = $_POST["r"]; 

if(empty($email)){
    echo ("Enter your Email");
}else if(strlen($email) > 100){
    echo("Email must have less than 100 characters");
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Invald Email"); 
}elseif(empty($password)){
    echo("Enter your password");
}elseif(strlen($password)< 5 || strlen($password) > 20){
    echo("Password mus be have between 5-20 characters");
}else{ 

    $rs = Database::search(" SELECT * FROM `user` WHERE `email`='".$email."' AND `password`='".$password."'");
    $n = $rs->num_rows;

    if($n == 1){

        echo("succsess");
        $d = $rs->fetch_assoc();
        $_SESSION["u"] = $d;

        if($rememberme == "true") {
            setcookie("email",$email,time() + (60*60*24*365));
            setcookie("password",$password,time() + (60*60*24*365));
        }else{
            setcookie("email","", -1);
            setcookie("password","", -1);
        }
    }else{
        echo("Invalid username or password"); 
    }
}


?>