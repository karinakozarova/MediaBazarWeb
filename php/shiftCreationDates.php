<?php
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
