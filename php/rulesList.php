<?php
$rules = [];

$querylist = $conn->prepare("SELECT description FROM rules");
$querylist->execute();
$listingRules = $querylist->fetchAll();

foreach ($listingRules as $element) {
    array_push($rules, $element["description"]);
}
