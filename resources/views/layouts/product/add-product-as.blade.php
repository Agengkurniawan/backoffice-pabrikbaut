@extends('apps')
@section('content')
<section class="add-product-as">
    <div class="content-hall-first">
        @include ('components.sidebar')
        <div class="hall-second">
            @include('components.header')
            <div class="section sectionprofil-4 bagianya">
                <div class="grid">
                    <div class="container">
                        <div class="card">
                            <div class="containerr">
                                <div class="upload-container">
                                    <label for="fileUpload" class="upload-box">
                                        <div class="preview">
                                            <img id="previewImage" src="" alt="Preview" hidden>
                                        </div>
                                        <div class="upload-content">
                                            <div class="upload-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="35" viewBox="0 0 36 35" fill="none">
                                                    <path d="M23.8346 23.3333L18.0013 17.5L12.168 23.3333" stroke="#DEDDDD" stroke-width="1.45833" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M18.001 17.5V30.625" stroke="#DEDDDD" stroke-width="1.45833" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M30.2365 26.8191C31.6589 26.0436 32.7825 24.8166 33.4301 23.3317C34.0776 21.8467 34.2122 20.1884 33.8127 18.6184C33.4131 17.0485 32.502 15.6563 31.2233 14.6616C29.9446 13.6669 28.3711 13.1264 26.7511 13.1253H24.9136C24.4722 11.418 23.6495 9.83289 22.5073 8.48927C21.3651 7.14565 19.9332 6.07844 18.3192 5.36787C16.7052 4.65731 14.9511 4.32189 13.1888 4.38682C11.4265 4.45175 9.70182 4.91534 8.14448 5.74275C6.58714 6.57016 5.23764 7.73985 4.19743 9.16388C3.15721 10.5879 2.45336 12.2292 2.13878 13.9644C1.8242 15.6996 1.90709 17.4836 2.3812 19.1822C2.85532 20.8807 3.70833 22.4497 4.8761 23.7712" stroke="#DEDDDD" stroke-width="1.45833" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M23.8346 23.3333L18.0013 17.5L12.168 23.3333" stroke="#DEDDDD" stroke-width="1.45833" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <p class="upload-text">Foto Produk</p>
                                            <p class="upload-info">JPG, PNG ukuran tidak lebih 1 MB</p>
                                            <button class="upload-button">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                                                    <path d="M10.126 3.75C11.592 3.75 12.0125 3.75 12.5174 4.13746C12.6474 4.23721 12.7638 4.35357 12.8635 4.48357C13.251 4.98852 13.251 5.72152 13.251 7.1875V10C13.251 11.7678 13.251 12.6517 12.7018 13.2008C12.1526 13.75 11.2687 13.75 9.50098 13.75H4.50098C2.73321 13.75 1.84933 13.75 1.30015 13.2008C0.750977 12.6517 0.750977 11.7678 0.750977 10V7.1875C0.750977 5.72152 0.750977 4.98852 1.13844 4.48357C1.23819 4.35357 1.35455 4.23721 1.48455 4.13746C1.9895 3.75 2.40999 3.75 3.87598 3.75" stroke="white" stroke-width="1.3" stroke-linecap="round" />
                                                    <path d="M10.126 4.375L9.57233 2.99089C9.33347 2.39373 9.1256 1.71631 8.51138 1.41222C8.18373 1.25 7.78948 1.25 7.00098 1.25C6.21248 1.25 5.81823 1.25 5.49057 1.41222C4.87635 1.71631 4.66849 2.39373 4.42962 2.99089L3.87598 4.375" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M9.18848 8.75C9.18848 9.95812 8.2091 10.9375 7.00098 10.9375C5.79285 10.9375 4.81348 9.95812 4.81348 8.75C4.81348 7.54188 5.79285 6.5625 7.00098 6.5625C8.2091 6.5625 9.18848 7.54188 9.18848 8.75Z" stroke="white" stroke-width="1.3" stroke-linecap="round" />
                                                    <path d="M7.00086 3.75H7.00647" stroke="white" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                Unggah Foto
                                            </button>
                                        </div>
                                        <input type="file" id="fileUpload" accept="image/png, image/jpeg" hidden>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="mb-4">
                                <label for="" class="form-label"> SKU </label>
                                <input type="SKU" class="form-control beda" value="AS0011">
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label"> Nama Produk </label>
                                <input type="text" class="form-control" value="Nama">
                            </div>
                            <div class="mb-4 beda">
                                <label for="" class="form-label"> Panjang Lonjor </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="0">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section sectionprofil-5 bagianya">
                <div class="grid">
                    <div class="bagian1">
                        <div class="isi">
                            <h1>Potongan As</h1>
                        </div>
                    </div>
                    <hr>
                    <div class="bagian1">
                        <div class="containergrid">
                            <div class="gridku ">
                                <label for="" class="form-label">
                                    Panjang As </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="0">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                            <div class="gridku ">
                                <label for="" class="form-label">
                                    Tekuk As </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="0">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bagian1">
                        <div class="containergrid">
                            <div class="gridku ">
                                <label for="" class="form-label">
                                    Drat Kiri </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="0">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                            <div class="gridku ">
                                <label for="" class="form-label">
                                    Drat Kanan </label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="0">
                                    <span class="input-group-text">cm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectionprofil-6">
                <div class="containerr">
                    <div class="linebox">
                        <div class="top-grid">
                            <h5>Daftar Posisi Penyimpanan</h5>
                            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahposisi">
                                + Posisi Penyimpanan
                            </a>
                        </div>
                        <div class="dataTables_wrapper ">
                            <hr class="solid">
                            <table id="posisipenyimpananTable" class="table table-striped table-responsive">
                                <thead>
                                    <tr>
                                        <th>CV
                                            <span class="sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>Posisi Penyimpanan
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
                                        <td>CV Dukuh Baut</td>
                                        <td>Rak 2, Section B1-B3 </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <hr class="solid">
                                                    <li><a class="dropdown-item btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#ubahStatusModal">
                                                            Hapus
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CV Indobolt</td>
                                        <td>Rak 3, Section C1-C4</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <hr class="solid">
                                                    <li><a class="dropdown-item btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#ubahStatusModal">
                                                            Hapus
                                                        </a></li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CV Rafko Gap</td>
                                        <td>Rak 4, Section D2-D6 </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <hr class="solid">
                                                    <li><a class="dropdown-item btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#ubahStatusModal">
                                                            Hapus
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CV Grafta Jodi</td>
                                        <td>Rak 5, Section E1-E5</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <hr class="solid">
                                                    <li><a class="dropdown-item btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#konfirmasiFilterModal">
                                                            Hapus
                                                        </a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CV Rudal Jaya</td>
                                        <td>Rak 6, Section F3-F7</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Edit</a></li>
                                                    <hr class="solid">
                                                    <li><a class="dropdown-item btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#konfirmasiFilterModal">
                                                            Hapus
                                                        </a></li>
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
                            <span id="posisipenyimpananTable_paginate" class="mr-2">1-10 of 120 Items</span>
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
            <div class="endsection">
                <div class="gridend">
                    <a href=""> Batal</a>
                </div>
                <div class="gridend">
                    <a href="">Tambah</a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('components.modal')
@endsection

@push('script')

<script>
    document.getElementById("fileUpload").addEventListener("change", function(event) {
        const file = event.target.files[0];
        const previewImage = document.getElementById("previewImage");
        const uploadContent = document.querySelector(".upload-content");
        const previewContainer = document.querySelector(".preview");

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.hidden = false;
                previewContainer.style.display = "flex"; // Tampilkan preview
                uploadContent.style.display = "none"; // Sembunyikan teks & tombol
            };
            reader.readAsDataURL(file);
        }
    });
</script>
<script>
    $(document).ready(function() {
        var table = $("#posisipenyimpananTable").DataTable({
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

            $("#posisipenyimpananTable_paginate").text(`${start}-${end} of ${total} Items`);

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
    document.addEventListener("DOMContentLoaded", function() {
        console.log("Script Loaded");

        function showSection(sectionClass) {
            console.log("showSection called with:", sectionClass);

            // Sembunyikan semua section
            document.querySelectorAll('.section').forEach(section => {
                section.classList.add("hidden");
            });

            // Tampilkan section yang sesuai
            let selectedSections = document.querySelectorAll(`.${sectionClass}`);
            console.log("Selected sections:", selectedSections);
            selectedSections.forEach(section => {
                section.classList.remove("hidden");
            });
        }

        // Event listener menggunakan "click" agar langsung aktif dengan sekali klik
        document.querySelectorAll('input[name="option"]').forEach(radio => {
            radio.addEventListener("click", function() {
                console.log("Radio clicked:", this.value);

                // Simpan pilihan ke localStorage agar tetap aktif setelah perubahan
                localStorage.setItem("selectedOption", this.value);

                // Jalankan showSection tanpa delay
                showSection(this.value === "ya" ? "bagianya" : "bagiantidak");
            });
        });

        // Cek pilihan sebelumnya di localStorage dan atur ulang saat halaman dimuat
        let savedOption = localStorage.getItem("selectedOption");
        if (savedOption) {
            console.log("Restoring saved option:", savedOption);

            // Set radio button sesuai pilihan sebelumnya
            let radioToCheck = document.querySelector(`input[name="option"][value="${savedOption}"]`);
            if (radioToCheck) {
                radioToCheck.checked = true;
            }

            // Tampilkan section yang sesuai
            showSection(savedOption === "ya" ? "bagianya" : "bagiantidak");
        }
    });
</script>



@endpush
