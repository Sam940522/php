<?php
    error_reporting(0); //不顯示錯誤訊息
    session_start();    //使用session儲存使用者資料
    if (!$_SESSION["id"]) //檢查session是否有儲存id 否就執行下行  
    {  
        echo "請登入帳號"; //輸出 請登入帳號
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>"; //上行執行完經過3秒後,自動跳轉到2.login.html
    }
    else{   
        $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        //連接資料庫網站db4free.net 輸入帳號immust 密碼immustmust 資料庫名稱immust 並將連線結果存進變數conn
        $sql = "DELETE FROM user WHERE id='{$_GET["id"]}'"; //根據接收到的id 將user表格對應的id欄位及相關欄位刪除
        echo $sql; //輸出 DELETE FROM user WHERE id='{$_GET["id"]}'
        if (!mysqli_query($conn,$sql)) //如果mysqli_query($conn, $sql)執行失敗 執行下行
        { 
            echo "使用者刪除失敗"; //輸出 使用者刪除失敗
        }
        else
        {
            echo "使用者刪除成功"; //輸出 使用者刪除成功
        }   
        echo "<meta http-equiv=REFRESH content='3, url=18.user.php'>"; //3秒後跳轉到 18.user.php
    }
?>