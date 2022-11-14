<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">   
    <title>學生管理系統</title>

</head>
<body>
    <h1>學生管理系統</h1>
    <?php
//$dsn="mysql:host=localhost;charset=utf8;dbname=school";
//$pdo= new PDO($dsn,'moksha','ji308120');//連線物件 PDO();

//$sql="SELECT * FROM `students` ";
//$result=$pdo->query($sql);//連線到資料表data了
//$rows=$result->fetch(PDO::FETCH_NAMED);//對資料表fetch(拿取資料);
//$rows=$result->fetch(PDO::FETCH_NAMED);//一次一筆
// $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_NAMED);
// echo "<pre>";
// print_r($rows);
// echo "</pre>";
$db=mysqli_connect('localhost','moksha','ji308120','school');
mysqli_set_charset($db,'utf8');

$sql="SELECT * FROM `students` LIMIT 5 ";
$result=mysqli_query($db,$sql);
$rows=mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
</body>
</html>