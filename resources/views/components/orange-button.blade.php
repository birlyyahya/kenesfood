@props(['active', 'name'])

<?php
$classes = ($active ?? false)
            ? 'px-6 py-3 w-2/5 capitalize text-center self-center bg-csorange border border-transparent rounded-md font-medium text-xs text-white uppercase tracking-wide hover:bg-[#FF7A00] focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150'
            : 'px-6 py-3 w-2/5 capitalize text-center self-center bg-[#959595] border border-transparent rounded-md font-medium text-xs text-white uppercase tracking-wide hover:bg-csprimary focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 disable cursor-default';
?>

<a {{ $attributes->merge(['type' => '', 'class' => $classes, 'wire:loading.attr'=>'disabled','wire:loading.class.remove'=>'hover:bg-[#FF7A00]','wire:loading.class'=>'bg-csorange/50','wire:target'=> $attributes->get('name')]) }}>
    {{ $slot }}
</a>
