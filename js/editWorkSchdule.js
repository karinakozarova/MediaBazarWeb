var table = document.querySelector('#table')
var selectedCells = table.getElementsByClassName('selected')

table.addEventListener('click', function(e) {
  var td = e.target

  if(td.tagName !== 'TD') {
    return
  }

  if(td.className !== 'selected') {
    td.className = 'selected';
  }else{
    td.className = '';
  }

})
