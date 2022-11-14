<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">   
    <title>學生管理系統</title>
    <style>
        #list-students{
            display: grid;
            grid-auto-rows: 40px;
            
        }
        #list-students .items{
            display: grid;
            grid-template-columns: repeat(6,1fr);
            align-items: center;
        }
        #list-students .items:nth-child(2n){
            background-color: #eef;
        }
    </style>
</head>
<body>
    <h1>學生管理系統</h1>
    <nav>
        <a href="add.php">新增學生</a>
        <a href="reg.php">教師註冊</a>
        <a href="login.php">教師登入</a>
        <a href=""></a>
        <a href=""></a>
    </nav>
    <?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo= new PDO($dsn,'moksha','ji308120');//連線物件 PDO();

$sql="SELECT * FROM `students` LIMIT 20 ";
//$result=$pdo->query($sql);//連線到資料表data了
//$rows=$result->fetch(PDO::FETCH_NAMED);//對資料表fetch(拿取資料);
//$rows=$result->fetch(PDO::FETCH_NAMED);
 $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($rows);
// echo "</pre>";
?>

<div id="list-students">
    <div class="items">
        <div>學號</div>
        <div>姓名</div>
        <div>生日</div>
        <div>畢業國中代碼</div>
        <div>年齡</div>
        <div>操作</div>
    </div>
<?php
foreach($rows as $row){
    $age=round((strtotime('now')-strtotime($row['birthday']))/(60*60*24*365),1);

    // echo "<tr>";
    echo "<div class='items'>";
    echo "<div>{$row['school_num']}</div>";
    echo "<div>{$row['name']}</div>";
    echo "<div>{$row['birthday']}</div>";
    echo "<div>{$row['graduate_at']}</div>";
    echo "<div>{$age}</div>";
    echo "<div>";
    echo "<a href='edit.php?id={$row['id']}'>編輯</a>";
    echo "<a href='del.php?id={$row['id']}'>刪除</a>";
    echo "</div>";
    echo "</div>";
}
?>
</div>
</body>
</html>