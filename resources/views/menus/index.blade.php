<x-adminlte-layout>
    <x-app-header title="{{ $title }}" :breadcrumbs="[['url' => route('dashboard'), 'name' => 'Dashboard']]" current="{{ $title }}" class="custom-class" />

    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <x-card title="{{ $title }}" :showFooter="true">
                        <p>This is the body content of the card.</p>
                        <x-slot name="footer">
                            This is the footer content.
                        </x-slot>
                    </x-card>


                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content-->

</x-adminlte-layout>
