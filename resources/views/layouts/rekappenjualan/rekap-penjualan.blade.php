@extends('apps')
@section('content')
<section class="rekappenjualan">
    <div class="content-hall-first">
        @include ('components.sidebar')
        <div class="hall-second">
            @include('components.header')
            <div class="sectionprofil-6">
                <div class="containerr">
                    <div class="top-selection">
                        <div class="col-10 mt-2">
                            <div class="input-group mb-0">
                                <span class="input-group-text">
                                    <!-- SVG Icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                        <g clip-path="url(#clip0_677_18975)">
                                            <path d="M13.9343 15.3169C14.1784 15.561 14.5741 15.561 14.8182 15.3169C15.0622 15.0729 15.0622 14.6771 14.8182 14.4331L13.9343 15.3169ZM11.3247 6.78676C11.3247 9.56849 9.06971 11.8235 6.28799 11.8235V13.0735C9.76007 13.0735 12.5747 10.2588 12.5747 6.78676H11.3247ZM6.28799 11.8235C3.50626 11.8235 1.25122 9.56849 1.25122 6.78676H0.0012207C0.0012207 10.2588 2.8159 13.0735 6.28799 13.0735V11.8235ZM1.25122 6.78676C1.25122 4.00504 3.50626 1.75 6.28799 1.75V0.5C2.8159 0.5 0.0012207 3.31468 0.0012207 6.78676H1.25122ZM6.28799 1.75C9.06971 1.75 11.3247 4.00504 11.3247 6.78676H12.5747C12.5747 3.31468 9.76007 0.5 6.28799 0.5V1.75ZM9.89016 11.2728L13.9343 15.3169L14.8182 14.4331L10.774 10.3889L9.89016 11.2728Z" fill="#D2D2D2" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_677_18975">
                                                <rect width="15" height="15" fill="white" transform="translate(0.0012207 0.5)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </span>
                                <input type="text" id="searchInput" class="form-control" placeholder="Cari">
                            </div>
                        </div>
                        <div class="col-2 mt-2">
                            <div class="input-group">
                                <span class="input-group-text">
                                    <!-- SVG Icon Kalender -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M11.1667 2.37325V1.33325C11.1667 1.05992 10.94 0.833252 10.6667 0.833252C10.3933 0.833252 10.1667 1.05992 10.1667 1.33325V2.33325H5.83332V1.33325C5.83332 1.05992 5.60666 0.833252 5.33332 0.833252C5.05999 0.833252 4.83332 1.05992 4.83332 1.33325V2.37325C3.03332 2.53992 2.15999 3.61325 2.02666 5.20658C2.01332 5.39992 2.17332 5.55992 2.35999 5.55992H13.64C13.8333 5.55992 13.9933 5.39325 13.9733 5.20658C13.84 3.61325 12.9667 2.53992 11.1667 2.37325Z" fill="#2E2E2E" />
                                        <path d="M13.3333 6.56006H2.66667C2.3 6.56006 2 6.86006 2 7.22673V11.3334C2 13.3334 3 14.6667 5.33333 14.6667H10.6667C13 14.6667 14 13.3334 14 11.3334V7.22673C14 6.86006 13.7 6.56006 13.3333 6.56006ZM6.14 12.1401C6.07333 12.2001 6 12.2467 5.92 12.2801C5.84 12.3134 5.75333 12.3334 5.66667 12.3334C5.58 12.3334 5.49333 12.3134 5.41333 12.2801C5.33333 12.2467 5.26 12.2001 5.19333 12.1401C5.07333 12.0134 5 11.8401 5 11.6667C5 11.4934 5.07333 11.3201 5.19333 11.1934C5.26 11.1334 5.33333 11.0867 5.41333 11.0534C5.57333 10.9867 5.76 10.9867 5.92 11.0534C6 11.0867 6.07333 11.1334 6.14 11.1934C6.26 11.3201 6.33333 11.4934 6.33333 11.6667C6.33333 11.8401 6.26 12.0134 6.14 12.1401ZM6.28 9.58673C6.24667 9.66673 6.2 9.74006 6.14 9.80673C6.07333 9.86673 6 9.91339 5.92 9.94673C5.84 9.98006 5.75333 10.0001 5.66667 10.0001C5.58 10.0001 5.49333 9.98006 5.41333 9.94673C5.33333 9.91339 5.26 9.86673 5.19333 9.80673C5.13333 9.74006 5.08667 9.66673 5.05333 9.58673C5.02 9.50673 5 9.42006 5 9.33339C5 9.24673 5.02 9.16006 5.05333 9.08006C5.08667 9.00006 5.13333 8.92673 5.19333 8.86006C5.26 8.80006 5.33333 8.75339 5.41333 8.72006C5.57333 8.65339 5.76 8.65339 5.92 8.72006C6 8.75339 6.07333 8.80006 6.14 8.86006C6.2 8.92673 6.24667 9.00006 6.28 9.08006C6.31333 9.16006 6.33333 9.24673 6.33333 9.33339C6.33333 9.42006 6.31333 9.50673 6.28 9.58673ZM8.47333 9.80673C8.40667 9.86673 8.33333 9.91339 8.25333 9.94673C8.17333 9.98006 8.08667 10.0001 8 10.0001C7.91333 10.0001 7.82667 9.98006 7.74667 9.94673C7.66667 9.91339 7.59333 9.86673 7.52667 9.80673C7.40667 9.68006 7.33333 9.50673 7.33333 9.33339C7.33333 9.16006 7.40667 8.98673 7.52667 8.86006C7.59333 8.80006 7.66667 8.75339 7.74667 8.72006C7.90667 8.64673 8.09333 8.64673 8.25333 8.72006C8.33333 8.75339 8.40667 8.80006 8.47333 8.86006C8.59333 8.98673 8.66667 9.16006 8.66667 9.33339C8.66667 9.50673 8.59333 9.68006 8.47333 9.80673Z" fill="#2E2E2E" />
                                    </svg>
                                </span>
                                <input type="text" id="dateRange" class="form-control" placeholder="Date Range">
                            </div>
                        </div>
                    </div>
                    <hr class="solid">
                    <div class="dataTables_wrapper">
                        <table id="salesTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal
                                        <span class="sort-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th>Total Penjualan
                                        <span class="sort-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th>Total Pembelian
                                        <span class="sort-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th>Nominal Penjualan
                                        <span class="sort-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th>Nominal Pembelian
                                        <span class="sort-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>20/01/2025</td>
                                    <td>10 Penjualan</td>
                                    <td>10 Pembelian</td>
                                    <td>Rp 4.340.000</td>
                                    <td>Rp 4.340.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/rekappenjualan/detail">Detail</a></li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19/01/2025</td>
                                    <td>10 Penjualan</td>
                                    <td>10 Pembelian</td>
                                    <td>Rp 4.340.000</td>
                                    <td>Rp 4.340.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/rekappenjualan/detail">Detail</a></li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>18/01/2025</td>
                                    <td>10 Penjualan</td>
                                    <td>10 Pembelian</td>
                                    <td>Rp 4.340.000</td>
                                    <td>Rp 4.340.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/rekappenjualan/detail">Detail</a></li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>17/01/2025</td>
                                    <td>10 Penjualan</td>
                                    <td>10 Pembelian</td>
                                    <td>Rp 4.340.000</td>
                                    <td>Rp 4.340.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/rekappenjualan/detail">Detail</a></li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>16/01/2025</td>
                                    <td>10 Penjualan</td>
                                    <td>10 Pembelian</td>
                                    <td>Rp 4.340.000</td>
                                    <td>Rp 4.340.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/rekappenjualan/detail">Detail</a></li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>15/01/2025</td>
                                    <td>10 Penjualan</td>
                                    <td>10 Pembelian</td>
                                    <td>Rp 4.340.000</td>
                                    <td>Rp 4.340.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/rekappenjualan/detail">Detail</a></li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>14/01/2025</td>
                                    <td>10 Penjualan</td>
                                    <td>10 Pembelian</td>
                                    <td>Rp 4.340.000</td>
                                    <td>Rp 4.340.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/rekappenjualan/detail">Detail</a></li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>13/01/2025</td>
                                    <td>10 Penjualan</td>
                                    <td>10 Pembelian</td>
                                    <td>Rp 4.340.000</td>
                                    <td>Rp 4.340.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/rekappenjualan/detail">Detail</a></li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12/01/2025</td>
                                    <td>10 Penjualan</td>
                                    <td>10 Pembelian</td>
                                    <td>Rp 4.340.000</td>
                                    <td>Rp 4.340.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/rekappenjualan/detail">Detail</a></li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11/01/2025</td>
                                    <td>10 Penjualan</td>
                                    <td>10 Pembelian</td>
                                    <td>Rp 4.340.000</td>
                                    <td>Rp 4.340.000</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/rekappenjualan/detail">Detail</a></li>

                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Dropdown untuk memilih jumlah baris -->
                        <div class="custom-dropdown">
                            <span>Rows: </span>
                            <button class="btn" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                5 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M4.94122 5.22668L8.00122 8.28002L11.0612 5.22668L12.0012 6.16668L8.00122 10.1667L4.00122 6.16668L4.94122 5.22668Z" fill="#3D3D3D" />
                                </svg>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" data-value="5">5</a>
                                <a class="dropdown-item" href="#" data-value="10">10</a>
                                <a class="dropdown-item" href="#" data-value="20">20</a>
                                <a class="dropdown-item" href="#" data-value="50">50</a>
                            </div>
                        </div>
                        <!-- Pagination Info dan Navigasi -->
                        <div class="d-flex align-items-center">
                            <span id="salesTable_paginate" class="mr-2">1-10 of 120 Items</span>
                            <button class="btn pagination-prev" disabled><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15.4102 16.09L10.8302 11.5L15.4102 6.91L14.0002 5.5L8.00024 11.5L14.0002 17.5L15.4102 16.09Z" fill="#3D3D3D" />
                                </svg></button>
                            <button class="btn pagination-next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M8.59033 16.34L13.1703 11.75L8.59033 7.16L10.0003 5.75L16.0003 11.75L10.0003 17.75L8.59033 16.34Z" fill="#3D3D3D" />
                                </svg></button>
                        </div>
                    </div>
                    <hr class="solid">
                </div>
            </div>
        </div>
    </div>
</section>
@include('components.modal')
@endsection


@push('script')
<script>
    $(document).ready(function() {
        var table = $("#salesTable").DataTable({
            paging: true, // Aktifkan pagination
            pageLength: 10, // Jumlah data per halaman
            lengthChange: false, // Hilangkan dropdown untuk ubah jumlah data
            info: false, // Sembunyikan info jumlah data
            language: {
                paginate: {
                    previous: "←",
                    next: "→",
                },
            },
        });

        function updatePaginationInfo() {
            var info = table.page.info();
            var start = info.start + 1;
            var end = info.end;
            var total = info.recordsTotal;

            $("#salesTable_paginate").text(`${start}-${end} of ${total} Items`);

            $(".pagination-prev").prop("disabled", info.page === 0);
            $(".pagination-next").prop("disabled", info.page === info.pages - 1);
        }

        // Event delegation untuk menangani klik tombol
        $(document).on("click", ".pagination-prev", function() {
            table.page("previous").draw("page");
        });

        $(document).on("click", ".pagination-next", function() {
            table.page("next").draw("page");
        });

        table.on("draw", function() {
            updatePaginationInfo();
        });

        updatePaginationInfo();

        // Inisialisasi Date Range Picker
        $("#dateRange").daterangepicker({
            autoUpdateInput: false,
            locale: {
                format: "DD-MM-YYYY",
                cancelLabel: "Clear",
            },
        });

        // Saat user memilih tanggal
        $("#dateRange").on("apply.daterangepicker", function(ev, picker) {
            var startDate = picker.startDate.format("DD-MM-YYYY");
            var endDate = picker.endDate.format("DD-MM-YYYY");

            $(this).val(startDate + " - " + endDate); // Isi input dengan format yang benar
            table.draw(); // Gambar ulang tabel setelah pemilihan tanggal
        });

        // Jika user menghapus input (klik tombol Clear)
        $("#dateRange").on("cancel.daterangepicker", function() {
            $(this).val(""); // Kosongkan input
            table.draw(); // Hapus filter
        });

        // Custom filter untuk DataTables berdasarkan rentang tanggal
        $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
            var dateRange = $("#dateRange").val(); // Ambil nilai input
            if (!dateRange) return true; // Jika kosong, tampilkan semua data

            var dates = dateRange.split(" - "); // Pisahkan startDate dan endDate
            var min = moment(dates[0], "DD-MM-YYYY");
            var max = moment(dates[1], "DD-MM-YYYY");
            var colDate = moment(data[1], "DD-MM-YYYY"); // Pastikan format sesuai dengan tabel

            return colDate.isBetween(min, max, null, "[]"); // Periksa apakah ada di rentang
        });

        // Pastikan filter diterapkan ketika input berubah
        $("#dateRange").on(
            "apply.daterangepicker cancel.daterangepicker",
            function() {
                table.draw();
            }
        );

        // Search
        $("#searchInput").on("keyup", function() {
            table.search(this.value).draw();
        });

        // 🔍 Filter Per Kolom
        $("#filterCreator").on("change", function() {
            table.column(2).search(this.value).draw();
        });

        $("#filterCV").on("change", function() {
            table.column(3).search(this.value).draw();
        });

        $("#filterCustomer").on("change", function() {
            table.column(4).search(this.value).draw();
        });

        $("#filterStatus").on("change", function() {
            table.column(7).search(this.value).draw();
        });

        $("#dateRange").on("change", function() {
            table.column(1).search(this.value).draw();
        });
    });
</script>
@endpush
