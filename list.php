<?php
    require("DBconnect.php");
    $SQL="SELECT * FROM user";

    echo "<h1>使用者列表</h1>";
    if($result=mysqli_query($link,$SQL)){
        echo "<table border='1'>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row["uNo"]."</td><td>".$row["uName"]."</td><td>".$row["uPwd"]."</td><td>".$row["uRole"]."</td><td><a href='delete.php?uNo=".$row["uNo"]."'>刪除</a></td><td><a href='update.php?uNo=".$row["uNo"]."'>修改</a></td>";
            echo "</tr>";  
        }
        echo "</table>";
    }
?>