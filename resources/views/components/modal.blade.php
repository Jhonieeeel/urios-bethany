@props(['name', 'title', 'id'])

<div x-data="{
    show: false,
    name: '{{ $name }}',
    id: '{{ $id }}'
}" x-show="show" x-on:open-modal.window="show = ($event.detail.name === name)"
    x-on:close-modal.window="show = false" x-on:keydown.escape.window = "show = false" x-transition.opacity.duration.200ms
    class="fixed inset-0 z-30">

    <div x-cloak x-show="show" x-transition.opacity.duration.200ms x-trap.inert.noscroll="show"
        x-on:keydown.esc.window="show = false" x-on:click.self="show = false"
        class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 sm:items-start lg:p-8">
        <div class="my-52 w-full max-w-xl rounded-md bg-white">
            {{ $slot }}
        </div>
    </div>

</div>

