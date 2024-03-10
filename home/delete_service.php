<?php
function delete_services($pdo, $id)
{
    if (!filter_var($id, FILTER_VALIDATE_INT)) {
        return false;
    }

    $stmt = $pdo->prepare(`Delete from services_post where id =?`);
    $result = $stmt->execute([$id]);
    if ($result) {
        return [
            'ok' => 1,
            'msg' => "Service Deleted succesfully"
        ];
    } else {
        return [
            'ok' => 0,
            'msg' => "Not able to delete the services",
        ];
    }

    header('location:your_post.php');
}
