<?php

require "connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$password = $_POST["p"];
$mobile = $_POST["m"];

if(empty($fname)){
    echo("Enter your Frist Name");
}else if(strlen($fname) > 50){
    echo("Frist name must have less than 50 characters");
}else if(empty($lname)){
    echo("Enter your Lrist Name");
}else if(strlen($fname) > 50){
    echo("Lrist name must have less than 50 characters");
}elseif(empty($email)){
    echo("Enter your Email.");
}elseif(strlen($email) > 100){
    echo("Email muust less than 100 characters");
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo("Invalid Email");
}elseif(empty($password)){
    echo("Enter your password");
}elseif(strlen($password) < 5 || strlen($password) > 20){
    echo("Password must be between 5 - 20 characters");
}elseif(empty($mobile)){
    echo("Enter your Mobile");
}elseif(strlen($mobile) !=10){
    echo("Mobile muust be have 10 chracters");
}elseif(!preg_match("/07[,1,2,4,5,6,7,8][0-9]/",$mobile)){
    echo("Invlid mobile");
}else{

$rs = Database::search("SELECT * FROM `user` WHERE `email`='".$email."' OR `mobile`='".$mobile."'");
$n = $rs->num_rows;

if($n > 0){
    echo("User with the same Email or Mobile already exists.");
}else{
    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");

    Database::iud("INSERT INTO `user`
    (`fname`,`lname`,`email`,`password`,`mobile`) VALUE
    ('".$fname."','".$lname."','".$email."','".$password."','".$mobile."')");

    echo "Done";

}

}

?>