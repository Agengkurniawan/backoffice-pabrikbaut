@extends('apps')
@section('content')

<section class="detail-produk-konversi">
    <div class="content-hall-first">
        @include ('components.sidebar')
        <div class="hall-second">
            @include('components.header')
            <div class="sectionprofil-3">
                <div class="grid">
                    <div class="col-4">
                        <div class="col-6 top">
                            <h1>Budi Santoso</h1>
                        </div>
                        <div class="col-6 beda">
                            <div class="col-3">
                                <img src="{{ asset('assets/img/image2.png') }}" alt="">
                            </div>
                            <div class="col-5">
                                <h1>SKU</h1>
                                <p>AS0001</p>
                            </div>
                            <hr>
                            <div class="col-6">
                                <h1>Nama Produk</h1>
                                <p>As Besi S45C</p>
                            </div>
                            <hr>
                            <div class="col-8">
                                <h1>Banyaknya Bahan Baku</h1>
                                <p>1 Unit </p>
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
                                <h1>Total Produk hasil Konversi </h1>
                                <p>5 Produk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectionprofil-6">
                <div class="containerr">
                    <div id="produkTablecontainer" class="tab-content active" {{ Request::is('sale/detail-pending-produk') ? 'active' : '' }}>
                        <div class="top-grid">
                            <div class="grid">
                                <h5>Daftar Produk Hasil Konversi</h5>
                            </div>
                        </div>
                        <div class="dataTables_wrapper ">
                            <hr class="solid">
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
                                        <th>Banyaknya
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
                                        <th>Harga
                                            <span class="sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span>
                                        </th>
                                        <th>Jumlah Harga
                                            <span class="sort-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="#ACACAC" />
                                                    <path d="M4.37622 13.4167H5.62622V5.91669H7.50122L5.00122 3.41669L2.50122 5.91669H4.37622V13.4167ZM12.5012 10.9167H10.6262V3.41669H9.37622V10.9167H7.50122L10.0012 13.4167L12.5012 10.9167Z" fill="black" fill-opacity="0.2" />
                                                </svg>
                                            </span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BM0001</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC </td>
                                        <td>Per Biji / 1 Set</td>
                                        <td>1.000</td>
                                        <td>Rp 156</td>
                                        <td>Rp 156.000</td>
                                    </tr>
                                    <tr>
                                        <td>BM0002</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC </td>
                                        <td>Per Dus / Nuts Only</td>
                                        <td>5</td>
                                        <td>Rp 7.800</td>
                                        <td>Rp 39.000</td>

                                    </tr>
                                    <tr>
                                        <td>BM0003</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC </td>
                                        <td>Per Dus / 1 Set</td>
                                        <td>5</td>
                                        <td>Rp 7.800</td>
                                        <td>Rp 39.000</td>
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
<script>
    $(document).ready(function() {
        var table = $("#historyTable").DataTable({
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
