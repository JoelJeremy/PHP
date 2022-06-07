<?php
session_start();
//logout-----------------------------------------------
if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    $_SESSION['logged_in'] = false;
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> opdracht 7.1 Joel Amah </title>
    </head>
    <body>
    <!------------------------------PHP switch------------------------------------------------------------------------->
    <?php
    if ($_SESSION['logged_in'] == true) {
        echo "You have succesfully logged in !!!. " . '<a href="' . $_SERVER['PHP_SELF'] . '?logout=true"> LOGOUT </a>';
    } else {
        ?>
        <!-----------------------------------html---------------------------------------------------------------------->
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <!--input fields-->
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="submit"> SEND !</button>
        </form>
    <?php } ?>

    </body>
    </html>
    <!----------------------------------PHP SWITCH--------------------------------------------------------------------->
<?php
//--------------------------------------if statements-------------------------->
if ($_SESSION['logged_in'] === true) {
    exit();
}

if (!isset($_POST['submit'])) {
    exit("Sign in !");
}

//if empty's
if (empty($_POST['username'])) {
    echo '<br> Please enter a username !!!';
}
if (empty($_POST['password'])) {
    echo '<br> Please enter a password !!!';
}

//input checks
if (!isset($_POST['username'])) {
    exit('Oops Something went wrong');
}
if (!isset($_POST['password'])) {
    echo("Oops, something went wrong");
}

$username = $_POST['username'];
$password = $_POST['password'];

//echo "{$username} - {$password}";

$users = [
    [
        "username" => "joel",
        "password" => "jeremy",
    ],
//    array2
    [
        "username" => "hans",
        "password" => "anders",
    ],
//    array3
    [
        "username" => "hallo",
        "password" => "jumbo",
    ]
];

foreach ($users as $user) {
    if ($user['username'] == $username && $user['password'] == $password) {
        $_SESSION['logged_in'] = true;
        header("location: " . $_SERVER['PHP_SELF']);
    }
}