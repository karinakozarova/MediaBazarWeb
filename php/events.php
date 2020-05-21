<?php
include('../php/config.php');
include('../php/constants.php');

date_default_timezone_set("UTC");

$dataQuery = $conn->prepare("SELECT title, description, start_time, end_time, address, count(a.id) as attendees FROM events e left join event_attendees a on a.event_id = e.id group by e.id ");
$dataQuery->execute();

while ($row = $dataQuery->fetch(PDO::FETCH_ASSOC)) {
    $row["invited"] = 5;     // TODO: add here invitations to the events array when they are implemented
    $events[] = $row;
}

