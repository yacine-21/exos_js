p = document.getElementById("p")
fetch("https://api.coindesk.com/v1/bpi/historical/close.json")
.then(res => res.json())
.then(resultat => {
    let label = (Object.keys(resultat.bpi));
    let value = (Object.values(resultat.bpi));
    let ctx = document.getElementById('myChart').getContext('2d');

    fetch("https://api.exchangeratesapi.io/latest?base=USD")
    .then(res => res.json())
    .then(result => {
        let taux = (Object.values(result.rates)[18])
        value = value.map(value => value * taux)

       chart = new Chart(ctx, {
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
      })
      console.log(taux);
    }).catch(err => {
        let messageError = ("Oops something went wrong" + err)
        li =  document.createElement("li")
        li.innerHTML = messageError
        p.appendChild(li)
    })
})





// let req1 = fetch("https://api.coindesk.com/v1/bpi/historical/close.json")
// .then(r => r.json())
// .then(r => {
//     return {
//         label : (Object.keys(r.bpi)),
//         value : (Object.values(r.bpi)),
//     }
// })

// let req2 = fetch("https://api.exchangeratesapi.io/latest?base=USD")
// .then(r2 => r2.json())
// .then(r2 => {
//     return taux = (Object.values(r2.rates)[18])
// })


// let requetes = [req1,req2]


// Promise.all(requetes)
// .then(responses => {
//     responses.forEach(response => {
//         let ctx = document.getElementById('myChart').getContext('2d');

//        chart = new Chart(ctx, {
//           // The type of chart we want to create
//           type: 'line',
      
//           // The data for our dataset
//           data: {
//               labels: ["oui"],
//               datasets: [{
//                   label: 'MON TABLEAU DE VALEUR DU BITCOIN',
//                   backgroundColor: 'rgb(0,146, 150)',
//                   borderColor: 'rgb(200, 250, 132)',
//                   data: [100,150,200]
//               }]
//           },
//           // Configuration options go here
//           options: {}
//       })
//       console.log(taux);
//     })
// })