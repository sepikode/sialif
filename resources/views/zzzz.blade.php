{{-- Cara menggunakan header --}}
{{-- Untuk Dashbiard --}}
<x-app-header title="{{ $title }}" :breadcrumbs="[]" current="{{ $title }}" class="custom-class" />
{{-- Untuk Halaman Lain --}}
<x-app-header title="{{ $title }}" :breadcrumbs="[['url' => route('dashboard'), 'name' => 'Dashboard']]" current="{{ $title }}" class="custom-class" />


    
{{-- Cara Menggunakan Card --}}
<x-card title="{{ $title }}" :showFooter="true">
    <p>This is the body content of the card.</p>
    <x-slot name="footer">
        This is the footer content.
    </x-slot>
</x-card>
