<x-app-layout>
    <div class="w-full">
        <div
            class="sm:no-wrap flex flex-wrap justify-center sm:m-24 sm:items-start sm:justify-start sm:gap-x-6 sm:gap-y-6">
            <div class="px-3 shadow-lg sm:basis-1/4">
                <div class="flex items-center justify-between border-b-2 px-2 py-3">
                    <h3 class="text-2xl font-bold">Edit Event</h3>
                    <form method="post" action="{{ route('deleteCalendarEvent', $eventData->id) }}">
                        @csrf
                        @method('delete')
                        <button class="rounded-md bg-red-600 px-3 py-1 text-white hover:bg-red-700"
                            id="deleteEvent">Delete</button>
                    </form>
                </div>
                <div class="flex flex-col justify-between space-y-3 py-3">
                    <p class="font-semibold">Start: <span class="font-normal">{{ $eventData->start }}</span></p>
                    <p class="font-semibold">End: <span class="font-normal">{{ $eventData->end }}</span></p>
                </div>
                <form action="{{ route('updateCalendarEvent', $eventData->id) }}" method="post" class="py-3">
                    @csrf
                    @method('put')
                    <div class="mt-2">
                        <label for="eventName" class="text-green-600">Event Name</label>
                        <x-text-input id="eventName" value="{{ $eventData->title }}"
                            class="mt-1 block w-full pl-9 text-sm" type="text" name="eventName" required
                            autocomplete="" />
                    </div>
                    <div class="mt-2">
                        <label for="daterange" class="text-green-600">Event Date</label>
                        <input type="text" name="daterange" id="daterange"
                            class="mt-2 w-full rounded-full border border-gray-300 px-4 py-2 pl-9 text-sm shadow-sm focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500" />

                    </div>
                    <div class="mt-6 flex items-center gap-x-6">
                        <button class="rounded-md bg-green-600 px-3 py-1 text-white hover:bg-green-700"
                            id="updateEventSubmit">Update
                            Event</button>
                    </div>

                </form>
                <div>
                    <!-- DIsplay Event as a Card?? -->
                </div>
            </div>
            <div class="p-6 shadow-lg sm:basis-2/4">
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
