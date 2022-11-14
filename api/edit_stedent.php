<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'moksha','ji308120');

$sql="UPDATE `students` SET `name`='丁于穎',`birthday`='1988-08-12' WHERE `id` ='1'";
$res=$pdo->exec($sql);//送出指令 exec只返回影響的比數 同樣更改 會出現0筆 第2筆不受影響
// echo "<pre>";
// print_r($res);
// echo "</pre>";
//echo "新增結果 : ".$res;
echo "編輯成功 : ".$res;

?>