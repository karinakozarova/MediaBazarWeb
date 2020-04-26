<?php
$title = "User Contracts";
include('head.php');
include '../php/constants.php';
include '../php/config.php';
include '../php/contractListing.php';
include '../php/currentContract.php';
?>

<body>
<?php include('navbar.php'); ?>
<link rel="stylesheet" href="../css/contracts.css">
<link rel="stylesheet" href="../css/bootstrap4-cards.css">

<div class="contract-Container container-fluid centered">
    <div class="panel panel-default shadow">
        <div class="h4 panel-body text-grey">Current contract</div>
        <div class="panel-footer curContracts"></div>
    </div>
    <div class="panel panel-default shadow">
        <div class="h4 panel-body text-grey">Previous contracts</div>
        <div class="panel-footer previousCards prevContracts"></div>
    </div>
</div>

<script type="text/javascript">
    var pContracts = <?php echo json_encode($listContracts); ?>;
    var cContract = <?php echo json_encode($currentContract); ?>;
</script>

<script type="text/javascript" src="../js/listContracts.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
