@foreach( $regions as $item)
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $item->name }}</h5>
            </div>
        </div>
    </div>
@endforeach
