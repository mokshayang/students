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
            margin: auto;
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
            <?php
            $sql="SELECT max(`school_num`) FROM `students`";
            $max=$pdo->query($sql)->fetchColumn();
            // $rows=$pdo->query($sql)->fetchAll();
            // $row=$pdo->query($sql)->fetch();

            // echo "<pre>";
            // print_r($max);
            // echo "</pre>";
            // echo "<pre>";
            // print_r($rows);
            // echo "</pre>";
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
            ?>
            <?= $max+1;?>
            <input type="hidden" name="school_num" value="<?= $max+1;?>" readonly style="border:none;">
        </label>
        <label>姓　　名 :
            <input type="text" name="name">
        </label>
        <label>生　　日 :
            <input type="date" name="birthday">
        </label>
        <label>身 分 證&nbsp;&nbsp;&nbsp;: 
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
        <label>科　　別 :
           <select name="dept" >
            <?php
                $sql="SELECT `id`,`name` FROM `dept`";
                $depts=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                foreach($depts as $dept){
                    echo "<option value='{$dept['id']}'>{$dept['name']}</option>";
                }
            ?>
           </select>
        </label>
        <label>畢業國中 :
            <select name="graduate_at" id="">
                <?php
                    $sql="SELECT * FROM `graduate_school`";
                $grads=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                foreach($grads as $grad){
                    echo "<option value='{$grad['id']}'>{$grad['county']}{$grad['name']}</option>";
                }
                ?>
            </select>
        </label>
        <label>畢業狀況 :
            <select name="status_code" id="">
            <?php
                $sql="SELECT * FROM `status`";
            $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            foreach($rows as $row){
                echo "<option value='{$row['code']}'>{$row['status']}</option>";
            }
            ?>
        </select>
        </label>
        <label>班　　級 :
        <select name="classes">
            <?php
                $sql="SELECT * FROM `classes`";
                $class=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
                foreach($class as $classes){
                    echo "<option value='{$classes['code']}'>{$classes['name']}</option>";
                }
            ?>
           </select>
        </label>
        <label>座　　號 :
           
        </label>
        <input type="submit" value="確認新增">
    </form>
    
</body>
</html>