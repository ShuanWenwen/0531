<html>
    <head><title>修改使用者</title></head>
    <body>
    <?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        $result=mysqli_query($conn, "select * from user where id='{$_GET['id']}'");
        $row=mysqli_fetch_array($result); #將mysqli_fetch_array($result)的資料，輸入進$row中
        echo "
        <form method=post action=20.user_edit.php>
            <input type=hidden name=id value={$row['id']}>  #hidden隱藏的輸入欄位用於密碼
            帳號：{$row['id']}<br>   #抓取使用者id
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>  #抓密碼欄位進行修改
            <input type=submit value=修改>  #submit新增，修改的按鍵
        </form>
        ";
    }
    ?>
    </body>
</html>
