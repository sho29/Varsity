<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Logout</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
    body{
        background: url("web.jpg");
    }
    </style>
</head>
<body>
<?php
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        header("Location: login.php");
    }
?>
</body>
</html>
