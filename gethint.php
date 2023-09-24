<?php
$a[] = "Hawaii";
$a[] = "Margherita";
$a[] = "Prosciutto";
$a[] = "Frutti di Mare";
$a[] = "Quattro Formaggi";
$a[] = "Bismarck";
$a[] = "Bufalina";
$a[] = "Calzone";
$a[] = "Ricotta";
$a[] = "Spinaci";
$a[] = "Diavola";
$a[] = "Tricolore";

$q = $_REQUEST["q"];

$hint = "";

if ($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint === "" ? "ERROR!" : $hint;
?>
