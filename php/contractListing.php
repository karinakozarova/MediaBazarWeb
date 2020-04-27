<?php

date_default_timezone_set("Europe/Amsterdam");
$user = $_SESSION['username'];
$listContracts = [];

$user_id_query = $conn->prepare("SELECT account_id FROM user WHERE username=\"$user\"");
$user_id_query->execute();
$user_id = $user_id_query->fetchColumn();

$querylist = $conn->prepare("SELECT contract_start, contract_end, contract_hourlywage FROM contract WHERE person_id=\"$user_id\" AND contract_status=1");
$querylist->execute();
$listingContract = $querylist->fetchAll();
foreach ($listingContract as $element) {
    $contract = new \stdClass();

    $contract->contract_start = date('jS F Y', strtotime($element["contract_start"]));
    $contract->contract_end = date('jS F Y', strtotime($element["contract_end"]));
    $contract->contract_hourlywage = $element["contract_hourlywage"];

    array_push($listContracts, $contract);
}
