<!DOCTYpe html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <title> opdracht 5.2 Joel Amah </title>
</head>
<body class="container">

<form action="5.2result.php" method="post">

    <div class="form-group">
        <!--name-->
        <label for="names"> Name: </label>
        <input class="form-control" id="names" type="text" name="name">
    </div>
    <br>
    <div class="form-group">
        <!--E-mail-->
        <label for="email"> E-mail: </label>
        <input class="form-control" type="email" id="email" name="email">
    </div>
    <br>
    <div class="form-group">
        <!--password-->
        <label for="password"> Password: </label>
        <input class="form-control" type="password" id="password" name="password">
    </div>
    <br>
    <!--button-->
    <button class="btn btn-warning" type="submit"> SEND </button>

</form>

</body>
</html>
