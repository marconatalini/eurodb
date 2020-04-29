require('../scss/live.scss');

document.addEventListener('DOMContentLoaded', function() {
    // let terminaleDiv = document.querySelector('.js-terminale-id');
    // let idTerminale = terminaleDiv.dataset.idTerminale;

    let table = $('table');

    // URL is a built-in JavaScript class to manipulate URLs
    let u = new URL('http://192.168.10.10:3000/.well-known/mercure');
    // u.searchParams.append('topic', 'http://europass.locale/online/' + idTerminale);
    u.searchParams.append('topic', 'http://eurodb.europrofili.locale/eurostep/');
    // Subscribe to updates of several Book resources

    console.log(u);

    const es = new EventSource(u.href);

    es.onmessage = e => {
        // Will be called every time an update is published by the server
        let step = JSON.parse(e.data);
        let orario = new Date(step.timestamp.timestamp * 1000);
        let inizioFineClass = "fas fa-spinner rotating";
        console.log(step);
        if (step.inizioFine == 1) {
            inizioFineClass = "fas fa-check";
        }
        table.prepend($(`<tr class="live"><th scope="row">${step.numeroOrdine}_${step.lottoOrdine}</th><td>${orario.toLocaleString("it-IT")}</td><td>${step.codiceFase.descrizione}</td><td>${step.codiceOperatore.descrizione}</td><td><i class="${inizioFineClass}"></i></td></tr>`));
    }


});

