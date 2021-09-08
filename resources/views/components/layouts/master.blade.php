<x-customponents::layouts.master title="{{ $title ?? '' }}" description="{{ $description ?? '' }}" section="{{ $section ?? '' }}">

    <x-customponents-section name="lyt_master_styles">
        <x-customponents::resources.assets type="css" path="{{ asset('libs/parsley/parsley.css') }}" />
    </x-customponents-section>

    <x-partials.navbar />

    {{ $slot }}

    <x-customponents-section name="lyt_master_scripts">
        <x-customponents::resources.assets type="js" path="{{ asset('libs/parsley/parsley.min.js') }}" />
        <x-customponents::resources.assets type="js" path="{{ asset('libs/parsley/i18b/'.LaravelLocalization::getCurrentLocale().'.js') }}" />
    </x-customponents-section>

</x-customponents::layouts.master>