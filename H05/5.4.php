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
        <!--email-->
        E-mail: <input type="text" name="email" placeholder="E-mail">
        <br>
        <!--password-->
        Password: <input type="password" name="password" placeholder="Password">
        <!--Button-->
        <input type="submit" name="button" value="SEND">
    </form>
    <?php

} else {
    if (!isset($_POST['email']) or empty($_POST['email'])) {
        header("location: " . $_SERVER['PHP_SELF']);
    }
    if (!isset($_POST['password']) OR empty ($_POST['password'])) {
        header("location: " . $_SERVER['PHP_SELF']);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach ($users as $key => $value) {
        if ($key == $email and $value == $password) {
            exit("Welcome!");
        }
    }
    exit("Acces denied!");
}

?>

</body>
</html>