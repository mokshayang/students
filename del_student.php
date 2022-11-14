<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'moksha','ji308120');

$sql="DELETE FROM `students` WHERE `name` ='陳彥明'";
$res=$pdo->exec($sql);//送出指令
// echo "<pre>";
// print_r($res);
// echo "</pre>";
//echo "新增結果 : ".$res;
echo "刪除成功 : ".$res;

?>