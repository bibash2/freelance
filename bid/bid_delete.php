<?php
function on_delete($pdo, $bid)
{
    if (!filter_var($bid, FILTER_VALIDATE_INT)) {
        return false;
    }

    $stmt = $pdo->prepare("Delete from bid where bid=?");
    $result = $stmt->exec([$bid]);

    if ($result) {
        return [
            'ok' => 1,
            'msg' => 'Bid deleted succesfully'
        ];
    } else {
        return [
            'ok' => 1,
            'msg' => "Don't able to delete the bid please try again later"
        ];
    }
}
