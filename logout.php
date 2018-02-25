<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: home.html"); // Redirecting To Home Page
}
?>