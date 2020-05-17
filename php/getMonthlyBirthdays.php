<?php
include('../php/config.php');
include('../php/constants.php');
date_default_timezone_set("UTC");
$dataQuery = $conn->prepare("SELECT d.name as department, first_name, last_name, date_of_birth FROM person p inner join employee_details e on e.person_id = p.id left join departments d on e.department_id = d.id order by month(date_of_birth), day(date_of_birth)");
$dataQuery->execute();

$names = [];
$bdays = [];
$departments = [];

while ($row = $dataQuery->fetch(PDO::FETCH_ASSOC)) {
    $name = $row['first_name'] . " " . $row['last_name'];
    $names[] = $name;
    $bdays[] = date('d F', strtotime($row['date_of_birth']));
    $departments[] = $row['department'];
}