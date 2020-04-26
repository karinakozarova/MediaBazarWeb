<?php
date_default_timezone_set("Europe/Amsterdam");
$currentContract = [];
$querycurrent = $conn->prepare("SELECT ed.hourly_wage AS currentWage , c.contract_start AS contractStart FROM employee_details AS ed INNER JOIN contract AS c ON ed.contract_id = c.id WHERE c.person_id = \"$user_id\"");
$querycurrent->execute();
$cContract = $querycurrent->fetchAll();

foreach ($cContract as $element) {
    $curcontract = new \stdClass();
    $curcontract->currentWage = $element["currentWage"];
    $curcontract->contractStart = date('jS F Y', strtotime($element["contractStart"]));

    array_push($currentContract, $curcontract);
}
