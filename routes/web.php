<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('apps');
});
Route::get('/', function () {

    return view('auth.login',);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::view('/dashboard', 'layouts.dashboard.dashboard')->name('dashboard');

// sale
// Route::view('/sale', 'layouts.sale.sale')->name('sale');
Route::get('/sale', function () {
    $data = [
        [

            'id' => 1,
            'no' => 'SO-0001',
            'tanggal' => '11/02/2025',
            'customer' => 'Dewi Lestari',
            'supplier' => 'CV Rudal Jaya',
            'pic' => 'Budi Santoso',
            'produk' => 6,
            'total' => 4340000,
        ],
        [
            'id' => 2,
            'no' => 'SO-0002',
            'tanggal' => '12/02/2025',
            'customer' => 'Andi Saputra',
            'supplier' => 'PT Maju Mundur',
            'pic' => 'Siti Aminah',
            'produk' => 3,
            'total' => 2500000,
        ],
        [
            'id' => 3,
            'no' => 'SO-0003',
            'tanggal' => '13/02/2025',
            'customer' => 'Budi Santoso',
            'supplier' => 'CV Jaya Abadi',
            'pic' => 'Dewi Lestari',
            'produk' => 8,
            'total' => 6000000,
        ],
        [
            'id' => 4,
            'no' => 'SO-0004',
            'tanggal' => '14/02/2025',
            'customer' => 'Siti Aminah',
            'supplier' => 'PT Maju Jaya',
            'pic' => 'Andi Saputra',
            'produk' => 5,
            'total' => 3500000,
        ],
        [
            'id' => 5,
            'no' => 'SO-0004',
            'tanggal' => '14/02/2025',
            'customer' => 'Siti Aminah',
            'supplier' => 'PT Maju Jaya',
            'pic' => 'Andi Saputra',
            'produk' => 5,
            'total' => 3500000,
        ],
    ];
    return view('layouts.sale.sale', [
        'datas' => $data,
    ]);
})->name('sale');
Route::view('/sale/edit', 'layouts.sale.edit')->name('sale-edit');
Route::view('/sale/konfirmasi', 'layouts.sale.konfirmasi')->name('sale-konfirmasi');
Route::view('/sale/detail-pending', 'layouts.sale.detail-pending')->name('sale-detail-pending');
Route::view('/sale/detail-disiapkan', 'layouts.sale.detail-disiapkan')->name('sale-detail-disiapkan');
Route::view('/sale/detail-produk/konversi', 'layouts.sale.detail-produk-konversi')->name('sale-detail-produk-konversi');
Route::view('/sale/detail-produk/custom', 'layouts.sale.detail-produk-custom')->name('sale-detail-produk-custom');


// purchase
Route::view('/purchase', 'layouts.purchase.purchase')->name('purchase');
Route::view('/purchase/edit-purchase', 'layouts.purchase.edit-purchase')->name('purchase-edit-purchase');
Route::view('/purchase/detail-purchase/process', 'layouts.purchase.detail-purchase-process')->name('purchase-detail-purchase-process');
Route::view('/purchase/purchase-konfirmasipenerimaan', 'layouts.purchase.purchase-konfirmasipenerimaan')->name('purchase-konfirmasipenerimaan');
Route::view('/purchase/detail-purchase/end', 'layouts.purchase.detail-purchase-end')->name('purchase-detail-purchase-end');
Route::view('/purchase/detail-purchase/receipt', 'layouts.purchase.detail-purchase-receipt')->name('purchase-detail-purchase-receipt');
Route::view('/purchase/detail-purchase/ended', 'layouts.purchase.detail-purchase-ended')->name('purchase-detail-purchase-ended');
Route::view('/purchase/detail-purchase/sended', 'layouts.purchase.detail-purchase-sended')->name('purchase-detail-purchase-sended');

// product
Route::view('/product', 'layouts.product.product')->name('product');
Route::view('/product/add-product', 'layouts.product.add-product')->name('add-product');
Route::view('/product/add-product/as', 'layouts.product.add-product-as')->name('add-product-as');
Route::view('/product/detail-baut1', 'layouts.product.detail-baut1')->name('detail-baut1');
Route::view('/product/detail-baut2', 'layouts.product.detail-baut2')->name('detail-baut2');
Route::view('/product/detail-as', 'layouts.product.detail-as')->name('detail-as');


// Data-Master

Route::view('/data/tipe', 'layouts.data.data-tipe')->name('data-tipe');
Route::view('/data/tipe/detail', 'layouts.data.detail-tipe')->name('detail-tipe');
Route::view('/data/ukuran', 'layouts.data.data-ukuran')->name('data-ukuran');
Route::view('/data/ukuran/detail', 'layouts.data.detail-ukuran')->name('detail-ukuran');
Route::view('/data/warna', 'layouts.data.data-warna')->name('data-warna');
Route::view('/data/warna/detail', 'layouts.data.detail-warna')->name('detail-warna');
Route::view('/data/pitch', 'layouts.data.data-pitch')->name('data-pitch');
Route::view('/data/pitch/detail', 'layouts.data.detail-pitch')->name('detail-pitch');
Route::view('/data/jenisproduk', 'layouts.data.data-jenisproduk')->name('data-jenisproduk');
Route::view('/data/jenisproduk/detail', 'layouts.data.detail-jenisproduk')->name('detail-jenisproduk');
Route::view('/data/kunci', 'layouts.data.data-kunci')->name('data-kunci');
Route::view('/data/kunci/detail', 'layouts.data.detail-kunci')->name('detail-kunci');
Route::view('/data/merk', 'layouts.data.data-merk')->name('data-merk');
Route::view('/data/merk/detail', 'layouts.data.detail-merk')->name('detail-merk');


// Rekap Penjualan
Route::view('/rekappenjualan', 'layouts.rekappenjualan.rekap-penjualan')->name('rekappenjualan');
Route::view('/rekappenjualan/detail', 'layouts.rekappenjualan.detail-rekappenjualan')->name('detail-rekappenjualan');

// Customer
Route::view('/customer', 'layouts.customer.customer')->name('customer');

// Supplier
Route::view('/supplier', 'layouts.supplier.supplier')->name('supplier');
