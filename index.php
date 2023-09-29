<html lang="hu">
<head>
  <title>pizzarendeles</title>
  <link rel="icon" href="pizza.ico" type="image/x-icon">
  <link rel="stylesheet" href="ppizza.css">
  <script language="JScript" src="cookie.js"></script>
</head>
<body onload="getLocation()">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $txt = $_POST['txt'];
  $nev = $_POST['nev'];
}
?>
<table ID="Tab" border="0" cellpadding="5">
  <tr>
    <td ID="menu-logo">
      <img ID="logo" src="./chef.png">
      <b ID="Bold">PPizza</b>
    </td>
    <td ID="menu-sales">
      <a href="./about.htm">Rólunk</a>
    </td>
    <td ID="menu-contact">
      <a href="mailto:ppizza@ppizza.com">Kapcsolat</a>
    </td>
    <td ID="menu-order">
      <form action="./order.php" method="post">
        <input type="text" name="nev" ID="nev" placeholder="Neved">
        <input type="text" name="txt" ID="txt" list="pizzak" placeholder="Pizzad">
  
        <datalist id="pizzak">
          <!-- options -->
        </datalist>
  
        <input type="submit" ID="btn">
      </form>
    </td>
  </tr>
</table>
<div ID="mbox">
  <script language="JScript" src="menu.js"></script>
</div>
</body>
</html>
