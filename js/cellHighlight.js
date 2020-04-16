$('input[type=checkbox]').each(function () {
  if($(this).is(":checked")){
      $(this).parent().addClass("greenBackground");
  }
})

$("input[type='checkbox']").change(function(){
   if($(this).is(":checked")){
       $(this).parent().addClass("greenBackground");
   }else{
       $(this).parent().removeClass("greenBackground");
   }
})
