<?php
session_start();
if($_SESSION["login"]=="Yes"){
    echo "<a href='logout.php'>logout</a><br>";
    echo "Welcome to<br> Admin!!<br>";
}else{
    exit();
}