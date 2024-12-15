<?php

define("USERNAME","sumon");
define("PASSWORD", "1234");

echo "Enter Username: ";
$inputUsername = readline();
echo "Enter Password: ";
$inputPassword = readline();

if($inputUsername === USERNAME && $inputPassword === PASSWORD){
    echo "Login Successful!\n";

}else{
   # echo "Invalid Username or Password.\n";
}