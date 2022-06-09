<html>
<head>
    <title>註冊資訊</title>
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uaccount=$_POST["uaccount"];
        $upsw=$_POST["upsw"];
        $uname=$_POST["uname"];
        $uemail=$_POST['uemail'];
        $ubir=$_POST['ubir'];
        $usex=$_POST['usex'];
        $comment=$_POST['comment'];  
    }
?>

<?php    
    echo "帳號:".$uaccount."<br/>";
    echo "密碼:".$upsw."<br/>";
    echo "姓名:".$uname."<br/>";
    echo "信箱:".$uemail."<br/>";
    echo "生日:".$ubir."<br/>";
    if($usex=="1"){
        echo "性別:男<br/>";
    }elseif($usex=="2"){
        echo "性別:女<br/>";
    }else{
         echo "不方便透漏性別<br/>";
    }
    echo '你的建議:<br/>'.$comment."<br/>";                
        
?>

<input type="submit" value="進入活動頁面" onclick="javascript:location.href='A1091359_Kenting.php'">
</body>
</html>