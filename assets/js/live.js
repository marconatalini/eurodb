require('../scss/live.scss');

function goLive() {
    // let terminaleDiv = document.querySelector('.js-terminale-id');
    // let idTerminale = terminaleDiv.dataset.idTerminale;

    let table = $('table');

    // URL is a built-in JavaScript class to manipulate URLs
    let u = new URL('http://192.168.10.10:3000/.well-known/mercure');
    // let u = new URL('http://192.168.29.98:3000/.well-known/mercure');

    u.searchParams.append('topic', 'http://eurodb.europrofili.locale/eurostep/');
    // Subscribe to updates of several Book resources

    console.log(u);

    const es = new EventSource(u.href);

    es.onmessage = e => {
        // Will be called every time an update is published by the server
        let step = JSON.parse(e.data);
        let orario = new Date(step.timestamp.timestamp * 1000);
        let carrello = step.carrello;
        let bilancelle = step.bilancelle;
        let extra_info = "";

        if (bilancelle > 0.0) {
            extra_info = ` [${bilancelle}]`;
        }

        if (carrello !== "") {
            extra_info = ` [${carrello}]`;
        }

        let inizioFineClass = "fas fa-spinner rotating";
        console.log(step);
        if (step.inizioFine == 1) {
            inizioFineClass = "fas fa-check";
        }
        table.prepend($(`<tr class="live"><th scope="row">${step.numeroOrdine}_${step.lottoOrdine}</th>
            <td>${orario.toLocaleString("it-IT")}</td>
            <td>${step.codiceFase.descrizione} ${extra_info}</td>
            <td>${step.codiceOperatore.descrizione}</td>
            <td><i class="${inizioFineClass}"></i></td>
            <td>${step.secondi}</td></tr>`));
    }
}

document.addEventListener('DOMContentLoaded', function() {
    let livemode = document.getElementById('livemode').dataset.live;
    console.log(livemode);
    if (livemode == 1) {
        goLive();
    }
});

$('#myModal').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget); // Button that triggered the modal
    let recipient = button.data('link'); // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    let modal = $(this);
    modal.find('.modal-footer a').attr('href', recipient)
//            modal.find('.modal-body input').val(recipient)
})

