@extends('admin.layout.template')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="#">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Volt</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Transactions</li>
                </ol>
            </nav>
            <h2 class="h4">All Orders</h2>
            <p class="mb-0">Your web analytics dashboard template.</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="#" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                    </path>
                </svg>
                New Plan
            </a>
            <div class="btn-group ms-2 ms-lg-3">
                <button type="button" class="btn btn-sm btn-outline-gray-600">Share</button>
                <button type="button" class="btn btn-sm btn-outline-gray-600">Export</button>
            </div>
        </div>
    </div>

    <div class="table-settings mb-4">
        <div class="row align-items-center justify-content-between">
            <div class="col col-md-6 col-lg-3 col-xl-4">
                <div class="input-group me-2 me-lg-3 fmxw-400">
                    <span class="input-group-text">
                        <svg class="icon icon-xs" x-description="Heroicon name: solid/search"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search orders">
                </div>
            </div>
            <div class="col-4 col-md-2 col-xl-1 ps-md-0 text-end">
                <div class="dropdown">
                    <button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-1"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg class="icon icon-sm" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end pb-0">
                        <span class="small ps-3 fw-bold text-dark">Show</span>
                        <a class="dropdown-item d-flex align-items-center fw-bold" href="#">10 <svg
                                class="icon icon-xxs ms-auto" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg></a>
                        <a class="dropdown-item fw-bold" href="#">20</a>
                        <a class="dropdown-item fw-bold rounded-bottom" href="#">30</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-0 mt-3">
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
                                <h2 class="h5">Customers</h2>
                                <h3 class="fw-extrabold mb-1">345,678</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Customers</h2>
                                <h3 class="fw-extrabold mb-2">345k</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Feb 1 - Apr 1,
                                <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                <h2 class="fw-extrabold h5">Revenue</h2>
                                <h3 class="mb-1">$43,594</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0">Revenue</h2>
                                <h3 class="fw-extrabold mb-2">$43,594</h3>
                            </div>
                            <small class="d-flex align-items-center text-gray-500">
                                Feb 1 - Apr 1,
                                <svg class="icon icon-xxs text-gray-500 ms-2 me-1" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
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
                                <h2 class="fw-extrabold h5"> Bounce Rate</h2>
                                <h3 class="mb-1">50.88%</h3>
                            </div>
                        </div>
                        <div class="col-12 col-xl-7 px-xl-0">
                            <div class="d-none d-sm-block">
                                <h2 class="h6 text-gray-400 mb-0"> Bounce Rate</h2>
                                <h3 class="fw-extrabold mb-2">50.88%</h3>
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

    <div class="card mb-4 card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="border-gray-200">#</th>
                    <th class="border-gray-200">Bill For</th>
                    <th class="border-gray-200">Issue Date</th>
                    <th class="border-gray-200">Due Date</th>
                    <th class="border-gray-200">Total</th>
                    <th class="border-gray-200">Status</th>
                </tr>
            </thead>
            <tbody>
                <!-- Item -->
                <tr>
                    <td>
                        <a href="#" class="fw-bold">
                            456478
                        </a>
                    </td>
                    <td>
                        <span class="fw-normal">Platinum Subscription Plan</span>
                    </td>
                    <td><span class="fw-normal">1 May 2020</span></td>
                    <td><span class="fw-normal">1 Jun 2020</span></td>
                    <td><span class="fw-bold">$799,00</span></td>
                    <td><span class="fw-bold text-warning">Due</span></td>

                </tr>
                <!-- Item -->
                <tr>
                    <td>
                        <a href="#" class="fw-bold">
                            456423
                        </a>
                    </td>
                    <td>
                        <span class="fw-normal">Platinum Subscription Plan</span>
                    </td>
                    <td><span class="fw-normal">1 Apr 2020</span></td>
                    <td><span class="fw-normal">1 May 2020</span></td>
                    <td><span class="fw-bold">$799,00</span></td>
                    <td><span class="fw-bold text-success">Valid</span></td>

                </tr>
                <!-- Item -->
                <tr>
                    <td>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modal-xl" class="fw-bold">
                            Modal
                        </a>
                    </td>
                    <td>
                        <span class="fw-normal">Platinum Subscription Plan</span>
                    </td>
                    <td><span class="fw-normal">1 Mar 2020</span></td>
                    <td><span class="fw-normal">1 Apr 2020</span></td>
                    <td><span class="fw-bold">$799,00</span></td>
                    <td><span class="fw-bold text-success">Valid</span></td>

                </tr>
                <!-- Item -->
                <tr>
                    <td>
                        <a href="#" class="fw-bold">
                            456421
                        </a>
                    </td>
                    <td>
                        <span class="fw-normal">Platinum Subscription Plan</span>
                    </td>
                    <td><span class="fw-normal">1 Feb 2020</span></td>
                    <td><span class="fw-normal">1 Mar 2020</span></td>
                    <td><span class="fw-bold">$799,00</span></td>
                    <td><span class="fw-bold text-success">Valid</span></td>

                </tr>
                <!-- Item -->
                <tr>
                    <td>
                        <a href="#" class="fw-bold">
                            456420
                        </a>
                    </td>
                    <td>
                        <span class="fw-normal">Platinum Subscription Plan</span>
                    </td>
                    <td><span class="fw-normal">1 Jan 2020</span></td>
                    <td><span class="fw-normal">1 Feb 2020</span></td>
                    <td><span class="fw-bold">$799,00</span></td>
                    <td><span class="fw-bold text-success">Valid</span></td>

                </tr>
                <!-- Item -->
                <tr>
                    <td>
                        <a href="#" class="fw-bold">
                            456479
                        </a>
                    </td>
                    <td>
                        <span class="fw-normal">Platinum Subscription Plan</span>
                    </td>
                    <td><span class="fw-normal">1 Dec 2019</span></td>
                    <td><span class="fw-normal">1 Jan 2020</span></td>
                    <td><span class="fw-bold">$799,00</span></td>
                    <td><span class="fw-bold text-success">Valid</span></td>

                </tr>
                <!-- Item -->
                <!-- Item -->
                <tr>
                    <td>
                        <a href="#" class="fw-bold">
                            456478
                        </a>
                    </td>
                    <td>
                        <span class="fw-normal">Platinum Subscription Plan</span>
                    </td>
                    <td><span class="fw-normal">1 Nov 2019</span></td>
                    <td><span class="fw-normal">1 Dec 2019</span></td>
                    <td><span class="fw-bold">$799,00</span></td>
                    <td><span class="fw-bold text-success">Valid</span></td>

                </tr>
                <!-- Item -->
                <tr>
                    <td>
                        <a href="#" class="fw-bold">
                            453673
                        </a>
                    </td>
                    <td>
                        <span class="fw-normal">Gold Subscription Plan</span>
                    </td>
                    <td><span class="fw-normal">1 Oct 2019</span></td>
                    <td><span class="fw-normal">1 Nov 2019</span></td>
                    <td><span class="fw-bold">$533,42</span></td>
                    <td><span class="fw-bold text-danger">Cancelled</span></td>
                </tr>
                <!-- Item -->
                <tr>
                    <td>
                        <a href="#" class="fw-bold">
                            456468
                        </a>
                    </td>
                    <td>
                        <span class="fw-normal">Gold Subscription Plan</span>
                    </td>
                    <td><span class="fw-normal">1 Sep 2019</span></td>
                    <td><span class="fw-normal">1 Oct 2019</span></td>
                    <td><span class="fw-bold">$533,42</span></td>
                    <td><span class="fw-bold text-success">Valid</span></td>

                </tr>
                <!-- Item -->
                <tr>
                    <td>
                        <a href="#" class="fw-bold">
                            456478
                        </a>
                    </td>
                    <td>
                        <span class="fw-normal">Flexible Subscription Plan</span>
                    </td>
                    <td><span class="fw-normal">1 Aug 2019</span></td>
                    <td><span class="fw-normal">1 Sep 2019</span></td>
                    <td><span class="fw-bold">$233,42</span></td>
                    <td><span class="fw-bold text-success">Valid</span></td>

                </tr>
            </tbody>
        </table>
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
            <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div>
        </div>
    </div>

    <!-- Modal Content -->
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
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
                                <h5 class="h5 modal-title">Room Order</h5>
                            </div>
                            <div class="modal-body"></div>
                        </div>
                    </div>
                    
                    <div class="card mb-2 card-primary card-outline">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="h5 modal-title">History Payment</h5>
                            </div>
                            <div class="modal-body"></div>
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
