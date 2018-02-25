<?php
session_start();
$_SESSION["login"] = "yes";
echo "<script>location.href='index.php';</script>"
?>