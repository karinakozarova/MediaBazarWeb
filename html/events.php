<?php $title = 'MediaBazar'; ?>
<?php
include('./head.php');
?>
<body>
<?php include('navbar.php');
include('../php/events.php'); ?>

<link rel="stylesheet" href="../css/birtdays.css">
<ul class="cards">
    <?php for ($count = 0; $count < count($events); $count++) {
        $event = $events[$count];
        ?>
        <div data-toggle="modal" data-target="#modal_<?= $count ?>">
            <li class="cards_item">
                <div class="card">
                    <div class="card_content">
                        <h2 class="card_title"><?= $event['title'] ?></h2>
                        <h5 class="card_title"><i><?= $event['description'] ?></i></h5>
                        <h5 class="card_title"><i>Address: <?= $event['address'] ?></i></h5>
                        <h6> Click the event for more information </h6>
                    </div>
                </div>
            </li>
        </div>

        <div class="modal fade" id="modal_<?= $count ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title" id="modal_1Label"><?= strtoupper($event['title']) ?></h5>
                        <h5><i><?= $event['description'] ?></i></h5>

                    </div>
                    <div class="modal-body">
                        <h5>Address: <b> <?= $event['address'] ?> </b></h5>
                        <h5>From <b> <?= $event['start_time'] ?> </b> to <b><?= $event['end_time'] ?> </b></h5>
                        <h5>Invited: <b> <?= $event['invited'] ?> </b></h5>
                        <h5>Attending: <b> <?= $event['attendees'] ?> </b></h5>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success btn-half">Join [WIP]</button>
                        <button type="button" class="btn btn-secondary btn-half" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</ul>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
