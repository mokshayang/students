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
$dsn="mysql:host=location;charset=utf8;dbname=school";
$pdo= new PDO($dsn,'moksha','ji308120');

$sql="SELECT * FROM `students` LINIT 5";


?>
</body>
</html>