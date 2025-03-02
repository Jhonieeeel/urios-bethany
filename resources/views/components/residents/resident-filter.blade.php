<div x-data="{ open: false }" @click.outside="open = false" class="relative">
    <button type="button" @click="open = ! open" {{ $attributes->merge(['class' => 'inline-flex items-center gap-x-2 rounded-full border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-700']) }}>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="size-4 shrink-0">
            <line x1="21" x2="14" y1="4" y2="4" />
            <line x1="10" x2="3" y1="4" y2="4" />
            <line x1="21" x2="12" y1="12" y2="12" />
            <line x1="8" x2="3" y1="12" y2="12" />
            <line x1="21" x2="16" y1="20" y2="20" />
            <line x1="12" x2="3" y1="20" y2="20" />
            <line x1="14" x2="14" y1="2" y2="6" />
            <line x1="8" x2="8" y1="10" y2="14" />
            <line x1="16" x2="16" y1="18" y2="22" />
        </svg>
        Filter
    </button>

    <div x-show="open" class="absolute mt-2 w-64 rounded-md border border-gray-200 bg-white px-3 py-4 shadow">
        <select class="block w-full rounded-full border-gray-200 bg-white px-3 py-2 text-sm shadow-sm focus:z-10 focus:border-green-500 focus:ring-green-500 disabled:pointer-events-none disabled:opacity-50">
            <option value="">Case Status</option>
            <option value="">On-Going</option>
            <option value="">Discharged</option>
        </select>
    </div>
</div>
