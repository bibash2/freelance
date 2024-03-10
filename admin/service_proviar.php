<?php
function service_provider_approval($pdo)
{
    $stmt = $pdo->query("select * from pending");
    $rows = $stmt->exec(PDO::FETCH_ASSOC);

    return json_encode($rows);
}

function approve_sevice_provider($pdo)
{
    $stmt = $pdo->query("select * from service_provider where pending_status = false");
    $rows= $stmt->exec(PDO::FETCH_ASSOC);

    return json_encode($rows);
}

function delete_user($id, $pdo){
    $stmt = $pdo->prepare("delete from service_provider where id=?");
    $stmt->exec([$id]);
}