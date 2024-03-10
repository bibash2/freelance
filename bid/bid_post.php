<?php
function on_bid($pdo, $sid)
{
    $bid_amount = trim($_POST['bid']);
    $bid_desc = trim($_POST['bid_desc']);

    if (!filter_var($bid_amount, FILTER_VALIDATE_INT)) {
        return false;
    }

    $stmt = $pdo->prepare("INSERT INTO bid (bid_amount, bid_desc) VALUES (?,?)");
    $result = $stmt->exec([$bid_amount, $bid_desc]);

    if ($result) {
        return [
            'ok' => 1,
            'msg' => 'Bid posted succesfully'
        ];
    } else {
        return [
            'ok' => 0,
            'msg' => "Don't able to post the bid. Please try again later"
        ];
    }
}
