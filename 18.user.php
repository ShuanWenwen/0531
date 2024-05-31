<html>
    <head><title>使用者管理</title></head>
    <body>
    <?php
        error_reporting(0);
        session_start();
        if (!$_SESSION["id"]) {
            echo "請登入帳號";
            echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        }           #這段程式用來管理使用者    #14.user_add_form.php用來新增，11.bulletin.php>用來回報告欄
        else{   
            echo "<h1>使用者管理</h1>
                [<a href=14.user_add_form.php>新增使用者</a>] [<a href=11.bulletin.php>回佈告欄列表</a>]<br>  
                <table border=1>
                    <tr><td></td><td>帳號</td><td>密碼</td></tr>";
            
            $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); #程式碼連接到名為"db4free.net" 的MySQL 資料庫伺服器，使用使用者名稱"immust" 和密碼"immustimmust"，並且選擇了名為"immust" 的資料庫。
            $result=mysqli_query($conn, "select * from user");  #選取user表中之內容，將結果儲存在$result變數中
            while ($row=mysqli_fetch_array($result)){
                echo "<tr><td><a href=19.user_edit_form.php?id={$row['id']}>修改</a>||<a href=17.user_delete.php?id={$row['id']}>刪除</a></td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
            }
            echo "</table>";
        }
    ?> 
    </body>
</html>
