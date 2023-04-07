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


    var ctx = document.getElementById('myChart').getContext('2d');

    var chart = new Chart(ctx, {

        type: 'bar',
        data: {
            labels: hora,

            datasets: [{
                label: 'Temperatura',
                backgroundColor: ['green', 'blue', 'yellow'],
                borderColor: 'rgb(255, 99, 132)',
                data: tempInc
            }]
        },

        options: {
            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}