<?php
include('config.php');

if (isset($_POST['sendReport'])){
    $reportSubject = $_POST['reportSubject'];
    $reportMessage = $_POST['reportMessage'];
    $reportStatus = "unread";

    $sendReportQuery = "INSERT INTO reports (report_subject, report_message, status) VALUES (\"$reportSubject\", \"$reportMessage\", \"$reportStatus\")";
    $sendReport = $conn->prepare($sendReportQuery);
    $sendReport->execute();

    header("Location:" . "report.php?isSaved=true");
}