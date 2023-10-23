<html lang='en'>
  <head>
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.9/locales/es.js'></script>
    <style>
      /* Cambiar el color de fondo de los botones "next" y "prev" */
      .fc-button-primary {
        background-color: #ff5733; /* Cambia este color al que desees */
      }
      
      /* Cambiar el color de fondo del día actual y del día actual en la vista de mes */
      .fc-day-today, .fc-day {
        background-color: #D6CF01; /* Cambia este color al que desees */
      }
    </style>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          timeZone: 'UTC',
          themeSystem: 'bootstrap5',
          headerToolbar: {
            left: 'prevYear,prev,next,nextYear,today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
          },
          weekNumbers: false,
          dayMaxEvents: true, // allow "more" link when too many events
          events: '/api/demo-feeds/events.json',
          locale: 'es',
          buttonText: {
            today: 'Hoy',
            month: 'Mes',
            week: 'Semana',
            day: 'Día'
          }
        });

        calendar.render();
      });
    </script>
  </head>
  <body>
    <div style="width: 50%; height: 60%;"  id='calendar'></div>
  </body>
</html>
