<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
setcookie('flag', true, time()-1, '/');
header("Location: ../View/LoginPage.php"); // Redirecting To Home Page
}
