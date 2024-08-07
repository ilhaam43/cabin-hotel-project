@extends('layout.template')
@section('content')
    <!-- Header Start -->
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-0 mb-lg-0">
                <h1 class="h4">Finance</h1>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Widget Start -->
    <div class="row mb-0">
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M320 32c0-9.9-4.5-19.2-12.3-25.2S289.8-1.4 280.2 1l-179.9 45C79 51.3 64 70.5 64 92.5V448H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H96 288h32V480 32zM256 256c0 17.7-10.7 32-24 32s-24-14.3-24-32s10.7-32 24-32s24 14.3 24 32zm96-128h96V480c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H512V128c0-35.3-28.7-64-64-64H352v64z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Total Room Income</h2>
                                <h6 class="fw-extrabold mb-2">Rp. {{ $totalIncomeRoom }}</h6>
                            </div>
                            <div class="small d-flex mt-1">
                                <div>Dalam {{ $dateNow }} <svg class="icon icon-xs text-success" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Total Down Payment</h2>
                                <h6 class="fw-extrabold mb-2">Rp. {{ $totalDownPayment }}</h6>
                            </div>
                            <div class="small d-flex mt-1">
                                <div>Dalam {{ $dateNow }} <svg class="icon icon-xs text-success" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-4 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="row d-block d-xl-flex align-items-center">
                        <div
                            class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                            <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M96 64c0-17.7 14.3-32 32-32H448h64c70.7 0 128 57.3 128 128s-57.3 128-128 128H480c0 53-43 96-96 96H192c-53 0-96-43-96-96V64zM480 224h32c35.3 0 64-28.7 64-64s-28.7-64-64-64H480V224zM32 416H544c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                                </svg>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Food & Beverage</h2>
                                <h6 class="fw-extrabold mb-2">Rp. 0</h6>
                            </div>
                            <div class="small d-flex mt-1">
                                <div>Dalam {{ $dateNow }} <svg class="icon icon-xs text-success" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Widget End -->

    <!-- Search Filter Start -->
    {{-- <div class="card mb-3 card-body shadow border-0 table-wrapper table-responsive">
        <div class="d-flex">
            <select class="form-select fmxw-200" aria-label="Message select example">
                <option selected>Bulk Action</option>
                <option value="1">Send Email</option>
                <option value="2">Change Group</option>
                <option value="3">Delete User</option>
            </select>
            <button class="btn btn-sm px-3 btn-secondary ms-3">Apply</button>
        </div>
    </div> --}}
    <!-- Search Filter End -->
    <div class="row mb-0">
        <div class="col-12 col-sm-6 col-xl-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                <div class="d-flex px-0 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                    <h3>Generate Laporan Finance PDF</h3>
                </div>
                </br>
                <div class="table-responsive">
                <form action="{{ route('admin.finance.report.front-office') }}" method="POST">
                @csrf
                <div class="d-flex mb-3" >
                        <p class=" me-1 pe-1 fmxw-200">Dari :</p>
                        <input type="date" class="form-control me-3 pe-5 fmxw-200" id="pdf_from" name="pdf_from" required></input>
                        <p class=" me-1 pe-1 fmxw-200">Sampai :</p>
                        <input type="date" class="form-control me-3 pe-5 fmxw-200" id="pdf_to" name="pdf_to" required></input>
                        <button class="btn btn-sm px-3 btn-secondary ms-3" type="submit">Generate</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-xl-6 mb-4">
            <div class="card border-0 shadow">
                <div class="card-body">
                <div class="d-flex px-0 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                    <h3>Generate Laporan Finance Excel</h3>
                </div>
                </br>
                <div class="table-responsive">
                <form action="{{ route('admin.finance.report.export-excel.front-office') }}" method="POST">
                @csrf
                <div class="d-flex mb-3" >
                        <p class=" me-1 pe-1 fmxw-200">Dari :</p>
                        <input type="date" class="form-control me-3 pe-5 fmxw-200" name="excel_from" required></input>
                        <p class=" me-1 pe-1 fmxw-200">Sampai :</p>
                        <input type="date" class="form-control me-3 pe-5 fmxw-200" name="excel_to" required></input>
                        <button class="btn btn-sm px-3 btn-secondary ms-3">Generate</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel Room Income Start -->
    <div class="card mb-4 card-body border-0 shadow table-wrapper table-responsive">
        <div class="d-flex px-0 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <h3>Laporan Pendapatan Harian</h3>
        </div>
        </br>
        <div class="table-responsive">
        <form action="{{ route('admin.finance.index') }}" method="GET">
        @csrf
        <div class="d-flex mb-4">
                <p class=" me-1 pe-1 fmxw-200">Tanggal Pembayaran :</p>
                <input type="date" class="form-control me-3 pe-5 fmxw-200" name="payment_date"></input>
                <p class=" me-1 pe-1 fmxw-200">Check In :</p>
                <input type="date" class="form-control me-3 pe-5 fmxw-200" name="checkin"></input>
                <p class=" me-1 pe-1 fmxw-200">Check Out :</p>
                <input type="date" class="form-control me-3 pe-5 fmxw-200" name="checkout"></input>
                <select class="form-select me-3 pe-5 fmxw-200" name="payment_method_id" aria-label="Message select example">
                    <option selected value>Metode Pembayaran</option>
                    @foreach($paymentMethod as $method)
                    <option value="{{$method->id}}">{{ $method->payment_method }}</option>
                    @endforeach
                </select>
                <select class="form-select me-3 pe-5 fmxw-200" name="payment_status" aria-label="Message select example">
                    <option selected value>Status Pembayaran</option>
                        <option value="Semua">Semua Pembayaran</option>
                        <option value="Lunas">Hanya Lunas</option>
                </select>
                <!-- <select class="form-select pe-5 fmxw-100" name="payment_check" aria-label="Message select example">
                    <option selected value>Status</option>
                    <option value="Oncheck">Oncheck</option>
                    <option value="Valid">Valid</option>
                    <option value="Invalid">Invalid</option>
                </select>    -->
                <button class="btn btn-sm px-3 btn-secondary ms-3">Apply</button>
                <a href="{{ route('admin.finance.index') }}" class="btn btn-sm px-3 btn-secondary ms-3">Reset</a>
            </div>
            </form>
            <table style="text-align: center" class="table table-hover table-bordered">
                <thead style="vertical-align: middle">
                <tr>
                        <th rowspan="3" class="border-gray-200">Tanggal Checkin</th>
                        <th rowspan="3" class="border-gray-200">ID Bill</th>
                        <th colspan="6" class="border-gray-200">Down <br>Payment</th>
                        <th colspan="6" class="border-gray-200">Pelunasan</th>
                        <th rowspan="3" class="border-gray-200">Tanggal Pembayaran DP</th>
                        <th rowspan="3" class="border-gray-200">Tanggal Lunas</th>
                        <th rowspan="3" class="border-gray-200">Catatan</th>
                    </tr>
                    <tr>
                        <th rowspan="2" class="border-gray-200">Cash</th>
                        <th colspan="4" class="border-gray-200">Non Cash</th>
                        <th rowspan="2" class="border-gray-200">OTA</th>
                        <th rowspan="2">Cash</th>
                        <th colspan="4" class="border-gray-200">Non Cash</th>
                        <th rowspan="2" class="border-gray-200">OTA</th>
                    </tr>
                    <tr>
                        <th class="border-gray-200">Transfer</th>
                        <th class="border-gray-200">Card</th>
                        <th class="border-gray-200">QRIS</th>
                        <th class="border-gray-200">VA</th>
                        <th class="border-gray-200">Transfer</th>
                        <th class="border-gray-200">Card</th>
                        <th class="border-gray-200">QRIS</th>
                        <th class="border-gray-200">VA</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    @foreach($roomIncome as $roomIncomes)
                    <tr>
                        {{-- <td><a
                                href="#" data-bs-toggle="modal"data-bs-target="#modal-xl"class="fw-bold">31-Jul-23</a>
                        </td> --}}
                        <td><span class="fw-normal">{{ \Carbon\Carbon::parse($roomIncomes->Payment->Reservation->reservation_start_date ?? '')   }}</span></td>
                        <td><span data-bs-toggle="modal"data-bs-target="#modal-detail" class="fw-normal">{{ $roomIncomes->Payment->Reservation->reservation_code ?? '' }}</span></td>
                            @if($roomIncomes->payment_method_id == 1)
                                <td><span class="fw-normal">Rp. {{ $roomIncomes->payment_detail_value }}</span></td> <!-- DP CASH Payment -->
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                @if($roomIncomes->payment->payment_status == 'Lunas + DP 1')
                                    @if($roomIncomes->payment_detail_status == 'DP')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @elseif($roomIncomes->payment->payment_status == 'Lunas + DP 2')
                                    @if($roomIncomes->payment_detail_status == 'DP 2')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @else
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                @endif
                            @endif
                        @if($roomIncomes->payment_method_id >= 12 && $roomIncomes->payment_method_id <= 16) <!-- DP TRANSFER Payment -->
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">Rp. {{ $roomIncomes->payment_detail_value }}</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                @if($roomIncomes->payment->payment_status == 'Lunas + DP 1')
                                    @if($roomIncomes->payment_detail_status == 'DP')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @elseif($roomIncomes->payment->payment_status == 'Lunas + DP 2')
                                    @if($roomIncomes->payment_detail_status == 'DP 2')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @else
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                @endif
                            @endif
                        @if($roomIncomes->payment_method_id >= 2 && $roomIncomes->payment_method_id <= 11) <!-- DP CARD Payment -->
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">Rp. {{ $roomIncomes->payment_detail_value }}</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                @if($roomIncomes->payment->payment_status == 'Lunas + DP 1')
                                    @if($roomIncomes->payment_detail_status == 'DP')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @elseif($roomIncomes->payment->payment_status == 'Lunas + DP 2')
                                    @if($roomIncomes->payment_detail_status == 'DP 2')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @else
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                @endif
                            @endif
                        @if($roomIncomes->payment_method_id >= 17 && $roomIncomes->payment_method_id <= 21) <!-- DP QRIS Payment -->
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">Rp. {{ $roomIncomes->payment_detail_value }}</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                @if($roomIncomes->payment->payment_status == 'Lunas + DP 1')
                                    @if($roomIncomes->payment_detail_status == 'DP')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @elseif($roomIncomes->payment->payment_status == 'Lunas + DP 2')
                                    @if($roomIncomes->payment_detail_status == 'DP 2')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @else
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                @endif
                            @endif
                        @if($roomIncomes->payment_method_id >= 22 && $roomIncomes->payment_method_id <= 29) <!-- DP OTA Payment -->
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">Rp. {{ $roomIncomes->payment_detail_value }}</span></td>
                                @if($roomIncomes->payment->payment_status == 'Lunas + DP 1')
                                    @if($roomIncomes->payment_detail_status == 'DP')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @elseif($roomIncomes->payment->payment_status == 'Lunas + DP 2')
                                    @if($roomIncomes->payment_detail_status == 'DP 2')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @else
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                @endif
                            @endif
                            @if($roomIncomes->payment_method_id >= 30 && $roomIncomes->payment_method_id <= 38) <!-- DP VA Payment -->
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">-</span></td>
                                <td><span class="fw-normal">Rp. {{ $roomIncomes->payment_detail_value }}</span></td>
                                <td><span class="fw-normal">-</span></td>
                                @if($roomIncomes->payment->payment_status == 'Lunas + DP 1')
                                    @if($roomIncomes->payment_detail_status == 'DP')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @elseif($roomIncomes->payment->payment_status == 'Lunas + DP 2')
                                    @if($roomIncomes->payment_detail_status == 'DP 2')
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id == 1) <!-- Lunas Cash !-->
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 12 && $roomIncomes->payment->paymentPaid->payment_method_id <= 16) <!-- Lunas Trasnfer !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 2 && $roomIncomes->payment->paymentPaid->payment_method_id <= 11) <!-- Lunas Card !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 17 && $roomIncomes->payment->paymentPaid->payment_method_id <= 21) <!-- Lunas Qris !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 30 && $roomIncomes->payment->paymentPaid->payment_method_id <= 38) <!-- Lunas VA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                        @endif
                                        @if($roomIncomes->payment->paymentPaid->payment_method_id >= 22 && $roomIncomes->payment->paymentPaid->payment_method_id <= 29) <!-- Lunas OTA !-->
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">-</span></td>
                                            <td><span class="fw-normal">Rp. {{ $roomIncomes->payment->paymentPaid->payment_paid_value }}</span></td>
                                        @endif
                                    @else 
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                        <td><span class="fw-normal">-</span></td>
                                    @endif
                                @else
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                    <td><span class="fw-normal">-</span></td>
                                @endif
                            @endif
                        <td><span class="fw-normal">{{ \Carbon\Carbon::parse($roomIncomes->updated_at ?? '')->timezone('Asia/Bangkok') }}</span></td>
                        @if($roomIncomes->payment->payment_status == 'Lunas + DP 1')
                            @if($roomIncomes->payment_detail_status == 'DP')
                                <td><span class="fw-normal">{{ \Carbon\Carbon::parse($roomIncomes->payment->paymentPaid->updated_at ?? '')->timezone('Asia/Bangkok') }}</span></td>
                            @else
                                <td><span class="fw-normal">-</span></td>
                            @endif
                        @endif
                        @if($roomIncomes->payment->payment_status == 'Lunas + DP 2')
                            @if($roomIncomes->payment_detail_status == 'DP 2')
                                <td><span class="fw-normal">{{ \Carbon\Carbon::parse($roomIncomes->payment->paymentPaid->updated_at ?? '')->timezone('Asia/Bangkok') }}</span></td>
                            @else
                                <td><span class="fw-normal">-</span></td>
                            @endif
                        @endif
                        <td><span class="fw-normal">-</span></td>
                    </tr>
                    @endforeach
                    <!-- Item -->
                </tbody>
            </table>
        </div>
        
        <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <nav aria-label="Page navigation example">
                <ul class="pagination mb-0">
                    {{ $roomIncome->links('vendor.pagination.default') }}
                </ul>
            </nav>
            <!-- <div class="align-item-right"><b>Pendapatan Total Hari Ini : </b><b class="text-success">Rp 100.000.000</b></div> -->
        </div>
    </div>
    <!-- Tabel Room Income End -->
        

    <!-- Tabel F&B Income Start -->
    <!-- <div class="card mb-4 card-body border-0 shadow table-wrapper table-responsive">
        <div class="d-flex px-0 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <h3>Pemasukan FNB</h3>
            {{-- <div class="d-flex mb-3">
                <select class="form-select me-3 pe-5 fmxw-200" aria-label="Message select example">
                    <option selected>Filter By Date</option>
                    <option value="1">Send Email</option>
                    <option value="2">Change Group</option>
                    <option value="3">Delete User</option>
                </select>
                <select class="form-select me-3 pe-5 fmxw-200" aria-label="Message select example">
                    <option selected>Filter Payment</option>
                    <option value="1">Send Email</option>
                    <option value="2">Change Group</option>
                    <option value="3">Delete User</option>
                </select>
                <select class="form-select fmxw-200" aria-label="Message select example">
                    <option selected>Filter Name</option>
                    <option value="1">Send Email</option>
                    <option value="2">Change Group</option>
                    <option value="3">Delete User</option>
                </select>
                <button class="btn btn-sm px-3 btn-secondary ms-3">Apply</button>
            </div> --}}
        </div>
        <div class="table-responsive">
            <table style="text-align: center" class="table table-hover table-bordered">
                <thead style="vertical-align: middle">
                    <tr>
                        <th rowspan="2" class="border-gray-200">ID Bill</th>
                        <th colspan="2" class="border-gray-200">Waktu Transaksi</th>
                        <th rowspan="2" class="border-gray-200">Nama Item</th>
                        <th rowspan="2" class="border-gray-200">Harga Total</th>
                    </tr>
                    <tr>
                        <th>Tangal</th>
                        <th>Jam</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        {{-- <td><a
                                href="#" data-bs-toggle="modal"data-bs-target="#modal-xl"class="fw-bold">31-Jul-23</a>
                        </td> --}}
                        <td><span data-bs-toggle="modal"data-bs-target="#modal-detail" class="fw-normal">FB001</span></td>
                        <td><span class="fw-normal">31-Jul-23</span></td>
                        <td><span class="fw-normal">7:05:00 AM</span></td>
                        <td><span class="fw-normal">Frestea</span></td>
                        <td><span class="fw-bold">Rp 300.000</span></td>
                    </tr>
                    <tr>
                        {{-- <td><a
                                href="#"data-bs-toggle="modal"data-bs-target="#modal-xl"class="fw-bold">31-Jul-23</a>
                        </td> --}}
                        <td><span class="fw-normal">FB002</span></td>
                        <td><span class="fw-normal">31-Jul-23</span></td>
                        <td><span class="fw-normal">7:05:00 AM</span></td>
                        <td><span class="fw-normal">Frestea</span></td>
                        <td><span class="fw-bold">Rp 300.000</span></td>
                    </tr>
                    <tr>
                        {{-- <td><a
                                href="#"data-bs-toggle="modal"data-bs-target="#modal-xl"class="fw-bold">31-Jul-23</a>
                        </td> --}}
                        <td><span class="fw-normal">FB003</span></td>
                        <td><span class="fw-normal">31-Jul-23</span></td>
                        <td><span class="fw-normal">7:05:00 AM</span></td>
                        <td><span class="fw-normal">Frestea</span></td>
                        <td><span class="fw-bold">Rp 300.000</span></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <nav aria-label="Page navigation example">
                <ul class="pagination mb-0">
                    <li class="page-item">
                        <a class="page-link" href="#">Previous</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <div class="align-item-right"><b>Pendapatan Total : </b><b class="text-success">Rp 100.000.000</b></div>
        </div>
    </div> -->
    <!-- Tabel F&B Income End -->

    <!-- Modal Content -->
    <div class="modal fade" id="modal-detail">
        <div class="modal-dialog modal-xl" style="max-width: 90%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Details</h4>

                </div>
                <div class="card-body">
                    <div class="card mb-2 card-primary card-outline">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="h5 modal-title">Guest Information</h5>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-body border-0 shadow mb-4">
                                            <h2 class="h5 mb-4">Profile Photo</h2>
                                            <div class="d-flex align-items-center">
                                                <!-- Avatar -->
                                                <img class="rounded img-fluid"
                                                    src="https://images.unsplash.com/photo-1575936123452-b67c3203c357?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW1hZ2V8ZW58MHx8MHx8fDA%3D&w=1000&q=80"
                                                    alt="change avatar">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card card-body border-0 shadow mb-4">
                                            <h2 class="h5 mb-4">KTP Photo</h2>
                                            <div class="d-flex align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <!-- Avatar -->
                                                    <img class="rounded img-fluid"
                                                        src="https://asset.kompas.com/crops/_cBcou0HZa2ovvFGKZg0p-YjB-s=/149x154:1240x881/750x500/data/photo/2022/06/08/62a00185d4780.jpeg"
                                                        alt="change avatar">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div>
                                                <label for="first_name">First Name</label>
                                                <input class="form-control" id="first_name" type="text"
                                                    placeholder="Enter your first name" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div>
                                                <label for="last_name">Last Name</label>
                                                <input class="form-control" id="last_name" type="text"
                                                    placeholder="Also your last name" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" id="email" type="email"
                                                    placeholder="name@company.com" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="gender">Gender</label>
                                            <select class="form-select mb-0" id="gender"
                                                aria-label="Gender select example">
                                                <option selected>Gender</option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input class="form-control" id="email" type="email"
                                                    placeholder="name@company.com" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input class="form-control" id="phone" type="number"
                                                    placeholder="+12-345 678 910">
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="h5 my-4">Location</h2>
                                    <div class="row">
                                        <div class="col-sm-9 mb-3">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input class="form-control" id="address" type="text"
                                                    placeholder="Enter your home address">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 mb-3">
                                            <div class="form-group">
                                                <label for="number">Number</label>
                                                <input class="form-control" id="number" type="number"
                                                    placeholder="No.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 mb-3">
                                            <div class="form-group">
                                                <label for="city">City</label>
                                                <input class="form-control" id="city" type="text"
                                                    placeholder="City">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="zip">ZIP</label>
                                                <input class="form-control" id="zip" type="tel"
                                                    placeholder="ZIP">
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="card mb-2 card-primary card-outline">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="h5 modal-title">Order History</h5>
                            </div>
                            <div class="modal-body">
                                <table style="text-align: center" class="table table-hover table-bordered">
                                    <thead class="thead-light">
                                        <tr style="vertical-align: middle">
                                            <th rowspan="2">ID Bill</th>
                                            <th rowspan="2">No <br>Kamar</th>
                                            <th rowspan="2">Type</th>
                                            <th colspan="2">CheckIn</th>
                                            <th colspan="2">CheckOut</th>
                                            <th rowspan="2">Durasi</th>
                                            <th rowspan="2">Harga</th>
                                            <th colspan="4">Additional</th>
                                        </tr>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Breakfast</th>
                                            <th>Harga</th>
                                            <th>Extra-Bed</th>
                                            <th>Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Nota_00001223</td>
                                            <td>102</td>
                                            <td>Deluxe</td>
                                            <td>12-10-2023</td>
                                            <td>19.00</td>
                                            <td>13-10-2023</td>
                                            <td>19.00</td>
                                            <td>24 Jam</td>
                                            <td>Rp. 500.000</td>
                                            <td>EXCLUDE</td>
                                            <td>0</td>
                                            <td>EXCLUDE</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Nota_00001224</td>
                                            <td>102</td>
                                            <td>Deluxe</td>
                                            <td>12-10-2023</td>
                                            <td>19.00</td>
                                            <td>13-10-2023</td>
                                            <td>19.00</td>
                                            <td>24 Jam</td>
                                            <td>Rp. 500.000</td>
                                            <td>EXCLUDE</td>
                                            <td>0</td>
                                            <td>EXCLUDE</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>



                        </div>
                    </div>

                    <div class="card mb-2 card-primary card-outline">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="h5 modal-title">History Payment</h5>
                            </div>
                            <div class="modal-body">
                                <div class="card shadow p-3 bg-body rounded">
                                    <h2 class="h5 mb-2">Nota_00001223</h2>
                                    <div class="list-group mb-3 list-group-dark">
                                        <a href="#" style="background-color: #929292;"
                                            class="list-group-item list-group-item-action px-3 border-0 active"
                                            aria-current="true">
                                            Down Payment</a>
                                        <table class="table table-hover border-bottom">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: left"><b>Metode Pembayaran</b></td>
                                                    <td style="text-align: right">QRIS Mandiri</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">No Referensi Transaksi</td>
                                                    <td style="text-align: right">12312314212</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Nominal</td>
                                                    <td style="text-align: right">Rp 250.000</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Status</td>
                                                    <td style="text-align: right"><span
                                                            class="fw-bold text-success">Complete</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="list-group mb-3 list-group-dark">
                                        <a href="#" style="background-color: #929292;"
                                            class="list-group-item list-group-item-action px-3 border-0 active"
                                            aria-current="true">
                                            Lunas</a>
                                        <table class="table table-hover border-bottom">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: left"><b>Metode Pembayaran</b></td>
                                                    <td style="text-align: right">Card Mandiri</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">No Referensi Transaksi</td>
                                                    <td style="text-align: right">12312314212</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Nominal</td>
                                                    <td style="text-align: right">Rp 250.000</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Status</td>
                                                    <td style="text-align: right"><span
                                                            class="fw-bold text-success">Complete</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-body">
                                <div class="card shadow p-3 mb-2 bg-body rounded">
                                    <h2 class="h5 mb-2">Nota_00001224</h2>
                                    <div class="list-group mb-3 list-group-dark">
                                        <a href="#" style="background-color: #929292;"
                                            class="list-group-item list-group-item-action px-3 border-0 active"
                                            aria-current="true">
                                            Down Payment</a>
                                        <table class="table table-hover border-bottom">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: left"><b>Metode Pembayaran</b></td>
                                                    <td style="text-align: right">QRIS Mandiri</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">No Referensi Transaksi</td>
                                                    <td style="text-align: right">12312314212</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Nominal</td>
                                                    <td style="text-align: right">Rp 250.000</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Status</td>
                                                    <td style="text-align: right"><span
                                                            class="fw-bold text-success">Complete</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="list-group mb-3 list-group-dark">
                                        <a href="#" style="background-color: #929292;"
                                            class="list-group-item list-group-item-action px-3 border-0 active"
                                            aria-current="true">
                                            Lunas</a>
                                        <table class="table table-hover border-bottom">
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: left"><b>Metode Pembayaran</b></td>
                                                    <td style="text-align: right">Card Mandiri</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">No Referensi Transaksi</td>
                                                    <td style="text-align: right">12312314212</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Nominal</td>
                                                    <td style="text-align: right">Rp 250.000</td>
                                                </tr>
                                                <tr>
                                                    <td style="text-align: left">Status</td>
                                                    <td style="text-align: right"><span
                                                            class="fw-bold text-success">Complete</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- End of Modal Content -->
@endsection
@push('scripts')
<script type="text/javascript">
        function zoom() {
            document.body.style.zoom = "80%" 
        }
</script>
@endpush
