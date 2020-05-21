<?php
include('payslipsVariables.php');

$user = $_SESSION['username'];
$user_id_query = $conn->prepare("SELECT account_id FROM user WHERE username=\"$user\"");
$user_id_query->execute();
$user_id = $user_id_query->fetchColumn();

$query = $conn->prepare("SELECT week_day_id as day, shift FROM employee_working_days WHERE employee_id=\"$user_id\" AND assigned_date = \"$currentSchedule\"");
$query->execute();
$elements = $query->fetchAll();

foreach ($elements as $element) {
    $shift = new \stdClass();

    $shift->location = $element["day"];
    $shift->name = 'Working';
    $shift->shift = $element["shift"];

    array_push($days, $shift);
}