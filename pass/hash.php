<?php

$username = "mahmud";
$password = "123456";
$hashPass = md5($password);

$formuser = "mahmud";
$formpass = "123456";

if ($formuser == $username && md5($formpass) == $hashPass) {
    echo "Login Success";
}else{
    echo "Login Failed";
}

