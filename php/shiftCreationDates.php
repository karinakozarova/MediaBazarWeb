<?php
$dateQuery = $conn->prepare("SELECT max(assigned_date) AS maxDate FROM employee_working_days WHERE employee_id =\"$user_id\"");
$dateQuery->execute();
$fetchedDates = $dateQuery->fetchColumn();

$newWeek = false;
$maxdate = $fetchedDates;

if($fetchedDates == $NextSchedule) {$newWeek = true;}
