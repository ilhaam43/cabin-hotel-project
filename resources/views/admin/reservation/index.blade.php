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
@extends('admin.layout.template')
@section('content')
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h5 class="h4">Form Reservasi</h5>
            </div>
        </div>
    </div>
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
                        <div class="col">
                            <label for="exampleInputIconLeft">Jenis Tamu</label>
                        </div>
                        <div class="col">
                            <select class="form-select w-100 mb-2  " id="state"
                                name="reservation_method_id" aria-label="State select example">
                                @foreach ($reservationMethod as $methods)
                                    <option value="{{ $methods->id }}">
                                        {{ $methods->reservation_method }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <div class="mb-4">
                                <input type="text" class="form-control  " name="booking_number"
                                    id="booking_number" placeholder="Booking Number" aria-describedby="booking_number">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="search_guest" name="search_guest">
                                <p>Pilih Dari Daftar Tamu</p>
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-select w-100 mb-0 " id="customer_id"
                                name="customer_id" aria-label="customer_id" disabled>
                                <option selected>Daftar Tamu</option>
                                <option value="Mrs">Mrs</option>
                            </select>
                        </div>
                        </br>
                        <div class="col">
                            <label for="exampleInputIconLeft">Isi Data Tamu</label>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-4">
                                <select class="form-select w-100 mb-0 " id="customer_title"
                                    name="customer_title" aria-label="customer_title">
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
                                <select class="form-select w-100 mb-0 " id="state"
                                    name="customer_identity_type" aria-label="State select example">
                                    <option value="KTP">KTP</option>
                                    <option value="SIM">SIM</option>
                                </select>
                            </div>
                            <div class="col-lg-8 col-sm-8">
                                <div class="mb-2">
                                    <input class="form-control " name="customer_identity_photo"
                                        type="file" placeholder="Foto" id="formFile">
                                </div>
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
                                <input type="text" name="customer_email" class="form-control "
                                    id="customer_email" placeholder="Email" aria-describedby="customer_email">
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <label for="exampleInputIconLeft">Foto</label>
                            <div class="mb-2">
                                <input class="form-control " name="customer_photo" type="file"
                                    placeholder="Foto" id="formFile">
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="mb-2">
                                <button class="btn w-100 btn-secondary " type="submit">Tambah
                                    Tamu</button>
                            </div>
                        </div>
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
                                        @for ($i = 0; $i <= 24; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-0">
                                <label for="result_mix_reservation_end_date" style="display: none;">Perhitungan
                                    waktu checkout dengan pilih durasi</label>
                                <input type="datetime-local" class="form-control " id="result_mix_reservation_end_date"
                                    style="display: none;" disabled>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <select class="form-select w-100 mt-0 " id="reservation_day_category"
                                name="reservation_day_category" aria-label="reservation_day_category">
                                <option value="Weekday">Weekday</option>
                                <option value="Weekend">Weekend</option>
                                <option value="Weekend">Middle Day</option>
                                <option value="High Season">High Season</option>
                            </select>
                        </div>
                        </br>
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
                                <button class="btn w-100 btn-secondary" type="submit">Tambah Kamar</button>
                            </div>
                        </div>
                    </form>


                    <form method="POST" action="{{ route('admin.reservation.store-amenities') }}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        </br>
                        <h5 style="font-size: 25px"><u>Tambahan Amenities</u></h5>
                        <div class="col">
                            <div class="mb-2">
                                <label for="email">Breakfast</label>
                                <select class="form-select w-100 mb-0 " id="amount_breakfast" name="amount_breakfast"
                                    aria-label="State select example">
                                    <option selected value="">Breakfast</option>
                                    @for ($i = 0; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <label for="email">Extra Bed</label>
                                <select class="form-select w-100 mb-0 " id="state" name="amount_extra_bed"
                                    aria-label="State select example">
                                    <option selected value="">Extra Bed</option>
                                    @for ($i = 0; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        </br>
                        <div class="col">
                            <div class="mb-2">
                                <button class="btn w-100 btn-secondary" type="submit">Tambah Amenities</button>
                            </div>
                        </div>
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
                        <div class="col">
                            <label for="discount">Diskon</label>
                            <div class="mb-2">
                                <select class="form-select w-100 mb-2 " id="discount_type" name="discount_type"
                                    aria-label="discount_type">
                                    <option selected value="">Jenis Diskon</option>
                                    <option value="Nominal">Nominal</option>
                                    <option value="Persen">Persen (%)</option>
                            </div>
                            <div class="mb-2">
                                <input type="text" name="discount" class="form-control " id="discount"
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
                                @if ($totalPrice)
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
                            <label>Tipe Pembayaran</label>
                            <select class="form-select w-100 mb-0 " id="payment_category" name="payment_category"
                                aria-label="payment_category">
                                <option selected value="">Tipe Pembayaran</option>
                                <option value="Down Payment">Down Payment</option>
                                <option value="Lunas">Lunas</option>
                            </select>
                        </div>
                        <hr color="black">
                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="payment_ota_value"
                                    name="payment_ota_value">
                                <p>Pay At OTA</p>
                            </div>
                        </div>

                        <div class="col">
                            <select class="form-select w-100 mb-2 " id="payment_category_ota" name="payment_category_ota"
                                aria-label="payment_category_ota">
                                <option selected value="">Jenis OTA</option>
                                @foreach ($paymentOTA as $OTA)
                                    <option value="{{ $OTA->id }}">{{ $OTA->payment_method }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="text" class="form-control " id="payment_ota_value"
                                    name="payment_ota_value" placeholder="Nominal Bayar" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <hr color="black">

                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="payment_method_cash"
                                    name="payment_method_cash">
                                <p>Cash</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-2">
                                <input type="text" name="payment_cash_value" class="form-control "
                                    id="payment_cash_value" placeholder="Nominal Bayar" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-4">
                                <input type="text" name="change" class="form-control " id="email"
                                    placeholder="Nominal Kembali" aria-describedby="emailHelp">
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="payment_method_card"
                                    name="payment_method_card">
                                <p>Non Cash</p>
                            </div>
                        </div>
                        <div class="col">
                            <select class="form-select w-100 mb-2 " id="paymentMethod" name="paymentMethod"
                                aria-label="paymentMethod">
                                <option selected value="">Metode Pembayaran</option>
                                <option value="Card">Card</option>
                                <option value="Qris">QRIS</option>
                                <option value="Transfer">Transfer</option>
                            </select>
                        </div>

                        <!-- Form select untuk transfer -->
                        <div class="col paymentOption" id="transferOptions" style="display: none;">
                            <select class="form-select w-100 mb-2 " name="transferBank" aria-label="transferBank"
                                style="margin-bottom: 10px;">
                                <option selected value="">Pilih Bank Transfer</option>
                                @foreach ($paymentTransfer as $transfer)
                                    <option value="{{ $transfer->id }}">{{ $transfer->payment_method }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="transferAmount" class="form-control mb-2 "
                                placeholder="Nominal Pembayaran">
                            <input type="text" name="transferReference" class="form-control mb-2 "
                                placeholder="Nomor Referensi Transaksi Transfer">
                        </div>

                        <!-- Form select untuk card -->
                        <div class="col paymentOption" id="cardOptions" style="display: none;">
                            <select class="form-select w-100 mb-2 " name="cardType" aria-label="cardType">
                                <option selected value="">Pilih Jenis Kartu</option>
                                @foreach ($paymentCard as $card)
                                    <option value="{{ $card->id }}">{{ $card->payment_method }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="cardAmount" class="form-control mb-2 "
                                placeholder="Nominal Pembayaran">
                            <input type="text" name="cardNumber" class="form-control mb-2 " placeholder="Nomor Kartu">
                        </div>

                        <!-- Form select untuk qris -->
                        <div class="col paymentOption" id="qrisOptions" style="display: none;">
                            <select class="form-select w-100 mb-2 " name="qrisType" aria-label="qrisType">
                                <option selected value="">Pilih Jenis QRIS</option>
                                @foreach ($paymentQris as $qris)
                                    <option value="{{ $qris->id }}">{{ $qris->payment_method }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="qrisAmount" class="form-control mb-2 "
                                placeholder="Nominal Pembayaran">
                            <input type="text" name="qrisReference" class="form-control mb-2 "
                                placeholder="Nomor Referensi Transaksi QRIS">
                        </div>

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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $customerTmp->customer_name }}</td>
                                                            <td>{{ $customerTmp->customer_email }}</td>
                                                            <td>{{ $customerTmp->customer_phone }}</td>
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
                                                                <td>{{ number_format($reservationData->price, 2, ',', '.') }}
                                                                </td>
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
                                                                <td>Rp.
                                                                    {{ number_format($amenities->total_price, 2, ',', '.') }}
                                                                </td>
                                                            </tr>
                                                            <!-- End of Item -->
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="col-lg-12 col-sm-12">
                                        </br></br>
                                        <button class="btn w-100 btn-default btn-secondary" type="submit">Simpan</button>
                                    </div>
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
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#hotel_room_id').change(function() {
                const hotelRoom = $(this).val();
                const hotelRoomNumberSelect = $('#hotel_room_number_id');

                hotelRoomNumberSelect.empty().prop('disabled', true);
                if (hotelRoom) {
                    $.ajax({
                        url: `/ajax/getRoomNumbers/${hotelRoom}`,
                        method: 'GET',
                        success: function(data) {
                            data.forEach(function(hotelRoomNumber) {
                                hotelRoomNumberSelect.append($('<option>', {
                                    value: hotelRoomNumber.id,
                                    text: hotelRoomNumber.room_number
                                }));
                            });
                            hotelRoomNumberSelect.prop('disabled', false);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#daily').on('change', function() {
                // Tampilkan atau sembunyikan elemen-elemen tergantung pada nilai checkbox
                if (this.checked) {
                    $('#result_daily_reservation_end_date, label[for="result_daily_reservation_end_date"]')
                        .show();
                } else {
                    $('#result_daily_reservation_end_date, label[for="result_daily_reservation_end_date"]')
                        .hide();
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
                    $('#result_mix_reservation_end_date, label[for="result_mix_reservation_end_date"]')
                        .show();
                } else {
                    $('#result_mix_reservation_end_date, label[for="result_mix_reservation_end_date"]')
                        .hide();
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
                var formattedResult = datetimeValue.getFullYear() + '-' + padZero(datetimeValue.getMonth() +
                    1) + '-' + padZero(datetimeValue.getDate()) + 'T' + padZero(datetimeValue
                    .getHours()) + ':' + padZero(datetimeValue.getMinutes());

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
        function formatRupiah(amount) {
            var formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            });
            return formatter.format(amount);
        }

        $(document).ready(function() {
            var input2Value = $('#total_price').val() || 0;

            $('#discount').on('input', function() {
                calculateResult();
            });

            function calculateResult() {
                var input1Value = parseFloat($('#discount').val()) || 0;
                var totalPrice = parseInt(input2Value.replace(/\./g, ''), 10);
                console.log(totalPrice);
                var result = totalPrice - input1Value;
                var formattedResult = formatRupiah(result.toFixed(2)); // Format with 2 decimal places
                $('#total_price').val(formattedResult);
            }
        });
    </script>
@endpush
