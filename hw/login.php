<?php
session_start();
?>
<?php
if(isset($_COOKIE["UID"])){
    $cookieID=$_COOKIE["UID"];
    echo "感謝".$cookieID."來本系統";
}else{
    echo "歡迎初次來本系統!!";
}

?>

<html>
<head>
    <title>登入</title>
</head>
<body bgcolor="#ecdcc2" >
<form action="login.php" method="post" style="width: 90%;">
<table>
    <tr>
        <td>帳號</td>
        <td><input type="text" name="account" required="required" placeholder="請輸入帳號"></td>
    </tr>
    <tr>
        <td>密碼</td>
        <td><input type="password" name="password" required="required"></td>
    </tr>
    <tr>
     <td><input type="submit" value="登入"></td>
    </tr>
</table>
</form>
<?php
$adminaccount="admin";
$adminpassword="aaaa456789";
$useraccount="user";
$userpassword="sss123456";

if(isset($_POST["account"])){
    if($_POST["account"]!=null){
        $account=$_POST["account"];
        $password=$_POST["password"];
        ///echo $account."<br/>";
        ///echo $password;
        if($adminaccount==$account && $adminpassword==$password){
           $_SESSION["login"]="Yes";
           setcookie("UID",$account);
            // echo "登入成功";
           header('Location: admin.php');
        }elseif($useraccount==$account && $userpassword==$password){
            $_SESSION["login"]="Yes";
            setcookie("UID",$account);
            header('Location: Register.php');
        }else{
            $_SESSION["login"]="No";
            header('Location: noen.php');
        }
    }else{
        echo "您尚未輸入帳號密碼";
    }
}else{
    echo "歡迎登入，請輸入帳號密碼";
}




?>
</body>
</html>