$('input[type=checkbox]').each(function () {
    if($(this).is(":checked")){
        $(this).parent().addClass("greenBackground");
    }
})

$("td").on('click', function() {
    if($(this).find("input[type='checkbox']").is(":checked")){
        $(this).find("input[type='checkbox']").prop('checked', false);
        $(this).removeClass("greenBackground");
    } else {
        $(this).find("input[type='checkbox']").prop('checked', true);
        $(this).addClass("greenBackground");
    }
})
