@extends('apps')
@section('content')

<section class="detail-tipe">
    <div class="content-hall-first">
        @include ('components.sidebar')
        <div class="hall-second">
            @include('components.header')
            <div class="sectionprofil-3">
                <div class="grid">
                    <div class="col-4">
                        <div class="card-header">
                            <div class="space">
                                <h1>TWS</h1>
                                <span class="badge badge-success">Aktif</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card-header">
                            <div class="img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.2112 7.81994L12.5112 12.2799C12.2012 12.4599 11.8112 12.4599 11.4912 12.2799L3.79119 7.81994C3.24119 7.49994 3.10119 6.74994 3.52119 6.27994C3.81119 5.94994 4.14119 5.67994 4.49119 5.48994L9.91119 2.48994C11.0712 1.83994 12.9512 1.83994 14.1112 2.48994L19.5312 5.48994C19.8812 5.67994 20.2112 5.95994 20.5012 6.27994C20.9012 6.74994 20.7612 7.49994 20.2112 7.81994Z" fill="white" />
                                    <path d="M11.4314 14.1399V20.9599C11.4314 21.7199 10.6614 22.2199 9.98144 21.8899C7.92144 20.8799 4.45145 18.9899 4.45145 18.9899C3.23145 18.2999 2.23145 16.5599 2.23145 15.1299V9.96988C2.23145 9.17988 3.06145 8.67988 3.74145 9.06988L10.9314 13.2399C11.2314 13.4299 11.4314 13.7699 11.4314 14.1399Z" fill="white" />
                                    <path d="M12.5713 14.1399V20.9599C12.5713 21.7199 13.3413 22.2199 14.0213 21.8899C16.0813 20.8799 19.5513 18.9899 19.5513 18.9899C20.7713 18.2999 21.7713 16.5599 21.7713 15.1299V9.96988C21.7713 9.17988 20.9413 8.67988 20.2613 9.06988L13.0713 13.2399C12.7713 13.4299 12.5713 13.7699 12.5713 14.1399Z" fill="white" />
                                </svg>
                            </div>
                            <div class="text">
                                <h1>Total Produk</h1>
                                <p>5 Produk</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card-header">
                            <div class="img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path d="M17.6005 5.8093L11.9505 2.7693C11.3505 2.4493 10.6405 2.4493 10.0405 2.7693L4.40047 5.8093C3.99047 6.0393 3.73047 6.4793 3.73047 6.9593C3.73047 7.4493 3.98047 7.8893 4.40047 8.1093L10.0505 11.1493C10.3505 11.3093 10.6805 11.3893 11.0005 11.3893C11.3205 11.3893 11.6605 11.3093 11.9505 11.1493L17.6005 8.1093C18.0105 7.8893 18.2705 7.4493 18.2705 6.9593C18.2705 6.4793 18.0105 6.0393 17.6005 5.8093Z" fill="white" />
                                    <path d="M9.12049 12.2086L3.87049 9.58863C3.46049 9.37863 3.00049 9.40863 2.61049 9.63863C2.23049 9.87863 2.00049 10.2886 2.00049 10.7386V15.6986C2.00049 16.5586 2.48049 17.3286 3.25049 17.7186L8.50049 20.3386C8.68049 20.4286 8.88049 20.4786 9.08049 20.4786C9.31049 20.4786 9.55049 20.4086 9.76049 20.2886C10.1405 20.0486 10.3705 19.6386 10.3705 19.1886V14.2286C10.3605 13.3686 9.88049 12.5986 9.12049 12.2086Z" fill="white" />
                                    <path d="M20.0006 10.7386V13.1986C19.5206 13.0586 19.0106 12.9986 18.5006 12.9986C17.1406 12.9986 15.8106 13.4686 14.7606 14.3086C13.3206 15.4386 12.5006 17.1486 12.5006 18.9986C12.5006 19.4886 12.5606 19.9786 12.6906 20.4486C12.5406 20.4286 12.3906 20.3686 12.2506 20.2786C11.8706 20.0486 11.6406 19.6386 11.6406 19.1886V14.2286C11.6406 13.3686 12.1206 12.5986 12.8806 12.2086L18.1306 9.58863C18.5406 9.37863 19.0006 9.40863 19.3906 9.63863C19.7706 9.87863 20.0006 10.2886 20.0006 10.7386Z" fill="white" />
                                    <path d="M21.9805 16.1695C21.1605 15.1595 19.9105 14.5195 18.5005 14.5195C17.4405 14.5195 16.4605 14.8895 15.6905 15.5095C14.6505 16.3295 14.0005 17.5995 14.0005 19.0195C14.0005 19.8595 14.2405 20.6595 14.6505 21.3395C14.9205 21.7895 15.2605 22.1795 15.6605 22.4995H15.6705C16.4405 23.1395 17.4305 23.5195 18.5005 23.5195C19.6405 23.5195 20.6705 23.0995 21.4605 22.3995C21.8105 22.0995 22.1105 21.7395 22.3505 21.3395C22.7605 20.6595 23.0005 19.8595 23.0005 19.0195C23.0005 17.9395 22.6205 16.9395 21.9805 16.1695ZM20.7605 18.4595L18.3605 20.6795C18.2205 20.8095 18.0305 20.8795 17.8505 20.8795C17.6605 20.8795 17.4705 20.8095 17.3205 20.6595L16.2105 19.5495C15.9205 19.2595 15.9205 18.7795 16.2105 18.4895C16.5005 18.1995 16.9805 18.1995 17.2705 18.4895L17.8705 19.0895L19.7405 17.3595C20.0405 17.0795 20.5205 17.0995 20.8005 17.3995C21.0905 17.7095 21.0705 18.1795 20.7605 18.4595Z" fill="white" />
                                </svg>
                            </div>
                            <div class="text">
                                <h1>Produk Aktif</h1>
                                <p>400 Produk</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card-header">
                            <div class="img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                    <path d="M18.1005 5.8093L12.4505 2.7693C11.8505 2.4493 11.1405 2.4493 10.5405 2.7693L4.90047 5.8093C4.49047 6.0393 4.23047 6.4793 4.23047 6.9593C4.23047 7.4493 4.48047 7.8893 4.90047 8.1093L10.5505 11.1493C10.8505 11.3093 11.1805 11.3893 11.5005 11.3893C11.8205 11.3893 12.1605 11.3093 12.4505 11.1493L18.1005 8.1093C18.5105 7.8893 18.7705 7.4493 18.7705 6.9593C18.7705 6.4793 18.5105 6.0393 18.1005 5.8093Z" fill="white" />
                                    <path d="M9.62049 12.2086L4.37049 9.58863C3.96049 9.37863 3.50049 9.40863 3.11049 9.63863C2.73049 9.87863 2.50049 10.2886 2.50049 10.7386V15.6986C2.50049 16.5586 2.98049 17.3286 3.75049 17.7186L9.00049 20.3386C9.18049 20.4286 9.38049 20.4786 9.58049 20.4786C9.81049 20.4786 10.0505 20.4086 10.2605 20.2886C10.6405 20.0486 10.8705 19.6386 10.8705 19.1886V14.2286C10.8605 13.3686 10.3805 12.5986 9.62049 12.2086Z" fill="white" />
                                    <path d="M20.5006 10.7386V13.1986C20.0206 13.0586 19.5106 12.9986 19.0006 12.9986C17.6406 12.9986 16.3106 13.4686 15.2606 14.3086C13.8206 15.4386 13.0006 17.1486 13.0006 18.9986C13.0006 19.4886 13.0606 19.9786 13.1906 20.4486C13.0406 20.4286 12.8906 20.3686 12.7506 20.2786C12.3706 20.0486 12.1406 19.6386 12.1406 19.1886V14.2286C12.1406 13.3686 12.6206 12.5986 13.3806 12.2086L18.6306 9.58863C19.0406 9.37863 19.5006 9.40863 19.8906 9.63863C20.2706 9.87863 20.5006 10.2886 20.5006 10.7386Z" fill="white" />
                                    <path d="M22.1804 15.8206C21.2904 14.9306 20.1104 14.4806 18.9404 14.5006C17.8104 14.5106 16.6804 14.9606 15.8204 15.8206C15.2204 16.4106 14.8304 17.1506 14.6404 17.9206C14.5304 18.3406 14.4904 18.7706 14.5204 19.2006V19.2506C14.5204 19.3206 14.5304 19.3806 14.5404 19.4606C14.5404 19.4606 14.5404 19.4606 14.5504 19.4706V19.5006C14.6404 20.4806 15.0604 21.4306 15.8204 22.1806C16.9804 23.3406 18.6104 23.7306 20.0804 23.3606C20.5204 23.2506 20.9504 23.0706 21.3504 22.8306C21.6504 22.6606 21.9304 22.4406 22.1804 22.1806C22.9304 21.4306 23.3604 20.4806 23.4504 19.4906C23.4604 19.4906 23.4604 19.4706 23.4604 19.4606C23.4804 19.3906 23.4804 19.3106 23.4804 19.2406C23.4804 19.2306 23.4904 19.2106 23.4904 19.1906C23.5504 17.9806 23.1104 16.7406 22.1804 15.8206ZM20.7304 20.7106C20.4404 21.0006 19.9704 21.0006 19.6704 20.7106L19.0104 20.0506L18.3304 20.7306C18.0304 21.0306 17.5604 21.0306 17.2704 20.7306C16.9704 20.4406 16.9704 19.9706 17.2704 19.6706L17.9504 18.9906L17.2904 18.3306C17.0004 18.0306 17.0004 17.5606 17.2904 17.2706C17.5904 16.9706 18.0604 16.9706 18.3604 17.2706L19.0104 17.9306L19.6404 17.2906C19.9404 17.0006 20.4104 17.0006 20.7104 17.2906C21.0004 17.5906 21.0004 18.0606 20.7104 18.3606L20.0704 18.9906L20.7304 19.6406C21.0304 19.9406 21.0304 20.4106 20.7304 20.7106Z" fill="white" />
                                </svg>
                            </div>
                            <div class="text">
                                <h1>Produk Tidak Aktif</h1>
                                <p>100 Produk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectionprofil-6">
                <div class="containerr">
                    <div id="produkTablecontainer" class="tab-content active" {{ Request::is('sale/detail-pending-produk') ? 'active' : '' }}>
                        <div class="mt-4 row">
                            <div class="col-4">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <g clip-path="url(#clip0_1091_28931)">
                                                <path d="M13.934 15.3169C14.1781 15.561 14.5738 15.561 14.8179 15.3169C15.062 15.0729 15.062 14.6771 14.8179 14.4331L13.934 15.3169ZM11.3245 6.78676C11.3245 9.56849 9.06947 11.8235 6.28774 11.8235V13.0735C9.75983 13.0735 12.5745 10.2588 12.5745 6.78676H11.3245ZM6.28774 11.8235C3.50601 11.8235 1.25098 9.56849 1.25098 6.78676H0.000976562C0.000976562 10.2588 2.81566 13.0735 6.28774 13.0735V11.8235ZM1.25098 6.78676C1.25098 4.00504 3.50601 1.75 6.28774 1.75V0.5C2.81566 0.5 0.000976562 3.31468 0.000976562 6.78676H1.25098ZM6.28774 1.75C9.06947 1.75 11.3245 4.00504 11.3245 6.78676H12.5745C12.5745 3.31468 9.75983 0.5 6.28774 0.5V1.75ZM9.88992 11.2728L13.934 15.3169L14.8179 14.4331L10.7738 10.3889L9.88992 11.2728Z" fill="#D2D2D2" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1091_28931">
                                                    <rect width="15" height="15" fill="white" transform="translate(0.000976562 0.5)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Cari">
                                </div>
                            </div>
                            <div class="col-2">
                                <select id="filterUkuran" class="form-select Ukuran">
                                    <option value="">Ukuran</option>
                                    <option value="Ukuran">UkuranRudal Jaya</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <select id="filterWarna & Pitch" class="form-select Warna & Pitch">
                                    <option value="">Warna & Pitch</option>
                                    <option value="Warna & Pitch">Warna & Pitch Rudal Jaya</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <select id="filterJenis Produk Pembelian" class="form-select Jenis ProdukPembelian">
                                    <option value="">Jenis Produk </option>
                                    <option value="Jenis Produk">Jenis Produk</option>
                                </select>
                            </div>
                            <div class="col-1">
                                <select id="filterKunci" class="form-select Kunci">
                                    <option value="">Kunci</option>
                                    <option value="SJ00122">SJ00122</option>
                                </select>
                            </div>
                            <div class="col-1">
                                <select id="filterStatus" class="form-select Status">
                                    <option value="">Status</option>
                                    <option value="SJ00122">SJ00122</option>
                                </select>
                            </div>
                        </div>
                        <div class="dataTables_wrapper ">
                            <table id="produkTable" class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>SKU
                                            <span class=" sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>Nama Produk
                                            <span class="sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>Stock
                                            <span class="sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>History Penjualan
                                            <span class="sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>History Pembelian
                                            <span class="sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>Status
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
                                        <td>BM0001</td>
                                        <td>B/N 5/16"x7" HITAM P1,25 NC 5</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge badge-success">Aktif</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0002</td>
                                        <td>B/N 5/16"x7" HITAM P1,25 NC 3</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge badge-success">Aktif</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0003</td>
                                        <td>B/N 5/16"x7" HITAM P1,25 NC 2</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge badge-success">Aktif</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0004</td>
                                        <td>B/N 5/16"x7" HITAM P1,25 NC 4</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge badge-success">Aktif</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0005</td>
                                        <td>B/N 5/16"x7" HITAM P1,25 NC MTH 5</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge badge-success">Aktif</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0006</td>
                                        <td>B/N 5/16"x7" HITAM P0,50 NC MTH 4</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0007</td>
                                        <td>B/N 5/16"x7" HITAM P0,50 NC MTH 3</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0008</td>
                                        <td>B/N 5/16"x7" HITAM P0,50 UNC 3</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0009</td>
                                        <td>B/N 5/16"x7" HITAM P0,50 UNC 2</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0010</td>
                                        <td>B/N 5/16"x7" HITAM P0,50 UNC 5</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge badge-danger">Tidak Aktif</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Detail</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                            <span id="historyTable_paginate" id="produkTable_paginate" class="mr-2">1-10 of 120 Items</span>
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
</section>

@include('components.modal')
@endsection

@push('script')
<script>
    $(document).ready(function() {
        var table = $("#produkTable").DataTable({
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

            $("#produkTable_paginate").text(`${start}-${end} of ${total} Items`);

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