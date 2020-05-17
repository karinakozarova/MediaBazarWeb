<?php
$rules = [];

$querylist = $conn->prepare("SELECT Description FROM rules");
$querylist->execute();
$listingRules = $querylist->fetchAll();

foreach ($listingRules as $element) {
    $rule = new \stdClass();

    $rule->description = $element["Description"];

    array_push($rules, $rule);
}
