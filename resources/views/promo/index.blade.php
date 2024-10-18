<x-app-layout>
    <x-slot name="header">
    </x-slot>
    <x-slot name="breadcrumb">
        {{__('Promo')}}
    </x-slot>

    @livewire('PromoCatalog')

</x-app-layout>
