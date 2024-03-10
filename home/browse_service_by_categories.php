<?php
function browse_service_by_categories($pdo)
{
    $categories = trim($_GET["categories"]);

    $stmt = $pdo->prepare("select * from serices_post where job_post=?");
    $stmt->exec([$categories]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row === NULL) {
        return [
            'ok' => 1,
            'msg' => 'Not found any post on ' . $categories
        ];
    } else {
        return json_encode($row);
    }
}
