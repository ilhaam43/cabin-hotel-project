@extends('admin.layout.template')
@section('content') 
        <div class="py-4">
                
                <div class="d-flex justify-content-between w-100 flex-wrap">
                    <div class="mb-3 mb-lg-0">
                        <h1 class="h4">Form Reservasi</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4 mb-4">
                    <div class="card border-0 shadow components-section">
                        <div class="card-body">     
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                <h1 class="h5"><u>Guest Detail</u></h1>
                                </br>
                                <form method="POST" action="{{route('admin.reservation.store-customer')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <!-- Form -->
                                    <div class="row">
                                        </br></br>
                                        <div class="col-lg-12 col-sm-12">
                                            <label for="exampleInputIconLeft">Jenis Tamu</label>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <select class="form-select w-100 mb-0" id="state" name="reservation_method_id" aria-label="State select example">
                                                @foreach ($reservationMethod as $methods)
                                                    <option value="{{ $methods->id }}">{{ $methods->reservation_method }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </br></br>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                    <input type="text" class="form-control" name="booking_number" id="booking_number" placeholder="Booking Number" aria-describedby="booking_number">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-2">
                                            <div class="mb-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="daily" id="flexSwitchCheckDefault">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <div class="mb-4">
                                                <label for="exampleInputIconLeft">Pilih Dari Daftar Tamu</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <select class="form-select w-100 mb-0" id="customer_title" name="customer_title" aria-label="customer_title" disabled>
                                                <option selected>Daftar Tamu</option>
                                                <option value="Mrs">Mrs</option>
                                            </select>
                                        </div>
                                        </br></br></br>
                                        <div class="col-lg-12 col-sm-12">
                                            <label for="exampleInputIconLeft">Isi Data Tamu</label>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <select class="form-select w-100 mb-0" id="customer_title" name="customer_title" aria-label="customer_title">
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <div class="mb-4">
                                                    <input type="text" class="form-control" placeholder="Nama" id="customer_name" name="customer_name" aria-describedby="customer_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-4">
                                            <select class="form-select w-100 mb-0" id="state" name="customer_identity_type" aria-label="State select example">
                                                <option value="KTP">KTP</option>
                                                <option value="SIM">SIM</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-8 col-sm-8">
                                            <div class="mb-4">
                                                <input class="form-control" name="customer_identity_photo" type="file" placeholder="Foto" id="formFile">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                    <input type="text" name="customer_address" class="form-control" id="customer_address" placeholder="Domisili" aria-describedby="customer_address">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                    <input type="text" class="form-control" name="customer_phone" id="customer_phone" placeholder="Nomor Handphone" aria-describedby="customer_phone">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                    <input type="text" name="customer_email" class="form-control" id="customer_email" placeholder="Email" aria-describedby="customer_email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                        <label for="exampleInputIconLeft">Foto</label>
                                            <div class="mb-4">
                                                <input class="form-control" name="customer_photo" type="file" placeholder="Foto" id="formFile">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <button class="btn w-100 btn-secondary" type="submit">Tambah Tamu</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                                    <!-- End of Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-4">
                    <div class="card border-0 shadow components-section">
                        <div class="card-body">     
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                <h1 class="h5"><u>Room Order</u></h1>
                                </br>
                                <form method="POST" action="{{route('admin.reservation.store-room-order')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <!-- Form -->
                                    <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <label for="email">Check In</label>
                                                <input type="datetime-local" class="form-control" name="reservation_start_date_daily" id="reservation_start_date" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-2">
                                            <div class="mb-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="daily" id="flexSwitchCheckDefault">
                                            </div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-8 col-sm-12">
                                            <div class="mb-4">
                                                <p>Checkout dengan pilih tanggal & jam</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <label for="email">Check Out</label>
                                                <input type="datetime-local" class="form-control" name="reservation_end_date_daily" id="reservation_end_date" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-2 col-sm-2">
                                            <div class="mb-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="mixed" id="flexSwitchCheckDefault">
                                            </div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-8 col-sm-12">
                                            <div class="mb-4">
                                                <p>Checkout dengan pilih hari & jam</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="mb-4">
                                                <label for="email">Hari</label>
                                                <select class="form-select w-100 mb-0" id="state" name="mixed_day" aria-label="State select example">
                                                    @for ($i = 0; $i <= 30; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="mb-4">
                                                <label for="email">Jam</label>
                                                <select class="form-select w-100 mb-0" id="state" name="mixed_hour" aria-label="State select example">
                                                    @for ($i = 0; $i <= 24; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>

                                        <!-- <div class="col-lg-2 col-sm-2">
                                            <div class="mb-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="hourly" id="flexSwitchCheckDefault">
                                            </div>
                                            </div>
                                        </div> -->
            
                                        <!-- <div class="col-lg-8 col-sm-12">
                                            <div class="mb-4">
                                                <p>Transit</p>
                                            </div>
                                        </div>
                                    
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <label for="email">Check In</label>
                                                <input type="time" class="form-control" name="reservation_start_date_hourly" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <label for="email">Check Out</label>
                                                <input type="time" name="reservation_end_date_hourly" class="form-control" aria-describedby="emailHelp">
                                            </div>
                                        </div> -->


                                        <div class="col-lg-12 col-sm-12">
                                            <select class="form-select w-100 mb-0" id="reservation_day_category" name="reservation_day_category" aria-label="reservation_day_category">
                                                <option value="Weekday">Weekday</option>
                                                <option value="Weekend">Weekend</option>
                                                <option value="High Season">High Season</option>
                                            </select>
                                        </div>
                                        </br></br></br>
                                        <div class="col-lg-12 col-sm-12">
                                            <label for="exampleInputIconLeft">Data Kamar</label>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <select class="form-select w-100 mb-0" id="hotel_room_id" name="hotel_room_id" aria-label="State select example">
                                                <option selected>Tipe Kamar</option>
                                                @foreach ($hotelRooms as $roomType)
                                                    <option value="{{ $roomType->id }}">{{ $roomType->room_type }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <select class="form-select w-100 mb-0" id="hotel_room_number_id" name="hotel_room_number_id" aria-label="State select example" disabled>
                                                        <option value="">Pilih Nomer Kamar</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <select class="form-select w-100 mb-0" id="total_guest" name="total_guest" aria-label="State select example">
                                                        <option selected>Jumlah Orang</option>
                                                        @for ($i = 1; $i <= 4; $i++)
                                                            <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <button class="btn w-100 btn-secondary" type="submit">Tambah Kamar</button>
                                            </div>
                                        </div>
                                        </form>
                                        </br></br>
                                        <form method="POST" action="{{route('admin.reservation.store-amenities')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <h1 class="h5"><u>Tambahan Amenities</u></h1>
                                        </br>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <label for="email">Breakfast</label>
                                                <select class="form-select w-100 mb-0" id="amount_breakfast" name="amount_breakfast" aria-label="State select example">
                                                <option selected>Breakfast</option>
                                                    @for ($i = 0; $i <= 10; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                            <label for="email">Extra Bed</label>
                                                <select class="form-select w-100 mb-0" id="state" name="amount_extra_bed" aria-label="State select example">
                                                    <option selected>Extra Bed</option>
                                                    @for ($i = 0; $i <= 10; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <button class="btn w-100 btn-secondary" type="submit">Tambah Amenities</button>
                                            </div>
                                        </div>
                                        </br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                                        </form>
                                    </div>
                                    <!-- End of Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-4">
                    <div class="card border-0 shadow components-section">
                        <div class="card-body">     
                            <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                <h1 class="h5"><u>Payment</u></h1>
                                </br>
                                    <!-- Form -->
                                    <div class="row">
                                    <div class="col-lg-2 col-sm-2">
                                            <div class="mb-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="payment_method_ota">
                                            </div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-10 col-sm-12">
                                            <div class="mb-4">
                                                <p>Pay at OTA</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <select class="form-select w-100 mb-0" id="customer_title" name="payment_category_ota" aria-label="payment_category_ota">
                                                <option selected>Jenis OTA</option>
                                                @foreach($paymentOTA as $OTA)
                                                    <option value="{{ $OTA->id }}">{{ $OTA->payment_method }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </br></br>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <input type="text" class="form-control" id="payment_ota_value" name="payment_ota_value" placeholder="Nominal Bayar" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <hr color="black">
                                        </br>
                                        <label>Pay At Hotel </label>
                                        </br></br>
                                        <div class="col-lg-12 col-sm-12">
                                        <label>Tipe Pembayaran</label>
                                            <select class="form-select w-100 mb-0" id="payment_category_qris" name="payment_category_qris" aria-label="payment_category_qris">
                                                <option selected>Tipe Pembayaran</option>
                                                    <option value="Down Payment">Down Payment</option>
                                                    <option value="Lunas">Lunas</option>
                                            </select>
                                        </div>
                                        </br></br></br></br>
                                        <div class="col-lg-2 col-sm-2">
                                            <div class="mb-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="payment_method_cash">
                                            </div>
                                            </div>
                                        </div>
            
                                        <div class="col-lg-10 col-sm-12">
                                            <div class="mb-4">
                                                <p>Cash</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <input type="text" name="payment_cash_value" class="form-control" id="payment_cash_value" placeholder="Nominal Bayar" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <input type="text" name="change" class="form-control" id="email" placeholder="Nominal Kembali" aria-describedby="emailHelp">
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-sm-2">
                                            <div class="mb-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="payment_method_card">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <div class="mb-4">
                                                <p>Card</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <select class="form-select w-100 mb-0" id="customer_title" name="payment_category_card" aria-label="payment_category_card">
                                                <option selected>Jenis Card</option>
                                                @foreach ($paymentCard as $cards)
                                                    <option value="{{ $cards->id }}">{{ $cards->payment_method }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </br></br>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <input type="text" name="card_number" class="form-control" id="email" placeholder="No Kartu" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <input type="text" name="payment_card_value" class="form-control" id="email" placeholder="Nominal Bayar" aria-describedby="emailHelp">
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-sm-2">
                                            <div class="mb-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" name="payment_method_qris" id="flexSwitchCheckDefault">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <div class="mb-4">
                                                <p>Qris</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <select class="form-select w-100 mb-0" id="payment_category_qris" name="payment_category_qris" aria-label="payment_category_qris">
                                                <option selected>Jenis Qris</option>
                                                @foreach ($paymentQris as $qris)
                                                    <option value="{{ $qris->id }}">{{ $qris->payment_method }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </br></br>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <input type="text" class="form-control" name="qris_reference_number" id="reference_number" placeholder="Nomor Referensi QRIS" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <input type="text" name="payment_qris_value" class="form-control" id="payment_qris_value" placeholder="Nominal Bayar" aria-describedby="emailHelp">
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-sm-2">
                                            <div class="mb-4">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" name="payment_method_transfer" type="checkbox" id="flexSwitchCheckDefault">
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-sm-12">
                                            <div class="mb-4">
                                                <p>Transfer</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-sm-12">
                                            <select class="form-select w-100 mb-0" id="payment_method_transfer" name="payment_method_transfer" aria-label="payment_method_transfer">
                                                <option selected>Jenis Bank Transfer</option>
                                                @foreach ($paymentQris as $qris)
                                                    <option value="{{ $qris->id }}">{{ $qris->payment_method }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        </br></br>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <input type="text" name="payment_transfer_value" class="form-control" placeholder="Nominal Bayar" id="email" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        </br></br>
                                        <div class="col-lg-12 col-sm-12">
                                            <div class="mb-4">
                                                <input type="text" name="transfer_reference_number" class="form-control" placeholder="Nomor Referensi Transfer" id="email" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        

                                        </br></br></br></br></br></br></br></br></br></br></br></br></br>
                                    </div>
                                    <!-- End of Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="card border-0 shadow components-section">
                            <div class="card-body">     
                                <div class="row">
                                <div class="col-lg-12 col-sm-6">
                                    <h1 class="h5"><u>Order Summary</u></h1>
                                    </br>
                                        <!-- Form -->
                                        <div class="row">
                                        @if($customerTmp)
                                        <div class="col-lg-12 col-sm-12">
                                            <label for="email">Data Pelanggan</label>
                                                <div class="mb-4">
                                                    <p>Nama : {{ $customerTmp->customer_name }}</p>
                                                    <p>Email : {{ $customerTmp->customer_email }}</p>
                                                    <p>No Hp : {{ $customerTmp->customer_phone }}</p>
                                                </div>
                                            </div>
                                        @endif
                                        @if($hotelRoomReservedTmp)
                                        @foreach($hotelRoomReservedTmp as $reservationData)
                                        <div class="col-lg-2 col-sm-2">
                                            <label for="email">Data Reservasi Kamar</label>
                                                <div class="mb-4">
                                                    <p>Tipe Kamar : {{ $reservationData->hotelRoomNumber->hotelRoom->room_type }} </p>
                                                    <p>Nomor Kamar : {{ $reservationData->hotelRoomNumber->room_number }} </p>
                                                    <p>Total Tamu : {{ $reservationData->total_guest }} </p>
                                                    <p>Harga Kamar : Rp. {{ number_format($reservationData->price, 2, ",", ".") }} </p>
                                                </div>
                                            </div>
                                        @endforeach
                                        @endif
                                        <div class="col-lg-12 col-sm-12">
                                        </div>
                                        @if($amenitiesTmp)
                                        @foreach($amenitiesTmp as $amenities)
                                        <div class="col-lg-2 col-sm-2">
                                            <label for="email">Data Amenities</label>
                                                <div class="mb-4">
                                                    <p>Amenities : {{ $amenities->amenities->amenities }} </p>
                                                    <p>Kuantitas : {{ $amenities->amount }} </p>
                                                    <p>Total Harga Amenities : Rp. {{ number_format($amenities->total_price, 2, ",", ".")}} </p>
                                                </div>
                                            </div>
                                        @endforeach
                                        @endif
                                            <div class="col-lg-12 col-sm-12">
                                            <label for="email">Diskon</label>
                                                <div class="mb-4">
                                                    <input type="text" name="discount" class="form-control" id="discount" aria-describedby="emailHelp">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="mb-4">
                                                    <p><b>Total Price :</p></b>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <div class="mb-4">
                                                    @if($totalPrice)
                                                    <input type="text" name="total_price" class="form-control" id="total_price" value="{{ number_format($totalPrice, 0, ',', '.') }}" aria-describedby="total_price" disabled>
                                                    @else
                                                    <input type="text" name="total_price" class="form-control" id="total_price"  aria-describedby="total_price" disabled>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-12">
                                                <button class="btn w-100 btn-default btn-secondary" type="button">Simpan</button>
                                            </div>
                                        </div>
                                        <!-- End of Form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End of Form -->
                </div>
            </div>
        </div>
            </div>
            </div>
            </div>

            <div class="theme-settings card bg-gray-800 pt-2 collapse" id="theme-settings">
    <div class="card-body bg-gray-800 text-white pt-4">
        <button type="button" class="btn-close theme-settings-close" aria-label="Close" data-bs-toggle="collapse"
            href="#theme-settings" role="button" aria-expanded="false" aria-controls="theme-settings"></button>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <p class="m-0 mb-1 me-4 fs-7">Open source <span role="img" aria-label="gratitude">💛</span></p>
            <a class="github-button" href="https://github.com/themesberg/volt-bootstrap-5-dashboard"
                data-color-scheme="no-preference: dark; light: light; dark: light;" data-icon="octicon-star"
                data-size="large" data-show-count="true"
                aria-label="Star themesberg/volt-bootstrap-5-dashboard on GitHub">Star</a>
        </div>
        <a href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard" target="_blank"
            class="btn btn-secondary d-inline-flex align-items-center justify-content-center mb-3 w-100">
            Download 
            <svg class="icon icon-xs ms-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd"></path></svg>
        </a>
        <p class="fs-7 text-gray-300 text-center">Available in the following technologies:</p>
        <div class="d-flex justify-content-center">
            <a class="me-3" href="https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard"
                target="_blank">
                <img src="../../assets/img/technologies/bootstrap-5-logo.svg" class="image image-xs">
            </a>
            <a href="https://demo.themesberg.com/volt-react-dashboard/#/" target="_blank">
                <img src="../../assets/img/technologies/react-logo.svg" class="image image-xs">
            </a>
        </div>
    </div>
</div>
@endsection
@push('scripts')
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
    function formatRupiah(amount) {
            var formatter = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            });
            return formatter.format(amount);
    }
    
    $(document).ready(function () {
            var input2Value = $('#total_price').val() || 0;

            $('#discount').on('input', function () {
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