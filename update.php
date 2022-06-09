<?php
    require("DBconnect.php");
    $uNo=$_GET["uNo"];

    $SQL="SELECT * FROM user WHERE uNo='$uNo'";

    if($result=mysqli_query($link,$SQL)){
        while($row=mysqli_fetch_assoc($result)){
            $uName=$row['uName'];
            $uPwd=$row['uPwd'];
            $uRole=$row['uRole'];
        }
    }
?>

<h1>使用者更新</h1>

<form action="updateconfirm.php" method="post">
    User Number: <?php echo $uNo;?></br>
    <input type="hidden" name="uNo" value='<?php echo $uNo;?>'>
    Please input username:<input type="text" name="uName" Value='<?php echo $uName;?>'><br>
    Please input password:<input type="text" name="uPwd" value='<?php echo $uPwd;?>'></br>

    <?php
        if($uRole=='user'){
            echo "Please select role:User<input type='radio' name='uRole' value='user' checked> Admin<input type='radio' name='uRole' value='admin'></br>";
        }else{
            echo "Please select role:User<input type='radio' name='uRole' value='user'> Admin<input type='radio' name='uRole' value='admin' checked></br>";
        }
    ?>
    <input type="submit" Value="更新"></br>
</form>