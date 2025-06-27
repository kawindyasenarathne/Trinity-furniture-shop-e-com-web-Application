<?php

require "connection.php";

$email = $_POST["e"];
$np1 = $_POST["n1"];
$np2 = $_POST["n2"];
$vcode = $_POST["v"];

if(empty($email)){
    echo("Missing your Email");
}else if(empty($np1)){
    echo("Insert a New password");
}else if(strlen($np1) <5 || strlen($np1) >20){
    echo("invalid password");
}else if(empty($np2)){
    echo("Re-type your New password");
}else if($np1 != $np2){
    echo("password does nit matched");
}else if(empty($vcode)){
    echo("Enter your verification code");
}else{

    $rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."' AND `verification_code`='".$vcode."'");
    $n = $rs->num_rows;

    if($n == 1){

        Database::iud("UPDATE `user` SET `password`='".$np1."' WHERE `email`='".$email."'");
        echo("Done");

    }else{
        echo("Invalid Email or Verification Code");
    }

}

?>