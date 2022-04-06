<?php

foreach ($_GET['carnames'] as $carnames) {
    echo '<img src="images5/'.$carnames.'.jpg" alt="'.$carnames.'">'."<br>\n";
    echo "{$carnames}<br>\n";
}

?>


