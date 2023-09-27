<html>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- <table>
    <tr>
        <td>COL1</td>
        <td>COL2</td>
        <td>COL3</td>
        <td>COL4</td>
    </tr>
    @foreach ($itpruebas as $itprueba)
    <tr>
        <td>{{ $itprueba->id }}</td>
        <td>{{ $itprueba->estado }}</td>
        <td>{{ $itprueba->genero }}</td>
        <td>{{ $itprueba->institucion }}</td>
    </tr>
    @endforeach
</table> -->


<canvas id="chartCanvas" width="400" height="200"></canvas>


<!-- chart de generos itpruebas -->
<script>
        
        const generos = {!! json_encode($itpruebas->pluck('genero')->all()) !!};
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
        const ctx = document.getElementById('chartCanvas').getContext('2d');
        const chart = new Chart(ctx, {
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




</html>



