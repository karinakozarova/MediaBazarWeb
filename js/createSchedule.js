var $schedule = $('#schedule').skedTape({
    caption: 'Weekdays',
    start: today(9, 0),
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
    canAddIntoLocation: function (location, event) {
        return false; // change to true if we dont want to edit
    }
});
$schedule.on('event:dragEnded.skedtape', function (e) {
    //console.log(e.detail.event);
});
$schedule.on('event:click.skedtape', function (e) {
    // uncomment this if we want to be able to remove events
    // $schedule.skedTape('removeEvent', e.detail.event.id);
});
$schedule.on('timeline:click.skedtape', function (e, api) {
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
// $schedule.date.localTime();