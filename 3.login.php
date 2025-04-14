<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234")) //接收變數id和變數pwd判斷是否符合,如果都符合就執行
        echo "登入成功"; // 如果變數id和變數pwd都符合 顯示登入成功
    else
        echo "登入失敗"; // 否則 顯示登入失敗
?>