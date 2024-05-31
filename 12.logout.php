<?php
    session_start();
    unset($_SESSION["id"]); #按登出後，三秒跳回2.login.html 登入網頁
    echo "登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";

?>
