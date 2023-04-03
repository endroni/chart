const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23'],
    datasets: [{
      label: 'Temperatura: 01/01/2023',
      data: [20.6, 20.1, 19.9, 19.6, 19.3, 19.4, 19.2, 18.9, 19.4, 19.6, 21.2, 22.1, 22.3, 25.7, 26.4, 22.8, 21.4, 25.5, 23.5, 22.7, 21.8, 20.8, 20.1, 19.6],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});

/* Exemplo:  https://www.youtube.com/watch?v=sQh40y9KqrI&t=552s */