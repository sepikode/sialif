<div class="app-content-header {{ $class }}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">{{ $title }}</h3>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb float-sm-end">
                        @foreach($breadcrumbs as $breadcrumb)
                            <li class="breadcrumb-item">
                                <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['name'] }}</a>
                            </li>
                        @endforeach
                        <li class="breadcrumb-item active" aria-current="page">{{ $current }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
