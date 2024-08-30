@extends('layout.template')
@section('content')
<!-- Header Start -->
<div class="py-4">
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-0 mb-lg-0">
            <h3 class="h4">Room Price</h3>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Tabel Room Income Start -->
<div class="card mb-4 card-body border-0 shadow table-wrapper table-responsive">
        <div class="d-flex px-0 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <h3>Data Room Price</h3>
        </div>
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="fas fa-bullhorn me-1">{{ session('success') }}</span>
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="col-4 col-sm-4 col-xl-4 mb-4">
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Tambah Data</button>
        </div>
        <div class="table-responsive">
            <table style="text-align: center" class="table table-hover table-bordered">
                <thead style="vertical-align: middle">
                    <tr>
                        <th rowspan="1" class="border-gray-200">No</th>
                        <th rowspan="1" class="border-gray-200">Tipe Kamar</th>
                        <th rowspan="1" class="border-gray-200">Harga Kamar</th>
                        <th rowspan="1" class="border-gray-200">Durasi (Jam)</th>
                        <th rowspan="1" class="border-gray-200">Kategori Hari</th>
                        <th rowspan="1" class="border-gray-200">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @foreach($hotelRoomPrice as $roomPrice)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td><span class="fw-normal">{{ $roomPrice->hotelRoom->room_type }}</span></td>
                        <td><span class="fw-normal">Rp. {{ $roomPrice->room_rates }}</span></td>
                        <td><span class="fw-normal">{{ $roomPrice->room_duration }}</span></td>
                        <td><span class="fw-normal">{{ $roomPrice->category_day ?? '' }}</span></td>
                        <td><button type="button" class="btn btn-sm btn-default btn-info edit-button" data-id="{{ $roomPrice->id }}" data-room-type="{{ $roomPrice->hotelRoom->id }}" data-room-rate="{{ $roomPrice->room_rates }}" data-room-duration="{{ $roomPrice->room_duration }}" data-category-day="{{ $roomPrice->category_day }}" data-bs-toggle="modal" data-bs-target="#editModal">Edit </button><!--<button type="button" class="btn btn-sm btn-default btn-danger delete-button" data-id="">Delete</button>--> </td>
                    </tr>
                    @endforeach
                    <!-- Item -->
                </tbody>
            </table>
        </div>

    <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <nav aria-label="Page navigation example">
                <ul class="pagination mb-0">
                    {{ $hotelRoomPrice->links('vendor.pagination.default') }}
                </ul>
            </nav>
    </div>
    <!-- Tabel Room Income End -->
    @include('supervisor.room-management.modals.createRoomPriceModal')
    @include('supervisor.room-management.modals.editRoomPriceModal')
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "100%" 
        }
</script>
@include('supervisor.room-management.js.editRoomPrice')
@endpush