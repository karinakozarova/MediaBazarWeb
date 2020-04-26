$(document).ready(function() {
    if(pContracts.length > 0) {
        for (var i = 0; i < pContracts.length; i++) {
          $(".prevContracts").append('<div class="card bg-light mb-3 marginspace "><div class="card-header"></div><div class="card-body text-dark"><p class="card-text">The contract period <br><span class="boldInfo">' + pContracts[i].contract_start + '</span> To <span class="boldInfo">' + pContracts[i].contract_end + '</span><br>The wage was <span class="boldInfo">' + pContracts[i].contract_hourlywage + '</span>$/hourly</p></div></div>')
        }
    } else {
      $(".prevContracts").append('<h1 class="noContracts">There is no previous contracts</h1>');
    }
    $(".curContracts").append('<p>Contract started at <span class="boldInfo">'+ cContract[0].contractStart +'</span></p> <p>Wage : <span class="boldInfo">'+ cContract[0].currentWage +'</span>$/hourly</p>');
})
