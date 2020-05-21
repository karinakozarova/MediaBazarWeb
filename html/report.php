<?php
$title = "Report";
include('head.php');
include('../php/sendReport.php');
?>
<head>
    <link rel="stylesheet" href="../css/sendReport.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script type="text/javascript">
        var isSaved = "<?= isset($_REQUEST['isSaved']) ? "true" : "false"?>";
    </script>
    <script src="../js/sendReport.js"></script>
</head>
<body>
<?php include('navbar.php'); ?>
<br>
<div class="container">
    <div class="row">
        <form method="post"
            class="col-md-offset-4 col-lg-offset-2 col-md-5 col-sm-10 col-lg-8 col-xl-6">
          <h2 class="centered">Send anonymous report</h2>
          <div class="form-group">
            <label for="reportSubject">Subject</label>
            <input type="text" class="form-control" id="reportSubject" placeholder="Subject" name="reportSubject" required>
          </div>
          <div class="form-group">
            <label for="reportMessage">Message</label>
            <textarea class="form-control" id="reportMessage" rows="10" placeholder="Message" name="reportMessage" required></textarea>
          </div>
          <button type="submit" class="btn btn-light btn-block" id="btn-send-report" name="sendReport">
              Submit report
          </button>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>