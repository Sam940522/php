<?php   
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //連接資料庫網站db4free.net,輸入帳號immust,密碼immustmust,資料庫名稱immust
   $result=mysqli_query($conn, "select * from user"); //從conn查詢資料並將結果儲存至變數result
   $login=FALSE; // 預設變數login為FALSE狀態
   while ($row=mysqli_fetch_array($result))  //呼叫變數result的資料並藉由while迴圈存入變數row
   {
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) //如果資料id與接收到的變數id資料相同,且資料pwd與接收到的變數pwd相同執行括號內容
     {
       $login=TRUE; //變數login設為 TRUE
     }
   } 
   if ($login==TRUE)
     echo "登入成功"; // 如果是 TRUE，顯示登入成功
  else
     echo "帳號/密碼 錯誤";  // 否則顯示登入失敗
?>