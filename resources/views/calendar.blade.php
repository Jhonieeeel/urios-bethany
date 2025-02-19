<x-app-layout>
    <div class="w-full">
        <div
            class="flex justify-center sm:justify-start flex-wrap sm:m-24 sm:no-wrap sm:gap-x-6 sm:gap-y-6 sm:items-start">
            <div class="sm:basis-1/4 border  shadow-xl px-3">
                <div class="border-b-2 py-3">
                    <h3 class="text-2xl font-bold">Add Event</h3>
                </div>
                <form method="post" class="sm:basis-1/4 py-3 " action="{{ route('addEventCalendar') }}">
                    @csrf

                    <div class="mt-2">
                        <label for="eventName" class="text-green-600">Event Name</label>
                        <x-text-input id="eventName" class="block mt-1 w-full text-sm pl-9" type="text"
                            name="eventName" required autocomplete="" />
                    </div>
                    <div class="mt-2">
                        <label for="daterange" class="text-green-600">Event Date</label>
                        <input type="text" name="daterange" id="daterange"
                            class="w-full px-4 py-2 mt-2 border text-sm rounded-full border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Select a date range" />
                    </div>
                    <div class="mt-2">
                        <button class="px-3 py-1 bg-green-600 text-white rounded-md" id="addEventSubmit">Add
                            Event</button>
                    </div>
                </form>
                <div>
                    <!-- DIsplay Event as a Card?? -->
                </div>
            </div>
            <div class="sm:basis-2/4 border shadow-xl p-6">
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
