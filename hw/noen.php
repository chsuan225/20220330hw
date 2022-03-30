<?php
echo "非法進入!!";
session_start();
if($_SESSION["login"]=="No"){
    echo "<a href='login.php'><br>回登入頁</a>";
}else{
    exit();
}
?>