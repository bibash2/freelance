<?php
function your_services($pdo, $id)
{
    if (!filter_var($id, FILTER_VALIDATE_INT)) {
        return false;
    }
    
    $stmt = $pdo->query("select * from service_post where sid=?");
    $stmt->exec([$id]);
    $row=$stmt->fetch(PDO::FETCH_ASSOC);

    if($row===NULL){
        return [
            'ok'=>1,
            'msg'=>'You have not posted yet',
        ];
    }else{
        return json_encode($row);
    }

}
