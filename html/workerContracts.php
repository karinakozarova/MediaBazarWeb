<?php
$title = "User Contracts";
$addContracts = true;
include('head.php');
include '../php/constants.php';
include '../php/config.php';
include '../php/contractListing.php';
include '../php/currentContract.php';
?>

<body>

    <?php include('navbar.php'); ?>
    <link rel="stylesheet" href="../css/contracts.css">

    <div class="contract-Container container-fluid centered">
        <div class="card border-secondary shadow">
            <div class="card-header m-0 font-weight-bold text-primary">Current contract</div>
            <div class="card-body curContracts"></div>
        </div>
        <div class="card border-secondary shadow">
            <div class="card-header m-0 font-weight-bold text-primary">Previous contract</div>
            <div class="card-body prevContracts previousCards"></div>
        </div>
    </div>


    <script type="text/javascript">
        var pContracts = <?php echo json_encode($listContracts); ?>;
        var cContract = <?php echo json_encode($currentContract); ?>;
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/listContracts.js"></script>

</body>
</html>
