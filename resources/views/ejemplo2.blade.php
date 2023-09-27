
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="chartEstatus" width="300" height="300"></canvas>

<canvas id="chartNomInst" width="400" height="400"></canvas>

<!-- <canvas id="chartMunicipio" width="400" height="400"></canvas> -->

<canvas id="chartEstMedic" width="400" height="400"></canvas>

<canvas id="chartEdad" width="800" height="400"></canvas>

<canvas id="chartGenero" width="300" height="300"></canvas>

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
    const nomIns = {!! json_encode($completas->pluck('nombre_institucion')->all()) !!};
    const nomInsCounts = {};

    nomIns.forEach((nomIn) => {
    if (nomInsCounts[nomIn]) {
        nomInsCounts[nomIn]++;
    } else {
        nomInsCounts[nomIn] = 1;
    }
});


    const nomInsLabels = Object.keys(nomInsCounts);
    const nomInsData = nomInsLabels.map((label) => nomInsCounts[label]);

    const ctxnomIns = document.getElementById('chartNomInst').getContext('2d');
        const chartnomIns = new Chart(ctxnomIns, {
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
    
</script>


<!-- chart para los municipios -->

<!-- <script>
    const Municipios = {!! json_encode($completas->pluck('municipio_medico')->all()) !!};
    const MunicipiosCount = {};

    Municipios.forEach((Municipio) => {
    if (MunicipiosCount[Municipio]) {
        MunicipiosCount[Municipio]++;
    } else {
        MunicipiosCount[Municipio] = 1;
    }
});


    const MunicipioLabels = Object.keys(MunicipiosCount);
    const MunicipioData = MunicipioLabels.map((label) => MunicipiosCount[label]);

    const ctxMun = document.getElementById('chartMunicipio').getContext('2d');
        const chartMun = new Chart(ctxMun, {
            type: 'bar',
            data: {
                labels: MunicipioLabels,
                datasets: [{
                    label: 'Cantidad de municipios medicos',
                    data: MunicipioData,
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
    
</script> -->

<script>
    const EstMedic = {!! json_encode($completas->pluck('estado_medico')->all()) !!};
    const EstMedicCount = {};

    EstMedic.forEach((EstMedics) => {
    if (EstMedicCount[EstMedics]) {
        EstMedicCount[EstMedics]++;
    } else {
        EstMedicCount[EstMedics] = 1;
    }
});


    const EstMedicLabels = Object.keys(EstMedicCount);
    const EstMedicData = EstMedicLabels.map((label) => EstMedicCount[label]);

    const ctxMedic = document.getElementById('chartEstMedic').getContext('2d');
        const chartMedic = new Chart(ctxMedic, {
            type: 'line',
            data: {
                labels: EstMedicLabels,
                datasets: [{
                    label: 'Cantidad de municipios medicos',
                    data: EstMedicData,
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
    
</script>

<script>
    const Edades = {!! json_encode($completas->pluck('edad')->all()) !!};
    const EdadesCounts = {};

    Edades.forEach((Edad) => {
    if (EdadesCounts[Edad]) {
        EdadesCounts[Edad]++;
    } else {
        EdadesCounts[Edad] = 1;
    }
});


    const EdadesLabels = Object.keys(EdadesCounts);
    const EdadesData = EdadesLabels.map((label) => EdadesCounts[label]);

    const ctxEdad = document.getElementById('chartEdad').getContext('2d');
        const chartEdad = new Chart(ctxEdad, {
            type: 'line',
            data: {
                labels: EdadesLabels,
                datasets: [{
                    label: 'Cantidad de edades',
                    data: EdadesData,
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