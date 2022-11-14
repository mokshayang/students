<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'moksha','ji308120');

$sql="INSERT INTO `students` 
(`id`, `school_num`, `name`, 
 `birthday`, `uni_id`, `addr`,
 `parents`, `tel`, `dept`, 
 `graduate_at`, `status_code`) VALUES 
(NULL, '915084', '陳彥明', 
 '1984-06-12', 'F133322235', '新北市太山區龍華里貴子街100-1號3樓', 
 '陳國雄', '02-1234567', 3, 
 5, '001'),
(NULL, '915084', '陳彥明', 
 '1984-06-12', 'F133322235', '新北市太山區龍華里貴子街100-1號3樓', 
 '陳國雄', '02-1234567', 3, 
 5, '001');";
$res=$pdo->exec($sql);//送出指令
// echo "<pre>";
// print_r($res);
// echo "</pre>";
//echo "新增結果 : ".$res;
echo "新增成功 : ".$res;

?>