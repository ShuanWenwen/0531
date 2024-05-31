<?php

error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    echo "請登入帳號";
    echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
}
else{    

      $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");  ##建立資料庫連結，以後用來抓取資料
       $sql="insert into user(id,pwd) values('{$_POST['id']}', '{$_POST['pwd']}')"; #新增資料insert into user，id欄位1，pwd欄位2
   #echo 呼叫。$conn連結資料，$sql查詢資料是否正確;
   if (!mysqli_query($conn, $sql)) {
     echo "新增命令錯誤";
   }
   else{
     echo "新增使用者成功，三秒鐘後回到網頁";
     echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>";
   }
}
?>
