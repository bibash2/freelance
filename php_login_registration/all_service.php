<?php
require_once 'db_connection.php';
   $method = $_SERVER['REQUEST_METHOD'];


    if ($method=="GET"){
        $stmt = $pdo->query("select * from users where id =2");
       
        $row= $stmt->fetch(PDO::FETCH_ASSOC);

        echo json_encode($row);
    }
?>