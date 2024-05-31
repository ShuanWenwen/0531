<html>
    <head><title>新增使用者</title></head>
    <body>
<?php        
    error_reporting(0);  #登入錯誤出現，請登入帳號，三秒後跳回2.login.html
    session_start();
    if (!$_SESSION["id"]) {
        echo "請登入帳號";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
    }
    else{    
        echo "
            <form action=15.user_add.php method=post>
                帳號：<input type=text name=id><br>
                密碼：<input type=text name=pwd><p></p>
                <input type=submit value=新增> <input type=reset value=清除>    #value按鈕名稱 submit為新增  reset為清除
            </form>                                                             #新增使用者
        ";
    }
?>                  
    </body>
    
</html>
