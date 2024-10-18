<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="breadcrumb">
        {{ __('Menu') }}
    </x-slot>

    @if (isset($products))
        @livewire('catalogSearch',['category' => $products])
    @else
        @livewire('catalogSearch')
    @endif

</x-app-layout>
