function today(hours, minutes) {
    var date = new Date();
    date.setHours(hours, minutes, 0, 0);
    return date;
}