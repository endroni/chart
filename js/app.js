$('document').ready(function () {

    $.ajax({
        type: "POST",
        url: "chart.php",
        dataType: "json",
        success: function (data) {
            
            var horaasarray = [];
            var temparray = [];

            for (var i = 0; i < data.length; i++) {

                horaasarray.push(data[i].hora);
                temparray.push(data[i].tempInc);
            }

            grafico(horaasarray,temparray);

        }
    });

})

function grafico(hora,tempInc) {


    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'radar',
      data: {
        labels: hora,
        datasets: [{
          label: 'Temperatura',
          data: tempInc,
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
}