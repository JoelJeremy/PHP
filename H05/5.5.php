<?php

session_start();

$users = [
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201"
];

function check_credentials($email, $password)
{
    global $users;
    foreach ($users as $key => $value) {
        if ($key == $email and $value == $password) {
            return true;
        }
    }
    return false;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title> odracht 5 Joel Amah </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <style>
    body {
        background: lightskyblue;
        margin-left: 700px;
        margin-top: 250px;
    }

    </style>
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
    if (!isset($_POST['password']) or empty ($_POST['password'])) {
        header("location: " . $_SERVER['PHP_SELF']);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (check_credentials($email, $password)) {
        exit("Welcome !");
    } else {
        exit("Acces Denied !");
    }
}
?>

</body>
</html>