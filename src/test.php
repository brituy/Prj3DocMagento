<?php

 phpinfo();

$value = "World";
//$db = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb4', 'root', 'root');
//$databaseTest = ($db->query('SELECT * FROM users'))->fetchAll(PDO::FETCH_OBJ);

try {
    //соединение с БД
    $databaseTest = new PDO('mysql:host=database;dbname=magento2', 'magento2', 'magento2');
    $databaseTest->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    //получаем данные
    $data = $databaseTest->query('SELECT * FROM users' . $databaseTest->quote($string));
 
    //выводим результат
    foreach($data as $rows) {
        print_r($rows);
        }
 
    } catch(PDOException $e) {
          echo 'Ошибка: ' . $e->getMessage();
    }

?>
<html>
    <body>
        <h1>Hello, <?= $value ?>!</h1>
        <?php foreach($databaseTest as $row): ?>
            <p>Hello, <?= $row->name ?></p>
        <?php endforeach; ?>
    </body>
</html>
