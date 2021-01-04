import Chart from 'chart.js';

let ctx = document.getElementById('myChart');
let labels = document.getElementById('labels').dataset.risultato;
let result = document.getElementById('dataset').dataset.risultato;

let myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: JSON.parse(labels),
        datasets: [{
            data:  JSON.parse(result),
            backgroundColor: ["#cbebf5","#1a83cc","#00478f","#65dff6","#dbf5f0","#a4e5e0","#37beb0","#0c6170","#4c5270","#f652a0","#36eee0","#bcece0"]
        }]
    },
    options: {
        aspectRatio: 1.3,
        legend: {
            display: true,
            position: 'bottom',
        }
    }
});