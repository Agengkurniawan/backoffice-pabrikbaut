@extends('apps')
@section('content')

<section class="detail-purchase-end">
    <div class="content-hall-first">
        @include ('components.sidebar')
        <div class="hall-second">
            @include('components.header')
            <div class="sectionprofil-3">
                <div class="grid">
                    <div class="col-4">
                        <div class="col-6 top">
                            <h1>Budi Santoso</h1>
                            <button type="button " class="btn saya">Selesai</button>
                        </div>
                        <div class="col-6 bot-top">
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                    <path d="M5.33398 8.6333H10.0007" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.33398 11.3H8.25398" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.30732 1.83325H6.66732C6.00065 1.83325 5.33398 1.83325 5.33398 3.16659C5.33398 4.49992 6.00065 4.49992 6.66732 4.49992H9.33398C10.6673 4.49992 10.6673 3.83325 10.6673 3.16659C10.6673 1.83325 10.0007 1.83325 9.33398 1.83325" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.00098 7.1666C2.00098 4.1266 3.11431 3.29993 5.33431 3.17993" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.6676 3.17993C12.8876 3.29993 14.001 4.11993 14.001 7.1666V11.1666C14.001 13.8333 13.3343 15.1666 10.001 15.1666H6.00098C2.66764 15.1666 2.00098 13.8333 2.00098 11.1666V9.77326" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg> PO0235/25</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                    <path d="M5.33398 1.83325V3.83325" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M10.668 1.83325V3.83325" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.33398 6.56006H13.6673" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.00098 9.17326V6.16659C2.00098 4.16659 3.00098 2.83325 5.33431 2.83325H10.6676C13.001 2.83325 14.001 4.16659 14.001 6.16659V11.8333C14.001 13.8333 13.001 15.1666 10.6676 15.1666H5.33431C3.00098 15.1666 2.00098 13.8333 2.00098 11.8333" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.99764 9.63338H8.00363" stroke="#696969" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.53084 9.63338H5.53683" stroke="#696969" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5.53084 11.6334H5.53683" stroke="#696969" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg> 20/01/2025</p>
                        </div>
                        <div class="col-6 bot">
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                    <path d="M10.0146 2.50659C9.45465 2.07993 8.7613 1.83325 8.0013 1.83325C6.1613 1.83325 4.66797 3.32659 4.66797 5.16659C4.66797 7.00658 6.1613 8.49992 8.0013 8.49992C9.8413 8.49992 11.3346 7.00658 11.3346 5.16659" stroke="#696969" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.808 10.9933L10.448 13.3534C10.3546 13.4467 10.268 13.62 10.248 13.7467L10.1213 14.6467C10.0747 14.9733 10.3013 15.2 10.628 15.1533L11.528 15.0267C11.6546 15.0067 11.8347 14.92 11.9213 14.8267L14.2813 12.4667C14.688 12.06 14.8813 11.5867 14.2813 10.9867C13.688 10.3933 13.2147 10.5867 12.808 10.9933Z" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12.4678 11.3333C12.6678 12.0533 13.2278 12.6132 13.9478 12.8132" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M2.27441 15.1667C2.27441 12.5867 4.8411 10.5 8.0011 10.5C8.69443 10.5 9.36108 10.6 9.98108 10.7867" stroke="#696969" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" />
                                </svg> Dewi Lestari</p>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                    <path d="M1.33398 3.2666C1.33398 2.31327 1.814 1.83325 2.76733 1.83325H5.63399C6.58733 1.83325 7.0673 2.31327 7.0673 3.2666V4.49992" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.46733 12.4999H2.76733C1.814 12.4999 1.33398 12.0199 1.33398 11.0665V5.85986" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.5811 6.11332V13.5533C11.5811 14.6267 11.0478 15.1667 9.97445 15.1667H6.0811C5.00776 15.1667 4.46777 14.6267 4.46777 13.5533V6.11332C4.46777 5.03999 5.00776 4.5 6.0811 4.5H9.97445C11.0478 4.5 11.5811 5.03999 11.5811 6.11332Z" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.93457 4.49992V3.2666C8.93457 2.31327 9.41455 1.83325 10.3679 1.83325H13.2345C14.1879 1.83325 14.6679 2.31327 14.6679 3.2666V11.0666C14.6679 12.0199 14.1879 12.4999 13.2345 12.4999H11.5812" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.66797 7.83325H9.33464" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.66797 9.83325H9.33464" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.00098 15.1667V13.1667" stroke="#696969" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg> CV Rudal Jaya</p>
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
                </div>
            </div>
            <div class="sectionprofil-6">
                <div class="endsection">
                    <div class="gridend">
                        <a class="tab-button active  {{ Request::is('purchase/detail-pending-produk') ? 'active' : '' }}"
                            data-target="produkTablecontainer">
                            Daftar Produk </a>
                    </div>
                    <div class="gridend">
                        <a class="tab-button  {{ Request::is('purchase/detail-pending-history') ? 'active' : '' }}"
                            data-target="historyTablecontainer">
                            History Pergantian Table </a>
                    </div>
                </div>
                <div class="containerr">
                    <div id="produkTablecontainer" class="tab-content active" {{ Request::is('purchase/detail-pending-produk') ? 'active' : '' }}>
                        <div class="top-grid">
                            <div class="grid">
                                <h5>Daftar Produk</h5>
                            </div>
                            <div class="grid">
                                <a href="#" class="tab-buttonn " data-bs-target="#dokumenPO" data-bs-toggle="modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
                                        <path d="M10.7623 2H7.23732C6.45732 2 5.81982 2.63 5.81982 3.41V4.115C5.81982 4.895 6.44982 5.525 7.22982 5.525H10.7623C11.5423 5.525 12.1723 4.895 12.1723 4.115V3.41C12.1798 2.63 11.5423 2 10.7623 2Z" fill="white" />
                                        <path d="M12.9298 4.11462C12.9298 5.30712 11.9548 6.28212 10.7623 6.28212H7.23728C6.04478 6.28212 5.06979 5.30712 5.06979 4.11462C5.06979 3.69462 4.61979 3.43212 4.24479 3.62712C3.18729 4.18962 2.46729 5.30712 2.46729 6.58962V13.6471C2.46729 15.4921 3.97479 16.9996 5.81979 16.9996H12.1798C14.0248 16.9996 15.5323 15.4921 15.5323 13.6471V6.58962C15.5323 5.30712 14.8123 4.18962 13.7548 3.62712C13.3798 3.43212 12.9298 3.69462 12.9298 4.11462ZM11.5048 10.0471L8.50479 13.0471C8.39229 13.1596 8.24979 13.2121 8.10729 13.2121C7.96479 13.2121 7.82229 13.1596 7.70978 13.0471L6.58478 11.9221C6.36729 11.7046 6.36729 11.3446 6.58478 11.1271C6.80229 10.9096 7.16229 10.9096 7.37979 11.1271L8.10729 11.8546L10.7098 9.25212C10.9273 9.03462 11.2873 9.03462 11.5048 9.25212C11.7223 9.46962 11.7223 9.82962 11.5048 10.0471Z" fill="white" />
                                    </svg>Dokumen PO</a>
                            </div>
                        </div>
                        <div class="dataTables_wrapper ">
                            <hr class="solid">
                            <div class="col-12">
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
                            <div class="mt-4 row">
                                <div class="col-1 ">
                                    <select id="filterTipe" class="form-select Tipe">
                                        <option value="">Tipe</option>
                                        <option value="Tipe Rudal Jaya">Tipe Rudal Jaya</option>
                                    </select>
                                </div>
                                <div class="col-1 ">
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
                                <div class="col-1">
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
                                    <select id="filterJenis Pembelian" class="form-select Jenis Pembelian">
                                        <option value="">Jenis Pembelian</option>
                                        <option value="Jenis Pembelian Rudal Jaya">Jenis Pembelian Rudal Jaya</option>
                                    </select>
                                </div>
                                <div class="col-1">
                                    <select id="filterNo.SJ" class="form-select No.SJ">
                                        <option value="">No.SJ</option>
                                        <option value="SJ00122">SJ00122</option>
                                        <option value="SJ00121">SJ00121</option>
                                        <option value="SJ00122">SJ00122</option>
                                    </select>
                                </div>
                                <div class="col-1">
                                    <select id="filterStatus" class="form-select Status">
                                        <option value="">Status</option>
                                        <option value="Diterima Semua">Diterima Semua</option>
                                        <option value="Diterima Sebagian">Diterima Sebagian</option>
                                        <option value="Belum Diterima">Belum Diterima</option>
                                    </select>
                                </div>
                            </div>
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
                                        <th>No.SJ
                                            <span class="sort-icon">
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
                                        <th>Jenis Pembelian
                                            <span class="sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>Banyaknya
                                            <span class="sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>Bijian
                                            <span class="sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>Diterima
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
                                        <td>SJ.00122</td>
                                        <td>B/N 5 / 16" x 7" HITAM PI,25 NC 5</td>
                                        <td>Per Biji</td>
                                        <td>1.000</td>
                                        <td>1.000 Biji</td>
                                        <td>1.000</td>
                                        <td><span class="badge bg-success">Diterima Semua</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Surat Jalan</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0002</td>
                                        <td>SJ.00121</td>
                                        <td>As Besi S45C</td>
                                        <td>Unit</td>
                                        <td>5</td>
                                        <td>-</td>
                                        <td>5</td>
                                        <td><span class="badge bg-success">Diterima Semua</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Surat Jalan</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0003</td>
                                        <td>SJ.00122</td>
                                        <td>B/N 5 / 16" x 7" HITAM PI,25 NC 2</td>
                                        <td>Per Dus</td>
                                        <td>5</td>
                                        <td>250 Biji</td>
                                        <td>4</td>
                                        <td><span class="badge bg-success">Diterima Semua</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Surat Jalan</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0004</td>
                                        <td>-</td>
                                        <td>B/N 5 / 16" x 7" HITAM PI,25 NC 4</td>
                                        <td>Per Bag</td>
                                        <td>5</td>
                                        <td>1.250 Biji</td>
                                        <td>-</td>
                                        <td><span class="badge bg-success">Diterima Semua</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Surat Jalan</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0005</td>
                                        <td>-</td>
                                        <td>B/N 5 / 16" x 7" HITAM PI,25 NC MTH 5</td>
                                        <td>Per Bag</td>
                                        <td>5</td>
                                        <td>1.250 Biji</td>
                                        <td>-</td>
                                        <td><span class="badge bg-success">Diterima Semua</span></td>
                                        <td class="beda">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#suratjalanpembelian">Surat Jalan</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="historyTablecontainer" class="tab-content" {{ Request::is('purchase/detail-pending-history') ? 'active' : '' }}>
                        <div class="dataTables_wrapper ">
                            <hr class="solid">
                            <table id="historyTable" class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>Admin <span class=" sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span></th>
                                        <th>Tanggal Sebelumnya <span class=" sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span></th>
                                        <th>Tanggal Pengganti <span class=" sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Dukuh Buat 1</td>
                                        <td>17/01/2025</td>
                                        <td>20/01/2025</td>
                                    </tr>
                                    <tr>
                                        <td>Dukuh Buat 2</td>
                                        <td>15/01/2025</td>
                                        <td>17/01/2025</td>
                                    </tr>
                                    <tr>
                                        <td>Dukuh Buat 1</td>
                                        <td>13/01/2025</td>
                                        <td>15/01/2025</td>
                                    </tr>
                                    <tr>
                                        <td>Dukuh Buat 2</td>
                                        <td>11/01/2025</td>
                                        <td>13/01/2025</td>
                                    </tr>
                                    <tr>
                                        <td>Dukuh Buat 1</td>
                                        <td>09/01/2025</td>
                                        <td>11/01/2025</td>
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
                            <span id="historyTable_paginate" id="historyTable_paginate" class="mr-2">1-10 of 120 Items</span>
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
<script>
    $(document).ready(function() {
        var table = $("#historyTable").DataTable({
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

            $("#historyTable_paginate").text(`${start}-${end} of ${total} Items`);

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
