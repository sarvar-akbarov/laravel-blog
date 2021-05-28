@props(['trigger'])
{{-- flex-1 appearance-none bg-transparent py-2 pl-3 pr-9 text-sm font-semibold w-32 --}}
<div x-data="{ open: false }" class="flex-1 appearance-none bg-transparent">
    {{-- Trigger --}}
    <div @click="open = !open" >
        {{ $trigger }}
    </div>

    {{-- Dropdown links --}}
    <div class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl text-left z-50 overflow-auto max-h-52" @click.away="open = false" x-show="open">
        {{ $slot }}
    </div>
    
    
</div>