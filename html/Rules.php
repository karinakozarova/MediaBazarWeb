<?php $title = 'Rules'; ?>
<?php include('head.php');
include '../php/constants.php';
include '../php/config.php';
include '../php/rulesList.php';
?>
<body>
<?php include('navbar.php'); ?>
<link rel="stylesheet" href="../css/rules.css">

<div class="cover">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Rules and regulations</h3>
        </div>
        <div class="panel-body">
            <p>Please go through the rules and regualtions below, going againts our policy would not be tolirated</p>
            <ul class="rule"></ul>
        </div>
    </div>
</div>

<script type="text/javascript">
    var ruleslist = <?php echo json_encode($rules); ?>;
</script>

<script type="text/javascript" src="../js/ruleListing.js"></script>
</body>
</html>
