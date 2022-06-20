<?php
    $inputID = $_POST["userID"];
    $inputPASS = $_POST["userPASS"];
    $SQLconnect = mysqli_connect("localhost","root","mulgogy153@","sqldb") or die("mysql 접속 실패");    

    $SQLorder = "SELECT * 
        FROM id_pass
        WHERE ID = '$inputID' and PASS = '$inputPASS'
        ";
    $SQLresult = mysqli_query($SQLconnect,$SQLorder);
    if(mysqli_num_rows($SQLresult) == 0) 
    {
        echo "다시 로그인 하세요.";
    }
    while($row = mysqli_fetch_array($SQLresult))
    {
        echo $row["ID"]," ",$row["PASS"],"<br>";
    } 
?>