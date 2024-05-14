document.addEventListener('DOMContentLoaded', function () {

    const calendarEl = document.getElementById('calendar')
    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        locale: {
            code: 'pt',
            buttonText: {
                prev: 'Anterior',
                next: 'Proximo',
                PrevYear: 'Ano Anterior',
                nextYear: 'Proximo ano',
                year: 'Ano',
                today: 'Hoje',
                month: 'Mes',
                week: 'Semana',
                day: 'Dia',
                list: 'Lista',
            },
        }, // the initial locale. if not specified, uses the first one
        start: 'title', // will normally be on the left. if RTL, will be on the right
        center: '',
        end: 'today prev,next', // will normally be on the right. if RTL, will be on the left
        today: 'today',
        month: 'month',
        week: 'week',
        day: 'Dia',
        list: 'list',
        themeSystem: 'bootstrap5',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        editable: true,
        eventLimit: true,
        editable: true,
        eventClick: function (info) {
            info.jsEvent.preventDefault();
            $('#agendamentoModalLabel').text(info.event.title);
            $('#dataInicio').val(info.event.start.toLocaleString('pt'));
            $('#evento').html(info.event.extendedProps.descricao);
            $('#agendamentoModal').modal('show');
        },
        eventMouseEnter: function (info) {
            info.jsEvent.preventDefault();
            $(info.el).popover({

                content: `<div class='d-flex mb-4 align-items-center'>` +
                    
                   
                    `</div>` +
                    `</div>` +
                    `<h6 class='mb-1'>` + info.event.title + `</h6>` +
                    `<pre class='card-text text-muted'>` + info.event.extendedProps.descricao + `</pre>`,

                trigger: 'hover',
                placement: 'top',
                container: 'body',
                html: true
            });
            $(info.el).popover('show');
        },
        eventMouseLeave: function (info) {
            $(info.el).popover('dispose');
        },
        events: dados,

    })
    calendar.render()
})
