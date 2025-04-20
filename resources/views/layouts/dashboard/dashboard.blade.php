@extends('apps')
@section('content')
<section class="content">
    <div class="content-hall-first">
        @include ('components.sidebar')
        <div class="hall-second">
            @include('components.header')
            <div class="sectionprofil-3">
                <div class="grid">
                    <div class="shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M20.2112 7.82L12.5112 12.28C12.2012 12.46 11.8112 12.46 11.4912 12.28L3.79119 7.82C3.24119 7.5 3.10119 6.75 3.52119 6.28C3.81119 5.95 4.14119 5.68 4.49119 5.49L9.91119 2.49C11.0712 1.84 12.9512 1.84 14.1112 2.49L19.5312 5.49C19.8812 5.68 20.2112 5.96 20.5012 6.28C20.9012 6.75 20.7612 7.5 20.2112 7.82Z" fill="white" />
                            <path d="M11.4312 14.14V20.96C11.4312 21.72 10.6612 22.22 9.9812 21.89C7.9212 20.88 4.4512 18.99 4.4512 18.99C3.2312 18.3 2.2312 16.56 2.2312 15.13V9.97C2.2312 9.18 3.0612 8.68 3.7412 9.07L10.9312 13.24C11.2312 13.43 11.4312 13.77 11.4312 14.14Z" fill="white" />
                            <path d="M12.5712 14.14V20.96C12.5712 21.72 13.3412 22.22 14.0212 21.89C16.0812 20.88 19.5512 18.99 19.5512 18.99C20.7712 18.3 21.7712 16.56 21.7712 15.13V9.97C21.7712 9.18 20.9412 8.68 20.2612 9.07L13.0712 13.24C12.7712 13.43 12.5712 13.77 12.5712 14.14Z" fill="white" />
                        </svg>
                    </div>
                    <div class="for">
                        <p>Produk</p>
                        <h1>500 Produk</h1>
                    </div>
                </div>
                <div class="grid">
                    <div class="shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <path d="M9.66748 2C7.04748 2 4.91748 4.13 4.91748 6.75C4.91748 9.32 6.92748 11.4 9.54748 11.49C9.62748 11.48 9.70748 11.48 9.76748 11.49C9.78748 11.49 9.79748 11.49 9.81748 11.49C9.82748 11.49 9.82748 11.49 9.83748 11.49C12.3975 11.4 14.4075 9.32 14.4175 6.75C14.4175 4.13 12.2875 2 9.66748 2Z" fill="white" />
                            <path d="M14.7474 14.15C11.9574 12.29 7.40744 12.29 4.59744 14.15C3.32744 15 2.62744 16.15 2.62744 17.38C2.62744 18.61 3.32744 19.75 4.58744 20.59C5.98744 21.53 7.82744 22 9.66744 22C11.5074 22 13.3474 21.53 14.7474 20.59C16.0074 19.74 16.7074 18.6 16.7074 17.36C16.6974 16.13 16.0074 14.99 14.7474 14.15Z" fill="white" />
                            <path d="M20.6575 7.33999C20.8175 9.27999 19.4375 10.98 17.5275 11.21C17.5175 11.21 17.5175 11.21 17.5075 11.21H17.4775C17.4175 11.21 17.3575 11.21 17.3075 11.23C16.3375 11.28 15.4475 10.97 14.7775 10.4C15.8075 9.47999 16.3975 8.09999 16.2775 6.59999C16.2075 5.78999 15.9275 5.04999 15.5075 4.41999C15.8875 4.22999 16.3275 4.10999 16.7775 4.06999C18.7375 3.89999 20.4875 5.35999 20.6575 7.33999Z" fill="white" />
                            <path d="M22.6575 16.59C22.5775 17.56 21.9575 18.4 20.9175 18.97C19.9175 19.52 18.6575 19.78 17.4075 19.75C18.1275 19.1 18.5475 18.29 18.6275 17.43C18.7275 16.19 18.1375 15 16.9575 14.05C16.2875 13.52 15.5075 13.1 14.6575 12.79C16.8675 12.15 19.6475 12.58 21.3575 13.96C22.2775 14.7 22.7475 15.63 22.6575 16.59Z" fill="white" />
                        </svg>
                    </div>
                    <div class="for">
                        <p>Customer</p>
                        <h1>150 Users</h1>
                    </div>
                </div>
                <div class="grid">
                    <div class="shape">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                            <path d="M19.8439 5.85L13.9039 2.42C12.9339 1.86 11.7339 1.86 10.7539 2.42L4.82391 5.85C3.85391 6.41 3.25391 7.45 3.25391 8.58V15.42C3.25391 16.54 3.85391 17.58 4.82391 18.15L10.7639 21.58C11.7339 22.14 12.9339 22.14 13.9139 21.58L19.8539 18.15C20.8239 17.59 21.4239 16.55 21.4239 15.42V8.58C21.4139 7.45 20.8139 6.42 19.8439 5.85ZM12.3339 7.34C13.6239 7.34 14.6639 8.38 14.6639 9.67C14.6639 10.96 13.6239 12 12.3339 12C11.0439 12 10.0039 10.96 10.0039 9.67C10.0039 8.39 11.0439 7.34 12.3339 7.34ZM15.0139 16.66H9.65391C8.84391 16.66 8.37391 15.76 8.82391 15.09C9.50391 14.08 10.8239 13.4 12.3339 13.4C13.8439 13.4 15.1639 14.08 15.8439 15.09C16.2939 15.75 15.8139 16.66 15.0139 16.66Z" fill="white" />
                        </svg>
                    </div>
                    <div class="for">
                        <p>Supplier</p>
                        <h1>25 Users</h1>
                    </div>
                </div>
            </div>
            <div class="sectionprofil-4">
                <div class="grid">
                    <div class="hall1">
                        <h1>Penjualan</h1>
                        <div class="deskripsi">
                            <h1>Rp 15.000.000</h1>
                            <p>Meningkat 15% dari Bulan lalu<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8.00102 1.33334C4.32102 1.33334 1.33435 4.32001 1.33435 8.00001C1.33435 11.68 4.32102 14.6667 8.00102 14.6667C11.681 14.6667 14.6677 11.68 14.6677 8.00001C14.6677 4.32001 11.681 1.33334 8.00102 1.33334ZM10.3544 8.02001C10.2544 8.12001 10.1277 8.16668 10.001 8.16668C9.87435 8.16668 9.74768 8.12001 9.64768 8.02001L8.50102 6.87334V10.3333C8.50102 10.6067 8.27435 10.8333 8.00102 10.8333C7.72768 10.8333 7.50102 10.6067 7.50102 10.3333V6.87334L6.35435 8.02001C6.16102 8.21334 5.84102 8.21334 5.64768 8.02001C5.45435 7.82668 5.45435 7.50668 5.64768 7.31334L7.64768 5.31334C7.84102 5.12001 8.16102 5.12001 8.35435 5.31334L10.3544 7.31334C10.5477 7.50668 10.5477 7.82668 10.3544 8.02001Z" fill="#56CB3F" />
                                </svg></p>
                        </div>
                    </div>
                    <div class="hall2">
                        <div class="input">
                            <input type="text" id="datepicker" class="calendar-button" placeholder="Pilih bulan">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5" fill="none">
                                <path d="M1.00024 0.5L4.52884 4.0286C4.75106 4.25082 4.86217 4.36193 5.00024 4.36193C5.13832 4.36193 5.24943 4.25082 5.47165 4.0286L9.00024 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="167" height="75" viewBox="0 0 167 75" fill="none">
                            <path d="M58.8324 29.2086L1.00037 74H166.001V1L114.718 38.6093C112.11 40.5223 108.737 41.0553 105.666 40.0401L68.0944 27.62C64.935 26.5756 61.4631 27.1711 58.8324 29.2086Z" fill="url(#paint0_linear_677_17999)" />
                            <path d="M1.00037 74L58.8324 29.2086C61.4632 27.1711 64.935 26.5756 68.0944 27.62L105.666 40.0401C108.737 41.0553 112.11 40.5223 114.718 38.6093L166.001 1" stroke="#56CB3F" stroke-width="2" stroke-linecap="round" />
                            <defs>
                                <linearGradient id="paint0_linear_677_17999" x1="83.5007" y1="1" x2="83.1772" y2="77.6976" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#56CB3F" />
                                    <stop offset="1" stop-color="#DDDDDD" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
                <div class="grid">
                    <div class="hall1">
                        <h1>Pembelian</h1>
                        <div class="deskripsi">
                            <h1>Rp 5.000.000</h1>
                            <p>Menurun 5% dari Bulan lalu <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8.00065 1.33334C4.32065 1.33334 1.33398 4.32001 1.33398 8.00001C1.33398 11.68 4.32065 14.6667 8.00065 14.6667C11.6807 14.6667 14.6673 11.68 14.6673 8.00001C14.6673 4.32001 11.6807 1.33334 8.00065 1.33334ZM10.354 8.68668L8.35398 10.6867C8.25398 10.7867 8.12732 10.8333 8.00065 10.8333C7.87398 10.8333 7.74732 10.7867 7.64732 10.6867L5.64732 8.68668C5.45398 8.49334 5.45398 8.17334 5.64732 7.98001C5.84065 7.78668 6.16065 7.78668 6.35398 7.98001L7.50065 9.12668V5.66668C7.50065 5.39334 7.72732 5.16668 8.00065 5.16668C8.27398 5.16668 8.50065 5.39334 8.50065 5.66668V9.12668L9.64732 7.98001C9.84065 7.78668 10.1607 7.78668 10.354 7.98001C10.5473 8.17334 10.5473 8.49334 10.354 8.68668Z" fill="#FF485A" />
                                </svg></p>
                        </div>
                    </div>
                    <div class="hall2">
                        <div class="input">
                            <input type="text" id="datepicker" class="calendar-button" placeholder="Pilih bulan">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5" fill="none">
                                <path d="M1.00024 0.5L4.52884 4.0286C4.75106 4.25082 4.86217 4.36193 5.00024 4.36193C5.13832 4.36193 5.24943 4.25082 5.47165 4.0286L9.00024 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="167" height="75" viewBox="0 0 167 75" fill="none">
                            <path d="M108.168 29.2087L166 74H1.00024V1L52.2828 38.6093C54.8913 40.5223 58.264 41.0553 61.3353 40.04L98.9065 27.62C102.066 26.5756 105.538 27.1711 108.168 29.2087Z" fill="url(#paint0_linear_677_18014)" />
                            <path d="M166 74L108.168 29.2087C105.538 27.1711 102.066 26.5756 98.9065 27.62L61.3353 40.04C58.264 41.0553 54.8913 40.5223 52.2828 38.6093L1.00024 1" stroke="#FF485A" stroke-width="2" stroke-linecap="round" />
                            <defs>
                                <linearGradient id="paint0_linear_677_18014" x1="83.5002" y1="1" x2="83.8237" y2="77.6976" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FF485A" />
                                    <stop offset="1" stop-color="#DDDDDD" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="sectionprofil-5">
                <div class="grid">
                    <div class="hall1">
                        <h1>Total Penjualan</h1>
                        <div class="deskripsi">
                            <h1>500 Penjualan </h1>
                            <p>Meningkat 15% dari Bulan lalu <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8.00102 1.33334C4.32102 1.33334 1.33435 4.32001 1.33435 8.00001C1.33435 11.68 4.32102 14.6667 8.00102 14.6667C11.681 14.6667 14.6677 11.68 14.6677 8.00001C14.6677 4.32001 11.681 1.33334 8.00102 1.33334ZM10.3544 8.02001C10.2544 8.12001 10.1277 8.16668 10.001 8.16668C9.87435 8.16668 9.74768 8.12001 9.64768 8.02001L8.50102 6.87334V10.3333C8.50102 10.6067 8.27435 10.8333 8.00102 10.8333C7.72768 10.8333 7.50102 10.6067 7.50102 10.3333V6.87334L6.35435 8.02001C6.16102 8.21334 5.84102 8.21334 5.64768 8.02001C5.45435 7.82668 5.45435 7.50668 5.64768 7.31334L7.64768 5.31334C7.84102 5.12001 8.16102 5.12001 8.35435 5.31334L10.3544 7.31334C10.5477 7.50668 10.5477 7.82668 10.3544 8.02001Z" fill="#56CB3F" />
                                </svg></p>
                        </div>
                    </div>
                    <div class="hall2">
                        <div class="input">
                            <input type="text" id="datepicker" class="calendar-button" placeholder="Pilih bulan">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5" fill="none">
                                <path d="M1.00024 0.5L4.52884 4.0286C4.75106 4.25082 4.86217 4.36193 5.00024 4.36193C5.13832 4.36193 5.24943 4.25082 5.47165 4.0286L9.00024 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="total">
                            <div class="total1">
                                <h1> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <circle cx="5.00098" cy="5" r="5" fill="#CDCDCD" />
                                    </svg>Pending</h1>
                                <p>50</p>
                            </div>
                        </div>
                        <div class="total">
                            <div class="total1">
                                <h1> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <circle cx="5.00098" cy="5" r="5" fill="#FDA342" />
                                    </svg> Disiapkan</h1>
                                <p>200</p>
                            </div>
                        </div>
                        <div class="total">
                            <div class="total1">
                                <h1> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <circle cx="5.00098" cy="5" r="5" fill="#56CB3F" />
                                    </svg> Selesai</h1>
                                <p>250</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid">
                    <div class="hall1">
                        <h1>Total Pembelian</h1>
                        <div class="deskripsi">
                            <h1>500 Pembelian</h1>
                            <p>Meningkat 15% dari Bulan lalu <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M8.00102 1.33334C4.32102 1.33334 1.33435 4.32001 1.33435 8.00001C1.33435 11.68 4.32102 14.6667 8.00102 14.6667C11.681 14.6667 14.6677 11.68 14.6677 8.00001C14.6677 4.32001 11.681 1.33334 8.00102 1.33334ZM10.3544 8.02001C10.2544 8.12001 10.1277 8.16668 10.001 8.16668C9.87435 8.16668 9.74768 8.12001 9.64768 8.02001L8.50102 6.87334V10.3333C8.50102 10.6067 8.27435 10.8333 8.00102 10.8333C7.72768 10.8333 7.50102 10.6067 7.50102 10.3333V6.87334L6.35435 8.02001C6.16102 8.21334 5.84102 8.21334 5.64768 8.02001C5.45435 7.82668 5.45435 7.50668 5.64768 7.31334L7.64768 5.31334C7.84102 5.12001 8.16102 5.12001 8.35435 5.31334L10.3544 7.31334C10.5477 7.50668 10.5477 7.82668 10.3544 8.02001Z" fill="#56CB3F" />
                                </svg></p>
                        </div>
                    </div>
                    <div class="hall2">
                        <div class="input">
                            <input type="text" id="datepicker" class="calendar-button" placeholder="Pilih bulan">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5" fill="none">
                                <path d="M1.00024 0.5L4.52884 4.0286C4.75106 4.25082 4.86217 4.36193 5.00024 4.36193C5.13832 4.36193 5.24943 4.25082 5.47165 4.0286L9.00024 0.5" stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="total">
                            <div class="total1">
                                <h1> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <circle cx="5.00049" cy="5" r="5" fill="#FDA342" />
                                    </svg> Dikirim</h1>
                                <p>200</p>
                            </div>
                        </div>
                        <div class="total">
                            <div class="total1">
                                <h1> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <circle cx="5.00049" cy="5" r="5" fill="#56CB3F" />
                                    </svg> Selesai</h1>
                                <p>250</p>
                            </div>
                        </div>
                        <div class="total">
                            <div class="total1">
                                <h1> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <circle cx="5.00049" cy="5" r="5" fill="#FF485A" />
                                    </svg> Cancel</h1>
                                <p>50</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectionprofil-6">
                <div class="containerr">
                    <h5 class="mb-3">Daftar Penjualan Terbaru</h5>
                    <div class="dataTables_wrapper">
                        <hr class="solid">
                        <table id="salesTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th
                                        data-column="0">No. Penjualan
                                        <span class="sort-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th data-column="1">Tanggal
                                        <span class="sort-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th data-column="2">Customer
                                        <span class="sort-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th data-column="3">Total Produk
                                        <span class="sort-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th data-column="4">Total Harga
                                        <span class="sort-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                            </svg>
                                        </span>
                                    </th>
                                    <th data-column="5">Status
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
                                    <td>PB0235/25</td>
                                    <td>20/01/2025</td>
                                    <td>Budi Santoso</td>
                                    <td>6 Produk</td>
                                    <td>Rp 4.340.000</td>
                                    <td><span class="badge badge-secondary">Disiapkan</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Detail</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Ubah Status</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PB0234/25</td>
                                    <td>20/01/2025</td>
                                    <td>Siti Nurhaliza</td>
                                    <td>5 Produk</td>
                                    <td>Rp 4.340.000</td>
                                    <td><span class="badge badge-secondary">Disiapkan</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Detail</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item" href="#">Ubah Status</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PB0233/25</td>
                                    <td>20/01/2025</td>
                                    <td>Andi Wijaya</td>
                                    <td>5 Produk</td>
                                    <td>Rp 4.340.000</td>
                                    <td><span class="badge badge-secondary">Disiapkan</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Detail</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item" href="#">Ubah Status</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PB0232/25</td>
                                    <td>20/01/2025</td>
                                    <td>Dewi Lestari</td>
                                    <td>5 Produk</td>
                                    <td>Rp 4.340.000</td>
                                    <td><span class="badge badge-primary">Selesai</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Detail</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item" href="#">Ubah Status</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PB0231/25</td>
                                    <td>20/01/2025</td>
                                    <td>Rudi Hartono</td>
                                    <td>5 Produk</td>
                                    <td>Rp 4.340.000</td>
                                    <td><span class="badge badge-primary">Selesai</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                    <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                </svg></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Detail</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item" href="#">Ubah Status</a></li>
                                                <hr class="solid">
                                                <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
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