@extends('admin.layout.template')
@section('content')
    <!-- Header Start -->
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-0 mb-lg-0">
                <h1 class="h4">Laporan</h1>
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
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z">
                                    </path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="h5">Room Income</h2>
                                <h3 class="fw-extrabold mb-1">Rp 3,143,594</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Room Income</h2>
                                <h3 class="fw-extrabold mb-2">Rp 3,143,594</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Feb 1 - Apr 1,
                                <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                USA
                            </small>
                            <div class="small d-flex mt-1">
                                <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="text-success fw-bolder">22%</span></div>
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
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Down Payment</h2>
                                <h3 class="mb-1">Rp 3,143,594</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Down Payment</h2>
                                <h3 class="fw-extrabold mb-2">Rp 3,143,594</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Feb 1 - Apr 1,
                                <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                GER
                            </small>
                            <div class="small d-flex mt-1">
                                <div>Since last month <svg class="icon icon-xs text-danger" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="text-danger fw-bolder">2%</span></div>
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
                                <svg class="icon" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="d-sm-none">
                                <h2 class="fw-extrabold h5">Food & Beverage</h2>
                                <h3 class="mb-1">Rp 3,143,594</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Food & Beverage</h2>
                                <h3 class="fw-extrabold mb-2">Rp 3,143,594</h3>
                            </div>
                            <small class="text-gray-500">
                                Feb 1 - Apr 1
                            </small>
                            <div class="small d-flex mt-1">
                                <div>Since last month <svg class="icon icon-xs text-success" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg><span class="text-success fw-bolder">4%</span></div>
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

    <!-- Tabel Room Income Start -->
    <div class="card mb-4 card-body border-0 shadow table-wrapper table-responsive">
        <div class="d-flex px-0 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <h3>Pemasukan Kamar</h3>
            <div class="d-flex mb-3">
                <select class="form-select me-3 pe-5 fmxw-200" aria-label="Message select example">
                    <option selected>Filter Date</option>
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
                <select class="form-select pe-5 fmxw-200" aria-label="Message select example">
                    <option selected>Filter Name</option>
                    <option value="1">Send Email</option>
                    <option value="2">Change Group</option>
                    <option value="3">Delete User</option>
                </select>
                <button class="btn btn-sm px-3 btn-secondary ms-3">Apply</button>
            </div>
        </div>
        <div class="table-responsive">
            <table style="text-align: center" class="table table-hover table-bordered">
                <thead style="vertical-align: middle">
                    <tr>
                        <th rowspan="2" class="border-gray-200">ID Bill</th>
                        <th rowspan="2" class="border-gray-200">Status</th>
                        <th rowspan="2" class="border-gray-200">Nama</th>
                        <th rowspan="2" class="border-gray-200">Type Tamu</th>
                        <th colspan="4" class="border-gray-200">Metode <br>Pembayaran</th>
                        <th rowspan="2" class="border-gray-200">Harga <br>Total</th>
                        <th rowspan="2" class="border-gray-200">No <br>Kamar</th>
                        <th rowspan="2" class="border-gray-200">Type</th>
                        {{-- <th colspan="2" class="border-gray-200">CheckIn</th>
                        <th colspan="2" class="border-gray-200">CheckOut</th>
                        <th rowspan="2" class="border-gray-200">Durasi</th>
                        <th colspan="4" class="border-gray-200">Additional</th> --}}
                    </tr>
                    <tr>
                        <th>DP</th>
                        <th>Nominal</th>
                        <th>Lunas</th>
                        <th>Nominal</th>
                        {{-- <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Breakfast</th>
                        <th>Harga</th>
                        <th>Extra-Bed</th>
                        <th>Harga</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    <tr>
                        {{-- <td><a
                                href="#" data-bs-toggle="modal"data-bs-target="#modal-xl"class="fw-bold">31-Jul-23</a>
                        </td> --}}
                        <td><span data-bs-toggle="modal"data-bs-target="#modal-detail"
                                class="fw-normal">Nota_00001223</span></td>
                        <td><span class="fw-bold text-warning">Due</span></td>
                        <td><span class="fw-normal">Anang</span></td>
                        <td><span class="fw-normal">Reservation Guest</span></td>
                        <td><span class="fw-normal">Cash</span></td>
                        <td><span class="fw-bold">Rp 300.000</span></td>
                        <td><span class="fw-normal">Non Cash</span></td>
                        <td><span class="fw-bold">Rp 200.000</span></td>
                        <td><span class="fw-bold">Rp 500.000</span></td>
                        <td>102</td>
                        <td>Deluxe</td>
                    </tr>
                    <!-- Item -->
                    <!-- Item -->
                    <tr>
                        {{-- <td><a
                                href="#"data-bs-toggle="modal"data-bs-target="#modal-xl"class="fw-bold">31-Jul-23</a>
                        </td> --}}
                        <td><span class="fw-normal">Nota_00001223</span></td>
                        <td><span class="fw-bold text-warning">Due</span></td>
                        <td><span class="fw-normal">Anang</span></td>
                        <td><span class="fw-normal">Reservation Guest</span></td>
                        <td><span class="fw-normal">-</span></td>
                        <td><span class="fw-bold">-</span></td>
                        <td><span class="fw-normal">Non Cash</span></td>
                        <td><span class="fw-bold">Rp 500.000</span></td>
                        <td><span class="fw-bold">Rp 500.000</span></td>
                        <td>102</td>
                        <td>Deluxe</td>
                    </tr>
                    <!-- Item -->
                    <!-- Item -->
                    <tr>
                        {{-- <td><a
                                href="#"data-bs-toggle="modal"data-bs-target="#modal-xl"class="fw-bold">31-Jul-23</a>
                        </td> --}}
                        <td><span class="fw-normal">Nota_00001223</span></td>
                        <td><span class="fw-bold text-warning">Due</span></td>
                        <td><span class="fw-normal">Anang</span></td>
                        <td><span class="fw-normal">Reservation Guest</span></td>
                        <td><span class="fw-normal">Cash</span></td>
                        <td><span class="fw-bold">Rp 300.000</span></td>
                        <td><span class="fw-normal">Non Cash</span></td>
                        <td><span class="fw-bold">Rp 200.000</span></td>
                        <td><span class="fw-bold">Rp 500.000</span></td>
                        <td>102</td>
                        <td>Deluxe</td>

                    </tr>
                    <!-- Item -->
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
    </div>
    <!-- Tabel Room Income End -->

    <!-- Tabel DP Start -->
    <div class="card mb-4 card-body border-0 shadow table-wrapper table-responsive">
        <div class="d-flex px-0 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            <h3>Daftar DP</h3>
            <div class="d-flex mb-3">
                <select class="form-select me-3 fmxw-200" aria-label="Message select example">
                    <option selected>Filter Name</option>
                    <option value="1">Send Email</option>
                    <option value="2">Change Group</option>
                    <option value="3">Delete User</option>
                </select>
                <select class="form-select me-3 fmxw-200" aria-label="Message select example">
                    <option selected>Filter ID</option>
                    <option value="1">Send Email</option>
                    <option value="2">Change Group</option>
                    <option value="3">Delete User</option>
                </select>
                <select class="form-select fmxw-200" aria-label="Message select example">
                    <option selected>Filter Status</option>
                    <option value="1">Send Email</option>
                    <option value="2">Change Group</option>
                    <option value="3">Delete User</option>
                </select>
                <button class="btn btn-sm px-3 btn-secondary ms-3">Apply</button>
            </div>
        </div>
        <div class="table-responsive">
            <table style="text-align: center" class="table table-hover table-bordered">
                <thead style="vertical-align: middle">
                    <tr>
                        <th rowspan="2" class="border-gray-200">ID Bill</th>
                        <th rowspan="2" class="border-gray-200">Status</th>
                        <th rowspan="2" class="border-gray-200">Nama</th>
                        <th rowspan="2" class="border-gray-200">Type Tamu</th>
                        <th colspan="4" class="border-gray-200">Metode <br>Pembayaran</th>
                        <th rowspan="2" class="border-gray-200">Harga <br>Total</th>
                        <th rowspan="2" class="border-gray-200">No <br>Kamar</th>
                        <th rowspan="2" class="border-gray-200">Type</th>
                        {{-- <th colspan="2" class="border-gray-200">CheckIn</th>
                        <th colspan="2" class="border-gray-200">CheckOut</th>
                        <th rowspan="2" class="border-gray-200">Durasi</th>
                        <th colspan="4" class="border-gray-200">Additional</th> --}}
                    </tr>
                    <tr>
                        <th>DP</th>
                        <th>Nominal</th>
                        <th>Lunas</th>
                        <th>Nominal</th>
                        {{-- <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Breakfast</th>
                        <th>Harga</th>
                        <th>Extra-Bed</th>
                        <th>Harga</th> --}}
                    </tr>
                </thead>
                <tbody>
                    <!-- Item -->
                    <tr>
                        {{-- <td><a
                                href="#" data-bs-toggle="modal"data-bs-target="#modal-xl"class="fw-bold">31-Jul-23</a>
                        </td> --}}
                        <td><span data-bs-toggle="modal"data-bs-target="#modal-detail"
                                class="fw-normal">Nota_00001223</span></td>
                        <td><span class="fw-bold text-success">Claimed</span></td>
                        <td><span class="fw-normal">Anang</span></td>
                        <td><span class="fw-normal">Reservation Guest</span></td>
                        <td><span class="fw-normal">Cash</span></td>
                        <td><span class="fw-bold">Rp 300.000</span></td>
                        <td><span class="fw-normal">Non Cash</span></td>
                        <td><span class="fw-bold">Rp 200.000</span></td>
                        <td><span class="fw-bold">Rp 500.000</span></td>
                        <td>102</td>
                        <td>Deluxe</td>
                    </tr>
                    <!-- Item -->
                    <!-- Item -->
                    <tr>
                        {{-- <td><a
                                href="#"data-bs-toggle="modal"data-bs-target="#modal-xl"class="fw-bold">31-Jul-23</a>
                        </td> --}}
                        <td><span class="fw-normal">Nota_00001223</span></td>
                        <td><span class="fw-bold text-success">Claimed</span></td>
                        <td><span class="fw-normal">Anang</span></td>
                        <td><span class="fw-normal">Reservation Guest</span></td>
                        <td><span class="fw-normal">-</span></td>
                        <td><span class="fw-bold">-</span></td>
                        <td><span class="fw-normal">Non Cash</span></td>
                        <td><span class="fw-bold">Rp 500.000</span></td>
                        <td><span class="fw-bold">Rp 500.000</span></td>
                        <td>102</td>
                        <td>Deluxe</td>
                    </tr>
                    <!-- Item -->
                    <!-- Item -->
                    <tr>
                        {{-- <td><a
                                href="#"data-bs-toggle="modal"data-bs-target="#modal-xl"class="fw-bold">31-Jul-23</a>
                        </td> --}}
                        <td><span class="fw-normal">Nota_00001223</span></td>
                        <td><span class="fw-bold text-success">Claimed</span></td>
                        <td><span class="fw-normal">Anang</span></td>
                        <td><span class="fw-normal">Reservation Guest</span></td>
                        <td><span class="fw-normal">Cash</span></td>
                        <td><span class="fw-bold">Rp 300.000</span></td>
                        <td><span class="fw-normal">Non Cash</span></td>
                        <td><span class="fw-bold">Rp 200.000</span></td>
                        <td><span class="fw-bold">Rp 500.000</span></td>
                        <td>102</td>
                        <td>Deluxe</td>

                    </tr>
                    <!-- Item -->
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
    </div>
    <!-- Tabel DP Income End -->

    <!-- Tabel F&B Income Start -->
    <div class="card mb-4 card-body border-0 shadow table-wrapper table-responsive">
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
                    <!-- Item -->
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
                    <!-- Item -->
                    <!-- Item -->
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
                    <!-- Item -->
                    <!-- Item -->
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
                    <!-- Item -->
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
    </div>
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
