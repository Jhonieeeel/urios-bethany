document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        editable: true,
        displayEventTime: true,
        displayEventEnd: true,
        events: "{{ route('getEvents') }}",
    });
    calendar.render();
});

$(document).ready(function () {
    $(document).on("submit", "#addEventSubmit", function () {
        $.ajax({
            method: "post",
            url: "{{ route('addEventCalendar') }}",
            data: $("#addEventSubmit").serialize(),
            success: function (response) {},
        });
    });
});

$(function () {
    $("input[name='daterange']").daterangepicker({
        timePicker: true,
        startDate: moment().startOf("hour"),
        endDate: moment().startOf("hour").add(32, "hour"),
        locale: {
            format: "YYYY-MM-DD HH:mm",
        },
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        editable: true,
        displayEventTime: true,
        displayEventEnd: true,
    });
    calendar.render();
});
