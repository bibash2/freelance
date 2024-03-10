<?php
function on_edit($pdo, $bid)
{
    $$bid_amount = trim($_POST['bid_amount']);
    $bid_desc = trim($_POST['bid_desc']);

    if (!filter_var($bid, FILTER_VALIDATE_INT)) {
        return false;
    }

    $stmt = $pdo->prepare("UPDATE bid set bid_amount=?, bid_desc=? WHERE bid=?");
    $result = $stmt->exec([$bid_amount, $bid_desc, $bid]);


    if ($result) {
        return [
            'ok' => 1,
            'msg' => 'Bid posted updated succesfully succesfully'
        ];
    } else {
        return [
            'ok' => 0,
            'msg' => "Don't able to update the bid. Please try again later"
        ];
    }
}
