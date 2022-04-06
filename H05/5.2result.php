<?php

if (!isset($name) || !isset($email) || !isset($password)) {
    exit("Script has been stopped");
}

$email = $_POST ['email'];
$password = $_POST ['password'];

echo "Je hebt de volgende gegevens ingevuld: <br>\n";
echo "Name: {$name}<br>\n";
echo "E-mail: {$email}<br>\n";
echo "Password: {$password} <br>\n";


ValidateData ('name');
ValidateData('email');
ValidateData('password');

//fucntion
function ValidateData($index) {
    if (isset ($_POST[$index]) && !empty($_POST[$index])) {
        $$index = $_POST [$index];
    } else {
        echo "SERVER: You have not entered your {$index} <br>\n ";
    }

}

