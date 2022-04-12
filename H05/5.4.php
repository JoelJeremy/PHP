<?php
$users = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title> email-login Joel Amah </title>
</head>

<body>

<?php if (!isset($_POST['button'])) { ?>
    <!-- Formulier -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        E-mail: <input type="text" name="email" placeholder="E-mail">
        <br>
        Password: <input type="password" name="password" placeholder="Password">
        <input type="submit" name="button" value="SEND">
    </form>
    <?php

} else {

    //E-mail
    if (!isset($_POST['email']) or empty($_POST['email'])) {
        header("location: " . $_SERVER['PHP_SELF']);
    }
    //Password
    if (!isset($_POST['password']) or empty($_POST['password'])) {
        header("location: " . $_SERVER['PHP_SELF']);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach ($users as $key => $value) {
        if ($key == $email AND $value == $password) ;
        {
            exit("Welcome !");
        }
    }
    exit("Sorry acces not granted !");
}
?>

</body>
</html>