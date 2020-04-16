<?php

include('shiftCreationDates.php');

$query = $conn->prepare("SELECT week_day_id as day, shift FROM employee_working_days WHERE employee_id=\"$user_id\" AND assigned_date = \"$maxdate\"");
$query->execute();
$elements = $query->fetchAll();

foreach ($elements as $element) {

    $day = $element["day"];
    $shift = $element["shift"];

    if($day == 0 && $shift == "morning")
    {
      $monmorning = 'checked="checked"';
    }else if($day == 0 && $shift == "afternoon"){
      $monafternoon = 'checked="checked"';
    }else if($day == 0 && $shift == "evening"){
      $monevening = 'checked="checked"';
    }else if($day == 1 && $shift == "morning"){
      $tuemorning = 'checked="checked"';
    }else if($day == 1 && $shift == "afternoon"){
      $tueafternoon = 'checked="checked"';
    }else if($day == 1 && $shift == "evening"){
      $tueevening = 'checked="checked"';
    }else if($day == 2 && $shift == "morning"){
      $wedmorning = 'checked="checked"';
    }else if($day == 2 && $shift == "afternoon"){
      $wedafternoon = 'checked="checked"';
    }else if($day == 2 && $shift == "evening"){
      $wedevening = 'checked="checked"';
    }else if($day == 3 && $shift == "morning"){
      $thumorning = 'checked="checked"';
    }else if($day == 3 && $shift == "afternoon"){
      $thuafternoon = 'checked="checked"';
    }else if($day == 3 && $shift == "evening"){
      $thuevening = 'checked="checked"';
    }else if($day == 4 && $shift == "morning"){
      $frimorning = 'checked="checked"';
    }else if($day == 4 && $shift == "afternoon"){
      $friafternoon = 'checked="checked"';
    }else if($day == 4 && $shift == "evening"){
      $frievening = 'checked="checked"';
    }else if($day == 5 && $shift == "morning"){
      $satmorning = 'checked="checked"';
    }else if($day == 5 && $shift == "afternoon"){
      $satafternoon = 'checked="checked"';
    }else if($day == 5 && $shift == "evening"){
      $satevening = 'checked="checked"';
    }else if($day == 6 && $shift == "morning"){
      $sunmorning = 'checked="checked"';
    }else if($day == 6 && $shift == "afternoon"){
      $sunafternoon = 'checked="checked"';
    }else if($day == 6 && $shift == "evening"){
      $sunevening = 'checked="checked"';
    }

}
