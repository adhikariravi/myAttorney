<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
    }
?>
<!doctype html>
<html lang="en-US">
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="UTF-8">
    <title>myAttorney - Your Legal Helper</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formCustom.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
