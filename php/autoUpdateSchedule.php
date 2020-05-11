<?php
include('config.php');
date_default_timezone_set("Europe/Amsterdam");

$user = $_SESSION['username'];

$user_id_query = $conn->prepare("SELECT account_id FROM user WHERE username=\"$user\"");
$user_id_query->execute();
$user_id = $user_id_query->fetchColumn();

$latestdateQuery = $conn->prepare("SELECT max(assigned_date) FROM employee_working_days WHERE employee_id=\"$user_id\"");
$latestdateQuery->execute();
$maxDate = $latestdateQuery->fetchColumn();

$NextWeekSchedule = date('Y-m-d', strtotime("next Monday"));

if ($NextWeekSchedule != $maxDate) {

  $query = $conn->prepare("SELECT week_day_id as day, shift FROM employee_working_days WHERE employee_id=\"$user_id\" AND assigned_date = \"$maxDate\"");
  $query->execute();
  $elements = $query->fetchAll();

  foreach ($elements as $element)
  {
      $shift = $element["shift"];
      $day =  $element["day"];
      
      $assignSql = "INSERT INTO employee_working_days (employee_id, week_day_id, shift,assigned_date) VALUES (\"$user_id\",\"$day\",\"$shift\",\"$NextWeekSchedule\")";
      $query = $conn->prepare($assignSql);
      $query->execute();
  }

}
