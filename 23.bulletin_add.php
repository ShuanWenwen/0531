<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }  #需先登入才能新增布告
        #$sql="insert into bulletin(title, content, type, time)  此行用來插入變數資料
        #if (!mysqli_query($conn, $sql)){echo "新增命令錯誤";  若錯誤，則出現新增命令錯誤
            #若新增成功，則出現新增成功，三秒後跳回 布告頁11.bulletin.php
            
    else{
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="insert into bulletin(title, content, type, time) 
        values('{$_POST['title']}','{$_POST['content']}', {$_POST['type']},'{$_POST['time']}')";
        if (!mysqli_query($conn, $sql)){
            echo "新增命令錯誤";
        }
        else{
            echo "新增佈告成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
        }
    }
?>
