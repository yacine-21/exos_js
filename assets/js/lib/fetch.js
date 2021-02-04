fetch("https://api.coindesk.com/v1/bpi/historical/close.json")
.then(res => res.json())
.then(resultat => {
    let label = (Object.keys(resultat.bpi));
    let value = (Object.values(resultat.bpi));
    let ctx = document.getElementById('myChart').getContext('2d');
    let chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
    
        // The data for our dataset
        data: {
            labels: label,
            datasets: [{
                label: 'MON TABLEAU DE VALEUR DU BITCOIN',
                backgroundColor: 'rgb(0,146, 150)',
                borderColor: 'rgb(200, 250, 132)',
                data: value
            }]
        },
    
        // Configuration options go here
        options: {}
    });
})

