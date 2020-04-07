<?php $title = "Schedule";
$addCalendar = true;
include('head.php'); ?>

<body>
<?php include('navbar.php'); ?>

<div class="container">
    <div class="mb-4">
        <h2 class="mb-3"> Your schedule: </h2>
        <div class="mb-2" id="sked1"></div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
<script src="../libs/jquery-sked-tape-master/src/jquery.skedTape.js"></script>

<script type="text/javascript">
    var locations = [
        {id: '0', name: 'Monday'},
        {id: '1', name: 'Tuesday'},
        {id: '2', name: 'Wednesday'},
        {id: '3', name: 'Thursday'},
        {id: '4', name: 'Friday'},
        {id: '5', name: 'Saturday'},
        {id: '6', name: 'Sunday'},
    ];
    // TODO: take this from the server
    const events = [
        {
            name: 'Meeting',
            location: '0',
            start: today(12, 0),
            end: today(15, 30)
        },
        {
            name: 'Meeting',
            location: '2',
            start: today(10, 0),
            end: today(11, 30),
        },
    ];

    function today(hours, minutes) {
        var date = new Date();
        date.setHours(hours, minutes, 0, 0);
        return date;
    }
    // --------------------------- Example 1 ---------------------------
    var $sked1 = $('#sked1').skedTape({
        caption: 'Weekdays',
        start: today(8, 0),
        end: today(22, 0),
        showEventTime: true,
        showEventDuration: true,
        scrollWithYWheel: true,
        locations: locations.slice(),
        events: events.slice(),
        maxTimeGapHi: 60 * 1000, // 1 minute
        minGapTimeBetween: 1 * 60 * 1000,
        snapToMins: 1,
        editMode: false,
        timeIndicatorSerifs: true,
        showIntermission: true,
        formatters: {
            date: function (date) {
                return ""; // if we want to show the date, we can show it here
                // return $.fn.skedTape.format.date(date, 'l', '.');
            },
            duration: function (ms, opts) {
                return $.fn.skedTape.format.duration(ms, {
                    hrs: 'hrs',
                    min: 'mins.'
                });
            },
        },
        canAddIntoLocation: function(location, event) {
            return false; // change to true if we dont want to edit
        }
    });
    $sked1.on('event:dragEnded.skedtape', function(e) {
        //console.log(e.detail.event);
    });
    $sked1.on('event:click.skedtape', function(e) {
        // uncomment this if we want to be able to remove events
       // $sked1.skedTape('removeEvent', e.detail.event.id);
    });
    $sked1.on('timeline:click.skedtape', function(e, api) {
        // try {
        //     $sked1.skedTape('startAdding', {
        //         name: 'New meeting',
        //         duration: 60 * 60 * 1000 // 1 hour
        //     });
        // }
        // catch (e) {
        //     if (e.name !== 'SkedTape.CollisionError') throw e;
        //     alert('Already exists');
        // }
    });
    // $sked1.date.localTime();
</script>
</body>
</html>