<?php
$dateQuery = $conn->prepare("SELECT max(assigned_date) AS maxDate,min(assigned_date) AS minDate FROM employee_working_days WHERE employee_id =\"$user_id\"");
$dateQuery->execute();
$fetchedDates = $dateQuery->fetchAll(PDO::FETCH_ASSOC);

date_default_timezone_set("Europe/Amsterdam");
$currentDate = date("Y-m-d");
$newWeek = false;

foreach ($fetchedDates as $row) {
  $maxdate = $row['maxDate'];
  $mindate = $row['minDate'];
  $formattedDate = date('Y-m-d D', strtotime($maxdate));

  while (strtotime($formattedDate) <= strtotime($currentDate)) {

    if(strpos($formattedDate, "Sun"))
    {
      $newWeek = true;
    }
    $formattedDate = date ("Y-m-d D", strtotime("+1 day", strtotime($formattedDate)));
  }
}
