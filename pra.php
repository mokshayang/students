<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'moksha','ji308120');
$sql="DELETE FROM `students` WHERE `name` ='陳彥明'";
$res=$pdo->exec($sql);//送出指令


$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'moksha','ji308120');
$rew=$pdo->exec($sql);
?>