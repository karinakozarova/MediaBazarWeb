<?php
$user = $_SESSION['username'];
$user_id_query = $conn->prepare("SELECT account_id FROM user WHERE username=\"$user\"");
$user_id_query->execute();
$user_id = $user_id_query->fetchColumn();

if (isset($_POST["assignShifts_bttn"])){

  include 'shiftCreationDates.php';

  if($newWeek == true){
    include 'schdCheckbox.php';
    $countSelectedshifts = count($assignDays);

    if($countSelectedshifts < 1){
        $errorMessageText = "You should atleast select one shift for next week";
      } else {

      if($maxdate != $mindate){
        $assignSql = "DELETE FROM employee_working_days WHERE employee_id = \"$user_id\" AND assigned_date = \"$mindate\"";
        $query = $conn->prepare($assignSql);
        $query->execute();
      }

      for($i = 0;$i < $countSelectedshifts;$i++){
        $assignSql = "INSERT INTO employee_working_days (employee_id, week_day_id, shift,assigned_date) VALUES (\"$user_id\",\"$assignDays[$i]\",\"$assignShifts[$i]\",\"$currentDate\")";
        $query = $conn->prepare($assignSql);
        $query->execute();
      }
      header('Location: ../html/schedule.php');
    }
    } else {
      $errorMessageText = "Schdule already created for next week";
    }
  }
