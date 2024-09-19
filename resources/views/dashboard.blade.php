<x-adminlte-layout>
    <x-app-header title="{{ $title }}" :breadcrumbs="[]" current="{{ $title }}" class="custom-class" />

        <div class="app-content"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-12"> <!-- Default box -->
                        <x-card :title="$title" :showFooter="true" :footer="'This is the footer content.'">
                            <p>This is the body content of the card.</p>
                        </x-card>



                    </div>
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content-->

</x-adminlte-layout>
