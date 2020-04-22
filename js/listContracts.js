$(document).ready(function() {
    if(pContracts.length > 0) {
        for (var i = 0; i < pContracts.length; i++) {
            $(".prevContracts").append('<div class="prevContractCard"><p class="Cardtext">The contract period <br>' + pContracts[i].contract_start + ' To ' + pContracts[i].contract_end + '<br><hr> The wage was ' + pContracts[i].contract_hourlywage + '$/hourly</p></div>')
        }
    } else {
      $(".prevContracts").append('<h1 class="noContracts">There is no previous contracts</h1>');
    }
    $(".curContracts").append('<p>Contract started at '+ cContract[0].contractStart +'</p> <hr> <p>Wage : '+ cContract[0].currentWage +'$/hourly</p>');
})
