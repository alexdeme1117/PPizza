<?php
echo "A neved: " . $_POST["nev"] . "<br>";
echo "Ezt rendelted: " . $_POST["txt"] . "<br>";
?>
<a href="https://www.google.com/maps/place/<?= $_COOKIE['location']; ?>">Ide</a>
