<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,'moksha','ji308120');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增學生</title>
    <style>
        form{
            display: grid;
            grid-auto-rows: 40px;
        }
        input[type=submit]{
            justify-self: start;
        }
    </style>
</head>
<body>
    <h1>新增學生</h1>
    <form action="api/add_student.php" method="post">
        <label>學　　號 :
            <input type="text" name="school_num">
        </label>
        <label>姓　　名 :
            <input type="text" name="name">
        </label>
        <label>生　　日 :
            <input type="date" name="birthday">
        </label>
        <label>身 分 證 : 
            <input type="text" name="uni_id">
        </label>
        <label>住　　址 :
            <input type="text" name="addr">
        </label>
        <label>家　　長 :
            <input type="text"  name="parents">
        </label>
        <label>電　　話 :
            <input type="text" name="tel" name="tel">
        </label>
        <label>d e p t :
           <select name="dept" >
            <?php
                $sql="SELECT * FROM `dept`";
                $depts=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                foreach($depts as $dept){
                    echo "<option value='{$dept['id']}'>{$dept['name']}</option>";
                }

            ?>
           </select>
        </label>
        <label>graduate_at :
            <input type="text" name="graduate_at">
        </label>
        <label>status_code :
            <input type="text" name="status_code">
        </label>
        <label>班　　級 :
            <input type="number" name="">
        </label>
        <label>座　　號 :
            <input type="number" name="">
        </label>
        <input type="submit" value="確認新增">
    </form>
    
</body>
</html>