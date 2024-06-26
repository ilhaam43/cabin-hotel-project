<style>
    .reservasi {
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
        border-radius: 15px;
        box-shadow: 5px 5px 8px #888888;
        padding: 20px;
        margin-bottom: 30px;
    }
</style>
@extends('layout.template')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content') 
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h5 class="h4">Form Reservasi</h5>
            </div>
        </div>
    </div>
    @if($errors->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="fas fa-bullhorn me-1"></span>
            <strong>{{ $errors->first('error') }}</strong>
            <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="reservasi">
        <div class="row">
            <div class="col p-3 bg-dark border-end">
                <div class="container p-2 mb-2">
                    <h5 style="font-size: 25px">Guest Detail</h5>
                    <hr class="garis">
                    <form method="POST" action="{{ route('admin.reservation.store-customer') }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        </br>
                        @if($customerTmp)
                        <div class="col">
                            <label for="exampleInputIconLeft">Jenis Tamu</label>
                        </div>
                        <div class="col">
                            <select class="form-select w-100 mb-2" id="reservation_method_id"
                                name="reservation_method_id" aria-label="State select example" disabled>
                                <option selected value="">Pilih Jenis Tamu</option>
                                @foreach ($reservationMethod as $methods)
                                    <option value="{{ $methods->id }}">
                                        {{ $methods->reservation_method }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <div class="mb-4">
                                <input type="text" class="form-control" name="booking_number"
                                    id="booking_number" placeholder="Booking Number" aria-describedby="booking_number" style="display: none;" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="customer_check" name="customer_check" disabled>
                                <label for="daftar_tamu">Pilih Dari Daftar Tamu</label>
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-select w-100 mb-0" id="customer_id" name="customer_id" aria-label="customer_id" disabled>
                                <option value="">Daftar Tamu</option>
                            </select>
                        </div>
                        </br>
                        <div class="col">
                            <label for="exampleInputIconLeft">Isi Data Tamu</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <select class="form-select w-100 mb-0" id="customer_title" name="customer_title" aria-label="customer_title" disabled>
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                </select>
                            </div>
                            <div class="col col-sm-8">
                                <div class="mb-2">
                                    <input type="text" class="form-control " placeholder="Nama"
                                        id="customer_name" name="customer_name" aria-describedby="customer_name" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <select class="form-select w-100 mb-0" id="customer_identity_type"
                                    name="customer_identity_type" aria-label="State select example" disabled>
                                    <option value="KTP">KTP</option>
                                    <option value="SIM">SIM</option>
                                </select>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <div class="mb-2">
                                    <input class="form-control" name="customer_identity_photo" id="customer_identity_photo" type="file" placeholder="Foto" id="formFile" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-4">
                            </div>
                        </div>
                        <div class="col">
                            <label for="webcamCapture">Take Photo Tamu</label>
                            <div class="mb-2">
                                <input type="button" class="btn w-100 btn-secondary" value="Take Photo Tamu" id="startWebcamTamuButton" disabled>
                                <input type="button" class="btn w-100 btn-secondary" value="Capture" id="captureTamuButton" style="display: none;">
                                <br><br>
                                <input type="button" class="btn w-100 btn-secondary" value="Close Webcam" id="closeWebcamTamuButton" style="display: none;">
                                <input type="hidden" name="customer_photo" id="webcamCaptureTamu">
                                <div id="photoPreviewTamu"></div>
                                <video id="webcamFeedTamu" style="display:none; transform: scaleX(-1); width:400; height:300;"></video>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="text" name="customer_address" class="form-control "
                                    id="customer_address" placeholder="Domisili" aria-describedby="customer_address" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="text" class="form-control" name="customer_phone"
                                    id="customer_phone" placeholder="Nomor Handphone" aria-describedby="customer_phone" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="email" name="customer_email" class="form-control"
                                    id="customer_email" placeholder="Email" aria-describedby="customer_email" disabled>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="mb-2">
                                <button class="btn w-100 btn-secondary" type="submit" disabled>Tambah
                                    Tamu</button>
                            </div>
                        </div>
                        @else
                        <div class="col">
                            <label for="exampleInputIconLeft">Jenis Tamu</label>
                        </div>
                        <div class="col">
                            <select class="form-select w-100 mb-2" id="reservation_method_id"
                                name="reservation_method_id" aria-label="State select example">
                                <option selected value="">Pilih Jenis Tamu</option>
                                @foreach ($reservationMethod as $methods)
                                    <option value="{{ $methods->id }}">
                                        {{ $methods->reservation_method }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <div class="mb-4">
                                <input type="text" class="form-control" name="booking_number"
                                    id="booking_number" placeholder="Booking Number" aria-describedby="booking_number" style="display: none;">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="customer_check" name="customer_check">
                                <label for="daftar_tamu">Pilih Dari Daftar Tamu</label>
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-select w-100 mb-0" id="customer_id" name="customer_id" aria-label="customer_id" disabled>
                                <option value="">Daftar Tamu</option>
                            </select>
                        </div>
                        </br>
                        <div class="col">
                            <label for="exampleInputIconLeft">Isi Data Tamu</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <select class="form-select w-100 mb-0" id="customer_title" name="customer_title" aria-label="customer_title">
                                    <option value="Mr">Mr</option>
                                    <option value="Mrs">Mrs</option>
                                </select>
                            </div>
                            <div class="col col-sm-8">
                                <div class="mb-2">
                                    <input type="text" class="form-control " placeholder="Nama"
                                        id="customer_name" name="customer_name" aria-describedby="customer_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <select class="form-select w-100 mb-0" id="customer_identity_type"
                                    name="customer_identity_type" aria-label="State select example">
                                    <option value="KTP">KTP</option>
                                    <option value="SIM">SIM</option>
                                </select>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <div class="mb-2">
                                    <input class="form-control" name="customer_identity_photo" id="customer_identity_photo" type="file" placeholder="Foto" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-4">
                            </div>
                        </div>
                        <div class="col">
                            <label for="webcamCapture">Take Photo Tamu</label>
                            <div class="mb-2">
                                <input type="button" class="btn w-100 btn-secondary" value="Take Photo Tamu" id="startWebcamTamuButton">
                                <input type="button" class="btn w-100 btn-secondary" value="Capture" id="captureTamuButton" style="display: none;">
                                <br><br>
                                <input type="button" class="btn w-100 btn-secondary" value="Close Webcam" id="closeWebcamTamuButton" style="display: none;">
                                <input type="hidden" name="customer_photo" id="webcamCaptureTamu">
                                <div id="photoPreviewTamu"></div>
                                <video id="webcamFeedTamu" style="display:none; transform: scaleX(-1); width:400; height:300;"></video>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="text" name="customer_address" class="form-control "
                                    id="customer_address" placeholder="Domisili" aria-describedby="customer_address">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="text" class="form-control " name="customer_phone"
                                    id="customer_phone" placeholder="Nomor Handphone" aria-describedby="customer_phone">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="email" name="customer_email" class="form-control "
                                    id="customer_email" placeholder="Email" aria-describedby="customer_email">
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="mb-2">
                                <button class="btn w-100 btn-secondary " type="submit">Tambah
                                    Tamu</button>
                            </div>
                        </div>
                        @endif
                    </form>
                </div>
            </div>

            <div class="col p-3 bg-dark border-end">
                <div class="container p-2 mb-2">
                    <h5 style="font-size: 25px">Room Order</h5>
                    <hr class="garis">
                    <form method="POST" action="{{ route('admin.reservation.store-room-order') }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        </br>
                        @if($reservationTmp && $customerTmp)
                        <input type="hidden" id="daily" name="daily" value="1"> 
                        <input type="hidden" id="reservation_start_date_daily" name="reservation_start_date_daily" value="{{ $reservationTmp->reservation_start_date }}"> 
                        <input type="hidden" id="reservation_end_date_daily" name="reservation_end_date_daily" value="{{ $reservationTmp->reservation_end_date }}"> 
                        <input type="hidden" id="reservation_day_category" name="reservation_day_category" value="{{ $reservationTmp->reservation_day_category }}">
                        <div class="col">
                            <div class="mb-2">
                                <label for="email">Check In</label>
                                <input type="datetime-local" class="form-control" name="reservation_start_date_daily" id="reservation_start_date" aria-describedby="emailHelp" value="{{ $reservationTmp->reservation_start_date }}" disabled>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="daily" name="daily" id="flexSwitchCheckDefault" value="1" disabled>
                                <p>Checkout dengan pilih tanggal & jam</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="email">Check Out</label>
                                <input type="datetime-local" class="form-control" name="reservation_end_date_daily" id="reservation_end_date_daily" aria-describedby="emailHelp" value="{{ $reservationTmp->reservation_end_date }}" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="result_daily_reservation_end_date" style="display: none;">Durasi menginap
                                    berdasarkan tanggal & jam</label>
                                <input type="text" class="form-control" id="result_daily_reservation_end_date" value="{{ $diffResult }}" disabled>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="mixed" name="mixed" id="flexSwitchCheckDefault" disabled>
                                <p>Checkout dengan pilih durasi</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="email">Hari</label>
                                    <select class="form-select w-100 mb-0" id="mixed_time_day" name="mixed_day" aria-label="State select example" disabled>
                                        <option selected value>Pilih Jumlah Hari</option>
                                        @for ($i = 0; $i <= 30; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-2">
                                    <label for="email">Jam</label>
                                    <select class="form-select w-100 mb-0 " id="mixed_time_hour" name="mixed_hour"
                                        aria-label="State select example" disabled>
                                        <option selected value>Pilih Jumlah Hari</option>
                                        @for ($i = 0; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="display: none;" id="result_mix_reservation">
                            <div class="mb-0">
                                <label for="result_mix_reservation_end_date">Perhitungan waktu checkout dengan pilih durasi</label>
                                <input type="datetime-local" id="result_mix_reservation_end_date" class="form-control" disabled>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <select class="form-select w-100 mb-0" id="reservation_day_category" name="reservation_day_category" aria-label="reservation_day_category" disabled>
                                <option value="Weekday" {{ $dayCategory === "Weekday" ? 'selected' : '' }}>Weekday</option>
                                <option value="Weekend" {{ $dayCategory === "Weekend" ? 'selected' : '' }}>Weekend</option>
                                <option value="Weekend" {{ $dayCategory === "Middle Day" ? 'selected' : '' }}>Middle Day</option>
                                <option value="High Season" {{ $dayCategory === "High Season" ? 'selected' : '' }}>High Season</option>
                            </select>
                        </div>
                        </br>
                        @elseif($customerTmp)
                        <div class="col">
                            <div class="mb-2">
                                <label for="email">Check In</label>
                                <input type="datetime-local" class="form-control " name="reservation_start_date_daily"
                                    id="reservation_start_date" aria-describedby="emailHelp">
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="daily" name="daily">
                                <p>Checkout dengan pilih tanggal & jam</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="email">Check Out</label>
                                <input type="datetime-local" class="form-control " name="reservation_end_date_daily"
                                    id="reservation_end_date_daily" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="result_daily_reservation_end_date" style="display: none;">Durasi menginap
                                    berdasarkan tanggal & jam</label>
                                <input type="text" class="form-control " id="result_daily_reservation_end_date"
                                    style="display: none;" disabled>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="mixed" name="mixed">
                                <p>Checkout dengan pilih durasi</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="email">Hari</label>
                                    <select class="form-select w-100 mb-0 " id="mixed_time_day" name="mixed_day"
                                        aria-label="State select example">
                                        <option selected value>Pilih Jumlah Hari</option>
                                        @for ($i = 0; $i <= 30; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-2">
                                    <label for="email">Jam</label>
                                    <select class="form-select w-100 mb-0 " id="mixed_time_hour" name="mixed_hour"
                                        aria-label="State select example">
                                        <option selected value>Pilih Jumlah Jam</option>
                                        @for ($i = 0; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="display: none;" id="result_mix_reservation">
                            <div class="mb-0">
                                <label for="result_mix_reservation_end_date">Perhitungan waktu checkout dengan pilih durasi</label>
                                <input type="datetime-local" id="result_mix_reservation_end_date" class="form-control" disabled>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <select class="form-select w-100 mt-0 " id="reservation_day_category"
                                name="reservation_day_category" aria-label="reservation_day_category">
                                <option selected value>Pilih Kategori Hari</option>
                                <option value="Weekday">Weekday</option>
                                <option value="Weekend">Weekend</option>
                                <option value="Weekend">Middle Day</option>
                                <option value="High Season">High Season</option>
                            </select>
                        </div>
                        </br>
                        @else
                        <div class="col">
                            <div class="mb-2">
                                <label for="email">Check In</label>
                                <input type="datetime-local" class="form-control " name="reservation_start_date_daily"
                                    id="reservation_start_date" aria-describedby="emailHelp" disabled>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="daily" name="daily" disabled>
                                <p>Checkout dengan pilih tanggal & jam</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="email">Check Out</label>
                                <input type="datetime-local" class="form-control " name="reservation_end_date_daily"
                                    id="reservation_end_date_daily" aria-describedby="emailHelp" disabled>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="result_daily_reservation_end_date" style="display: none;">Durasi menginap
                                    berdasarkan tanggal & jam</label>
                                <input type="text" class="form-control " id="result_daily_reservation_end_date"
                                    style="display: none;" disabled>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="mixed" name="mixed" disabled>
                                <p>Checkout dengan pilih durasi</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-2">
                                    <label for="email">Hari</label>
                                    <select class="form-select w-100 mb-0 " id="mixed_time_day" name="mixed_day"
                                        aria-label="State select example" disabled>
                                        <option selected value>Pilih Jumlah Hari</option>
                                        @for ($i = 0; $i <= 30; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-2">
                                    <label for="email">Jam</label>
                                    <select class="form-select w-100 mb-0 " id="mixed_time_hour" name="mixed_hour"
                                        aria-label="State select example" disabled>
                                        <option selected value>Pilih Jumlah Hari</option>
                                        @for ($i = 0; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="display: none;" id="result_mix_reservation">
                            <div class="mb-0">
                                <label for="result_mix_reservation_end_date">Perhitungan waktu checkout dengan pilih durasi</label>
                                <input type="datetime-local" id="result_mix_reservation_end_date" class="form-control" disabled>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <select class="form-select w-100 mt-0 " id="reservation_day_category"
                                name="reservation_day_category" aria-label="reservation_day_category" disabled>
                                <option selected value>Pilih Kategori Hari</option>
                                <option value="Weekday">Weekday</option>
                                <option value="Weekend">Weekend</option>
                                <option value="Weekend">Middle Day</option>
                                <option value="High Season">High Season</option>
                            </select>
                        </div>
                        </br>
                        @endif
                        @if($customerTmp)
                        <div class="col">
                            <label for="exampleInputIconLeft">Data Kamar</label>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <select class="form-select w-100 mb-0 " id="hotel_room_id" name="hotel_room_id"
                                    aria-label="State select example">
                                    <option selected value="">Tipe Kamar</option>
                                    @foreach ($hotelRooms as $roomType)
                                        <option value="{{ $roomType->id }}">{{ $roomType->room_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <select class="form-select w-100 mb-0 " id="hotel_room_number_id"
                                    name="hotel_room_number_id" aria-label="State select example" disabled>
                                    <option value="">Pilih Nomer Kamar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <select class="form-select w-100 mb-0 " id="total_guest" name="total_guest"
                                    aria-label="State select example">
                                    <option selected value="">Jumlah Orang</option>
                                    @for ($i = 1; $i <= 4; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="mb-2">
                                <button class="btn w-100 btn-secondary" type="button submit">Tambah Kamar</button>
                            </div>
                        </div>
                    </form>
                    @else
                    <div class="col">
                            <label for="exampleInputIconLeft">Data Kamar</label>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <select class="form-select w-100 mb-0 " id="hotel_room_id" name="hotel_room_id"
                                    aria-label="State select example" disabled>
                                    <option selected value="">Tipe Kamar</option>
                                    @foreach ($hotelRooms as $roomType)
                                        <option value="{{ $roomType->id }}">{{ $roomType->room_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <select class="form-select w-100 mb-0 " id="hotel_room_number_id"
                                    name="hotel_room_number_id" aria-label="State select example" disabled>
                                    <option value="">Pilih Nomer Kamar</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <select class="form-select w-100 mb-0 " id="total_guest" name="total_guest"
                                    aria-label="State select example" disabled>
                                    <option selected value="">Jumlah Orang</option>
                                    @for ($i = 1; $i <= 4; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="mb-2">
                                <button class="btn w-100 btn-secondary" type="submit" disabled>Tambah Kamar</button>
                            </div>
                        </div>
                    </form>
                    @endif
                    <form method="POST" action="{{ route('admin.reservation.store-amenities') }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        </br>
                        <h5 style="font-size: 25px"><u>Tambahan Additional</u></h5>
                        @if($customerTmp)
                        <div class="col">
                            <div class="mb-2">
                                <label for="email">Breakfast</label>
                                    <select class="form-select w-100 mb-0" id="breakfast" name="breakfast" aria-label="State select example">
                                    <option selected value>Pilih Status Breakfast</option>
                                    <option value="None">None</option>
                                    <option value="Include">Include</option>
                                    <option value="Exclude">Exclude</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-3">
                                <div class="input-group mb-4">
                                    <select class="form-select w-100 mb-0" id="total_breakfast" name="total_breakfast" aria-label="State select example" disabled>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9 col-sm-9">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="text" name="breakfast_price" class="form-control" id="breakfast_price" aria-describedby="emailHelp" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                            <label for="email">Extra Person & Extra Bed</label>
                                <select class="form-select w-100 mb-0" id="extra_person_bed" name="extra_person_bed" aria-label="State select example">
                                <option selected value>Pilih Extraperson / Extrabed</option>
                                <option value="Extraperson">Extraperson</option>
                                <option value="Extrabed">Extrabed</option>
                            </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-3">
                                <div class="input-group mb-4">
                                    <select class="form-select w-100 mb-0" id="total_extra_person_bed" name="total_extra_person_bed" aria-label="State select example" disabled>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        <div class="col-lg-9 col-sm-9">
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    <input type="text" name="extra_person_bed_price" class="form-control" id="extra_person_bed_price" aria-describedby="emailHelp" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <button class="btn w-100 btn-secondary" type="submit">Tambah Additional</button>
                            </div>
                        </div>
                        @else
                        <div class="col">
                            <div class="mb-2">
                                <label for="email">Breakfast</label>
                                    <select class="form-select w-100 mb-0" id="breakfast" name="breakfast" aria-label="State select example" disabled>
                                    <option selected value="None">None</option>
                                    <option value="Include">Include</option>
                                    <option value="Exclude">Exclude</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-3">
                                <div class="input-group mb-4">
                                    <select class="form-select w-100 mb-0" id="total_breakfast" name="total_breakfast" aria-label="State select example" disabled>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9 col-sm-9">
                                <div class="input-group mb-4">
                                    <span class="input-group-text" id="basic-addon1">Rp.</span>
                                        <input type="text" name="breakfast_price" class="form-control" id="breakfast_price" aria-describedby="emailHelp" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                            <label for="email">Extra Person & Extra Bed</label>
                                <select class="form-select w-100 mb-0" id="extra_person_bed" name="extra_person_bed" aria-label="State select example" disabled>
                                <option selected>Pilih Extraperson / Extrabed</option>
                                <option value="Extraperson">Extraperson</option>
                                <option value="Extrabed">Extrabed</option>
                            </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-sm-3">
                                <div class="input-group mb-4">
                                    <select class="form-select w-100 mb-0" id="total_extra_person_bed" name="total_extra_person_bed" aria-label="State select example" disabled>
                                        @for ($i = 1; $i <= 4; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        <div class="col-lg-9 col-sm-9">
                            <div class="input-group mb-4">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                    <input type="text" name="extra_person_bed_price" class="form-control" id="extra_person_bed_price" aria-describedby="emailHelp" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <button class="btn w-100 btn-secondary" type="submit" disabled>Tambah Additional</button>
                            </div>
                        </div>
                        @endif
                    </form>
                </div>
            </div>

            <div class="col p-3 bg-dark">
                <div class="container p-2 mb-2">
                    <h5 style="font-size: 25px">Payment</h5>
                    <hr class="garis">
                    <form method="POST" action="{{ route('admin.reservation.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        </br>
                        @if($customerTmp && $reservationTmp)
                        <div class="col">
                            <label for="discount">Diskon</label>
                            <div class="mb-2">
                                <select class="form-select w-100 mb-2" id="discount_type" name="discount_type"
                                    aria-label="discount_type">
                                    <option selected value>Pilih Jenis Diskon</option>
                                    <option value="Nominal">Nominal</option>
                                    <option value="Persen">Persen (%)</option>
                            </div>
                            <div class="mb-2">
                                <input type="text" name="discount" placeholder="Diskon" class="form-control " id="discount"
                                    aria-describedby="emailHelp">
                            </div>
                            </select>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <b>Total Price :</b>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-4">
                                @if ($totalPrice && !$isOta)
                                    <input type="text" name="total_price" class="form-control " id="total_price"
                                        value="{{ number_format($totalPrice, 0, ',', '.') }}"
                                        aria-describedby="total_price" disabled>
                                @else
                                    <input type="text" name="total_price" class="form-control " id="total_price"
                                        aria-describedby="total_price">
                                @endif
                            </div>
                        </div>
                        <hr color="black">
                        <div class="col">
                            <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="payment_method_ota" name="payment_method_ota">
                                <p>Pay At OTA</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <select class="form-select w-100 mb-0" id="payment_category_ota" name="payment_category_ota" aria-label="payment_category_ota">
                                    <option selected>Pilih Jenis OTA</option>
                                    @foreach($paymentOTA as $OTA)
                                    <option value="{{ $OTA->id }}">{{ $OTA->payment_method }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="text" class="form-control" id="payment_ota_value"
                                    name="payment_ota_value" placeholder="Nominal Bayar" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <hr color="black">
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="payment_method_cash" name="payment_method_cash">
                                <p>Cash</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="text" name="payment_cash_value" class="form-control"
                                    id="payment_cash_value" placeholder="Nominal Bayar" aria-describedby="emailHelp">
                            </div>
                        </div>
                        </br>
                        <!-- <div class="col">
                            <div class="mb-4">
                                <input type="text" name="change" id="change" class="form-control " id="email"
                                    placeholder="Nominal Kembali" aria-describedby="emailHelp">
                            </div>
                        </div> -->

                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="payment_method_non_cash" name="payment_method_non_cash">
                                <p>Non Cash</p>
                            </div>
                        </div>
                        <div class="col">
                        <div class="mb-2">
                            <select class="form-select w-100 mb-0" id="paymentMethod" name="paymentMethod" aria-label="paymentMethod">
                                <option selected value="">Metode Pembayaran</option>
                                <option value="Card">Card</option>
                                <option value="Qris">QRIS</option>
                                <option value="Transfer">Transfer</option>
                                <option value="VA">Virtual Account</option>
                            </select>
                        </div>
                        </div>

                        <!-- Form select untuk transfer -->
                        <div class="col paymentOption" id="transferOptions" style="display: none;">
                            <select class="form-select w-100 mb-2" id="payment_category_transfer" name="payment_category_transfer" aria-label="transferBank" style="margin-bottom: 10px;">
                                <option selected value="">Pilih Bank Transfer</option>
                                    @foreach($paymentTransfer as $transfer)
                                        <option value="{{ $transfer->id }}">{{ $transfer->payment_method }}</option>
                                    @endforeach
                            </select>
                            <input type="text" id="payment_transfer_value" name="payment_transfer_value" class="form-control mb-2" placeholder="Nominal Pembayaran">
                            <input type="text" id="payment_method_transfer_reference" name="payment_method_transfer_reference" class="form-control mb-2" placeholder="Nomor Referensi Transaksi Transfer">
                        </div>

                        <!-- Form select untuk virtual account -->
                        <div class="col paymentOption" id="VAOptions" style="display: none;">
                            <select class="form-select w-100 mb-2"  id="payment_category_va" name="payment_category_va" aria-label="virtualAccount" style="margin-bottom: 10px;">
                                <option selected value="">Pilih Virtual Account</option>
                                    @foreach($paymentVA as $va)
                                        <option value="{{ $va->id }}">{{ $va->payment_method }}</option>
                                    @endforeach
                            </select>
                            <input type="text" id="payment_va_value" name="payment_va_value" class="form-control mb-2" placeholder="Nominal Pembayaran">
                            <input type="text" id="payment_method_va_reference" name="payment_method_va_reference" class="form-control mb-2" placeholder="Nomor Referensi Transaksi Virtual Account">
                        </div>

                        <!-- Form select untuk card -->
                        <div class="col paymentOption" id="cardOptions" style="display: none;">
                            <select class="form-select w-100 mb-2" id="payment_category_card" name="payment_category_card" aria-label="cardType">
                                <option selected value>Pilih Jenis Kartu</option>
                                @foreach($paymentCard as $card)
                                    <option value="{{ $card->id }}">{{ $card->payment_method }}</option>
                                @endforeach
                            </select>
                            <input type="text" id="payment_card_value" name="payment_card_value" class="form-control mb-2" placeholder="Nominal Pembayaran">
                            <input type="text" id="payment_method_card_number" name="payment_method_card_number" class="form-control mb-2" placeholder="Nomor Transaksi">
                        </div>

                        <!-- Form select untuk qris -->
                        <div class="col paymentOption" id="qrisOptions" style="display: none;">
                            <select class="form-select w-100 mb-2" id="payment_category_qris" name="payment_category_qris" aria-label="qrisType">
                                <option selected value>Pilih Jenis QRIS</option>
                                    @foreach($paymentQris as $qris)
                                        <option value="{{ $qris->id }}">{{ $qris->payment_method }}</option>
                                    @endforeach
                            </select>
                            <input type="text" id="payment_qris_value" name="payment_qris_value" class="form-control mb-2" placeholder="Nominal Pembayaran">
                            <input type="text" id="payment_method_qris_reference" name="payment_method_qris_reference" class="form-control mb-2" placeholder="Nomor Referensi Transaksi QRIS">
                        </div>
                        @else
                        <div class="col">
                            <label for="discount">Diskon</label>
                            <div class="mb-2">
                                <select class="form-select w-100 mb-2 " id="discount_type" name="discount_type"
                                    aria-label="discount_type" disabled>
                                    <option selected value>Jenis Diskon</option>
                                    <option value="Nominal">Nominal</option>
                                    <option value="Persen">Persen (%)</option>
                            </div>
                            <div class="mb-2">
                                <input type="text" name="discount" placeholder="Diskon" class="form-control " id="discount"
                                    aria-describedby="emailHelp" disabled>
                            </div>
                            </select>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <b>Total Price :</b>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-4">
                                @if ($totalPrice && !$isOta)
                                    <input type="text" name="total_price" class="form-control " id="total_price"
                                        value="{{ number_format($totalPrice, 0, ',', '.') }}"
                                        aria-describedby="total_price" disabled>
                                @else
                                    <input type="text" name="total_price" class="form-control " id="total_price"
                                        aria-describedby="total_price" disabled>
                                @endif
                            </div>
                        </div>
                        <hr color="black">
                        <div class="col">
                            <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="payment_method_ota" name="payment_method_ota" disabled>
                                <p>Pay At OTA</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <select class="form-select w-100 mb-0" id="payment_category_ota" name="payment_category_ota" aria-label="payment_category_ota" disabled>
                                    <option selected value>Pilih Jenis OTA</option>
                                    @foreach($paymentOTA as $OTA)
                                    <option value="{{ $OTA->id }}">{{ $OTA->payment_method }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="text" class="form-control " id="payment_ota_value"
                                    name="payment_ota_value" placeholder="Nominal Bayar" aria-describedby="emailHelp" disabled>
                            </div>
                        </div>
                        <hr color="black">
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="payment_method_cash" name="payment_method_cash" disabled>
                                <p>Cash</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="text" name="payment_cash_value" class="form-control "
                                    id="payment_cash_value" placeholder="Nominal Bayar" aria-describedby="emailHelp" disabled>
                            </div>
                        </div>
                        </br>
                        <!-- <div class="col">
                            <div class="mb-4">
                                <input type="text" name="change" id="change" class="form-control " id="email"
                                    placeholder="Nominal Kembali" aria-describedby="emailHelp" disabled>
                            </div>
                        </div> -->

                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="payment_method_non_cash" name="payment_method_non_cash" disabled>
                                <p>Non Cash</p>
                            </div>
                        </div>
                        <div class="col">
                        <div class="mb-2">
                            <select class="form-select w-100 mb-0" id="paymentMethod" name="paymentMethod" aria-label="paymentMethod" disabled>
                                <option selected value="">Metode Pembayaran</option>
                                <option value="Card">Card</option>
                                <option value="Qris">QRIS</option>
                                <option value="Transfer">Transfer</option>
                                <option value="VA">Virtual Account</option>
                            </select>
                        </div>
                        </div>

                        <!-- Form select untuk transfer -->
                        <div class="col paymentOption" id="transferOptions" style="display: none;">
                            <select class="form-select w-100 mb-2"  id="payment_category_transfer" name="payment_category_transfer" aria-label="transferBank" style="margin-bottom: 10px;">
                                <option selected value="">Pilih Bank Transfer</option>
                                    @foreach($paymentTransfer as $transfer)
                                        <option value="{{ $transfer->id }}">{{ $transfer->payment_method }}</option>
                                    @endforeach
                            </select>
                            <input type="text" id="payment_transfer_value" name="payment_transfer_value" class="form-control mb-2" placeholder="Nominal Pembayaran">
                            <input type="text" id="payment_method_transfer_reference" name="payment_method_transfer_reference" class="form-control mb-2" placeholder="Nomor Referensi Transaksi Transfer">
                        </div>

                        <!-- Form select untuk virtual account -->
                        <div class="col paymentOption" id="VAOptions" style="display: none;">
                            <select class="form-select w-100 mb-2"  id="payment_category_va" name="payment_category_va" aria-label="virtualAccount" style="margin-bottom: 10px;">
                                <option selected value="">Pilih Virtual Account</option>
                                    @foreach($paymentVA as $va)
                                        <option value="{{ $va->id }}">{{ $va->payment_method }}</option>
                                    @endforeach
                            </select>
                            <input type="text" id="payment_va_value" name="payment_va_value" class="form-control mb-2" placeholder="Nominal Pembayaran">
                            <input type="text" id="payment_method_va_reference" name="payment_method_va_reference" class="form-control mb-2" placeholder="Nomor Referensi Transaksi Virtual Account">
                        </div>

                        <!-- Form select untuk card -->
                        <div class="col paymentOption" id="cardOptions" style="display: none;">
                            <select class="form-select w-100 mb-2" id="payment_category_card" name="payment_category_card" aria-label="cardType">
                                <option selected value>Pilih Jenis Kartu</option>
                                @foreach($paymentCard as $card)
                                    <option value="{{ $card->id }}">{{ $card->payment_method }}</option>
                                @endforeach
                            </select>
                            <input type="text" id="payment_card_value" name="payment_card_value" class="form-control mb-2" placeholder="Nominal Pembayaran">
                            <input type="text" id="payment_method_card_number" name="payment_method_card_number" class="form-control mb-2" placeholder="Nomor Transaksi">
                        </div>

                        <!-- Form select untuk qris -->
                        <div class="col paymentOption" id="qrisOptions" style="display: none;">
                            <select class="form-select w-100 mb-2" id="payment_category_qris" name="payment_category_qris" aria-label="qrisType">
                                <option selected value>Pilih Jenis QRIS</option>
                                    @foreach($paymentQris as $qris)
                                        <option value="{{ $qris->id }}">{{ $qris->payment_method }}</option>
                                    @endforeach
                            </select>
                            <input type="text" id="payment_qris_value" name="payment_qris_value" class="form-control mb-2" placeholder="Nominal Pembayaran">
                            <input type="text" id="payment_method_qris_reference" name="payment_method_qris_reference" class="form-control mb-2" placeholder="Nomor Referensi Transaksi QRIS">
                        </div>
                        @endif

                        <!-- End of Form -->

                </div>
            </div>
        </div>
    </div>

    <div class="reservasi">
        <div class="row">
            @if ($customerTmp)
                <div class="col-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-sm-6">
                                <h5 style="font-size: 25px"><u>Order Summary</u></h5>
                                </br>
                                <!-- Form -->
                                <div class="row">
                                    @if ($customerTmp)
                                        <div class="col-lg-12 col-sm-12">
                                            <label for="email">Data Pelanggan</label>
                                            <div class="table-responsive">
                                                <table class="table table-centered table-hover mb-0 rounded">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th class="border-0">Nama Pelanggan</th>
                                                            <th class="border-0">Email</th>
                                                            <th class="border-0">Nomor Handphone</th>
                                                            <th class="border-0">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="tr{{ $customerTmp->id }}">
                                                            <td>{{ $customerTmp->customer_name }}</td>
                                                            <td>{{ $customerTmp->customer_email }}</td>
                                                            <td>{{ $customerTmp->customer_phone }}</td>
                                                            <td><button type="button" class="btn btn-sm btn-default btn-danger delete-button" data-id="{{ $customerTmp->id }}">Delete</button></td>
                                                        </tr>
                                                        <!-- End of Item -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($hotelRoomReservedTmp)
                                        <div class="col-lg-12 col-sm-12">
                                            </br>
                                            <label for="email">Data Reservasi Kamar</label>
                                            <div class="table-responsive">
                                                <table class="table table-centered table-hover mb-0 rounded">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th class="border-0 rounded-start">Tipe Kamar</th>
                                                            <th class="border-0">Nomor Kamar</th>
                                                            <th class="border-0">Total Tamu</th>
                                                            <th class="border-0">Total Harga Kamar</th>
                                                            <th class="border-0">Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($hotelRoomReservedTmp as $reservationData)
                                                            <tr>
                                                                <td>{{ $reservationData->hotelRoomNumber->hotelRoom->room_type }}
                                                                </td>
                                                                <td>{{ $reservationData->hotelRoomNumber->room_number }}
                                                                </td>
                                                                <td>{{ $reservationData->total_guest }}</td>
                                                                <td>{{ number_format($reservationData->price, 2, ',', '.') }}</td>
                                                                <td><button type="button" class="btn btn-sm btn-default btn-danger delete-button-rooms" data-id="{{ $reservationData->id }}">Delete</button></td>
                                                            </tr>
                                                            <!-- End of Item -->
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-lg-12 col-sm-12">
                                    </div>
                                    @if ($amenitiesTmp)
                                        <div class="col-lg-12 col-sm-12">
                                            </br>
                                            <label for="email">Data Amenities</label>
                                            <div class="table-responsive">
                                                <table class="table table-centered table-hover mb-0 rounded">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th class="border-0 rounded-start">Amenities</th>
                                                            <th class="border-0">Kuantitas</th>
                                                            <th class="border-0">Total Harga Amenities</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($amenitiesTmp as $amenities)
                                                            <tr>
                                                                <td>{{ $amenities->amenities->amenities }}</td>
                                                                <td>{{ $amenities->amount }}</td>
                                                                @if($amenities->total_price > 0)
                                                                <td>Rp.
                                                                    {{ number_format($amenities->total_price, 2, ',', '.') }}
                                                                </td>
                                                                @else
                                                                <td> {{ $amenities->breakfast_status ?? '' }} </td>
                                                                @endif
                                                            </tr>
                                                            <!-- End of Item -->
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endif

                                    @if($customerTmp && $reservationTmp)
                                    <div class="col-lg-12 col-sm-12">
                                        </br></br>
                                        <button class="btn w-100 btn-default btn-secondary" type="submit">Simpan</button>
                                    </div>
                                    @endif
                                    </form>
                                </div>
                                <!-- End of Form -->
                            </div>
                        </div>
                    </div>
            @endif

            <!-- End of Form -->
        </div>
    </div>
    </div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "75%" 
        }
</script>
<script>
    $(document).ready(function() {
        const customerCheck = $('#customer_check');
        $('#reservation_method_id').attr('required', 'required');
        $('#customer_title').attr('required', 'required');
        $('#customer_name').attr('required', 'required');
        $('#customer_identity_type').attr('required', 'required');
        $('#customer_identity_photo').attr('required', 'required');
        $('#startWebcamTamuButton').attr('required', 'required');
        $('#customer_address').attr('required', 'required');
        $('#customer_phone').attr('required', 'required');
        $('#customer_email').attr('required', 'required');
        customerCheck.on('change', function() {
                // Tampilkan atau sembunyikan elemen-elemen tergantung pada nilai checkbox
                if (this.checked) {
                    $('#customer_id').removeAttr('disabled').attr('required', 'required');
                    $('#customer_title').prop('disabled', true).removeAttr('required');
                    $('#customer_name').prop('disabled', true).removeAttr('required');
                    $('#customer_identity_type').prop('disabled', true).removeAttr('required');
                    $('#customer_identity_photo').prop('disabled', true).removeAttr('required');
                    $('#startWebcamTamuButton').prop('disabled', true).removeAttr('required');
                    $('#customer_address').prop('disabled', true).removeAttr('required');
                    $('#customer_phone').prop('disabled', true).removeAttr('required');
                    $('#customer_email').prop('disabled', true).removeAttr('required');
                } else {
                    $('#customer_id').prop('disabled', true).removeAttr('required');
                    $('#customer_title').removeAttr('disabled').attr('required', 'required');
                    $('#customer_name').removeAttr('disabled').attr('required', 'required');
                    $('#customer_identity_type').removeAttr('disabled').attr('required', 'required');
                    $('#customer_identity_photo').removeAttr('disabled').attr('required', 'required');
                    $('#startWebcamTamuButton').removeAttr('disabled').attr('required', 'required');
                    $('#customer_address').removeAttr('disabled').attr('required', 'required');
                    $('#customer_phone').removeAttr('disabled').attr('required', 'required');
                    $('#customer_email').removeAttr('disabled').attr('required', 'required');
                }
        });
    });
</script>
<script>
        $(document).ready(function() {
            $('#customer_id').select2({
                ajax: {
                    placeholder: 'Daftar Tamu',
                    url: "{{ route('ajax.list-customers') }}",
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return {
                            term: params.term
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.customer_name + ' - ' + item.customer_phone,
                                    id: item.id
                                };
                            })
                        };
                    },
                    cache: true
                }
            });
        });
</script>
<script>
    $(document).ready(function() {
        $('#paymentMethod').change(function() {
            $('.paymentOption').hide(); // Sembunyikan semua form select tambahan

            // Tampilkan form select tambahan sesuai dengan metode pembayaran yang dipilih
            if ($(this).val() === 'Transfer') {
                $('#transferOptions').show();
                $('#payment_category_transfer').attr('required', 'required');
                $('#payment_transfer_value').attr('required', 'required');
                $('#payment_method_transfer_reference').attr('required', 'required');
                $('#payment_category_card').removeAttr('required');
                $('#payment_card_value').removeAttr('required');
                $('#payment_method_card_number').removeAttr('required');
                $('#payment_category_qris').removeAttr('required');
                $('#payment_qris_value').removeAttr('required');
                $('#payment_method_qris_reference').removeAttr('required');
            } else if ($(this).val() === 'Card') {
                $('#cardOptions').show();
                $('#payment_category_card').attr('required', 'required');
                $('#payment_card_value').attr('required', 'required');
                $('#payment_method_card_number').attr('required', 'required');
                $('#payment_category_qris').removeAttr('required');
                $('#payment_qris_value').removeAttr('required');
                $('#payment_method_qris_reference').removeAttr('required');
                $('#payment_category_transfer').removeAttr('required');
                $('#payment_transfer_value').removeAttr('required');
                $('#payment_method_transfer_reference').removeAttr('required');
            } else if ($(this).val() === 'Qris') {
                $('#qrisOptions').show();
                $('#payment_category_qris').attr('required', 'required');
                $('#payment_qris_value').attr('required', 'required');
                $('#payment_method_qris_reference').attr('required', 'required');
                $('#payment_category_transfer').removeAttr('required');
                $('#payment_transfer_value').removeAttr('required');
                $('#payment_method_transfer_reference').removeAttr('required');
                $('#payment_category_card').removeAttr('required');
                $('#payment_card_value').removeAttr('required');
                $('#payment_method_card_number').removeAttr('required');
            }else if ($(this).val() === 'VA') {
                $('#VAOptions').show();
                $('#payment_category_va').attr('required', 'required');
                $('#payment_va_value').attr('required', 'required');
                $('#payment_method_va_reference').attr('required', 'required');
                $('#payment_category_transfer').removeAttr('required');
                $('#payment_transfer_value').removeAttr('required');
                $('#payment_method_transfer_reference').removeAttr('required');
                $('#payment_category_card').removeAttr('required');
                $('#payment_card_value').removeAttr('required');
                $('#payment_method_card_number').removeAttr('required');
                $('#payment_category_qris').removeAttr('required');
                $('#payment_qris_value').removeAttr('required');
                $('#payment_method_qris_reference').removeAttr('required');
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#breakfast').attr('required', 'required');
        $('#extra_person_bed').attr('required', 'required');
        
        $('#breakfast').change(function() {
            // Tampilkan form select tambahan sesuai dengan metode pembayaran yang dipilih
            if ($(this).val() === 'Exclude') {
                $('#total_breakfast').prop('disabled', false);
                $('#breakfast_price').prop('disabled', false).attr('required', 'required');
                $('#extra_person_bed').removeAttr('required');
            } else if( $(this).val() ==  null) {
                $('#total_breakfast').prop('disabled', true);
                $('#breakfast_price').prop('disabled', true).removeAttr('required');
                $('#extra_person_bed').attr('required', 'required');
            } else {
                $('#total_breakfast').prop('disabled', true);
                $('#breakfast_price').prop('disabled', true);
                $('#extra_person_bed').removeAttr('required');
            }
        });

        $('#extra_person_bed').change(function() {
            // Tampilkan form select tambahan sesuai dengan metode pembayaran yang dipilih
            if ($(this).val()) {
                $('#total_extra_person_bed').prop('disabled', false);
                $('#extra_person_bed_price').prop('disabled', false).attr('required', 'required');
                $('#breakfast').removeAttr('required');
            } else {
                $('#total_extra_person_bed').prop('disabled', true);
                $('#extra_person_bed_price').prop('disabled', true).removeAttr('required');
                $('#breakfast').attr('required', 'required');
            } 
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#paymentMethod').change(function() {
            $('.paymentOption').hide(); // Sembunyikan semua form select tambahan

            // Tampilkan form select tambahan sesuai dengan metode pembayaran yang dipilih
            if ($(this).val() === 'Transfer') {
                $('#transferOptions').show();
            } else if ($(this).val() === 'Card') {
                $('#cardOptions').show();
            } else if ($(this).val() === 'Qris') {
                $('#qrisOptions').show();
            }else if ($(this).val() === 'VA') {
                $('#VAOptions').show();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        const reservationMethod = $('#reservation_method_id');
        reservationMethod.on('change', function() {
                // Tampilkan atau sembunyikan elemen-elemen tergantung pada nilai checkbox
                if (reservationMethod.val() == 1 || reservationMethod.val() == 2 || reservationMethod.val() == "" ) {
                    $('#booking_number, label[for="booking_number"]').hide();
                } else {
                    $('#booking_number, label[for="booking_number"]').show();
                }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#hotel_room_id').change(function () {
            const hotelRoom = $(this).val();
            const hotelRoomNumberSelect = $('#hotel_room_number_id');

            hotelRoomNumberSelect.empty().prop('disabled', true);
            if (hotelRoom) {
                $.ajax({
                    url: `/ajax/getRoomNumbers/${hotelRoom}`,
                    method: 'GET',
                    success: function (data) {
                        data.forEach(function (hotelRoomNumber) {
                            hotelRoomNumberSelect.append($('<option>', {
                                value: hotelRoomNumber.id,
                                text: hotelRoomNumber.room_number
                            }));
                        });
                        hotelRoomNumberSelect.prop('disabled', false);
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
</script>
<script>
        $(document).ready(function() {
            $('#reservation_start_date').attr('required', 'required');
            $('#daily').attr('required', 'required');
            $('#mixed').attr('required', 'required');
            $('#reservation_day_category').attr('required', 'required');
            $('#hotel_room_id').attr('required', 'required');
            $('#hotel_room_number_id').attr('required', 'required');
            $('#total_guest').attr('required', 'required');
            $('#daily').on('change', function() {
                // Tampilkan atau sembunyikan elemen-elemen tergantung pada nilai checkbox
                if (this.checked) {
                    $('#result_daily_reservation_end_date, label[for="result_daily_reservation_end_date"]').show();
                    $('#mixed').prop('disabled', true).removeAttr('required');
                    $('#mixed_time_day').prop('disabled', true);
                    $('#mixed_time_hour').prop('disabled', true);
                    $('#reservation_end_date_daily').attr('required', 'required');
                } else {
                    $('#result_daily_reservation_end_date, label[for="result_daily_reservation_end_date"]').hide();
                    $('#mixed').prop('disabled', false).attr('required', 'required');;
                    $('#mixed_time_day').prop('disabled', false);
                    $('#mixed_time_hour').prop('disabled', false);
                    $('#reservation_end_date_daily').removeAttr('required');
                }
            });

            // Menangani perubahan pada input datetime check-in dan check-out
            $('#reservation_end_date_daily').on('change', function() {
                // Mendapatkan nilai dari input datetime check-in dan check-out
                var checkinValue = new Date($('#reservation_start_date').val());
                var checkoutValue = new Date($('#reservation_end_date_daily').val());
                
                // Mengatur zona waktu ke GMT+7 (Indonesia Barat)
                checkinValue.setHours(checkinValue.getHours() + 7);
                checkoutValue.setHours(checkoutValue.getHours() + 7);

                // Menghitung selisih waktu dalam milidetik
                var timeDifference = checkoutValue - checkinValue;

                // Menghitung selisih waktu dalam hari dan jam
                var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

                // Mengatur nilai hasil dalam format "Hari:Jam"
                var formattedResult = days + " Hari : " + hours + " Jam";

                 // Mengatur nilai hasil dalam format tanggal dan jam
                $('#result_daily_reservation_end_date').val(formattedResult);
            });
        });
</script>
<script>
        $(document).ready(function() {
            $('#mixed').on('change', function() {
                // Tampilkan atau sembunyikan elemen-elemen tergantung pada nilai checkbox
                if (this.checked) {
                    $('#result_mix_reservation').show();
                    $('#daily').prop('disabled', true).removeAttr('required');
                    $('#reservation_end_date_daily').prop('disabled', true);
                    $('#mixed_time_day').attr('required', 'required');
                    $('#mixed_time_hour').attr('required', 'required');
                } else {
                    $('#result_mix_reservation').hide();
                    $('#daily').prop('disabled', false).attr('required', 'required');
                    $('#reservation_end_date_daily').prop('disabled', false);
                    $('#mixed_time_day').removeAttr('required');
                    $('#mixed_time_hour').removeAttr('required');
                }
            });

            // Menangani perubahan pada input datetime, select hari, dan select jam
            $('#mixed_time_day, #mixed_time_hour').on('change', function() {
                // Mendapatkan nilai dari input datetime, select hari, dan select jam
                var datetimeValue = new Date($('#reservation_start_date').val());
                var addDays = parseInt($('#mixed_time_day').val());
                var addHours = parseInt($('#mixed_time_hour').val());

                // Menambahkan hari dan jam ke datetime awal
                datetimeValue.setDate(datetimeValue.getDate() + addDays);
                datetimeValue.setHours(datetimeValue.getHours() + addHours);

                // Format hasil dalam format tanggal dan jam dengan zona waktu GMT+7 (Indonesia Barat)
                var formattedResult = datetimeValue.getFullYear() + '-' + padZero(datetimeValue.getMonth() + 1) + '-' + padZero(datetimeValue.getDate()) + 'T' + padZero(datetimeValue.getHours()) + ':' + padZero(datetimeValue.getMinutes());

                 // Mengatur nilai hasil dalam format tanggal dan jam
                $('#result_mix_reservation_end_date').val(formattedResult);
            });

            // Fungsi untuk menambahkan nol di depan angka jika diperlukan
            function padZero(num) {
                return (num < 10 ? '0' : '') + num;
            }
        });
</script>
<script>
    $(document).ready(function() {
            $('#payment_method_ota').attr('required', 'required');
            $('#payment_method_cash').attr('required', 'required');
            $('#payment_method_non_cash').attr('required', 'required');
        });
</script>
<script>
    $(document).ready(function() {
            $('#payment_method_ota').on('change', function() {
                // Tampilkan atau sembunyikan elemen-elemen tergantung pada nilai checkbox
                if (this.checked) {
                    $('#payment_method_cash').prop('disabled', true);
                    $('#payment_cash_value').prop('disabled', true);
                    $('#change').prop('disabled', true);
                    $('#payment_method_non_cash').prop('disabled', true);
                    $('#paymentMethod').prop('disabled', true);
                    $('#payment_method_cash').removeAttr('required');
                    $('#payment_method_non_cash').removeAttr('required');
                    $('#payment_category_ota').attr('required', 'required');
                    $('#payment_ota_value').attr('required', 'required');
                } else {
                    $('#payment_method_cash').prop('disabled', false);
                    $('#payment_cash_value').prop('disabled', false);
                    $('#change').prop('disabled', false);
                    $('#payment_method_non_cash').prop('disabled', false);
                    $('#paymentMethod').prop('disabled', false);
                    $('#payment_method_cash').attr('required', 'required');
                    $('#payment_method_non_cash').attr('required', 'required');
                    $('#payment_category_ota').removeAttr('required');
                    $('#payment_ota_value').removeAttr('required');
                }
            });
        });
</script>
<script>
    $(document).ready(function() {
            $('#payment_method_cash').on('change', function() {
                // Tampilkan atau sembunyikan elemen-elemen tergantung pada nilai checkbox
                if (this.checked) {
                    $('#payment_method_ota').prop('disabled', true);
                    $('#payment_category_ota').prop('disabled', true);
                    $('#payment_ota_value').prop('disabled', true);
                    $('#payment_method_non_cash').prop('disabled', true);
                    $('#paymentMethod').prop('disabled', true);
                    $('#payment_method_ota').removeAttr('required');
                    $('#payment_method_non_cash').removeAttr('required');
                    $('#payment_cash_value').attr('required', 'required');
                    $('#change').attr('required', 'required');
                } else {
                    $('#payment_method_ota').prop('disabled', false);
                    $('#payment_category_ota').prop('disabled', false);
                    $('#payment_ota_value').prop('disabled', false);
                    $('#payment_method_non_cash').prop('disabled', false);
                    $('#paymentMethod').prop('disabled', false);
                    $('#payment_method_ota').attr('required', 'required');
                    $('#payment_method_non_cash').attr('required', 'required');
                    $('#payment_cash_value').removeAttr('required');
                    $('#change').removeAttr('required');
                }
            });
        });
</script>
<script>
    $(document).ready(function() {
            $('#payment_method_non_cash').on('change', function() {
                // Tampilkan atau sembunyikan elemen-elemen tergantung pada nilai checkbox
                if (this.checked) {
                    $('#payment_method_ota').prop('disabled', true);
                    $('#payment_category_ota').prop('disabled', true);
                    $('#payment_ota_value').prop('disabled', true);
                    $('#payment_method_cash').prop('disabled', true);
                    $('#payment_cash_value').prop('disabled', true);
                    $('#change').prop('disabled', true);
                    $('#payment_method_ota').removeAttr('required');
                    $('#payment_method_cash').removeAttr('required');
                    $('#paymentMethod').attr('required', 'required');
                } else {
                    $('#payment_method_ota').prop('disabled', false);
                    $('#payment_category_ota').prop('disabled', false);
                    $('#payment_ota_value').prop('disabled', false);
                    $('#payment_method_cash').prop('disabled', false);
                    $('#payment_cash_value').prop('disabled', false);
                    $('#change').prop('disabled', false);
                    $('#payment_method_ota').attr('required', 'required');
                    $('#payment_method_cash').attr('required', 'required');
                    $('#paymentMethod').removeAttr('required');
                    $('#payment_category_va').removeAttr('required', 'required');
                    $('#payment_va_value').removeAttr('required', 'required');
                    $('#payment_method_va_reference').removeAttr('required', 'required');
                    $('#payment_category_transfer').removeAttr('required');
                    $('#payment_transfer_value').removeAttr('required');
                    $('#payment_method_transfer_reference').removeAttr('required');
                    $('#payment_category_card').removeAttr('required');
                    $('#payment_card_value').removeAttr('required');
                    $('#payment_method_card_number').removeAttr('required');
                    $('#payment_category_qris').removeAttr('required');
                    $('#payment_qris_value').removeAttr('required');
                    $('#payment_method_qris_reference').removeAttr('required');
                    $('.paymentOption').hide();
                }
            });
        });
</script>
<script>
$(document).ready(function() {
    // Function to format the input as currency
    function inputRupiah(input) {
        // Remove non-numeric characters
        var number = input.replace(/\D/g, '');

        // Add thousands separator (.,) and currency symbol (Rp) if it's a valid number
        if (!isNaN(number)) {
            var formatted = 'Rp ' + number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            return formatted;
        }

        return input; // Return the original input if it's not a valid number
    }

    // Add input event listener to apply formatting as the user types
        $('#discount').on('input', function() {
            var discountType = $('#discount_type').val()
            if(discountType == 'Nominal'){
                console.log('rupiah')
                var inputVal = $(this).val();
                var formattedVal = inputRupiah(inputVal);
                $(this).val(formattedVal);
            }
        });

        $('#payment_ota_value').on('input', function() {
            var inputVal = $(this).val();
            var formattedVal = inputRupiah(inputVal);
            $(this).val(formattedVal);
        });

        $('#payment_cash_value').on('input', function() {
            var inputVal = $(this).val();
            var formattedVal = inputRupiah(inputVal);
            $(this).val(formattedVal);
        });

        $('#change').on('input', function() {
            var inputVal = $(this).val();
            var formattedVal = inputRupiah(inputVal);
            $(this).val(formattedVal);
        });

        $('#payment_card_value').on('input', function() {
            var inputVal = $(this).val();
            var formattedVal = inputRupiah(inputVal);
            $(this).val(formattedVal);
        });

        $('#payment_transfer_value').on('input', function() {
            var inputVal = $(this).val();
            var formattedVal = inputRupiah(inputVal);
            $(this).val(formattedVal);
        });

        $('#payment_qris_value').on('input', function() {
            var inputVal = $(this).val();
            var formattedVal = inputRupiah(inputVal);
            $(this).val(formattedVal);
        });

        $('#payment_va_value').on('input', function() {
            var inputVal = $(this).val();
            var formattedVal = inputRupiah(inputVal);
            $(this).val(formattedVal);
        });
});
</script>
<script>
    $('#discount').prop('disabled', true);
    var isOTA = "{{ $isOta }}"

    function formatRupiah(amount) {
        var formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR'
        });
        
        return formatter.format(amount);
    }

    var input2Value = $('#total_price').val() || 0;

    if(isOTA){
        function inputRupiah(input) {
        // Remove non-numeric characters
        var number = input.replace(/\D/g, '');

        // Add thousands separator (.,) and currency symbol (Rp) if it's a valid number
        if (!isNaN(number)) {
            var formatted = 'Rp ' + number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            return formatted;
        }

        return input; // Return the original input if it's not a valid number
        }
        
        $('#total_price').on('input', function() {
            var inputVal = $(this).val();
            var formattedVal = inputRupiah(inputVal);
            $(this).val(formattedVal);
        });
    }

    function calculateResult() {
        var discountCategory = $('#discount_type').val()
        var input1Value = parseFloat($('#discount').val().replace(/[^0-9]/g, '')) || 0;
        var totalPrice = parseInt(input2Value.replace(/\./g, '') || '0', 10);

        if(discountCategory == 'Nominal'){
            var result = totalPrice - input1Value;
        }else{
            var result = totalPrice * (1 - (input1Value / 100));
        }
            var formattedResult = formatRupiah(result.toFixed(2)); // Format with 2 decimal places
            $('#total_price').val(formattedResult);
        }
    
    $(document).ready(function () {
        $('#discount_type').on('change', function() {
            if ($(this).val() === 'Nominal' || $(this).val() === 'Persen') {
                $('#discount').attr('required', 'required');
                $('#discount').prop('disabled', false);
            } else {
                $('#discount').removeAttr('required');
                $('#discount').prop('disabled', true);
            }
        });
        if(!isOTA){
            $('#discount').on('input', function () {
                calculateResult();
            });
        }
    });
</script>
<script>
        $(document).ready(function() {
            const startWebcamButton = document.getElementById('startWebcamTamuButton');
            const captureButton = document.getElementById('captureTamuButton');
            const closeWebcamButton = document.getElementById('closeWebcamTamuButton');
            const photoPreview = document.getElementById('photoPreviewTamu');
            const webcamFeed = document.getElementById('webcamFeedTamu');
            const photoForm = document.getElementById('photoFormTamu');
            const webcamCaptureInput = document.getElementById('webcamCaptureTamu');
            
            let stream = null;

            startWebcamButton.addEventListener('click', function() {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function(webcamStream) {
                        stream = webcamStream;
                        webcamFeed.style.display = 'block';
                        webcamFeed.srcObject = stream;
                        webcamFeed.play();
                        startWebcamButton.style.display = 'none';
                        captureButton.style.display = 'inline-block';
                        closeWebcamButton.style.display = 'inline-block';
                    })
                    .catch(function(err) {
                        console.error('Error accessing the webcam:', err);
                    });
            });

            closeWebcamButton.addEventListener('click', function() {
                if (stream) {
                    const tracks = stream.getTracks();
                    tracks.forEach(function(track) {
                        track.stop();
                    });
                    webcamFeed.style.display = 'none';
                    startWebcamButton.style.display = 'inline-block';
                    captureButton.style.display = 'none';
                    closeWebcamButton.style.display = 'none';
                    photoForm.reset();
                    photoPreview.innerHTML = '';
                }
            });

            captureButton.addEventListener('click', function() {
                if (stream) {
                    const canvas = document.createElement('canvas');
                    const context = canvas.getContext('2d');
                    canvas.width = webcamFeed.videoWidth;
                    canvas.height = webcamFeed.videoHeight;
                     // Apply horizontal flip before drawing the video frame
                    context.translate(canvas.width, 0);
                    context.scale(-1, 1);
                    
                    context.drawImage(webcamFeed, 0, 0, canvas.width, canvas.height);

                    // Convert the captured image to a Data URL without mirroring
                    const dataURL = canvas.toDataURL('image/jpeg');
                    const base64Data = dataURL.split(',')[1]; // Extract base64 data
                    webcamCaptureInput.value = base64Data;

                    const img = document.createElement('img');
                    img.src = dataURL;
                    img.className = 'img-thumbnail';

                    // Reset the canvas transformation
                    context.setTransform(1, 0, 0, 1, 0, 0);
                    photoPreview.innerHTML = '';
                    photoPreview.appendChild(img);
                }
            });
        });
</script>
<script>
    $(document).ready(function () {
        $('.delete-button').on('click', function () {
            var id = this.getAttribute('data-id');
            
            if (confirm('Are you sure you want to delete this data?')) {
                $.ajax({
                    type: 'POST',
                    url: "/admin/reservation/delete-customer/" + id,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        // Handle success, e.g., remove the row from the table
                        alert('Data Berhasil Dihapus'); // Display a success message
                        // Reload Page
                        location.reload();
                    },
                    error: function (data) {
                        alert('Error: Data Gagal Dihapus');
                    }
                });
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('.delete-button-rooms').on('click', function () {
            var id = this.getAttribute('data-id');
            
            if (confirm('Are you sure you want to delete this data?')) {
                $.ajax({
                    type: 'POST',
                    url: "/admin/reservation/delete-rooms/" + id,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        // Handle success, e.g., remove the row from the table
                        alert('Data Berhasil Dihapus'); // Display a success message
                        // Reload Page
                        location.reload();
                    },
                    error: function (data) {
                        alert('Error: Data Gagal Dihapus');
                    }
                });
            }
        });
    });
</script>
@endpush