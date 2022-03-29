<!DOCTYPE html>
<html lang="en">

<head>
    <title> opdracht groen, rood </title>
    <style>

        body {
            text-align: center;
        }

        img.red{
            border: solid 5px red;
        }

        img.green{
            border: solid 5px green;
        }

    </style>
</head>

      <body>

      <?php

      for ($i = 1; $i <= 9; $i++) {
          if( $i % 2 == 0){
              echo '<img class="red" src="phpimages/auto'.$i.'.jpg" alt="auto'.$i.'">';
          } else {
              echo '<img class="green" src="phpimages/auto'.$i.'.jpg" alt="auto'.$i.'">';
          }
      }

      ?>

      </body>

</html>
