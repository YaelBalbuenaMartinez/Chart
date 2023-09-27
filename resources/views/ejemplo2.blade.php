<!-- 
<table>
    <tr>
        <td>COL1</td>
        <td>COL2</td>
        <td>COL3</td>
        <td>COL4</td>
    </tr>
    @foreach ($completas as $completa)
    <tr>
        <td>{{ $completa->id }}</td>
        <td>{{ $completa->estatus_vigente }}</td>
        <td>{{ $completa->estado_medico }}</td>
        <td>{{ $completa->municipio_medico }}</td>
    </tr>
    @endforeach
</table> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="chartEstatus" width="300" height="300"></canvas>

<canvas id="chartNomInst" width="400" height="400"></canvas>

<canvas id="chartMunicipio" width="400" height="400"></canvas>


<!-- script para el chart de vigencia de estatus -->
<script>
    const estatus = {!! json_encode($completas->pluck('estatus_vigente')->all()) !!};
    const estatusCounts = {};

    estatus.forEach((estatus) => {
    if (estatusCounts[estatus]) {
        estatusCounts[estatus]++;
    } else {
        estatusCounts[estatus] = 1;
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

    nomIns.forEach((nomIns) => {
    if (nomInsCounts[nomIns]) {
        nomInsCounts[nomIns]++;
    } else {
        nomInsCounts[nomIns] = 1;
    }
});


    const nomInsLabels = Object.keys(nomInsCounts);
    const nomInsData = estatusLabels.map((label) => nomInsCounts[label]);

    const ctxnomIns = document.getElementById('chartNomInst').getContext('2d');
        const chartnomIns = new Chart(ctxnomIns, {
            type: 'doughnut',
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



