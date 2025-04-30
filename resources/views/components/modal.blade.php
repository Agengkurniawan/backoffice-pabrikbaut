<!-- resources/views/components/modals.blade.php -->

<!-- Modal Ubah Status -->
<div class="modal fade" id="ubahStatusModal" tabindex="-1" aria-labelledby="ubahStatusLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Ubah Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="statusSelect" class="form-label fw-semibold">Status</label>
                <select id="statusSelect" class="form-select p-3" style="border-radius: 8px;">
                    <option value="Selesai">Selesai</option>
                    <option value="Disiapkan" selected>Disiapkan</option>
                    <option value="Dibatalkan">Dibatalkan</option>
                </select>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark px-4 py-2">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Konfirmasi Hapus Filter -->
<div class="modal fade " id="konfirmasiFilterModal" tabindex="-1" aria-labelledby="konfirmasiFilterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="konfirmasihapus">
                    <svg xmlns="http://www.w3.org/2000/svg" width="151" height="150" viewBox="0 0 151 150" fill="none">
                        <path d="M132.187 32.6875C122.125 31.6875 112.062 30.9375 101.937 30.375V30.3125L100.562 22.1875C99.6249 16.4375 98.2499 7.8125 83.6249 7.8125H67.2499C52.6874 7.8125 51.3124 16.0625 50.3124 22.125L48.9999 30.125C43.1874 30.5 37.3749 30.875 31.5624 31.4375L18.8124 32.6875C16.1874 32.9375 14.3124 35.25 14.5624 37.8125C14.8124 40.375 17.0624 42.25 19.6874 42L32.4374 40.75C65.1874 37.5 98.1874 38.75 131.312 42.0625C131.5 42.0625 131.625 42.0625 131.812 42.0625C134.187 42.0625 136.25 40.25 136.5 37.8125C136.687 35.25 134.812 32.9375 132.187 32.6875Z" fill="#A8A8A8" />
                        <path d="M120.687 50.875C119.187 49.3125 117.125 48.4375 115 48.4375H35.9999C33.8749 48.4375 31.7499 49.3125 30.3124 50.875C28.8749 52.4375 28.0624 54.5625 28.1874 56.75L32.0624 120.875C32.7499 130.375 33.6249 142.25 55.4374 142.25H95.5624C117.375 142.25 118.25 130.438 118.937 120.875L122.812 56.8125C122.937 54.5625 122.125 52.4375 120.687 50.875ZM85.8749 110.938H65.0624C62.4999 110.938 60.3749 108.812 60.3749 106.25C60.3749 103.688 62.4999 101.562 65.0624 101.562H85.8749C88.4374 101.562 90.5624 103.688 90.5624 106.25C90.5624 108.812 88.4374 110.938 85.8749 110.938ZM91.1249 85.9375H59.8749C57.3124 85.9375 55.1874 83.8125 55.1874 81.25C55.1874 78.6875 57.3124 76.5625 59.8749 76.5625H91.1249C93.6874 76.5625 95.8124 78.6875 95.8124 81.25C95.8124 83.8125 93.6874 85.9375 91.1249 85.9375Z" fill="#A8A8A8" />
                    </svg>
                    <h1>Are you sure want to delete this data</h1>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark px-4 py-2">Ya, Hapus</button>
            </div>
        </div>
    </div>
</div>


<!-- Scann -->
<!-- Modal Scan Barcode dengan Zxing -->
<div class="modal fade" id="scanModal" tabindex="-1" aria-labelledby="scanBarcodeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scanBarcodeModalLabel">Scan Barcode</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="stopScanner()" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <!-- Scanner akan ditampilkan di sini -->
                <div id="scanner-container">
                    <video id="barcode-scanner" style="width: 100%;"></video>
                </div>
                <p id="barcode-result" class="mt-3 text-success"></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary bagianscan" data-bs-toggle="modal" data-bs-target="#milihproduk" data-bs-dismiss="modal" onclick="pilihDariMaster()">Pilih dari Data Master</button>
            </div>
        </div>
    </div>
</div>


<!-- Setelah Scan Modal -->
<div class="modal fade " id="nextModal" tabindex="-1" aria-labelledby="nextproduk" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="bahanBaku" class="col-sm-12 col-form-label">Produk</label>
                    <div class="mb-3 row ">
                        <div class="mb-3 col-sm-9">
                            <select class="form-select" id="bahanBaku">
                                <option>As Besi S45C</option>
                                <option>Aluminium 6061</option>
                                <option>Stainless Steel 304</option>
                            </select>
                        </div>
                        <div class="col-sm-3 ">
                            <button class="btn btn-dark w-100 " data-bs-toggle="modal" data-bs-target="#scanModal" data-bs-dismiss="modal">Scan</button>
                        </div>
                        <div class="mb-3 ">
                            <label for="jumlahBahan" class="form-label">Merk</label>
                            <input type="text" class="form-control readonly-input" value="TMS" readonly>
                        </div>
                        <div class="mb-3 ">
                            <label for="jumlahBahan" class="form-label">Banyaknya</label>
                            <input type="number" class="form-control" id="jumlahBahan" value="0">
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
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark px-4 py-2" data-bs-dismiss="modal">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>


<!-- Jika Klik Memilih sendiri Produk Modal -->
<div class="modal fade " id="milihproduk" tabindex="-1" aria-labelledby="milihproduk" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="radio-container">
                    <label class="radio-card">
                        <input type="radio" name="item" value="baut" checked>
                        <div class="custom-radio"></div>
                        <img src="{{asset('assets/img/baut.png')}}" alt="Baut">
                        <p class="radio-label">Baut</p>
                    </label>
                    <label class="radio-card">
                        <input type="radio" name="item" value="as">
                        <div class="custom-radio"></div>
                        <img src="{{asset('assets/img/wesi.png')}}" alt="As">
                        <p class="radio-label">As</p>
                    </label>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark buttondark" id="btnLanjutkan" data-bs-dismiss="modal">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('btnLanjutkan').addEventListener('click', function() {
        let selectedValue = document.querySelector('input[name="item"]:checked').value;

        if (selectedValue === 'as') {
            // Jika memilih 'baut', arahkan ke halaman konfirmasi
            window.location.href = "/sale/konfirmasi";
        } else {
            var modal = new bootstrap.Modal(document.getElementById('pilihyangmana'));
            modal.show();
        }
    });
</script>


<!-- Setelah Milih Produk -->
<div class="modal fade " id="pilihyangmana" tabindex="-1" aria-labelledby="pilihyangmana" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="bahanBaku" class="col-sm-12 col-form-label">Produk</label>
                    <div class="mb-3 row ">
                        <div class="mb-3 col-sm-9">
                            <select class="form-select" id="bahanBaku">
                                <option>Pilih</option>
                                <option>Aluminium 6061</option>
                                <option>Stainless Steel 304</option>
                            </select>
                        </div>
                        <div class="col-sm-3 ">
                            <button class="btn btn-dark w-100 " data-bs-toggle="modal" data-bs-target="#scanModal" data-bs-dismiss="modal">Scan</button>
                        </div>
                        <div class="mb-3 ">
                            <label for="jumlahBahan" class="form-label">Merk</label>
                            <input type="text" class="form-control readonly-input" value="Pilih Produk" readonly>
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
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark buttondark">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>

<!-- Customer Baru -->
<div class="modal fade " id="customerbaru" tabindex="-1" aria-labelledby="customerbaru" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Customer Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="customer" class="col-sm-12 col-form-label">Nama Customer</label>
                    <div class="mb-3 row ">
                        <div class="mb-3 col-sm-12">
                            <input type="text" class="form-control" placeholder="Nama">
                        </div>
                        <div class="mb-3 ">
                            <label for="text" class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3 ">
                            <label for="number" class="form-label">No. Hp</label>
                            <input type="text" class="form-control" placeholder="No. Hp">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Print Detail Penjual -->
<div class="modal fade " id="printout" tabindex="-1" aria-labelledby="printout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Penjualan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="konfirmasiimg">
                    <img src="{{ asset('assets/img/printout.png') }}" alt="">
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-dark px-4 py-2 berbeda" data-bs-dismiss="modal">Download <svg class="svgdownload" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M17.333 8.55327H14.9247C12.9497 8.55327 11.3413 6.94494 11.3413 4.96994V2.5616C11.3413 2.10327 10.9663 1.72827 10.508 1.72827H6.97467C4.40801 1.72827 2.33301 3.39494 2.33301 6.36994V13.7533C2.33301 16.7283 4.40801 18.3949 6.97467 18.3949H13.5247C16.0913 18.3949 18.1663 16.7283 18.1663 13.7533V9.3866C18.1663 8.92827 17.7913 8.55327 17.333 8.55327ZM10.483 13.2116L8.81634 14.8783C8.75801 14.9366 8.68301 14.9866 8.60801 15.0116C8.53301 15.0449 8.45801 15.0616 8.37467 15.0616C8.29134 15.0616 8.21634 15.0449 8.14134 15.0116C8.07467 14.9866 8.00801 14.9366 7.95801 14.8866C7.94967 14.8783 7.94134 14.8783 7.94134 14.8699L6.27467 13.2033C6.03301 12.9616 6.03301 12.5616 6.27467 12.3199C6.51634 12.0783 6.91634 12.0783 7.15801 12.3199L7.74967 12.9283V9.4366C7.74967 9.09494 8.03301 8.8116 8.37467 8.8116C8.71634 8.8116 8.99967 9.09494 8.99967 9.4366V12.9283L9.59967 12.3283C9.84134 12.0866 10.2413 12.0866 10.483 12.3283C10.7247 12.5699 10.7247 12.9699 10.483 13.2116Z" fill="#414141" />
                        <path d="M14.7751 7.4031C15.5667 7.41144 16.6667 7.41144 17.6084 7.41144C18.0834 7.41144 18.3334 6.8531 18.0001 6.51977C16.8001 5.31144 14.6501 3.13644 13.4167 1.9031C13.0751 1.56144 12.4834 1.79477 12.4834 2.26977V5.1781C12.4834 6.39477 13.5167 7.4031 14.7751 7.4031Z" fill="#414141" />
                    </svg></button>
                <button type="button" class="buttondark btn-dark px-4 py-2">Print <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M6.58301 4.22827C6.58301 2.84494 7.69967 1.72827 9.08301 1.72827H12.4163C13.7997 1.72827 14.9163 2.84494 14.9163 4.22827C14.9163 4.6866 14.5413 5.0616 14.083 5.0616H7.41634C6.95801 5.0616 6.58301 4.6866 6.58301 4.22827Z" fill="white" />
                        <path d="M15.5413 12.5615C15.5413 12.9032 15.258 13.1865 14.9163 13.1865H14.083V15.8949C14.083 17.2782 12.9663 18.3949 11.583 18.3949H9.91634C8.53301 18.3949 7.41634 17.2782 7.41634 15.8949V13.1865H6.58301C6.24134 13.1865 5.95801 12.9032 5.95801 12.5615C5.95801 12.2199 6.24134 11.9365 6.58301 11.9365H14.9163C15.258 11.9365 15.5413 12.2199 15.5413 12.5615Z" fill="white" />
                        <path d="M15.75 5.89478H5.75C4.08333 5.89478 3.25 6.72811 3.25 8.39478V12.5614C3.25 14.2281 4.08333 15.0614 5.75 15.0614H6.0625C6.35015 15.0614 6.58333 14.8283 6.58333 14.5406C6.58333 14.253 6.34275 14.0285 6.07368 13.9268C5.52182 13.7183 5.125 13.1825 5.125 12.5614C5.125 11.7614 5.78333 11.1031 6.58333 11.1031H14.9167C15.7167 11.1031 16.375 11.7614 16.375 12.5614C16.375 13.1825 15.9782 13.7183 15.4263 13.9268C15.1572 14.0285 14.9167 14.253 14.9167 14.5406C14.9167 14.8283 15.1499 15.0614 15.4375 15.0614H15.75C17.4167 15.0614 18.25 14.2281 18.25 12.5614V8.39478C18.25 6.72811 17.4167 5.89478 15.75 5.89478ZM9.08333 9.85311H6.58333C6.24167 9.85311 5.95833 9.56978 5.95833 9.22811C5.95833 8.88644 6.24167 8.60311 6.58333 8.60311H9.08333C9.425 8.60311 9.70833 8.88644 9.70833 9.22811C9.70833 9.56978 9.425 9.85311 9.08333 9.85311Z" fill="white" />
                    </svg></button>
            </div>
        </div>
    </div>
</div>

<!-- Nota Penjualan detail -->
<div class="modal fade " id="notapesanan" tabindex="-1" aria-labelledby="notapesanan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Nota Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="konfirmasinota">
                    <div class="container">
                        <div class="form-check form-check-inline">
                            <label class="form-label fw-semibold">Apakah anda ingin menampilkan Diskon?</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="diskon" id="diskonYa" value="ya" checked>
                            <label class="form-check-label" for="diskonYa">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="diskon" id="diskonTidak" value="tidak">
                            <label class="form-check-label" for="diskonTidak">Tidak</label>
                        </div>
                    </div>
                    <div class="imgbawah">
                        <div class="space">
                            <h1>Nota</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.083 8.49175H14.6747C12.6997 8.49175 11.0913 6.88341 11.0913 4.90841V2.50008C11.0913 2.04175 10.7163 1.66675 10.258 1.66675H6.72467C4.15801 1.66675 2.08301 3.33342 2.08301 6.30841V13.6917C2.08301 16.6667 4.15801 18.3334 6.72467 18.3334H13.2747C15.8413 18.3334 17.9163 16.6667 17.9163 13.6917V9.32508C17.9163 8.86675 17.5413 8.49175 17.083 8.49175ZM10.233 13.1501L8.56634 14.8167C8.50801 14.8751 8.43301 14.9251 8.35801 14.9501C8.28301 14.9834 8.20801 15.0001 8.12467 15.0001C8.04134 15.0001 7.96634 14.9834 7.89134 14.9501C7.82467 14.9251 7.75801 14.8751 7.70801 14.8251C7.69967 14.8167 7.69134 14.8167 7.69134 14.8084L6.02467 13.1417C5.78301 12.9001 5.78301 12.5001 6.02467 12.2584C6.26634 12.0167 6.66634 12.0167 6.90801 12.2584L7.49967 12.8667V9.37508C7.49967 9.03341 7.78301 8.75008 8.12467 8.75008C8.46634 8.75008 8.74967 9.03341 8.74967 9.37508V12.8667L9.34967 12.2667C9.59134 12.0251 9.99134 12.0251 10.233 12.2667C10.4747 12.5084 10.4747 12.9084 10.233 13.1501Z" fill="#414141" />
                                <path d="M14.5251 7.34158C15.3167 7.34991 16.4167 7.34991 17.3584 7.34991C17.8334 7.34991 18.0834 6.79158 17.7501 6.45825C16.5501 5.24991 14.4001 3.07491 13.1667 1.84158C12.8251 1.49991 12.2334 1.73325 12.2334 2.20825V5.11658C12.2334 6.33325 13.2667 7.34158 14.5251 7.34158Z" fill="#414141" />
                            </svg>
                        </div>
                        <img src="{{ asset('assets/img/Nota1.png') }}" alt="">
                    </div>
                    <div class="imgbawah">
                        <div class="space">
                            <h1>Nota + Merk</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.083 8.49175H14.6747C12.6997 8.49175 11.0913 6.88341 11.0913 4.90841V2.50008C11.0913 2.04175 10.7163 1.66675 10.258 1.66675H6.72467C4.15801 1.66675 2.08301 3.33342 2.08301 6.30841V13.6917C2.08301 16.6667 4.15801 18.3334 6.72467 18.3334H13.2747C15.8413 18.3334 17.9163 16.6667 17.9163 13.6917V9.32508C17.9163 8.86675 17.5413 8.49175 17.083 8.49175ZM10.233 13.1501L8.56634 14.8167C8.50801 14.8751 8.43301 14.9251 8.35801 14.9501C8.28301 14.9834 8.20801 15.0001 8.12467 15.0001C8.04134 15.0001 7.96634 14.9834 7.89134 14.9501C7.82467 14.9251 7.75801 14.8751 7.70801 14.8251C7.69967 14.8167 7.69134 14.8167 7.69134 14.8084L6.02467 13.1417C5.78301 12.9001 5.78301 12.5001 6.02467 12.2584C6.26634 12.0167 6.66634 12.0167 6.90801 12.2584L7.49967 12.8667V9.37508C7.49967 9.03341 7.78301 8.75008 8.12467 8.75008C8.46634 8.75008 8.74967 9.03341 8.74967 9.37508V12.8667L9.34967 12.2667C9.59134 12.0251 9.99134 12.0251 10.233 12.2667C10.4747 12.5084 10.4747 12.9084 10.233 13.1501Z" fill="#414141" />
                                <path d="M14.5251 7.34158C15.3167 7.34991 16.4167 7.34991 17.3584 7.34991C17.8334 7.34991 18.0834 6.79158 17.7501 6.45825C16.5501 5.24991 14.4001 3.07491 13.1667 1.84158C12.8251 1.49991 12.2334 1.73325 12.2334 2.20825V5.11658C12.2334 6.33325 13.2667 7.34158 14.5251 7.34158Z" fill="#414141" />
                            </svg>
                        </div>
                        <img src="{{ asset('assets/img/Nota1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button " class="btn btn-outline-dark px-4 py-2 berbeda" data-bs-dismiss="modal">Download <svg class="svgdownload" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M17.333 8.55327H14.9247C12.9497 8.55327 11.3413 6.94494 11.3413 4.96994V2.5616C11.3413 2.10327 10.9663 1.72827 10.508 1.72827H6.97467C4.40801 1.72827 2.33301 3.39494 2.33301 6.36994V13.7533C2.33301 16.7283 4.40801 18.3949 6.97467 18.3949H13.5247C16.0913 18.3949 18.1663 16.7283 18.1663 13.7533V9.3866C18.1663 8.92827 17.7913 8.55327 17.333 8.55327ZM10.483 13.2116L8.81634 14.8783C8.75801 14.9366 8.68301 14.9866 8.60801 15.0116C8.53301 15.0449 8.45801 15.0616 8.37467 15.0616C8.29134 15.0616 8.21634 15.0449 8.14134 15.0116C8.07467 14.9866 8.00801 14.9366 7.95801 14.8866C7.94967 14.8783 7.94134 14.8783 7.94134 14.8699L6.27467 13.2033C6.03301 12.9616 6.03301 12.5616 6.27467 12.3199C6.51634 12.0783 6.91634 12.0783 7.15801 12.3199L7.74967 12.9283V9.4366C7.74967 9.09494 8.03301 8.8116 8.37467 8.8116C8.71634 8.8116 8.99967 9.09494 8.99967 9.4366V12.9283L9.59967 12.3283C9.84134 12.0866 10.2413 12.0866 10.483 12.3283C10.7247 12.5699 10.7247 12.9699 10.483 13.2116Z" fill="#414141" />
                        <path d="M14.7751 7.4031C15.5667 7.41144 16.6667 7.41144 17.6084 7.41144C18.0834 7.41144 18.3334 6.8531 18.0001 6.51977C16.8001 5.31144 14.6501 3.13644 13.4167 1.9031C13.0751 1.56144 12.4834 1.79477 12.4834 2.26977V5.1781C12.4834 6.39477 13.5167 7.4031 14.7751 7.4031Z" fill="#414141" />
                    </svg></button>
                <button type="button" class="buttondark btn-dark px-4 py-2">Print <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M6.58301 4.22827C6.58301 2.84494 7.69967 1.72827 9.08301 1.72827H12.4163C13.7997 1.72827 14.9163 2.84494 14.9163 4.22827C14.9163 4.6866 14.5413 5.0616 14.083 5.0616H7.41634C6.95801 5.0616 6.58301 4.6866 6.58301 4.22827Z" fill="white" />
                        <path d="M15.5413 12.5615C15.5413 12.9032 15.258 13.1865 14.9163 13.1865H14.083V15.8949C14.083 17.2782 12.9663 18.3949 11.583 18.3949H9.91634C8.53301 18.3949 7.41634 17.2782 7.41634 15.8949V13.1865H6.58301C6.24134 13.1865 5.95801 12.9032 5.95801 12.5615C5.95801 12.2199 6.24134 11.9365 6.58301 11.9365H14.9163C15.258 11.9365 15.5413 12.2199 15.5413 12.5615Z" fill="white" />
                        <path d="M15.75 5.89478H5.75C4.08333 5.89478 3.25 6.72811 3.25 8.39478V12.5614C3.25 14.2281 4.08333 15.0614 5.75 15.0614H6.0625C6.35015 15.0614 6.58333 14.8283 6.58333 14.5406C6.58333 14.253 6.34275 14.0285 6.07368 13.9268C5.52182 13.7183 5.125 13.1825 5.125 12.5614C5.125 11.7614 5.78333 11.1031 6.58333 11.1031H14.9167C15.7167 11.1031 16.375 11.7614 16.375 12.5614C16.375 13.1825 15.9782 13.7183 15.4263 13.9268C15.1572 14.0285 14.9167 14.253 14.9167 14.5406C14.9167 14.8283 15.1499 15.0614 15.4375 15.0614H15.75C17.4167 15.0614 18.25 14.2281 18.25 12.5614V8.39478C18.25 6.72811 17.4167 5.89478 15.75 5.89478ZM9.08333 9.85311H6.58333C6.24167 9.85311 5.95833 9.56978 5.95833 9.22811C5.95833 8.88644 6.24167 8.60311 6.58333 8.60311H9.08333C9.425 8.60311 9.70833 8.88644 9.70833 9.22811C9.70833 9.56978 9.425 9.85311 9.08333 9.85311Z" fill="white" />
                    </svg></button>
            </div>
        </div>
    </div>
</div>


<!-- Surat Jalan Penjualan -->
<div class="modal fade " id="suratjalan" tabindex="-1" aria-labelledby="suratjalan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Surat Jalan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="konfirmasinota">
                    <div class="container">
                        <div class="form-checkk ">
                            <label class="form-label ">Apakah anda ingin mengubah nama pengirim ?</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="diskon" id="diskonYa" value="ya" checked>
                            <label class="form-check-label" for="diskonYa">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="diskon" id="diskonTidak" value="tidak">
                            <label class="form-check-label" for="diskonTidak">Tidak</label>
                        </div>
                    </div>
                    <div class="form">
                        <label for="" class="form-label">Nama Pengirim</label>
                        <input type="text" class="form-control" placeholder="Nama">
                    </div>
                    <div class="konfirmasiimg berbedaimg">
                        <img src="{{ asset('assets/img/suratjalan.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-dark px-4 py-2 berbeda" data-bs-dismiss="modal">Download <svg class="svgdownload" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M17.333 8.55327H14.9247C12.9497 8.55327 11.3413 6.94494 11.3413 4.96994V2.5616C11.3413 2.10327 10.9663 1.72827 10.508 1.72827H6.97467C4.40801 1.72827 2.33301 3.39494 2.33301 6.36994V13.7533C2.33301 16.7283 4.40801 18.3949 6.97467 18.3949H13.5247C16.0913 18.3949 18.1663 16.7283 18.1663 13.7533V9.3866C18.1663 8.92827 17.7913 8.55327 17.333 8.55327ZM10.483 13.2116L8.81634 14.8783C8.75801 14.9366 8.68301 14.9866 8.60801 15.0116C8.53301 15.0449 8.45801 15.0616 8.37467 15.0616C8.29134 15.0616 8.21634 15.0449 8.14134 15.0116C8.07467 14.9866 8.00801 14.9366 7.95801 14.8866C7.94967 14.8783 7.94134 14.8783 7.94134 14.8699L6.27467 13.2033C6.03301 12.9616 6.03301 12.5616 6.27467 12.3199C6.51634 12.0783 6.91634 12.0783 7.15801 12.3199L7.74967 12.9283V9.4366C7.74967 9.09494 8.03301 8.8116 8.37467 8.8116C8.71634 8.8116 8.99967 9.09494 8.99967 9.4366V12.9283L9.59967 12.3283C9.84134 12.0866 10.2413 12.0866 10.483 12.3283C10.7247 12.5699 10.7247 12.9699 10.483 13.2116Z" fill="#414141" />
                        <path d="M14.7751 7.4031C15.5667 7.41144 16.6667 7.41144 17.6084 7.41144C18.0834 7.41144 18.3334 6.8531 18.0001 6.51977C16.8001 5.31144 14.6501 3.13644 13.4167 1.9031C13.0751 1.56144 12.4834 1.79477 12.4834 2.26977V5.1781C12.4834 6.39477 13.5167 7.4031 14.7751 7.4031Z" fill="#414141" />
                    </svg></button>
                <button type="button" class="buttondark btn-dark px-4 py-2">Print <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M6.58301 4.22827C6.58301 2.84494 7.69967 1.72827 9.08301 1.72827H12.4163C13.7997 1.72827 14.9163 2.84494 14.9163 4.22827C14.9163 4.6866 14.5413 5.0616 14.083 5.0616H7.41634C6.95801 5.0616 6.58301 4.6866 6.58301 4.22827Z" fill="white" />
                        <path d="M15.5413 12.5615C15.5413 12.9032 15.258 13.1865 14.9163 13.1865H14.083V15.8949C14.083 17.2782 12.9663 18.3949 11.583 18.3949H9.91634C8.53301 18.3949 7.41634 17.2782 7.41634 15.8949V13.1865H6.58301C6.24134 13.1865 5.95801 12.9032 5.95801 12.5615C5.95801 12.2199 6.24134 11.9365 6.58301 11.9365H14.9163C15.258 11.9365 15.5413 12.2199 15.5413 12.5615Z" fill="white" />
                        <path d="M15.75 5.89478H5.75C4.08333 5.89478 3.25 6.72811 3.25 8.39478V12.5614C3.25 14.2281 4.08333 15.0614 5.75 15.0614H6.0625C6.35015 15.0614 6.58333 14.8283 6.58333 14.5406C6.58333 14.253 6.34275 14.0285 6.07368 13.9268C5.52182 13.7183 5.125 13.1825 5.125 12.5614C5.125 11.7614 5.78333 11.1031 6.58333 11.1031H14.9167C15.7167 11.1031 16.375 11.7614 16.375 12.5614C16.375 13.1825 15.9782 13.7183 15.4263 13.9268C15.1572 14.0285 14.9167 14.253 14.9167 14.5406C14.9167 14.8283 15.1499 15.0614 15.4375 15.0614H15.75C17.4167 15.0614 18.25 14.2281 18.25 12.5614V8.39478C18.25 6.72811 17.4167 5.89478 15.75 5.89478ZM9.08333 9.85311H6.58333C6.24167 9.85311 5.95833 9.56978 5.95833 9.22811C5.95833 8.88644 6.24167 8.60311 6.58333 8.60311H9.08333C9.425 8.60311 9.70833 8.88644 9.70833 9.22811C9.70833 9.56978 9.425 9.85311 9.08333 9.85311Z" fill="white" />
                    </svg></button>
            </div>
        </div>
    </div>
</div>

<!-- UbahStatus Pembelian -->
<div class="modal fade" id="ubahStatuspembelianModal" tabindex="-1" aria-labelledby="ubahStatuspembelianModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Ubah Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="statusSelect" class="form-label fw-semibold">Status</label>
                <select id="statusSelect" class="form-select p-3" style="border-radius: 8px;">
                    <option value="Selesai">Selesai</option>
                    <option value="Disiapkan" selected>Disiapkan</option>
                    <option value="Dibatalkan">Dibatalkan</option>
                </select>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark px-4 py-2">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Konfirmasi Hapus Pembelian -->
<div class="modal fade " id="konfirmasiHapusModal" tabindex="-1" aria-labelledby="konfirmasiHapusLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="konfirmasihapus">
                    <svg xmlns="http://www.w3.org/2000/svg" width="151" height="150" viewBox="0 0 151 150" fill="none">
                        <path d="M132.187 32.6875C122.125 31.6875 112.062 30.9375 101.937 30.375V30.3125L100.562 22.1875C99.6249 16.4375 98.2499 7.8125 83.6249 7.8125H67.2499C52.6874 7.8125 51.3124 16.0625 50.3124 22.125L48.9999 30.125C43.1874 30.5 37.3749 30.875 31.5624 31.4375L18.8124 32.6875C16.1874 32.9375 14.3124 35.25 14.5624 37.8125C14.8124 40.375 17.0624 42.25 19.6874 42L32.4374 40.75C65.1874 37.5 98.1874 38.75 131.312 42.0625C131.5 42.0625 131.625 42.0625 131.812 42.0625C134.187 42.0625 136.25 40.25 136.5 37.8125C136.687 35.25 134.812 32.9375 132.187 32.6875Z" fill="#A8A8A8" />
                        <path d="M120.687 50.875C119.187 49.3125 117.125 48.4375 115 48.4375H35.9999C33.8749 48.4375 31.7499 49.3125 30.3124 50.875C28.8749 52.4375 28.0624 54.5625 28.1874 56.75L32.0624 120.875C32.7499 130.375 33.6249 142.25 55.4374 142.25H95.5624C117.375 142.25 118.25 130.438 118.937 120.875L122.812 56.8125C122.937 54.5625 122.125 52.4375 120.687 50.875ZM85.8749 110.938H65.0624C62.4999 110.938 60.3749 108.812 60.3749 106.25C60.3749 103.688 62.4999 101.562 65.0624 101.562H85.8749C88.4374 101.562 90.5624 103.688 90.5624 106.25C90.5624 108.812 88.4374 110.938 85.8749 110.938ZM91.1249 85.9375H59.8749C57.3124 85.9375 55.1874 83.8125 55.1874 81.25C55.1874 78.6875 57.3124 76.5625 59.8749 76.5625H91.1249C93.6874 76.5625 95.8124 78.6875 95.8124 81.25C95.8124 83.8125 93.6874 85.9375 91.1249 85.9375Z" fill="#A8A8A8" />
                    </svg>
                    <h1>Are you sure want to delete this data</h1>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark px-4 py-2">Ya, Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Supplier Baru -->
<div class="modal fade " id="supplierbaru" tabindex="-1" aria-labelledby="supplierbaru" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Supplier Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <div class="mb-3 row ">
                        <div class="mb-3 col-sm-12">
                            <label for="Supplier" class="col-sm-12 col-form-label">Nama Supplier</label>
                            <input type="text" class="form-control" placeholder="Nama">
                        </div>
                        <div class="mb-3 ">
                            <label for="text" class="form-label">PIC</label>
                            <input type="text" class="form-control" placeholder="Nama">
                        </div>
                        <div class="mb-3 ">
                            <label for="text" class="form-label">Email</label>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3 ">
                            <label for="number" class="form-label">No. Hp</label>
                            <input type="text" class="form-control" placeholder="No. Hp">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Simpan</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal Scan Bagian Pembelian -->
<div class="modal fade" id="scanpembelianModal" tabindex="-1" aria-labelledby="scanBarcodeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scanBarcodeModalLabel">Scan Barcode</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="stopScanner()" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <!-- Scanner akan ditampilkan di sini -->
                <div id="scanner-container">
                    <video id="barcode-scanner-pembelian" style="width: 100%;"></video>
                </div>
                <p id="barcode-result-pembelian" class="mt-3 text-success"></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary bagianscan" data-bs-toggle="modal" data-bs-target="#milihproduksendiri" data-bs-dismiss="modal" onclick="pilihDariMaster()">Pilih dari Data Master</button>
            </div>
        </div>
    </div>
</div>

<!-- Setelah Milih Produk Pembelian -->
<div class="modal fade " id="setelahscansendiri" tabindex="-1" aria-labelledby="setelahscansendiri" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="bahanBaku" class="col-sm-12 col-form-label">Produk</label>
                    <div class="mb-3 row ">
                        <div class="mb-3 col-sm-9">
                            <select class="form-select" id="bahanBaku">
                                <option>Pilih</option>
                                <option>Aluminium 6061</option>
                                <option>Stainless Steel 304</option>
                            </select>
                        </div>
                        <div class="col-sm-3 ">
                            <button class="btn btn-dark w-100 " data-bs-toggle="modal" data-bs-target="#scanModal" data-bs-dismiss="modal">Scan</button>
                        </div>
                        <div class="mb-3 ">
                            <label for="jumlahBahan" class="form-label">Merk</label>
                            <input type="text" class="form-control readonly-input" value="TMS" readonly>
                        </div>
                        <div class="mb-3 ">
                            <label for="number" class="form-label">Banyaknya</label>
                            <input type="number" class="form-control" value="0" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="jumlahBahan" class="form-label">Jenis Pembelian</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Per Biji, Per Dus, Per Bag, Per Peti</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 setelahmemilih">
                    <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-dark buttondark">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jika Klik Memilih sendiri Produk Modal sendiri Pembelian -->
<div class="modal fade " id="milihproduksendiri" tabindex="-1" aria-labelledby="milihproduksendiri" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="radio-container">
                    <label class="radio-card">
                        <input type="radio" name="item" value="baut" checked>
                        <div class="custom-radio"></div>
                        <a href="" data-bs-toggle="modal" data-bs-target="#setelahmemilihpembelian" data-bs-dismiss="modal"><img src="{{asset('assets/img/baut.png')}}" alt="Baut">
                            <p class="radio-label">Baut</p>
                        </a>
                    </label>
                    <label class="radio-card">
                        <input type="radio" name="item" value="as">
                        <div class="custom-radio"></div>
                        <a href="" data-bs-toggle="modal" data-bs-target="#bagianas" data-bs-dismiss="modal"><img src="{{asset('assets/img/wesi.png')}}" alt="As">
                            <p class="radio-label">As</p>
                        </a>
                    </label>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <a href="/sale/konfirmasi"><button type="button" class="btn btn-dark px-4 py-2">Lanjutkan</button></a>
            </div>
        </div>
    </div>
</div>

<!-- Setelah Milih Produk Pembelian -->
<div class="modal fade " id="setelahmemilihpembelian" tabindex="-1" aria-labelledby="setelahmemilihpembelian" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="bahanBaku" class="col-sm-12 col-form-label">Produk</label>
                    <div class="mb-3 row ">
                        <div class="mb-3 col-sm-9">
                            <select class="form-select" id="bahanBaku">
                                <option>Pilih</option>
                                <option>Aluminium 6061</option>
                                <option>Stainless Steel 304</option>
                            </select>
                        </div>
                        <div class="col-sm-3 ">
                            <button class="btn btn-dark w-100 " data-bs-toggle="modal" data-bs-target="#scanModal" data-bs-dismiss="modal">Scan</button>
                        </div>
                        <div class="mb-3 ">
                            <label for="jumlahBahan" class="form-label">Merk</label>
                            <input type="text" class="form-control readonly-input" value="Pilih Produk" readonly>
                        </div>
                        <div class="mb-3 ">
                            <label for="number" class="form-label">Banyaknya</label>
                            <input type="number" class="form-control" value="" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="jumlahBahan" class="form-label">Jenis Pembelian</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Per Biji, Per Dus, Per Bag, Per Peti</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 setelahmemilih">
                    <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-dark buttondark">Tambah</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Setelah Milih Produk AS -->
<div class="modal fade " id="bagianas" tabindex="-1" aria-labelledby="bagianas" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="bahanBaku" class="col-sm-12 col-form-label">Produk</label>
                    <div class="mb-3 row ">
                        <div class="mb-3 col-sm-9">
                            <select class="form-select" id="bahanBaku">
                                <option>Pilih</option>
                                <option>Aluminium 6061</option>
                                <option>Stainless Steel 304</option>
                            </select>
                        </div>
                        <div class="col-sm-3 ">
                            <button class="btn btn-dark w-100 " data-bs-toggle="modal" data-bs-target="#scanModal" data-bs-dismiss="modal">Scan</button>
                        </div>
                        <div class="mb-3">
                            <label for="banyaknya" class="form-label">Banyaknya</label>
                            <input type="number" class="form-control" placeholder="0">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark buttondark">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Konfirmasi Pengiriman Pembelian -->
<div class="modal fade " id="konfirmasipengiriman" tabindex="-1" aria-labelledby="konfirmasipengiriman" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next">
                    <div class="mb-3">
                        <label for="bahanBaku" class="col-sm-12 col-form-label">No. Surat Jalan</label>
                        <input type="text" class="form-control" placeholder="0">
                    </div>
                    <div class="container mt-3">
                        <label class="form-label fw-bold">Surat Jalan</label>
                        <div class="custom-file-upload">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M13.3337 13.8333L10.0003 10.5L6.66699 13.8333" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 10.5V18" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.9919 15.8249C17.8047 15.3818 18.4467 14.6806 18.8168 13.8321C19.1868 12.9835 19.2637 12.0359 19.0354 11.1388C18.807 10.2417 18.2864 9.44617 17.5558 8.87778C16.8251 8.30939 15.9259 8.00052 15.0002 7.99991H13.9502C13.698 7.02427 13.2278 6.11852 12.5752 5.35073C11.9225 4.58295 11.1042 3.97311 10.182 3.56708C9.25967 3.16104 8.25734 2.96937 7.25031 3.00647C6.24328 3.04358 5.25777 3.30849 4.36786 3.78129C3.47795 4.2541 2.7068 4.92249 2.1124 5.73622C1.51799 6.54996 1.11579 7.48785 0.936028 8.4794C0.756269 9.47095 0.803632 10.4903 1.07456 11.461C1.34548 12.4316 1.83291 13.3281 2.50021 14.0832" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.3337 13.8333L10.0003 10.5L6.66699 13.8333" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div>
                                <strong>Choose File</strong>
                                <p class="text-muted small">jpg, png, file is not more than 2 MB</p>
                            </div>
                            <div class="upload-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                    <path d="M7.46517 4.3335V1.0835L6.38184 2.16683" stroke="#FFFCF3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.46484 1.0835L8.54818 2.16683" stroke="#FFFCF3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.75651 6.5C2.58984 6.5 2.58984 7.46958 2.58984 8.66667V9.20833C2.58984 10.7033 2.58984 11.9167 5.29818 11.9167H9.63151C11.7982 11.9167 12.3398 10.7033 12.3398 9.20833V8.66667C12.3398 7.46958 12.3398 6.5 10.1732 6.5C9.63151 6.5 9.47984 6.61375 9.19818 6.825L8.64568 7.41C8.00651 8.0925 6.92318 8.0925 6.27859 7.41L5.73151 6.825C5.44984 6.61375 5.29818 6.5 4.75651 6.5Z" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.67285 6.49982V5.41648C3.67285 4.32773 3.67285 3.42857 5.29785 3.27148" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.2568 6.49982V5.41648C11.2568 4.32773 11.2568 3.42857 9.63184 3.27148" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input type="file" accept=".jpg,.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark buttondark">Konfirmasi</button>
            </div>
        </div>
    </div>
</div>

<!-- Surat Jalan Produk Pembelian -->
<div class="modal fade " id="suratjalanpembelian" tabindex="-1" aria-labelledby="suratjalanpembelian" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content " style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Surat Jalan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="konfirmasinota">
                    <div class="container">
                        <div class=" col-2 grid">
                            <h1>SKU</h1>
                            <h2>BM001</h2>
                        </div>
                        <div class="col-3 grid">
                            <h1>No. Surat Jalan</h1>
                            <h2>SJ00122</h2>
                        </div>
                        <div class="col-3 grid">
                            <h1>Produk</h1>
                            <h2>B/N 5 / 16” x 7” HITAM P1,25 NC 5</h2>
                        </div>
                    </div>
                    <div class="imgbawah">
                        <div class="space">
                            <h1>Surat Jalan</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.083 8.49175H14.6747C12.6997 8.49175 11.0913 6.88341 11.0913 4.90841V2.50008C11.0913 2.04175 10.7163 1.66675 10.258 1.66675H6.72467C4.15801 1.66675 2.08301 3.33342 2.08301 6.30841V13.6917C2.08301 16.6667 4.15801 18.3334 6.72467 18.3334H13.2747C15.8413 18.3334 17.9163 16.6667 17.9163 13.6917V9.32508C17.9163 8.86675 17.5413 8.49175 17.083 8.49175ZM10.233 13.1501L8.56634 14.8167C8.50801 14.8751 8.43301 14.9251 8.35801 14.9501C8.28301 14.9834 8.20801 15.0001 8.12467 15.0001C8.04134 15.0001 7.96634 14.9834 7.89134 14.9501C7.82467 14.9251 7.75801 14.8751 7.70801 14.8251C7.69967 14.8167 7.69134 14.8167 7.69134 14.8084L6.02467 13.1417C5.78301 12.9001 5.78301 12.5001 6.02467 12.2584C6.26634 12.0167 6.66634 12.0167 6.90801 12.2584L7.49967 12.8667V9.37508C7.49967 9.03341 7.78301 8.75008 8.12467 8.75008C8.46634 8.75008 8.74967 9.03341 8.74967 9.37508V12.8667L9.34967 12.2667C9.59134 12.0251 9.99134 12.0251 10.233 12.2667C10.4747 12.5084 10.4747 12.9084 10.233 13.1501Z" fill="#414141" />
                                <path d="M14.5251 7.34158C15.3167 7.34991 16.4167 7.34991 17.3584 7.34991C17.8334 7.34991 18.0834 6.79158 17.7501 6.45825C16.5501 5.24991 14.4001 3.07491 13.1667 1.84158C12.8251 1.49991 12.2334 1.73325 12.2334 2.20825V5.11658C12.2334 6.33325 13.2667 7.34158 14.5251 7.34158Z" fill="#414141" />
                            </svg>
                        </div>
                        <img src="{{ asset('assets/img/fotosuratjalanpng.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button " class="btn btn-outline-dark px-4 py-2 berbeda" data-bs-dismiss="modal">Download <svg class="svgdownload" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M17.333 8.55327H14.9247C12.9497 8.55327 11.3413 6.94494 11.3413 4.96994V2.5616C11.3413 2.10327 10.9663 1.72827 10.508 1.72827H6.97467C4.40801 1.72827 2.33301 3.39494 2.33301 6.36994V13.7533C2.33301 16.7283 4.40801 18.3949 6.97467 18.3949H13.5247C16.0913 18.3949 18.1663 16.7283 18.1663 13.7533V9.3866C18.1663 8.92827 17.7913 8.55327 17.333 8.55327ZM10.483 13.2116L8.81634 14.8783C8.75801 14.9366 8.68301 14.9866 8.60801 15.0116C8.53301 15.0449 8.45801 15.0616 8.37467 15.0616C8.29134 15.0616 8.21634 15.0449 8.14134 15.0116C8.07467 14.9866 8.00801 14.9366 7.95801 14.8866C7.94967 14.8783 7.94134 14.8783 7.94134 14.8699L6.27467 13.2033C6.03301 12.9616 6.03301 12.5616 6.27467 12.3199C6.51634 12.0783 6.91634 12.0783 7.15801 12.3199L7.74967 12.9283V9.4366C7.74967 9.09494 8.03301 8.8116 8.37467 8.8116C8.71634 8.8116 8.99967 9.09494 8.99967 9.4366V12.9283L9.59967 12.3283C9.84134 12.0866 10.2413 12.0866 10.483 12.3283C10.7247 12.5699 10.7247 12.9699 10.483 13.2116Z" fill="#414141" />
                        <path d="M14.7751 7.4031C15.5667 7.41144 16.6667 7.41144 17.6084 7.41144C18.0834 7.41144 18.3334 6.8531 18.0001 6.51977C16.8001 5.31144 14.6501 3.13644 13.4167 1.9031C13.0751 1.56144 12.4834 1.79477 12.4834 2.26977V5.1781C12.4834 6.39477 13.5167 7.4031 14.7751 7.4031Z" fill="#414141" />
                    </svg></button>
                <button type="button" class="buttondark btn-dark px-4 py-2">Print <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M6.58301 4.22827C6.58301 2.84494 7.69967 1.72827 9.08301 1.72827H12.4163C13.7997 1.72827 14.9163 2.84494 14.9163 4.22827C14.9163 4.6866 14.5413 5.0616 14.083 5.0616H7.41634C6.95801 5.0616 6.58301 4.6866 6.58301 4.22827Z" fill="white" />
                        <path d="M15.5413 12.5615C15.5413 12.9032 15.258 13.1865 14.9163 13.1865H14.083V15.8949C14.083 17.2782 12.9663 18.3949 11.583 18.3949H9.91634C8.53301 18.3949 7.41634 17.2782 7.41634 15.8949V13.1865H6.58301C6.24134 13.1865 5.95801 12.9032 5.95801 12.5615C5.95801 12.2199 6.24134 11.9365 6.58301 11.9365H14.9163C15.258 11.9365 15.5413 12.2199 15.5413 12.5615Z" fill="white" />
                        <path d="M15.75 5.89478H5.75C4.08333 5.89478 3.25 6.72811 3.25 8.39478V12.5614C3.25 14.2281 4.08333 15.0614 5.75 15.0614H6.0625C6.35015 15.0614 6.58333 14.8283 6.58333 14.5406C6.58333 14.253 6.34275 14.0285 6.07368 13.9268C5.52182 13.7183 5.125 13.1825 5.125 12.5614C5.125 11.7614 5.78333 11.1031 6.58333 11.1031H14.9167C15.7167 11.1031 16.375 11.7614 16.375 12.5614C16.375 13.1825 15.9782 13.7183 15.4263 13.9268C15.1572 14.0285 14.9167 14.253 14.9167 14.5406C14.9167 14.8283 15.1499 15.0614 15.4375 15.0614H15.75C17.4167 15.0614 18.25 14.2281 18.25 12.5614V8.39478C18.25 6.72811 17.4167 5.89478 15.75 5.89478ZM9.08333 9.85311H6.58333C6.24167 9.85311 5.95833 9.56978 5.95833 9.22811C5.95833 8.88644 6.24167 8.60311 6.58333 8.60311H9.08333C9.425 8.60311 9.70833 8.88644 9.70833 9.22811C9.70833 9.56978 9.425 9.85311 9.08333 9.85311Z" fill="white" />
                    </svg></button>
            </div>
        </div>
    </div>
</div>

<!-- Konfirmasi Pengiriman PO Pembelian -->
<div class="modal fade " id="konfirmasipengirimanPO" tabindex="-1" aria-labelledby="konfirmasipengirimanPO" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Konfirmasi PO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="container mb-3">
                    <div class="btn">
                        <button type="button" class="btn btn-light active" id="btnFromPC">From PC</button>
                        <button type="button" class="btn btn-light" id="btnFromMobile">From Mobile</button>
                    </div>
                </div>
                <!-- Content From PC -->
                <div id="contentFromPC" class="next">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nota PO</label>
                        <div class="custom-file-upload">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M13.3337 13.8333L10.0003 10.5L6.66699 13.8333" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 10.5V18" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.9919 15.8249C17.8047 15.3818 18.4467 14.6806 18.8168 13.8321C19.1868 12.9835 19.2637 12.0359 19.0354 11.1388C18.807 10.2417 18.2864 9.44617 17.5558 8.87778C16.8251 8.30939 15.9259 8.00052 15.0002 7.99991H13.9502C13.698 7.02427 13.2278 6.11852 12.5752 5.35073C11.9225 4.58295 11.1042 3.97311 10.182 3.56708C9.25967 3.16104 8.25734 2.96937 7.25031 3.00647C6.24328 3.04358 5.25777 3.30849 4.36786 3.78129C3.47795 4.2541 2.7068 4.92249 2.1124 5.73622C1.51799 6.54996 1.11579 7.48785 0.936028 8.4794C0.756269 9.47095 0.803632 10.4903 1.07456 11.461C1.34548 12.4316 1.83291 13.3281 2.50021 14.0832" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.3337 13.8333L10.0003 10.5L6.66699 13.8333" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div>
                                <strong>Choose File</strong>
                                <p class="text-muted small">jpg, png, file is not more than 2 MB</p>
                            </div>
                            <div class="upload-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                    <path d="M7.46517 4.3335V1.0835L6.38184 2.16683" stroke="#FFFCF3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.46484 1.0835L8.54818 2.16683" stroke="#FFFCF3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.75651 6.5C2.58984 6.5 2.58984 7.46958 2.58984 8.66667V9.20833C2.58984 10.7033 2.58984 11.9167 5.29818 11.9167H9.63151C11.7982 11.9167 12.3398 10.7033 12.3398 9.20833V8.66667C12.3398 7.46958 12.3398 6.5 10.1732 6.5C9.63151 6.5 9.47984 6.61375 9.19818 6.825L8.64568 7.41C8.00651 8.0925 6.92318 8.0925 6.27859 7.41L5.73151 6.825C5.44984 6.61375 5.29818 6.5 4.75651 6.5Z" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.67285 6.49982V5.41648C3.67285 4.32773 3.67285 3.42857 5.29785 3.27148" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.2568 6.49982V5.41648C11.2568 4.32773 11.2568 3.42857 9.63184 3.27148" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input type="file" accept=".jpg,.png">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Surat Tanda Terima</label>
                        <div class="custom-file-upload">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M13.3337 13.8333L10.0003 10.5L6.66699 13.8333" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 10.5V18" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.9919 15.8249C17.8047 15.3818 18.4467 14.6806 18.8168 13.8321C19.1868 12.9835 19.2637 12.0359 19.0354 11.1388C18.807 10.2417 18.2864 9.44617 17.5558 8.87778C16.8251 8.30939 15.9259 8.00052 15.0002 7.99991H13.9502C13.698 7.02427 13.2278 6.11852 12.5752 5.35073C11.9225 4.58295 11.1042 3.97311 10.182 3.56708C9.25967 3.16104 8.25734 2.96937 7.25031 3.00647C6.24328 3.04358 5.25777 3.30849 4.36786 3.78129C3.47795 4.2541 2.7068 4.92249 2.1124 5.73622C1.51799 6.54996 1.11579 7.48785 0.936028 8.4794C0.756269 9.47095 0.803632 10.4903 1.07456 11.461C1.34548 12.4316 1.83291 13.3281 2.50021 14.0832" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.3337 13.8333L10.0003 10.5L6.66699 13.8333" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div>
                                <strong>Choose File</strong>
                                <p class="text-muted small">jpg, png, file is not more than 2 MB</p>
                            </div>
                            <div class="upload-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                    <path d="M7.46517 4.3335V1.0835L6.38184 2.16683" stroke="#FFFCF3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.46484 1.0835L8.54818 2.16683" stroke="#FFFCF3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.75651 6.5C2.58984 6.5 2.58984 7.46958 2.58984 8.66667V9.20833C2.58984 10.7033 2.58984 11.9167 5.29818 11.9167H9.63151C11.7982 11.9167 12.3398 10.7033 12.3398 9.20833V8.66667C12.3398 7.46958 12.3398 6.5 10.1732 6.5C9.63151 6.5 9.47984 6.61375 9.19818 6.825L8.64568 7.41C8.00651 8.0925 6.92318 8.0925 6.27859 7.41L5.73151 6.825C5.44984 6.61375 5.29818 6.5 4.75651 6.5Z" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.67285 6.49982V5.41648C3.67285 4.32773 3.67285 3.42857 5.29785 3.27148" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.2568 6.49982V5.41648C11.2568 4.32773 11.2568 3.42857 9.63184 3.27148" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input type="file" accept=".jpg,.png">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Faktur Pajak (Opsional)</label>
                        <div class="custom-file-upload">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M13.3337 13.8333L10.0003 10.5L6.66699 13.8333" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 10.5V18" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.9919 15.8249C17.8047 15.3818 18.4467 14.6806 18.8168 13.8321C19.1868 12.9835 19.2637 12.0359 19.0354 11.1388C18.807 10.2417 18.2864 9.44617 17.5558 8.87778C16.8251 8.30939 15.9259 8.00052 15.0002 7.99991H13.9502C13.698 7.02427 13.2278 6.11852 12.5752 5.35073C11.9225 4.58295 11.1042 3.97311 10.182 3.56708C9.25967 3.16104 8.25734 2.96937 7.25031 3.00647C6.24328 3.04358 5.25777 3.30849 4.36786 3.78129C3.47795 4.2541 2.7068 4.92249 2.1124 5.73622C1.51799 6.54996 1.11579 7.48785 0.936028 8.4794C0.756269 9.47095 0.803632 10.4903 1.07456 11.461C1.34548 12.4316 1.83291 13.3281 2.50021 14.0832" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.3337 13.8333L10.0003 10.5L6.66699 13.8333" stroke="#888D91" stroke-width="0.833333" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div>
                                <strong>Choose File</strong>
                                <p class="text-muted small">jpg, png, file is not more than 2 MB</p>
                            </div>
                            <div class="upload-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
                                    <path d="M7.46517 4.3335V1.0835L6.38184 2.16683" stroke="#FFFCF3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.46484 1.0835L8.54818 2.16683" stroke="#FFFCF3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M4.75651 6.5C2.58984 6.5 2.58984 7.46958 2.58984 8.66667V9.20833C2.58984 10.7033 2.58984 11.9167 5.29818 11.9167H9.63151C11.7982 11.9167 12.3398 10.7033 12.3398 9.20833V8.66667C12.3398 7.46958 12.3398 6.5 10.1732 6.5C9.63151 6.5 9.47984 6.61375 9.19818 6.825L8.64568 7.41C8.00651 8.0925 6.92318 8.0925 6.27859 7.41L5.73151 6.825C5.44984 6.61375 5.29818 6.5 4.75651 6.5Z" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M3.67285 6.49982V5.41648C3.67285 4.32773 3.67285 3.42857 5.29785 3.27148" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.2568 6.49982V5.41648C11.2568 4.32773 11.2568 3.42857 9.63184 3.27148" stroke="#FFFCF3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <input type="file" accept=".jpg,.png">
                        </div>
                    </div>
                </div>

                <!-- Content From Mobile -->
                <div id="contentFromMobile" class="d-none text-center">
                    <img src={{ asset('assets/img/qr.png') }} alt="QR Code" class="img-fluid">
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark buttondark">Submit </button>
            </div>
        </div>
    </div>
</div>

<!-- Surat Tanda Terima Detail Pembelian -->
<div class="modal fade " id="surattandaterimapembelian" tabindex="-1" aria-labelledby="surattandaterimapembelian" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content " style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Surat Tanda Terima</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="konfirmasinota">
                    <div class="imgbawah">
                        <div class="space">
                            <h1>Surat Tanda Terima</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.083 8.49175H14.6747C12.6997 8.49175 11.0913 6.88341 11.0913 4.90841V2.50008C11.0913 2.04175 10.7163 1.66675 10.258 1.66675H6.72467C4.15801 1.66675 2.08301 3.33342 2.08301 6.30841V13.6917C2.08301 16.6667 4.15801 18.3334 6.72467 18.3334H13.2747C15.8413 18.3334 17.9163 16.6667 17.9163 13.6917V9.32508C17.9163 8.86675 17.5413 8.49175 17.083 8.49175ZM10.233 13.1501L8.56634 14.8167C8.50801 14.8751 8.43301 14.9251 8.35801 14.9501C8.28301 14.9834 8.20801 15.0001 8.12467 15.0001C8.04134 15.0001 7.96634 14.9834 7.89134 14.9501C7.82467 14.9251 7.75801 14.8751 7.70801 14.8251C7.69967 14.8167 7.69134 14.8167 7.69134 14.8084L6.02467 13.1417C5.78301 12.9001 5.78301 12.5001 6.02467 12.2584C6.26634 12.0167 6.66634 12.0167 6.90801 12.2584L7.49967 12.8667V9.37508C7.49967 9.03341 7.78301 8.75008 8.12467 8.75008C8.46634 8.75008 8.74967 9.03341 8.74967 9.37508V12.8667L9.34967 12.2667C9.59134 12.0251 9.99134 12.0251 10.233 12.2667C10.4747 12.5084 10.4747 12.9084 10.233 13.1501Z" fill="#414141" />
                                <path d="M14.5251 7.34158C15.3167 7.34991 16.4167 7.34991 17.3584 7.34991C17.8334 7.34991 18.0834 6.79158 17.7501 6.45825C16.5501 5.24991 14.4001 3.07491 13.1667 1.84158C12.8251 1.49991 12.2334 1.73325 12.2334 2.20825V5.11658C12.2334 6.33325 13.2667 7.34158 14.5251 7.34158Z" fill="#414141" />
                            </svg>
                        </div>
                        <img src="{{ asset('assets/img/surattandaterima.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button " class="btn btn-outline-dark px-4 py-2 berbeda" data-bs-dismiss="modal">Edit </button>
                <button type="button" class="buttondark btn-dark px-4 py-2">Print <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                        <path d="M6.58301 4.22827C6.58301 2.84494 7.69967 1.72827 9.08301 1.72827H12.4163C13.7997 1.72827 14.9163 2.84494 14.9163 4.22827C14.9163 4.6866 14.5413 5.0616 14.083 5.0616H7.41634C6.95801 5.0616 6.58301 4.6866 6.58301 4.22827Z" fill="white" />
                        <path d="M15.5413 12.5615C15.5413 12.9032 15.258 13.1865 14.9163 13.1865H14.083V15.8949C14.083 17.2782 12.9663 18.3949 11.583 18.3949H9.91634C8.53301 18.3949 7.41634 17.2782 7.41634 15.8949V13.1865H6.58301C6.24134 13.1865 5.95801 12.9032 5.95801 12.5615C5.95801 12.2199 6.24134 11.9365 6.58301 11.9365H14.9163C15.258 11.9365 15.5413 12.2199 15.5413 12.5615Z" fill="white" />
                        <path d="M15.75 5.89478H5.75C4.08333 5.89478 3.25 6.72811 3.25 8.39478V12.5614C3.25 14.2281 4.08333 15.0614 5.75 15.0614H6.0625C6.35015 15.0614 6.58333 14.8283 6.58333 14.5406C6.58333 14.253 6.34275 14.0285 6.07368 13.9268C5.52182 13.7183 5.125 13.1825 5.125 12.5614C5.125 11.7614 5.78333 11.1031 6.58333 11.1031H14.9167C15.7167 11.1031 16.375 11.7614 16.375 12.5614C16.375 13.1825 15.9782 13.7183 15.4263 13.9268C15.1572 14.0285 14.9167 14.253 14.9167 14.5406C14.9167 14.8283 15.1499 15.0614 15.4375 15.0614H15.75C17.4167 15.0614 18.25 14.2281 18.25 12.5614V8.39478C18.25 6.72811 17.4167 5.89478 15.75 5.89478ZM9.08333 9.85311H6.58333C6.24167 9.85311 5.95833 9.56978 5.95833 9.22811C5.95833 8.88644 6.24167 8.60311 6.58333 8.60311H9.08333C9.425 8.60311 9.70833 8.88644 9.70833 9.22811C9.70833 9.56978 9.425 9.85311 9.08333 9.85311Z" fill="white" />
                    </svg></button>
            </div>
        </div>
    </div>
</div>

<!-- Dokumen PO -->
<div class="modal fade " id="dokumenPO" tabindex="-1" aria-labelledby="dokumenPO" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Nota Pesanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="konfirmasinota">
                    <div class="imgbawah">
                        <div class="space">
                            <h1>Nota PO</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.083 8.49175H14.6747C12.6997 8.49175 11.0913 6.88341 11.0913 4.90841V2.50008C11.0913 2.04175 10.7163 1.66675 10.258 1.66675H6.72467C4.15801 1.66675 2.08301 3.33342 2.08301 6.30841V13.6917C2.08301 16.6667 4.15801 18.3334 6.72467 18.3334H13.2747C15.8413 18.3334 17.9163 16.6667 17.9163 13.6917V9.32508C17.9163 8.86675 17.5413 8.49175 17.083 8.49175ZM10.233 13.1501L8.56634 14.8167C8.50801 14.8751 8.43301 14.9251 8.35801 14.9501C8.28301 14.9834 8.20801 15.0001 8.12467 15.0001C8.04134 15.0001 7.96634 14.9834 7.89134 14.9501C7.82467 14.9251 7.75801 14.8751 7.70801 14.8251C7.69967 14.8167 7.69134 14.8167 7.69134 14.8084L6.02467 13.1417C5.78301 12.9001 5.78301 12.5001 6.02467 12.2584C6.26634 12.0167 6.66634 12.0167 6.90801 12.2584L7.49967 12.8667V9.37508C7.49967 9.03341 7.78301 8.75008 8.12467 8.75008C8.46634 8.75008 8.74967 9.03341 8.74967 9.37508V12.8667L9.34967 12.2667C9.59134 12.0251 9.99134 12.0251 10.233 12.2667C10.4747 12.5084 10.4747 12.9084 10.233 13.1501Z" fill="#414141" />
                                <path d="M14.5251 7.34158C15.3167 7.34991 16.4167 7.34991 17.3584 7.34991C17.8334 7.34991 18.0834 6.79158 17.7501 6.45825C16.5501 5.24991 14.4001 3.07491 13.1667 1.84158C12.8251 1.49991 12.2334 1.73325 12.2334 2.20825V5.11658C12.2334 6.33325 13.2667 7.34158 14.5251 7.34158Z" fill="#414141" />
                            </svg>
                        </div>
                        <img src="{{ asset('assets/img/notadokumen.png') }}" alt="">
                    </div>
                    <div class="imgbawah">
                        <div class="space">
                            <h1>Surat Tanda Terima</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.083 8.49175H14.6747C12.6997 8.49175 11.0913 6.88341 11.0913 4.90841V2.50008C11.0913 2.04175 10.7163 1.66675 10.258 1.66675H6.72467C4.15801 1.66675 2.08301 3.33342 2.08301 6.30841V13.6917C2.08301 16.6667 4.15801 18.3334 6.72467 18.3334H13.2747C15.8413 18.3334 17.9163 16.6667 17.9163 13.6917V9.32508C17.9163 8.86675 17.5413 8.49175 17.083 8.49175ZM10.233 13.1501L8.56634 14.8167C8.50801 14.8751 8.43301 14.9251 8.35801 14.9501C8.28301 14.9834 8.20801 15.0001 8.12467 15.0001C8.04134 15.0001 7.96634 14.9834 7.89134 14.9501C7.82467 14.9251 7.75801 14.8751 7.70801 14.8251C7.69967 14.8167 7.69134 14.8167 7.69134 14.8084L6.02467 13.1417C5.78301 12.9001 5.78301 12.5001 6.02467 12.2584C6.26634 12.0167 6.66634 12.0167 6.90801 12.2584L7.49967 12.8667V9.37508C7.49967 9.03341 7.78301 8.75008 8.12467 8.75008C8.46634 8.75008 8.74967 9.03341 8.74967 9.37508V12.8667L9.34967 12.2667C9.59134 12.0251 9.99134 12.0251 10.233 12.2667C10.4747 12.5084 10.4747 12.9084 10.233 13.1501Z" fill="#414141" />
                                <path d="M14.5251 7.34158C15.3167 7.34991 16.4167 7.34991 17.3584 7.34991C17.8334 7.34991 18.0834 6.79158 17.7501 6.45825C16.5501 5.24991 14.4001 3.07491 13.1667 1.84158C12.8251 1.49991 12.2334 1.73325 12.2334 2.20825V5.11658C12.2334 6.33325 13.2667 7.34158 14.5251 7.34158Z" fill="#414141" />
                            </svg>
                        </div>
                        <img src="{{ asset('assets/img/surattandaPO.png') }}" alt="">
                    </div>
                    <div class="imgbawah">
                        <div class="space">
                            <h1>Faktur Pajak</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path d="M17.083 8.49175H14.6747C12.6997 8.49175 11.0913 6.88341 11.0913 4.90841V2.50008C11.0913 2.04175 10.7163 1.66675 10.258 1.66675H6.72467C4.15801 1.66675 2.08301 3.33342 2.08301 6.30841V13.6917C2.08301 16.6667 4.15801 18.3334 6.72467 18.3334H13.2747C15.8413 18.3334 17.9163 16.6667 17.9163 13.6917V9.32508C17.9163 8.86675 17.5413 8.49175 17.083 8.49175ZM10.233 13.1501L8.56634 14.8167C8.50801 14.8751 8.43301 14.9251 8.35801 14.9501C8.28301 14.9834 8.20801 15.0001 8.12467 15.0001C8.04134 15.0001 7.96634 14.9834 7.89134 14.9501C7.82467 14.9251 7.75801 14.8751 7.70801 14.8251C7.69967 14.8167 7.69134 14.8167 7.69134 14.8084L6.02467 13.1417C5.78301 12.9001 5.78301 12.5001 6.02467 12.2584C6.26634 12.0167 6.66634 12.0167 6.90801 12.2584L7.49967 12.8667V9.37508C7.49967 9.03341 7.78301 8.75008 8.12467 8.75008C8.46634 8.75008 8.74967 9.03341 8.74967 9.37508V12.8667L9.34967 12.2667C9.59134 12.0251 9.99134 12.0251 10.233 12.2667C10.4747 12.5084 10.4747 12.9084 10.233 13.1501Z" fill="#414141" />
                                <path d="M14.5251 7.34158C15.3167 7.34991 16.4167 7.34991 17.3584 7.34991C17.8334 7.34991 18.0834 6.79158 17.7501 6.45825C16.5501 5.24991 14.4001 3.07491 13.1667 1.84158C12.8251 1.49991 12.2334 1.73325 12.2334 2.20825V5.11658C12.2334 6.33325 13.2667 7.34158 14.5251 7.34158Z" fill="#414141" />
                            </svg>
                        </div>
                        <img src="{{ asset('assets/img/fakturpajak.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button " class="btn btn-outline-dark px-4 py-2 berbeda" data-bs-dismiss="modal">Edit</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("btnFromPC").addEventListener("click", function() {
        document.getElementById("contentFromPC").classList.remove("d-none");
        document.getElementById("contentFromMobile").classList.add("d-none");
        this.classList.add("active");
        document.getElementById("btnFromMobile").classList.remove("active");
    });

    document.getElementById("btnFromMobile").addEventListener("click", function() {
        document.getElementById("contentFromMobile").classList.remove("d-none");
        document.getElementById("contentFromPC").classList.add("d-none");
        this.classList.add("active");
        document.getElementById("btnFromPC").classList.remove("active");
    });
</script>


<!-- BAGIAN PRODUCT -->


<!-- Jika Klik Memilih sendiri Produk Modal -->
<div class="modal fade " id="Memilihbagianproduk" tabindex="-1" aria-labelledby="Memilihbagianproduk" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="radio-container">
                    <label class="radio-card">
                        <input type="radio" name="item" value="baut" checked>
                        <div class="custom-radio"></div>
                        <img src="{{asset('assets/img/baut.png')}}" alt="Baut">
                        <p class="radio-label">Baut</p>
                    </label>
                    <label class="radio-card">
                        <input type="radio" name="item" value="as">
                        <div class="custom-radio"></div>
                        <img src="{{asset('assets/img/wesi.png')}}" alt="As">
                        <p class="radio-label">As</p>
                    </label>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark buttondark" id="btnLanjutkann" data-bs-dismiss="modal">Lanjutkan</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('btnLanjutkann').addEventListener('click', function() {
        let selectedValue = document.querySelector('input[name="item"]:checked').value;

        if (selectedValue === 'baut') {
            // Jika memilih 'baut', arahkan ke halaman konfirmasi
            window.location.href = "/product/add-product";
        } else {
            window.location.href = "/product/add-product/as";

        }
    });
</script>


<!-- Update Stock -->
<div class="modal fade " id="UpdateStock" tabindex="-1" aria-labelledby="UpdateStock" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Update Stock</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StockUpdate" class="col-12 col-form-label">Stock</label>
                    <div class="col-12 mb-3 row ">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="100.000">
                            <Span class="input-group-text"> Biji</Span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark buttondark">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Ubah Status -->
<div class="modal fade " id="UbahStatuss" tabindex="-1" aria-labelledby="UbahStatuss" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Ubah Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Status</label>
                    <div class="col-12 mb-3 row ">
                        <select name="" id="" class="form-select">
                            <option value="Aktif">Aktif</option>
                            <option value="Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark buttondark">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Konfirmasi Hapus Filter -->
<div class="modal fade " id="bagianHapusproduk" tabindex="-1" aria-labelledby="bagianHapusproduk" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="konfirmasihapus">
                    <svg xmlns="http://www.w3.org/2000/svg" width="151" height="150" viewBox="0 0 151 150" fill="none">
                        <path d="M132.187 32.6875C122.125 31.6875 112.062 30.9375 101.937 30.375V30.3125L100.562 22.1875C99.6249 16.4375 98.2499 7.8125 83.6249 7.8125H67.2499C52.6874 7.8125 51.3124 16.0625 50.3124 22.125L48.9999 30.125C43.1874 30.5 37.3749 30.875 31.5624 31.4375L18.8124 32.6875C16.1874 32.9375 14.3124 35.25 14.5624 37.8125C14.8124 40.375 17.0624 42.25 19.6874 42L32.4374 40.75C65.1874 37.5 98.1874 38.75 131.312 42.0625C131.5 42.0625 131.625 42.0625 131.812 42.0625C134.187 42.0625 136.25 40.25 136.5 37.8125C136.687 35.25 134.812 32.9375 132.187 32.6875Z" fill="#A8A8A8" />
                        <path d="M120.687 50.875C119.187 49.3125 117.125 48.4375 115 48.4375H35.9999C33.8749 48.4375 31.7499 49.3125 30.3124 50.875C28.8749 52.4375 28.0624 54.5625 28.1874 56.75L32.0624 120.875C32.7499 130.375 33.6249 142.25 55.4374 142.25H95.5624C117.375 142.25 118.25 130.438 118.937 120.875L122.812 56.8125C122.937 54.5625 122.125 52.4375 120.687 50.875ZM85.8749 110.938H65.0624C62.4999 110.938 60.3749 108.812 60.3749 106.25C60.3749 103.688 62.4999 101.562 65.0624 101.562H85.8749C88.4374 101.562 90.5624 103.688 90.5624 106.25C90.5624 108.812 88.4374 110.938 85.8749 110.938ZM91.1249 85.9375H59.8749C57.3124 85.9375 55.1874 83.8125 55.1874 81.25C55.1874 78.6875 57.3124 76.5625 59.8749 76.5625H91.1249C93.6874 76.5625 95.8124 78.6875 95.8124 81.25C95.8124 83.8125 93.6874 85.9375 91.1249 85.9375Z" fill="#A8A8A8" />
                    </svg>
                    <h1>Are you sure want to delete this data</h1>
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn buttondark">Ya, Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Tambah Posisi Penyimpanan -->
<div class="modal fade " id="tambahposisi" tabindex="-1" aria-labelledby="tambahposisi" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Posisi Penyimpanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">CV</label>
                    <div class="col-12 mb-3 row ">
                        <select name="" id="" class="form-select">
                            <option value="CV">CV</option>
                            <option value="Aktif">Aktif</option>
                            <option value="tidak aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="next-Scan">
                    <label for="posisipenyimanan" class="col-12 col-form-label">Posisi Penyimpanan</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Posisi">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Tambah</button>
            </div>
        </div>
    </div>
</div>


<!-- DATA Master -->

<!-- Tambah Tipe -->
<div class="modal fade " id="tambahtipe" tabindex="-1" aria-labelledby="tambahtipe" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Tipe</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Nama Tipe</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Nama">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Ubah Status -->
<div class="modal fade " id="UbahStatusdata" tabindex="-1" aria-labelledby="UbahStatusdata" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Ubah Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Status</label>
                    <div class="col-12 mb-3 row ">
                        <select name="" id="" class="form-select">
                            <option value="Aktif">Aktif</option>
                            <option value="Aktif">Tidak Aktif</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-dark buttondark">Simpan</button>
            </div>
        </div>
    </div>
</div>

<!-- Tambah Ukuran -->
<div class="modal fade " id="tambahukuran" tabindex="-1" aria-labelledby="tambahukuran" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Ukuran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Ukuran</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Ukuran">
                    </div>
                </div>
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Satuan</label>
                    <div class="col-12 mb-3 row ">
                        <select name="" id="" class="form-select">
                            <option value="Pilih">Pilih</option>
                            <option value="Pilih"></option>

                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Tambah Warna -->
<div class="modal fade " id="tambahwarna" tabindex="-1" aria-labelledby="tambahwarna" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Warna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Warna</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Warna">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Tambah Pitch -->
<div class="modal fade " id="tambahpitch" tabindex="-1" aria-labelledby="tambahpitch" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Pitch</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Pitch</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Pitch">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Tambah Jenis Produk -->
<div class="modal fade " id="tambahjenisproduk" tabindex="-1" aria-labelledby="tambahjenisproduk" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Jenis Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Jenis Produk</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Jenis Produk">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Tambah Kunci -->
<div class="modal fade " id="tambahkunci" tabindex="-1" aria-labelledby="tambahkunci" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Kunci</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Kunci</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Kunci">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Tambah Merk -->
<div class="modal fade " id="tambahmerk" tabindex="-1" aria-labelledby="tambahmerk" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Merk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Nama Merk</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Nama">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Tambah</button>
            </div>
        </div>
    </div>
</div>


<!-- BAGIAN CUSTOMER -->
<!-- Tambah Customer -->
<div class="modal fade " id="tambahcustomer" tabindex="-1" aria-labelledby="tambahcustomer" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Customer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Nama Customer</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Nama">
                    </div>
                </div>
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Email</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Email">
                    </div>
                </div>
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">No. Hp</label>
                    <div class="col-12 mb-3 row ">
                        <input type="number" class="form-control" value="0">
                    </div>
                </div>
                <div class="textkuu">
                    <h1>Pengiriman Nota Pembelian</h1>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            WhatsApp </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Email </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- BAGIAN Supplier -->
<!-- Tambah Supplier -->
<div class="modal fade " id="tambahsupplier" tabindex="-1" aria-labelledby="tambahsupplier" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="modal-header border-0 d-flex justify-content-center w-100">
                <h5 class="modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Tambah Supplier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Nama Supplier</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Nama">
                    </div>
                </div>
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">PIC</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="PIC">
                    </div>
                </div>
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">Email</label>
                    <div class="col-12 mb-3 row ">
                        <input type="text" class="form-control" value="Email">
                    </div>
                </div>
                <div class="next-Scan">
                    <label for="StausUpdate" class="col-12 col-form-label">No. Hp</label>
                    <div class="col-12 mb-3 row ">
                        <input type="number" class="form-control" value="0">
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-dark buttondark">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Logout -->
<div class="modal fade " id="logout" tabindex="-1" aria-labelledby="logout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 10px;">
            <div class="logout modal-header border-0 d-flex justify-content-center w-100">
                <h5 class=" modal-title-centered fw-bold text-center w-100" id="ubahStatusLabel">Logout Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <hr class="solid">
            <div class="modal-body">
                <div class="logoutt">
                    <h1>Are you sure you want to log out of this account? You will need to log back in after successfully logging out.</h1>
                </div>
            </div>
            <div class="modal-footer border-0 setelahmemilih">
                <button type="button" class="btn btn-outline-dark px-4 py-2" data-bs-dismiss="modal">Cancel</button>
                <a href="/">
                    <button type="button" class="btn btn-dark buttondark">Logout</button></a>
            </div>
        </div>
    </div>
</div>
