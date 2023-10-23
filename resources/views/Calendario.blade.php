<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Calendario</title>
    <style>
        .hr-custom {
            color: black;
        }

    </style>
</head>

<body>

    <div class="container">
        <h1 style="font-family: 'Helvetica Neue', Arial, sans-serif;">Calendario</h1>
        <hr class="hr-custom">
        <hr class="hr-custom">
        <div id="calendar" style="width: 50%; height:50%; font-family: 'Helvetica Neue', Arial, sans-serif;"></div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/es.min.js"></script> <!-- Configuración en español -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#calendar').fullCalendar({
                    // Configuración del calendario
                    header: {
                        left: 'prevYear,prev,next,nextYear, today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                    defaultDate: '2023-10-12', // Fecha inicial por defecto
                    editable: true,
                    eventLimit: true,
                    events: [{
                            title: 'Evento 1',
                            start: '2023-10-12T10:00:00',
                            end: '2023-10-12T14:00:00'
                        },
                        {
                            title: 'Evento 2',
                            start: '2023-10-15T13:00:00',
                            end: '2023-10-15T18:00:00'
                        }
                        // Puedes agregar más eventos siguiendo este formato
                    ],
                    locale: 'es', // Configuración en español
                });
            });
        </script>
    </div>
</body>

</html>

