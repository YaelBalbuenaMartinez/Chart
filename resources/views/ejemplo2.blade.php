<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.min.css">
  <title>Canvas con Bootstrap</title>
  <style>

    .line{
        background-color: black;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6 text-center">
        <h5>Grafica de estatus de vigencia</h5>
      <canvas id="chartEstatus" width="300" height="300"></canvas>
    </div>

    <div class="col-lg-6 text-center ">
        <h5>Grafica de genero</h5>
      <canvas id="chartGenero" width="300" height="300"></canvas>
    </div>

    <div class="col-lg-6 text-center">
      <hr class="line">
      <label for="opciones">Selecciona que institución quieres graficar:</label>
      <select id="opciones1" name="opciones">
        <?php $vistos = []; ?>
        @foreach($completas as $completa)
          @if (!in_array($completa->institucion_abrev, $vistos))
            <option value="{{ $completa->institucion_abrev }}">{{ $completa->institucion_abrev }}</option>
            <?php $vistos[] = $completa->institucion_abrev; ?>
          @endif
        @endforeach 
      </select>
      <button class="btn btn-primary" onclick="agregar()">graficar</button>
      <canvas id="chartNomInst" width="400" height="400"></canvas>
      <hr class="line">
    </div>

    <div class="col-lg-6 text-center">
      <hr class="line">
      <label for="opciones">Selecciona el municipio quieres graficar:</label>
      <select id="opciones4" name="opciones">
        <?php $vistos = []; ?>
        @foreach($completas as $completa)
          @if (!in_array($completa->estado_medico, $vistos))
            <option value="{{ $completa->estado_medico }}">{{ $completa->estado_medico }}</option>
            <?php $vistos[] = $completa->estado_medico; ?>
          @endif
        @endforeach
      </select>
      <button class="btn btn-primary" onclick="actualizarGrafico()">Graficar</button>
      <canvas id="chartEstMedic" width="400" height="400"></canvas>
      <hr class="line">
    </div>

    <div class="col-lg-12 text-center">
      <h5>Coloca la edad que deseas graficar</h5>
      <input id="numerico" type="number" min="0" max="100" value="{{ $completa->edad }}">
      <button class="btn btn-primary" onclick="actualizaredad()">Graficar</button>
      <canvas id="chartEdad" width="1000" height="400"></canvas>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</body>
</html>


<!-- script para el chart de vigencia de estatus -->
<script>
    const estatus = {!! json_encode($completas->pluck('estatus_vigente')->all()) !!};
    const estatusCounts = {};

    estatus.forEach((estat) => {
    if (estatusCounts[estat]) {
        estatusCounts[estat]++;
    } else {
        estatusCounts[estat] = 1;
    }
});


    const estatusLabels = Object.keys(estatusCounts);
    const estatusData = estatusLabels.map((label) => estatusCounts[label]);

    const ctx = document.getElementById('chartEstatus').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: estatusLabels,
                datasets: [{
                    label: 'Cantidad de vi',
                    data: estatusData,
                    backgroundColor: ["#FF6384", "#36A2EB"],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    
</script>

<!-- Chart para el nombre de la institucion  -->
<script>
    let chartnomIn;

    function agregar() {
        const seleccionado = document.getElementById('opciones1').value;

        const filtroData = {!! json_encode($completas->pluck('institucion_abrev')->all()) !!}.filter(item => item === seleccionado);

        const nomInsCounts = {};
        filtroData.forEach((Instituciones) => {
            nomInsCounts[Instituciones] = (nomInsCounts[Instituciones] || 0) + 1;
        });

        const nomInsLabels = Object.keys(nomInsCounts);
        const nomInsData = nomInsLabels.map((label) => nomInsCounts[label]);

        if (chartnomIn) {
            const existingLabels = chartnomIn.data.labels;
            const existingData = chartnomIn.data.datasets[0].data;

            if (existingLabels.length >=5) {
                existingLabels.shift();
                existingData.shift();
            }

            nomInsLabels.forEach((label, index) => {
                if (existingLabels.length < 5) {
                    if (!existingLabels.includes(label)) {
                        chartnomIn.data.labels.push(label);
                        chartnomIn.data.datasets[0].data.push(nomInsCounts[label]);
                    }
                }
            });
            chartnomIn.update();
        } else {
            const ctxnomIns = document.getElementById('chartNomInst').getContext('2d');
            chartnomIn = new Chart(ctxnomIns, {
                type: 'bar',
                data: {
                    labels: nomInsLabels,
                    datasets: [{
                        label: 'Cantidad de nombres de institucion',
                        data: nomInsData,
                        backgroundColor: ["#FF0000", "#00FF00", '#FF59E3', '#0000FF', '#FFA500', '#FFFF00', '#FF00FF', '#00FFFF', '#800080', '#008000', '#800000', '#808080', '#008080'],
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    }
</script>



<!-- Script y chart para estado medico -->

<script>
    let chartMedic; // Variable para almacenar la instancia del gráfico

    function actualizarGrafico() {
        const selectedOption = document.getElementById('opciones4').value;

        // Filtrar los datos según la opción seleccionada
        const filteredData = {!! json_encode($completas->pluck('estado_medico')->all()) !!}.filter(item => item === selectedOption);

        const EstMedicCount = {};
        filteredData.forEach((EstMedics) => {
            EstMedicCount[EstMedics] = (EstMedicCount[EstMedics] || 0) + 1;
        });

        const EstMedicLabels = Object.keys(EstMedicCount);
        const EstMedicData = EstMedicLabels.map((label) => EstMedicCount[label]);

        if (chartMedic) {
            // Si ya existe un gráfico, actualizamos sus datos
            const existingLabels = chartMedic.data.labels;
            const existingData = chartMedic.data.datasets[0].data;

            if (existingLabels.length >= 10) {
                // Si ya hay 10 etiquetas, eliminar la primera (el dato más antiguo)
                existingLabels.shift();
                existingData.shift();
            }

            EstMedicLabels.forEach((label, index) => {
                if (existingLabels.length < 10) {
                    if (!existingLabels.includes(label)) {
                        chartMedic.data.labels.push(label);
                        chartMedic.data.datasets[0].data.push(EstMedicCount[label]);
                    }
                }
            });

            chartMedic.update();
        } else {
            // Si no existe un gráfico, creamos uno nuevo
            const ctxMedic = document.getElementById('chartEstMedic').getContext('2d');
            chartMedic = new Chart(ctxMedic, {
                type: 'bar',
                data: {
                    labels: EstMedicLabels,
                    datasets: [{
                        label: 'Cantidad de municipios médicos',
                        data: EstMedicData,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    }
</script>


<!-- Chart y script de Edad con sweet alert -->

<script>
    let chartEdad;

    function actualizaredad() {
        const selectEdad = document.getElementById('numerico').value;

        const filtroEdad = {!! json_encode($completas->pluck('edad')->all()) !!}.filter(item => item === selectEdad);

        // Si la edad no esta registrada soltara un sweet alert
        if (filtroEdad.length === 0) {
            
            Swal.fire({
                icon: 'error',
                title: 'Edad no registrada',
                text: 'La edad seleccionada no esta registrada en la base de datos.',
            });
            return; 
        }

        const EdadesCounts = {};

        filtroEdad.forEach((edades) => {
            EdadesCounts[edades] = (EdadesCounts[edades] || 0) + 1;
        });
        
        const EdadesLabels = Object.keys(EdadesCounts);
        const EdadesData = EdadesLabels.map((label) => EdadesCounts[label]);

        if (chartEdad) {
            const existingLabels = chartEdad.data.labels;
            const existingData = chartEdad.data.datasets[0].data;

            if (existingLabels.length >= 10) {
                existingLabels.shift();
                existingData.shift();
            }

            EdadesLabels.forEach((label, index) => {
                if (existingLabels.length < 10) {
                    if (!existingLabels.includes(label)) {
                        chartEdad.data.labels.push(label);
                        chartEdad.data.datasets[0].data.push(EdadesCounts[label]);
                    }
                }
            });

            chartEdad.update();
        } else {
            const ctxEdad = document.getElementById('chartEdad').getContext('2d');
            chartEdad = new Chart(ctxEdad, {
                type: 'bar',
                data: {
                    labels: EdadesLabels,
                    datasets: [{
                        label: 'Cantidad de edades',
                        data: EdadesData,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    }
</script>

<script>
    const generos = {!! json_encode($completas->pluck('Genero')->all()) !!};
        const generoCounts = {};

        generos.forEach((genero) => {
            if (generoCounts[genero]) {
                generoCounts[genero]++;
            } else {
                generoCounts[genero] = 1;
            }
        });

        const generoLabels = Object.keys(generoCounts);
        const generoData = generoLabels.map((label) => generoCounts[label]);

        // Crear el gráfico
        const ctxGen = document.getElementById('chartGenero').getContext('2d');
        const chartGen = new Chart(ctxGen, {
            type: 'doughnut',
            data: {
                labels: generoLabels,
                datasets: [{
                    label: 'Cantidad por Género',
                    data: generoData,
                    backgroundColor: ["#FF6384", "#36A2EB"],
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
</script>