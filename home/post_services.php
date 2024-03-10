<?php
function post_services($pdo)
{
    $service = trim($_POST["service_type"]);
    $desc = trim($_POST["desc"]);
    $price = trim($_POST["post"]);
    $job_for = trim($_POST["job_for"]);
    $complition_date = trim($_POST["date"]);

    $stmt = $pdo->prepare("Insert into services (service,desc,price,job_for,complition_date) values (?,?,?,?,?)");
    $result = $stmt->execute([$service, $desc, $price, $job_for, $complition_date]);

    if($result){
        return [
            "ok"=>1,
            "msg"=>"post Posted succesfully"
        ];
    }else{
        return [
            "ok"=>1,
            "msg"=>"Don't able to post the services please try again"
        ];
    }
}
