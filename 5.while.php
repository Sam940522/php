<?php
   $conn=mysqli_connect("db4free.net", "immust", "immustimmust", "immust"); //連接資料庫網站db4free.net,輸入帳號immust,密碼immustmust,資料庫名稱immust
   $result=mysqli_query($conn, "select * from user"); // 從conn查詢資料並將結果儲存至變數result
   while ($row=mysqli_fetch_array($result)) //呼叫變數result的資料並藉由while迴圈存入變數row
   { 
     echo $row["id"]." ".$row["pwd"]."<br>"; //輸出變數row的資料id和資料pwd
     
   } 
?>