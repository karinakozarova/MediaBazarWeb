$(document).ready(function () {
    if (pContracts.length > 0) {
        for (var i = 0; i < pContracts.length; i++) {
            $(".prevContracts").append('<div class="card bg-light mb-3 marginspace"><div class="card-body"><p class="card-text"> <b> Contract period: </b> <br><span class="boldInfo">' + pContracts[i].contract_start + '</span> to <span class="boldInfo">' + pContracts[i].contract_end + '</span><br><hr> <p> <b>Wage: </b> <br> <span class="boldInfo">' + pContracts[i].contract_hourlywage + '$</span>/hour</p></div></div>')
        }
    } else {
        $(".prevContracts").append('<h5 class="text-grey">There are no previous contracts</h5>');
    }
    $(".curContracts").append('<p> <b> Started </b> on <span class="boldInfo">' + cContract[0].contractStart + '</span></p> <p><b> Wage: </b> <span class="boldInfo">' + cContract[0].currentWage + '$</span>/hour</p>');
});
