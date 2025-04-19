<?php

$vid = $_POST['txtid'];
$vuser = $_POST['txtuser'];
$vpassword = $_POST['txtpassword'];

$vcon=mysqli_connect("localhost", "root", "", "bdconnexion");

mysqli_query($vcon, "INSERT INTO `bdconnexion`.`inscription` (`id`, `user`, `passeword`) VALUES ('$vid', '$vuser', '$vpassword');");

?>

<p>
    cliquez <a href="index.html">ici</a> pour retourner au formulaire
</p>