@extends('apps')
@section('content')
<section class="konfirmasi">
    <div class="content-hall-first">
        @include ('components.sidebar')
        <div class="hall-second">
            @include('components.header')
            <div class="sectionprofil-3">
                <div class="grid">
                    <button class="tab-button active  {{ Request::is('sale/konfirmasi-konversi') ? 'active' : '' }}"
                        data-target="konversi">
                        Konversi
                    </button>
                    <button class="tab-button {{ Request::is('sale/konfirmasi-custom') ? 'active' : '' }}"
                        data-target="custom">
                        Custom
                    </button>
                </div>
            </div>
            <div id="konversi" class="tab-content active {{ Request::is('sale/konfirmasi-konversi') ? 'active' : '' }}">
                <div class="sectionprofil-4">
                    <div class="grid">
                        <div class="container">
                            <div class="card">
                                <label for="bahanBaku" class="col-sm-2 col-form-label">Bahan Baku</label>
                                <div class="mb-3 row ">
                                    <div class="col-sm-11">
                                        <select class="form-select" id="bahanBaku">
                                            <option>As Besi S45C</option>
                                            <option>Aluminium 6061</option>
                                            <option>Stainless Steel 304</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-1 ">
                                        <button class="btn btn-dark w-100">Scan</button>
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="jumlahBahan" class="form-label">Banyaknya Bahan Baku</label>
                                    <input type="number" class="form-control" id="jumlahBahan" value="0">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="sectionprofil-5">
                    <div class="grid">
                        <h1>Konversi Produk</h1>
                        <div class="gridshape">
                            <div class="grid3">
                                <div class="bagian1">
                                    <label for="jumlahBahan" class="form-label">Banyaknya Bahan Baku</label> <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="bagian2">
                                    <div class="gridtext">
                                        <div class="label">
                                            <label for="jumlahBahan" class="form-label">Jenis Pembelian</label>
                                        </div>
                                        <div class="radio">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Set 1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Nuts Only</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">Bolt Only</label>
                                            </div>
                                        </div>
                                    </div>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Per Biji, Per Dus, Per Bag, Per Peti</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="bagian1">
                                    <label for="jumlahBahan" class="form-label">Banyaknya</label>
                                    <input type="number" class="form-control" id="jumlahBahan" value="0">
                                </div>
                            </div>
                            <div class="end">
                                <a href="">+</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="endsection">
                    <div class="gridend">
                        <a href=""> Cancel</a>
                    </div>
                    <div class="gridend">
                        <a href="">Submit</a>
                    </div>
                </div>
            </div>
            <div id="custom" class="tab-content  {{ Request::is('sale/konfirmasi-custom') ? 'active' : '' }}">
                <div class="sectionprofil-6">
                    <div class="grid">
                        <div class="container">
                            <div class="card">
                                <label for="bahanBaku" class="col-sm-2 col-form-label">Bahan Baku </label>
                                <div class="mb-3 row ">
                                    <div class="col-sm-10">
                                        <select class="form-select" id="bahanBaku">
                                            <option>As Besi S45C</option>
                                            <option>Aluminium 6061</option>
                                            <option>Stainless Steel 304</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 ">
                                        <button class="btn btn-dark w-100">Scan</button>
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="jumlahBahan" class="form-label">Nama Produk Custom</label>
                                    <input type="text" class="form-control" id="Nama" value="Nama">
                                </div>
                                <div class="mb-3">
                                    <div class="gridtext">
                                        <div class="label">
                                            <label for="jumlahBahan" class="form-label">Jenis Pembelian</label>
                                        </div>
                                        <div class="radio">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Set 1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Nuts Only</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">Bolt Only</label>
                                            </div>
                                        </div>
                                    </div>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Per Biji, Per Dus, Per Bag, Per Peti</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="card">
                                <div class="mb-3 ">
                                    <label for="jumlahBahan" class="form-label">Banyaknya Bahan Baku</label>
                                    <input type="number" class="form-control" id="jumlahBahan" value="0">
                                </div>
                                <div class="mb-3 ">
                                    <label for="jumlahBahan" class="form-label">Total Harga Produk Custom</label>
                                    <div class="input-group">
                                        <span class="input-group-text">Rp</span>
                                        <input type="text" class="form-control" id="harga" value="0">
                                    </div>
                                </div>
                                <div class="mb-3 ">
                                    <label for="jumlahBahan" class="form-label">Banyaknya Pembelian</label>
                                    <input type="number" class="form-control" id="banyaknya" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sectionprofil-7">
                    <div class="grid">
                        <h1>Konversi Produk</h1>
                        <div class="gridshape">
                            <div class="grid3">
                                <div class="bagian1">
                                    <label for="jumlahBahan" class="form-label">Banyaknya Bahan Baku</label> <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="bagian2">
                                    <div class="gridtext">
                                        <div class="label">
                                            <label for="jumlahBahan" class="form-label">Jenis Pembelian</label>
                                        </div>
                                        <div class="radio">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">Set 1</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">Nuts Only</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                                <label class="form-check-label" for="inlineRadio3">Bolt Only</label>
                                            </div>
                                        </div>
                                    </div>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Per Biji, Per Dus, Per Bag, Per Peti</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="bagian1">
                                    <label for="jumlahBahan" class="form-label">Banyaknya</label>
                                    <input type="number" class="form-control" id="jumlahBahan" value="0">
                                </div>
                            </div>
                            <div class="end">
                                <a href="">+</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="endsection">
                    <div class="gridend">
                        <a href=""> Cancel</a>
                    </div>
                    <div class="gridend">
                        <a href="">Submit</a>
                    </div>
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
