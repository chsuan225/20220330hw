<?php
session_start();
if($_SESSION["login"]=="Yes"){
    echo "<a href='logout.php'>登出</a>";
}else{
    echo "非法進入!!";
    exit();
}

?>


<html>
<head>
<title>墾丁三日遊報名資料</title>
<link rel="icon" href="/img/sun.jpg" type="image/x-icon" />
</head>

<body bgcolor="#ecdcc2" >
<h1>墾丁三日遊報名表</h1>
<form action="urinfo.php" method="post" style="width: 90%;">
<table>
    <tr>
        <td>姓名</td>
        <td><input type="text" name="uname"  required="required" placeholder="請輸入您的姓名"></td>
    </tr>
    <tr>
        <td>Mail</td>
        <td><input type="email" name="umail" placeholder="e.q. xxx@gmail.com"></td>
    </tr>
    <tr>
        <td>生日</td>
        <td><input type="date" name="ubirthday" required="required"></td>
    </tr>
    <tr>
        <td>電話</td>
        <td><input type="number" name="uphnum" required="required"></td>
    </tr>
    <tr>
        <td>身分證字號</td>
        <td><input type="text" name="uid" required="required" placeholder="A1232345678"></td>
    </tr>
    <tr>
        <td>性別</td>
        <td><input type="radio" name="gender" value="1">男<input type="radio" name="gender" value="2">女</td>
    </tr>
    <tr>
        <td>飲食偏好</td>
        <td><input type="checkbox" name="food" value="1">素食</td>
        <td><input type="checkbox" name="food" value="2">葷食</td>
        <td><input type="checkbox" name="food" value="3">不吃海鮮</td>
        <td><input type="checkbox" name="food" value="4">不吃牛</td>
        <td><input type="checkbox" name="food" value="5">不吃豬</td>
    </tr>
    <tr>
        <td>衣服尺寸</td>
        <td><select name="size">
            <option>XS</option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>門票張數</td>
        <td><select name="ticket">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>行程</td>
        <td><select name="schedule">
        <option value="0">請選擇</option>
        <option value="1">行程A&nbsp&nbsp&nbsp特價：6,999元</b>&nbsp&nbsp&nbsp<s>&nbsp<b>原價：8,999元</option>
        <option value="2">行程A&nbsp&nbsp&nbsp特價：4,999元</b>&nbsp&nbsp&nbsp<s>&nbsp<b>原價：6,999元</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>參加人數</td>
        <td><input type="number" name="unumber" required="required"></td>
    </tr>
    <tr>
        <td>建議</td>
        <td><input type="textbox" name="comment" required="required"></td>
    </tr>


    <tr>
     <td><input type="submit" value="送出表單"></td>
    </tr>
</table>
</form>
</body>
</html>