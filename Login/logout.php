<?php
session_start();

$_SESSION["Name"] = NULL;
$_SESSION["CharName"] = NULL;
$_SESSION["Auth"] = NULL;

header("Location: http://undaground.ga/Website.html");
exit;

?>
