<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Canvas con Bootstrap</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <canvas id="chartEdad" width="1000" height="400"></canvas>
                <br>
                <label for="selectEdad">Filtrar por edad:</label>
                <select id="selectEdad">
                    <option value="0-10">0-10</option>
                    <option value="11-20">11-20</option>
                    <option value="21-30">21-30</option>
                    <!-- Agrega más opciones según tus necesidades -->
                </select>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        const ajaxUrl = '{{ route('ruta.ajax.edad') }}'; // Genera la URL de la solicitud AJAX
    // Resto de tu código JavaScript
        // Datos de ejemplo para diferentes rangos de edad
        const dataPorEdad = {
            "0-10": [10, 20, 30, 40, 50],   // Datos para el rango 0-10
            "11-20": [15, 25, 35, 45, 55], // Datos para el rango 11-20
            "21-30": [20, 30, 40, 50, 60]  // Datos para el rango 21-30
            // Agrega más datos según tus necesidades
        };
    
        const ctxEdad = document.getElementById('chartEdad').getContext('2d');
        // Función para inicializar el gráfico
        function initChart(selectedEdad) {
            const chartEdad = new Chart(ctxEdad, {
                type: 'bar',
                data: {
                    labels: Object.keys(dataPorEdad),
                    datasets: [{
                        label: 'Cantidad de edades',
                        data: dataPorEdad[selectedEdad], // Usar los datos correspondientes a la edad seleccionada
                        backgroundColor: ["#FF0000"],
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
            return chartEdad;
        }
        // Inicializar el gráfico con la primera edad seleccionada
        let chartEdad = initChart(document.getElementById('selectEdad').value);
        // Agregar un evento de cambio al select
        document.getElementById('selectEdad').addEventListener('change', function () {
            const selectedEdad = this.value; // Obtener la edad seleccionada
            // Actualizar los datos del gráfico con la nueva selección
            chartEdad.destroy(); // Destruir el gráfico actual
            chartEdad = initChart(selectedEdad); // Crear un nuevo gráfico con los datos seleccionados
        });
    </script>
       
</body>

</html>
