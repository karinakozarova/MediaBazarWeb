$(".close").click(function() {
    var id = $(this).val();
    var idClass = "." + id;
    $.ajax({
        url: '../php/markAsRead.php',
        type: 'post',
        data: {"id": id},
        success: function(response) {}
    });
    $(idClass).addClass('alert-success');
    $(idClass).removeClass('alert-danger');
    $(this).css("display", "none");
});