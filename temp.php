<!doctype html>
<html lang="pt-br">

<head>
  <title>INMET</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="container-fluid">
  <header>
    <!-- place navbar here -->

    <p class="lead">Dados da temperatura da cidade de Belo Horizonte no dia <?php echo($data); ?>.</p>
    
  </header>
  <main>
  <div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'radar',
    data: {
      labels: ['00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23'],
      datasets: [{
        label: 'Temperatura Regitrada',
        data: [
          <?php echo json_encode($result[0]["tempInc"]); ?>,
          <?php echo json_encode($result[1]["tempInc"]); ?>,
          <?php echo json_encode($result[2]["tempInc"]); ?>,
          <?php echo json_encode($result[3]["tempInc"]); ?>,
          <?php echo json_encode($result[4]["tempInc"]); ?>,
          <?php echo json_encode($result[5]["tempInc"]); ?>,
          <?php echo json_encode($result[6]["tempInc"]); ?>,
          <?php echo json_encode($result[7]["tempInc"]); ?>,
          <?php echo json_encode($result[8]["tempInc"]); ?>,
          <?php echo json_encode($result[9]["tempInc"]); ?>,
          <?php echo json_encode($result[10]["tempInc"]); ?>,
          <?php echo json_encode($result[11]["tempInc"]); ?>,
          <?php echo json_encode($result[12]["tempInc"]); ?>,
          <?php echo json_encode($result[13]["tempInc"]); ?>,
          <?php echo json_encode($result[14]["tempInc"]); ?>,
          <?php echo json_encode($result[15]["tempInc"]); ?>,
          <?php echo json_encode($result[16]["tempInc"]); ?>,
          <?php echo json_encode($result[17]["tempInc"]); ?>,
          <?php echo json_encode($result[18]["tempInc"]); ?>,
          <?php echo json_encode($result[19]["tempInc"]); ?>,
          <?php echo json_encode($result[20]["tempInc"]); ?>,
          <?php echo json_encode($result[21]["tempInc"]); ?>,
          <?php echo json_encode($result[22]["tempInc"]); ?>,
          <?php echo json_encode($result[23]["tempInc"]); ?>,
        ],
        borderWidth: 1
      },
      {
        label: 'Temperatura Máxima',
        data: [
          <?php echo json_encode($result[0]["tempMax"]); ?>,
          <?php echo json_encode($result[1]["tempMax"]); ?>,
          <?php echo json_encode($result[2]["tempMax"]); ?>,
          <?php echo json_encode($result[3]["tempMax"]); ?>,
          <?php echo json_encode($result[4]["tempMax"]); ?>,
          <?php echo json_encode($result[5]["tempMax"]); ?>,
          <?php echo json_encode($result[6]["tempMax"]); ?>,
          <?php echo json_encode($result[7]["tempMax"]); ?>,
          <?php echo json_encode($result[8]["tempMax"]); ?>,
          <?php echo json_encode($result[9]["tempMax"]); ?>,
          <?php echo json_encode($result[10]["tempMax"]); ?>,
          <?php echo json_encode($result[11]["tempMax"]); ?>,
          <?php echo json_encode($result[12]["tempMax"]); ?>,
          <?php echo json_encode($result[13]["tempMax"]); ?>,
          <?php echo json_encode($result[14]["tempMax"]); ?>,
          <?php echo json_encode($result[15]["tempMax"]); ?>,
          <?php echo json_encode($result[16]["tempMax"]); ?>,
          <?php echo json_encode($result[17]["tempMax"]); ?>,
          <?php echo json_encode($result[18]["tempMax"]); ?>,
          <?php echo json_encode($result[19]["tempMax"]); ?>,
          <?php echo json_encode($result[20]["tempMax"]); ?>,
          <?php echo json_encode($result[21]["tempMax"]); ?>,
          <?php echo json_encode($result[22]["tempMax"]); ?>,
          <?php echo json_encode($result[23]["tempMax"]); ?>,
        ],
        borderWidth: 1
      },
      {
        label: 'Temperatura Mínima',
        data: [
          <?php echo json_encode($result[0]["tempMin"]); ?>,
          <?php echo json_encode($result[1]["tempMin"]); ?>,
          <?php echo json_encode($result[2]["tempMin"]); ?>,
          <?php echo json_encode($result[3]["tempMin"]); ?>,
          <?php echo json_encode($result[4]["tempMin"]); ?>,
          <?php echo json_encode($result[5]["tempMin"]); ?>,
          <?php echo json_encode($result[6]["tempMin"]); ?>,
          <?php echo json_encode($result[7]["tempMin"]); ?>,
          <?php echo json_encode($result[8]["tempMin"]); ?>,
          <?php echo json_encode($result[9]["tempMin"]); ?>,
          <?php echo json_encode($result[10]["tempMin"]); ?>,
          <?php echo json_encode($result[11]["tempMin"]); ?>,
          <?php echo json_encode($result[12]["tempMin"]); ?>,
          <?php echo json_encode($result[13]["tempMin"]); ?>,
          <?php echo json_encode($result[14]["tempMin"]); ?>,
          <?php echo json_encode($result[15]["tempMin"]); ?>,
          <?php echo json_encode($result[16]["tempMin"]); ?>,
          <?php echo json_encode($result[17]["tempMin"]); ?>,
          <?php echo json_encode($result[18]["tempMin"]); ?>,
          <?php echo json_encode($result[19]["tempMin"]); ?>,
          <?php echo json_encode($result[20]["tempMin"]); ?>,
          <?php echo json_encode($result[21]["tempMin"]); ?>,
          <?php echo json_encode($result[22]["tempMin"]); ?>,
          <?php echo json_encode($result[23]["tempMin"]); ?>,
        ],
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
</script>

  </main>
  <footer>
    <!-- place footer here -->

    <p class="font-monospace">Fonte dos dados: <a href="https://portal.inmet.gov.br/">https://portal.inmet.gov.br/</a></p>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

 
   
</body>

</html>