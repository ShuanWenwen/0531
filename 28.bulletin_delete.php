<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }  #此段程式用於刪除布告，刪除失敗出現佈告刪除錯誤；刪除成功則出現佈告刪除成功
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $sql="delete from bulletin where bid='{$_GET["bid"]}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        }else{
            echo "佈告刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=11.bulletin.php'>";
    }
?>
