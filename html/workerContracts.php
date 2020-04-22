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

    <div class="container-wrap">
        <div class="card shadow mb-4">
            <div class="card-header padded">
                <h5 class="m-0 font-weight-bold text-primary">Current contract</h5>
            </div>
            <div class="card-body curContracts"></div>
        </div>
        <div class="card shadow mb-4">
            <h5 class="m-0 font-weight-bold text-primary">Previous contracts</h5>
            <div class="card-body prevContracts previousCards"></div>
        </div>
    </div>

    <script type="text/javascript">
        var pContracts = <?php echo json_encode($listContracts); ?>;
        var cContract = <?php echo json_encode($currentContract); ?>;
    </script>

    <script type="text/javascript" src="../js/listContracts.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
