<x-app-layout>
    <div class="w-full">
        <div
            class="sm:no-wrap flex flex-wrap justify-center sm:m-24 sm:items-start sm:justify-start sm:gap-x-6 sm:gap-y-6">
            <div class="border px-3 shadow-xl sm:basis-1/4">
                <div class="border-b-2 py-3">
                    <h3 class="text-2xl font-bold">Add Event</h3>
                </div>
                <form method="post" class="py-3 sm:basis-1/4" action="{{ route('addEventCalendar') }}">
                    @csrf

                    <div class="mt-2">
                        <label for="eventName" class="text-green-600">Event Name</label>
                        <x-text-input id="eventName" class="mt-1 block w-full pl-9 text-sm" type="text"
                            name="eventName" required autocomplete="" />
                    </div>
                    <div class="mt-2">
                        <label for="daterange" class="text-green-600">Event Date</label>
                        <input type="text" name="daterange" id="daterange"
                            class="mt-2 w-full rounded-full border border-gray-300 px-4 py-2 text-sm shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="Select a date range" />
                    </div>
                    <div class="mt-2">
                        <button class="rounded-md bg-green-600 px-3 py-1 text-white" id="addEventSubmit">Add
                            Event</button>
                    </div>
                </form>
            </div>
            <div class="border p-6 shadow-xl sm:basis-2/4">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <!-- getting data from controller getEvent -->
    <script>
        let route = "{{ route('editCalendarEvent', ['id' => 'placeHolder']) }}"

        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                editable: true,
                displayEventTime: true,
                displayEventEnd: true,
                events: "{{ route('getEvents') }}",
                eventClick: function(eventData) {
                    var eventRoute = route.replace('placeHolder', eventData.event.id);
                    window.location.href = eventRoute
                }
            });
            calendar.render();
        });
    </script>

    <!-- submit the data to controller -->
    <script>
        $(document).ready(function() {
            $(document).on('submit', "#addEventSubmit", function() {
                $.ajax({
                    method: 'post',
                    url: "{{ route('addEventCalendar') }}",
                    data: $('#addEventSubmit').serialize(),
                    success: function(response) {}
                })
            })
        })
    </script>

    <!-- getting date -->
    <script type="text/javascript">
        $(function() {
            $("input[name='daterange']").daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'YYYY-MM-DD HH:mm'
                }
            });
        })
    </script>

    <!-- displaying calendar -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                editable: true,
                displayEventTime: true,
                displayEventEnd: true,
            });
            calendar.render();
        });
    </script>

    <script src="../js/create-calendar.js"></script>

</x-app-layout>
