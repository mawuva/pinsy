<x-customponents::layouts.master title="{{ $title ?? '' }}" description="{{ $description ?? '' }}" section="{{ $section ?? '' }}">

    <x-customponents-section name="lyt_master_styles">

    </x-customponents-section>

    <x-partials.navbar />

    {{ $slot }}

    <x-customponents-section name="lyt_master_scripts">

    </x-customponents-section>

</x-customponents::layouts.master>