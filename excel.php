<?php
    require("DBconnect.php");

    header("Pragma: public");
    header("Expires: 0"); 
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Content-type: application/vnd.ms-excel');
    header('Content-Disposition: inline; filename="php.xls";');
    header('Content-Transfer-Encoding: binary');

    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>uNo</td>";
    echo "<td>uName</td>";
    echo "<td>uPwd</td>";
    echo "<td>uRole</td>";
    echo "</tr>";
    

    $SQL="SELECT * FROM user WHERE";
    $result=mysqli_query($link, $SQL);

    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['uNo']."</td>";
        echo "<td>".$row['uName']."</td>";
        echo "<td>".$row['uPwd']."</td>";
        echo "<td>".$row['uRole']."</td>";

        echo "</tr>";
    }
    echo "</table>";
?>