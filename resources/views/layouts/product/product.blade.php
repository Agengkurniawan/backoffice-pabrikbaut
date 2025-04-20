@extends('apps')
@section('content')

<section class="product">
    <div class="content-hall-first">
        @include ('components.sidebar')
        <div class="hall-second">
            @include('components.header')
            <div class="sectionprofil-6">
                <div class="endsection">
                    <div class="gridend">
                        <a class="tab-button active  {{ Request::is('product') ? 'active' : '' }}"
                            data-target="productTablecontainer">
                            Baut </a>
                    </div>
                    <div class="gridend">
                        <a class="tab-button  {{ Request::is('product2') ? 'active' : '' }}"
                            data-target="product2Tablecontainer">
                            As </a>
                    </div>
                </div>
                <div class="containerr">
                    <div id="productTablecontainer" class="tab-content active" {{ Request::is('product') ? 'active' : '' }}>
                        <div class="bagiansearch">
                            <div class="bagian1">
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
                            <a href="#" data-bs-target="#Memilihbagianproduk" data-bs-toggle="modal">+ Produk</a>
                        </div>
                        <div class="mt-4 row">
                            <div class="col-1 ">
                                <select id="filterTipe" class="form-select Tipe">
                                    <option value="">Tipe</option>
                                    <option value="Tipe Rudal Jaya">Tipe Rudal Jaya</option>
                                </select>
                            </div>
                            <div class="col-2 ">
                                <select id="filterCV" class="form-select CV">
                                    <option value="">Ukuran</option>
                                    <option value="CV Rudal Jaya">CV Rudal Jaya</option>
                                </select>
                            </div>
                            <div class="col-2 ">
                                <select id="filterWarna & Pitch" class="form-select Warna & Pitch">
                                    <option value="">Warna & Pitch</option>
                                    <option value="Warna & Pitch Rudal Jaya">Warna & Pitch Rudal Jaya</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <select id="filterJenis Produk" class="form-select Jenis Produk">
                                    <option value="">Jenis Produk</option>
                                    <option value="Jenis Produk Rudal Jaya">Jenis Produk Rudal Jaya</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <select id="filterKunci" class="form-select Kunci">
                                    <option value="">Kunci</option>
                                    <option value="Kunci Rudal Jaya">Kunci Rudal Jaya</option>
                                </select>
                            </div>
                            <div class="col-1">
                                <select id="filterMerk" class="form-select Merk">
                                    <option value="">Merk</option>
                                    <option value="Merk Rudal Jaya">Merk Rudal Jaya</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <select id="filterStatus" class="form-select Status">
                                    <option value="">Status</option>
                                    <option value="Status Rudal Jaya">Status Rudal Jaya</option>
                                </select>
                            </div>
                        </div>
                        <div class="dataTables_wrapper ">
                            <table id="productTable" class="table table-striped table-responsive">
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
                                        <th>Merk
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
                                        <td>TMS</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-baut1">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0002</td>
                                        <td>B/N 5/16"x7" HITAM P1,25 NC 3</td>
                                        <td>EB</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-baut1">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0003</td>
                                        <td>B/N 5/16"x7" HITAM P1,25 NC 2</td>
                                        <td>INSASTAMA</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-baut1">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0004</td>
                                        <td>B/N 5/16"x7" HITAM P1,25 NC 4</td>
                                        <td>KAIROS</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-baut2">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0005</td>
                                        <td>B/N 5/16"x7" HITAM P1,25 NC MTH 5</td>
                                        <td>TMS</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-baut2">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0006</td>
                                        <td>B/N 5/16"x7" HITAM P0,50 NC MTH 4</td>
                                        <td>EB</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-baut1">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0007</td>
                                        <td>B/N 5/16"x7" HITAM P0,50 NC MTH 3</td>
                                        <td>INSASTAMA</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-baut2">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0008</td>
                                        <td>B/N 5/16"x7" HITAM P0,50 UNC 3</td>
                                        <td>KAIROS</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-baut1">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0009</td>
                                        <td>B/N 5/16"x7" HITAM P0,50 UNC 2</td>
                                        <td>TMS</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-baut1">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0010</td>
                                        <td>B/N 5/16"x7" HITAM P0,50 UNC 5</td>
                                        <td>EB</td>
                                        <td>100.000 Biji</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-baut2">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="product2Tablecontainer" class="tab-content" {{ Request::is('product2') ? 'active' : '' }}>
                        <div class="bagiansearchproduct">
                            <div class="bagian1">
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
                            <div class="bagian2">
                                <select name="Status" id="Status" class="form-select">
                                    <option value="">Status</option>
                                    <option value="">Aktif</option>
                                    <option value="">Tidak Aktif</option>
                                </select>
                            </div>
                            <a href="#" data-bs-target="#Memilihbagianproduk" data-bs-toggle="modal">+ Produk</a>
                        </div>
                        <div class="dataTables_wrapper ">
                            <table id="product2Table" class="table table-striped table-responsive">
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
                                        <th>Sisa Panjang As
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
                                        <td>AS0001</td>
                                        <td>As Besi S45C</td>
                                        <td>100 Unit</td>
                                        <td>60.000 cm</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-as">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AS0001</td>
                                        <td>As Besi ST37</td>
                                        <td>100 Unit</td>
                                        <td>60.000 cm</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-as">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AS0001</td>
                                        <td>As Besi AISI 1018</td>
                                        <td>100 Unit</td>
                                        <td>60.000 cm</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-as">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AS0001</td>
                                        <td>As Besi AISI 1020</td>
                                        <td>100 Unit</td>
                                        <td>60.000 cm</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-as">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AS0001</td>
                                        <td>As Besi SCM440</td>
                                        <td>100 Unit</td>
                                        <td>60.000 cm</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-as">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AS0001</td>
                                        <td>As Besi SNCM439</td>
                                        <td>100 Unit</td>
                                        <td>60.000 cm</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-as">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AS0001</td>
                                        <td>As Besi B7 (AISI 4140)</td>
                                        <td>100 Unit</td>
                                        <td>60.000 cm</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-success">Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-as">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AS0001</td>
                                        <td>As Besi SS304 (Stainless Steel 304)</td>
                                        <td>100 Unit</td>
                                        <td>60.000 cm</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-as">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AS0001</td>
                                        <td>As Besi SS316 (Stainless Steel 316)</td>
                                        <td>100 Unit</td>
                                        <td>60.000 cm</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-as">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>AS0001</td>
                                        <td>As Besi D2 Tool Steel</td>
                                        <td>100 Unit</td>
                                        <td>60.000 cm</td>
                                        <td>1.000</td>
                                        <td>500</td>
                                        <td><span class="badge bg-danger">Tidak Aktif</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/product/detail-as">Detail</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Edit</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UpdateStock">Update Stock</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#UbahStatuss">Ubah Status</a></li>
                                                    <hr>
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bagianHapusproduk">Hapus</a></li>
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
                            <span id="productTable_paginate" id="product2Table_paginate" class="mr-2">1-10 of 120 Items</span>
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
        var table = $("#productTable").DataTable({
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

            $("#productTable_paginate").text(`${start}-${end} of ${total} Items`);

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
<script>
    $(document).ready(function() {
        var table = $("#product2Table").DataTable({
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

            $("#product2Table_paginate").text(`${start}-${end} of ${total} Items`);

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
<script>
    $(document).ready(function() {
        var table = $("#konfirmasipenerimaan").DataTable({
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

            $("#konfirmasipenerimaan_paginate").text(`${start}-${end} of ${total} Items`);

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