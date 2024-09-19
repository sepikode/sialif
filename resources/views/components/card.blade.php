<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" title="Collapse">
                <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
            </button>
            <button type="button" class="btn btn-tool" data-lte-toggle="card-remove" title="Remove">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        {{ $slot }}
    </div> <!-- /.card-body -->
    @if($showFooter)
        <div class="card-footer">{{ $footer }}</div> <!-- /.card-footer -->
    @endif
</div> <!-- /.card -->
