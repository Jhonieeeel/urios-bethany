<x-app-layout>
    <div class="w-full">
        <div
            class="flex justify-center sm:justify-start flex-wrap sm:m-24 sm:no-wrap sm:gap-x-6 sm:gap-y-6 sm:items-start">
            <div class="sm:basis-1/4 shadow-lg px-3">
                <div class="border-b-2 py-3">
                    <h3 class="text-2xl font-bold">Edit Event</h3>
                </div>
                <div class="flex flex-col justify-between py-3 space-y-3">
                    <p class="font-semibold">Start: <span class="font-normal">{{ $eventData->start }}</span></p>
                    <p class="font-semibold">End: <span class="font-normal">{{ $eventData->end }}</span></p>
                </div>
                <form action="{{ route('updateCalendarEvent', $eventData->id) }}" method="post" class="py-3">
                    @csrf
                    @method('put')
                    <div class="mt-2">
                        <label for="eventName" class="text-green-600">Event Name</label>
                        <x-text-input id="eventName" value="{{ $eventData->title }}"
                            class="block mt-1 w-full text-sm pl-9" type="text" name="eventName" required
                            autocomplete="" />
                    </div>
                    <div class="mt-2">
                        <label for="eventName" class="text-green-600">Event Date</label>
                        <input type="text" name="daterange" id="daterange"
                            class="w-full px-4 py-2 mt-2 pl-9 border text-sm border-gray-300 rounded-full shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Select a date range" />

                    </div>
                    <div class="mt-6 flex items-center gap-x-6">
                        <button class="px-3 py-1 bg-green-600 hover:bg-green-700 text-white rounded-md"
                            id="updateEventSubmit">Adds
                            Event</button>
                        <form method="post" action="{{ route('deleteCalendarEvent', $eventData->id) }}">
                            @csrf
                            @method('delete')
                            <button class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white rounded-md"
                                id="deleteEvent">Delete
                                Event</button>
                        </form>

                    </div>

                </form>
                <div>
                    <!-- DIsplay Event as a Card?? -->
                </div>
            </div>
            <div class="sm:basis-2/4 shadow-lg p-6">
                <div id="calendar"></div>
            </div>
        </div>
    </div>

    <!-- delete Event -->
    <script>
        $(document).ready(function() {
            $(document).on('submit', "#deleteEvent", function() {
                $.ajax({
                    method: 'post',
                    url: "{{ route('deleteCalendarEvent', $eventData->id) }}",
                    data: $('#deleteEvent').serialize(),
                    success: function(response) {}
                })
            })
        })
    </script>

    <!-- datepicker -->
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

    <!-- to update -->
    <script>
        $(document).ready(function() {
            $(document).on('submit', "#updateEventSubmit", function() {
                $.ajax({
                    method: 'post',
                    url: "{{ route('updateCalendarEvent', $eventData->id) }}",
                    data: $('#updateEventSubmit').serialize(),
                    success: function(response) {}
                })
            })
        })
    </script>

    <!-- show calendar -->
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
            });
            calendar.render();
        });
    </script>
</x-app-layout>
