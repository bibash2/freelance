<?php
function edit($pdo, $id)
{
    $service = trim($_POST["service_type"]);
    $desc = trim($_POST["desc"]);
    $price = trim($_POST["post"]);
    $job_for = trim($_POST["job_for"]);
    $complition_date = trim($_POST["date"]);

    if (!empty($service)) {
        $stmt = $pdo->prepare("UPDATE service_posts SET service=? WHERE sid = ?");
        $stmt->execute([$service]);
    }
    if (!empty($desc)) {
        $stmt = $pdo->prepare("UPDATE service_posts SET desc=? WHERE sid = ?");
        $stmt->execute([$desc]);
    }
    if (!empty($price)) {
        $stmt = $pdo->prepare("UPDATE service_posts SET price=? WHERE sid = ?");
        $stmt->execute([$price]);
    }
    if (!empty($skil)) {
        $stmt = $pdo->prepare("UPDATE service_posts SET job_for=? WHERE sid = ?");
        $stmt->execute([$job_for]);
    }
    if (!empty($complition_date)) {
        $stmt = $pdo->prepare("UPDATE service_posts SET complition_date=? WHERE sid = ?");
        $stmt->execute([$complition_date]);
    }
}
