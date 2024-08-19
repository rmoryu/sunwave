<?php
// 測試資料庫有沒有連結成功
include("./data_php/connect_test.php");
$seldb = mysqli_select_db($db_link, "sunwave");

// 如果沒有就顯示下列訊息
// 方法一
// if (!$seldb) {
//     die("失敗ㄌ嗚嗚嗚<br><br>");
// } else {
//     // 如果成功了就顯示下列訊息
//     echo "成功了好欸<br><br>";
// }
// 方法二
if (!$seldb) die("<h1>失敗了嗚嗚嗚</h1>");

$sql_query = "SELECT * FROM pyclass";
$result = mysqli_query($db_link, $sql_query);
$total_records = $result->num_rows;

?>