<?php
function get_user($pdo, $id){
    if(!filter_var($id, FILTER_VALIDATE_INT)){
        return false;
    }
    
    $stmt = $pdo->prepare("select * from users where id = ?");
    $stmt->execute([$id]);
    $row= $stmt->fetch(PDO::FETCH_ASSOC);
    

    if($row === NULL) return false;
    return $row;
}