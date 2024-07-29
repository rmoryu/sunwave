<?php
// $db_link = mysqli_connect("php伺服器名字", "account", "password");
// $db_link = mysqli_connect("localhost", "root", "");

// if (!$db_link){
//     die("false");
// }else {
//     die("success");
// }
// 以上為簡易測試
?>

<?php
// 資料庫主機設定
$db_host = "localhost";
$db_username = "root";
$db_password = "";

// 連接伺服器
// 如果連結失敗會顯示訊息
$db_link = mysqli_connect($db_host, $db_username, $db_password);
if (!$db_link) die("false");

// 設定字元集
mysqli_query($db_link, "SET NAMES 'utf8'");
?>