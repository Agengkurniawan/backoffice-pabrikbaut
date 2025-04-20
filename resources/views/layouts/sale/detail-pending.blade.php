@extends('apps')
@section('content')

<section class="detail-pending">
    <div class="content-hall-first">
        @include ('components.sidebar')
        <div class="hall-second">
            @include('components.header')
            <div class="sectionprofil-3">
                <div class="grid">
                    <div class="col-4">
                        <div class="col-6 top">
                            <h1>Budi Santoso</h1>
                            <button type="button " class="btn btn-primary btn-sm">Pending</button>
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
                    <div class="col-4">
                        <div class="card-header">
                            <div class="img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M21.9199 16.7501C21.5899 19.4101 19.4099 21.5901 16.7499 21.9201C15.1399 22.1201 13.6399 21.6801 12.4699 20.8201C11.7999 20.3301 11.9599 19.2901 12.7599 19.0501C15.7699 18.1401 18.1399 15.7601 19.0599 12.7501C19.2999 11.9601 20.3399 11.8001 20.8299 12.4601C21.6799 13.6401 22.1199 15.1401 21.9199 16.7501Z" fill="white" />
                                    <path d="M9.99 2C5.58 2 2 5.58 2 9.99C2 14.4 5.58 17.98 9.99 17.98C14.4 17.98 17.98 14.4 17.98 9.99C17.97 5.58 14.4 2 9.99 2ZM9.05 8.87L11.46 9.71C12.33 10.02 12.75 10.63 12.75 11.57C12.75 12.65 11.89 13.54 10.84 13.54H10.75V13.59C10.75 14 10.41 14.34 10 14.34C9.59 14.34 9.25 14 9.25 13.59V13.53C8.14 13.48 7.25 12.55 7.25 11.39C7.25 10.98 7.59 10.64 8 10.64C8.41 10.64 8.75 10.98 8.75 11.39C8.75 11.75 9.01 12.04 9.33 12.04H10.83C11.06 12.04 11.24 11.83 11.24 11.57C11.24 11.22 11.18 11.2 10.95 11.12L8.54 10.28C7.68 9.98 7.25 9.37 7.25 8.42C7.25 7.34 8.11 6.45 9.16 6.45H9.25V6.41C9.25 6 9.59 5.66 10 5.66C10.41 5.66 10.75 6 10.75 6.41V6.47C11.86 6.52 12.75 7.45 12.75 8.61C12.75 9.02 12.41 9.36 12 9.36C11.59 9.36 11.25 9.02 11.25 8.61C11.25 8.25 10.99 7.96 10.67 7.96H9.17C8.94 7.96 8.76 8.17 8.76 8.43C8.75 8.77 8.81 8.79 9.05 8.87Z" fill="white" />
                                </svg>
                            </div>
                            <div class="text">
                                <h1>Total Produk</h1>
                                <p>Rp 624.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectionprofil-6">
                <div class="endsection">
                    <div class="gridend">
                        <a class="tab-button active  {{ Request::is('sale/detail-pending-produk') ? 'active' : '' }}"
                            data-target="produkTablecontainer">
                            Daftar Produk </a>
                    </div>
                    <div class="gridend">
                        <a class="tab-button  {{ Request::is('sale/detail-pending-history') ? 'active' : '' }}"
                            data-target="historyTablecontainer">
                            History Pergantian Table </a>
                    </div>
                </div>
                <div class="containerr">
                    <div id="produkTablecontainer" class="tab-content active" {{ Request::is('sale/detail-pending-produk') ? 'active' : '' }}>
                        <div class="top-grid">
                            <div class="grid">
                                <h5>Daftar Produk</h5>
                            </div>
                            <div class="grid">
                                <a href="" data-bs-toggle="modal" data-bs-target="#printout"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M10.7628 1.5H7.23781C6.45781 1.5 5.82031 2.13 5.82031 2.91V3.615C5.82031 4.395 6.45031 5.025 7.23031 5.025H10.7628C11.5428 5.025 12.1728 4.395 12.1728 3.615V2.91C12.1803 2.13 11.5428 1.5 10.7628 1.5Z" fill="white" />
                                        <path d="M12.9303 3.61511C12.9303 4.80761 11.9553 5.78261 10.7628 5.78261H7.23777C6.04527 5.78261 5.07027 4.80761 5.07027 3.61511C5.07027 3.19511 4.62027 2.93261 4.24527 3.12761C3.18777 3.69011 2.46777 4.80761 2.46777 6.09011V13.1476C2.46777 14.9926 3.97527 16.5001 5.82027 16.5001H12.1803C14.0253 16.5001 15.5328 14.9926 15.5328 13.1476V6.09011C15.5328 4.80761 14.8128 3.69011 13.7553 3.12761C13.3803 2.93261 12.9303 3.19511 12.9303 3.61511ZM9.28527 12.7126H6.00027C5.69277 12.7126 5.43777 12.4576 5.43777 12.1501C5.43777 11.8426 5.69277 11.5876 6.00027 11.5876H9.28527C9.59277 11.5876 9.84777 11.8426 9.84777 12.1501C9.84777 12.4576 9.59277 12.7126 9.28527 12.7126ZM11.2503 9.71261H6.00027C5.69277 9.71261 5.43777 9.45761 5.43777 9.15011C5.43777 8.84261 5.69277 8.58761 6.00027 8.58761H11.2503C11.5578 8.58761 11.8128 8.84261 11.8128 9.15011C11.8128 9.45761 11.5578 9.71261 11.2503 9.71261Z" fill="white" />
                                    </svg>Penjualan</a>
                                <a href="" class="change" data-bs-toggle="modal" data-bs-target="#notapesanan"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M11.835 1.5H6.165C3.33 1.5 2.625 2.2575 2.625 5.28V13.725C2.625 15.72 3.72 16.1925 5.0475 14.7675L5.055 14.76C5.67 14.1075 6.6075 14.16 7.14 14.8725L7.8975 15.885C8.505 16.6875 9.4875 16.6875 10.095 15.885L10.8525 14.8725C11.3925 14.1525 12.33 14.1 12.945 14.76C14.28 16.185 15.3675 15.7125 15.3675 13.7175V5.28C15.375 2.2575 14.67 1.5 11.835 1.5ZM5.835 9C5.4225 9 5.085 8.6625 5.085 8.25C5.085 7.8375 5.4225 7.5 5.835 7.5C6.2475 7.5 6.585 7.8375 6.585 8.25C6.585 8.6625 6.2475 9 5.835 9ZM5.835 6C5.4225 6 5.085 5.6625 5.085 5.25C5.085 4.8375 5.4225 4.5 5.835 4.5C6.2475 4.5 6.585 4.8375 6.585 5.25C6.585 5.6625 6.2475 6 5.835 6ZM12.1725 8.8125H8.0475C7.74 8.8125 7.485 8.5575 7.485 8.25C7.485 7.9425 7.74 7.6875 8.0475 7.6875H12.1725C12.48 7.6875 12.735 7.9425 12.735 8.25C12.735 8.5575 12.48 8.8125 12.1725 8.8125ZM12.1725 5.8125H8.0475C7.74 5.8125 7.485 5.5575 7.485 5.25C7.485 4.9425 7.74 4.6875 8.0475 4.6875H12.1725C12.48 4.6875 12.735 4.9425 12.735 5.25C12.735 5.5575 12.48 5.8125 12.1725 5.8125Z" fill="white" />
                                    </svg>Draft Nota</a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#suratjalan"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M16.125 11.625C16.335 11.625 16.5 11.79 16.5 12V12.75C16.5 13.995 15.495 15 14.25 15C14.25 13.7625 13.2375 12.75 12 12.75C10.7625 12.75 9.75 13.7625 9.75 15H8.25C8.25 13.7625 7.2375 12.75 6 12.75C4.7625 12.75 3.75 13.7625 3.75 15C2.505 15 1.5 13.995 1.5 12.75V11.25C1.5 10.8375 1.8375 10.5 2.25 10.5H9.375C10.41 10.5 11.25 9.66 11.25 8.625V4.5C11.25 4.0875 11.5875 3.75 12 3.75H12.63C13.17 3.75 13.665 4.0425 13.935 4.5075L14.415 5.3475C14.4825 5.4675 14.3925 5.625 14.25 5.625C13.215 5.625 12.375 6.465 12.375 7.5V9.75C12.375 10.785 13.215 11.625 14.25 11.625H16.125Z" fill="white" />
                                        <path d="M6 16.5C6.82843 16.5 7.5 15.8284 7.5 15C7.5 14.1716 6.82843 13.5 6 13.5C5.17157 13.5 4.5 14.1716 4.5 15C4.5 15.8284 5.17157 16.5 6 16.5Z" fill="white" />
                                        <path d="M12 16.5C12.8284 16.5 13.5 15.8284 13.5 15C13.5 14.1716 12.8284 13.5 12 13.5C11.1716 13.5 10.5 14.1716 10.5 15C10.5 15.8284 11.1716 16.5 12 16.5Z" fill="white" />
                                        <path d="M16.5 9.3975V10.5H14.25C13.8375 10.5 13.5 10.1625 13.5 9.75V7.5C13.5 7.0875 13.8375 6.75 14.25 6.75H15.2175L16.305 8.655C16.4325 8.88 16.5 9.135 16.5 9.3975Z" fill="white" />
                                        <path d="M9.81 1.5H4.2675C2.925 1.5 1.8 2.46 1.5525 3.735H4.83C5.115 3.735 5.34 3.9675 5.34 4.2525C5.34 4.5375 5.115 4.7625 4.83 4.7625H1.5V5.7975H3.45C3.735 5.7975 3.9675 6.03 3.9675 6.315C3.9675 6.6 3.735 6.825 3.45 6.825H1.5V7.86H2.0775C2.3625 7.86 2.595 8.0925 2.595 8.3775C2.595 8.6625 2.3625 8.8875 2.0775 8.8875H1.5V9.06C1.5 9.4725 1.8375 9.81 2.25 9.81H9.1125C9.8775 9.81 10.5 9.1875 10.5 8.4225V2.19C10.5 1.8075 10.1925 1.5 9.81 1.5Z" fill="white" />
                                        <path d="M1.5525 3.73511H1.44H0.705C0.42 3.73511 0.1875 3.96761 0.1875 4.25261C0.1875 4.53761 0.42 4.76261 0.705 4.76261H1.3875H1.5V4.26761C1.5 4.08761 1.5225 3.90761 1.5525 3.73511Z" fill="white" />
                                        <path d="M1.3875 5.79761H0.705C0.42 5.79761 0.1875 6.03011 0.1875 6.31511C0.1875 6.60011 0.42 6.82511 0.705 6.82511H1.3875H1.5V5.79761H1.3875Z" fill="white" />
                                        <path d="M1.3875 7.86011H0.705C0.42 7.86011 0.1875 8.09261 0.1875 8.37761C0.1875 8.66261 0.42 8.88761 0.705 8.88761H1.3875H1.5V7.86011H1.3875Z" fill="white" />
                                    </svg>Surat Jalan</a>
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
                                <div class="col-auto bagian1">
                                    <select id="filterTipe" class="form-select Tipe">
                                        <option value="">Tipe</option>
                                        <option value="Tipe Rudal Jaya">Tipe Rudal Jaya</option>
                                    </select>
                                </div>
                                <div class="col-auto bagian2">
                                    <select id="filterCV" class="form-select CV">
                                        <option value="">Ukuran</option>
                                        <option value="CV Rudal Jaya">CV Rudal Jaya</option>
                                    </select>
                                </div>
                                <div class="col-auto bagian3">
                                    <select id="filterWarna & Pitch" class="form-select Warna & Pitch">
                                        <option value="">Warna & Pitch</option>
                                        <option value="Warna & Pitch Rudal Jaya">Warna & Pitch Rudal Jaya</option>
                                    </select>
                                </div>
                                <div class="col-auto bagian4">
                                    <select id="filterJenis Produk" class="form-select Jenis Produk">
                                        <option value="">Jenis Produk</option>
                                        <option value="Jenis Produk Rudal Jaya">Jenis Produk Rudal Jaya</option>
                                    </select>
                                </div>
                                <div class="col-auto bagian5">
                                    <select id="filterKunci" class="form-select Kunci">
                                        <option value="">Kunci</option>
                                        <option value="Kunci Rudal Jaya">Kunci Rudal Jaya</option>
                                    </select>
                                </div>
                                <div class="col-auto bagian6">
                                    <select id="filterMerk" class="form-select Merk">
                                        <option value="">Merk</option>
                                        <option value="Merk Rudal Jaya">Merk Rudal Jaya</option>
                                    </select>
                                </div>
                                <div class="col-auto bagian7">
                                    <select id="filterJenis Pembelian" class="form-select Jenis Pembelian">
                                        <option value="">Jenis Pembelian</option>
                                        <option value="Jenis Pembelian Rudal Jaya">Jenis Pembelian Rudal Jaya</option>
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
                                        <th>Bahan Konversi/Custom
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
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BM0001</td>
                                        <td>-</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC </td>
                                        <td>Per Biji / 1 Set</td>
                                        <td>1.000</td>
                                        <td>Rp 156</td>
                                        <td>Rp 156.000</td>
                                        <td class="sendiri">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/sale/detail-produk/konversi">Detail Produk</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0002</td>
                                        <td>-</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC </td>
                                        <td>Per Dus / Nuts Only</td>
                                        <td>5</td>
                                        <td>Rp 7.800</td>
                                        <td>Rp 39.000</td>
                                        <td class="sendiri">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/sale/detail-produk/konversi">Detail Produk</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0003</td>
                                        <td>-</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC </td>
                                        <td>Per Dus / 1 Set</td>
                                        <td>5</td>
                                        <td>Rp 7.800</td>
                                        <td>Rp 39.000</td>
                                        <td class="sendiri">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/sale/detail-produk/konversi">Detail Produk</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0004</td>
                                        <td>As Besi AISI 1020</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC </td>
                                        <td>Per Bag / Bolt Only</td>
                                        <td>5</td>
                                        <td>Rp 39.000</td>
                                        <td>Rp 195.000</td>
                                        <td class="sendiri">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/sale/detail-produk/konversi">Detail Produk</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BM0005</td>
                                        <td>As Besi SCM440</td>
                                        <td>Baut Custom A</td>
                                        <td>Per Bag / Bolt Only</td>
                                        <td>5</td>
                                        <td>Rp 39.000</td>
                                        <td>Rp 195.000 </td>
                                        <td class="sendiri">
                                            <div class="dropdown">
                                                <button class="dropdownn" type="button" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                        <path d="M5.5 10.25C4.4 10.25 3.5 11.15 3.5 12.25C3.5 13.35 4.4 14.25 5.5 14.25C6.6 14.25 7.5 13.35 7.5 12.25C7.5 11.15 6.6 10.25 5.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M19.5 10.25C18.4 10.25 17.5 11.15 17.5 12.25C17.5 13.35 18.4 14.25 19.5 14.25C20.6 14.25 21.5 13.35 21.5 12.25C21.5 11.15 20.6 10.25 19.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                        <path d="M12.5 10.25C11.4 10.25 10.5 11.15 10.5 12.25C10.5 13.35 11.4 14.25 12.5 14.25C13.6 14.25 14.5 13.35 14.5 12.25C14.5 11.15 13.6 10.25 12.5 10.25Z" stroke="#292D32" stroke-width="1.5" />
                                                    </svg></button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="/sale/detail-produk/custom">Detail Produk</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="historyTablecontainer" class="tab-content" {{ Request::is('sale/detail-pending-history') ? 'active' : '' }}>
                        <div class="dataTables_wrapper history ">
                            <table id="historyTable" class="table table-striped table-responsive">
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
                                        <th>Bahan Konversi/Custom
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
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BM0001</td>
                                        <td>-</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC </td>
                                    </tr>
                                    <tr>
                                        <td>BM0002</td>
                                        <td>-</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC </td>
                                    </tr>
                                    <tr>
                                        <td>BM0003</td>
                                        <td>-</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC </td>
                                    </tr>
                                    <tr>
                                        <td>BM0004</td>
                                        <td>As Besi AISI 1020</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC </td>
                                    </tr>
                                    <tr>
                                        <td>BM0005</td>
                                        <td>As Besi SCM440</td>
                                        <td>B/N 5 / 16” x 7” HITAM P1,25 NC MTH </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
