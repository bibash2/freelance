<?php
function all_service($pdo)
{
    $stmt = $pdo->query('Select * from service_post');
    $all_services = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($all_services === NULL) return "No Services has posted yet";
    return json_encode($all_services);
}

function count_all_services($pdo)
{
    $stmt = $pdo->prepare("select count(*)  from service_post");
    $count_services = $stmt->execute();
    return $count_services;
}
