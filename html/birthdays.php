<?php $title = 'MediaBazar'; ?>
<?php
include('head.php');
?>
<body>
<?php include('navbar.php'); ?>
<?php include('../php/getMonthlyBirthdays.php'); ?>
<link rel="stylesheet" href="../css/birtdays.css">

<ul class="cards">
    <?php for ($count = 0; $count < count($names); $count++) {
        $bday = $bdays[$count];
        $bdayDate = date('Y-m-d', strtotime($bday));
        $shouldHide = $bdayDate > date('Y-m-d') ? false : true;
        ?>
        <li class="cards_item">
            <div class="card">
                <div class="card_content <?= $shouldHide ? "faded" : "" ?>">
                    <h2 class="card_title"><?= $names[$count] ?> </h2>
                    <h5 class="card_title">(<?= $bday ?>) </h5>
                    <p class="card_text">Works at <?= $departments[$count] ?> </p>
                </div>
            </div>
        </li>
    <?php } ?>
</ul>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
