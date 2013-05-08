<?php

if(!isset($_SESSION['databaseConnection']))
    $_SESSION['databaseConnection'] = new mysqli("localhost", "root", "",
            "nyan");

$userName=$_GET['username'];
$score = $_GET['score'];
$query="INSERT INTO highscore(userName,score) VALUES ('{$userName}',{$score})";
$_SESSION['databaseConnection']->query($query);

header('Location: index.html');
?>