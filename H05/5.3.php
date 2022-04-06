<!DOCTYPE html>
<html lang="en">
<head>
    <title> Opdracht 5.3 Joel Amah </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>

<body class="container">

<h1> Select your cars:</h1>
<form action="5.3result.php" method="get">
    <div class="form-group">
        <select class="form-control" name="carnames[]" id="carnames" multiple>
            <option value="Ferrari"> Ferrari </option>
            <option value="Mercedes"> Mercedes </option>
            <option value="Pagani"> Pagani </option>
            <option value="Italy"> Italy </option>
            <option value="Porsche"> Porsche </option>
        </select>
    </div>
    <button class="btn btn-warning"> Preview Car></button>
</form>

</body>
</html>
