@extends('layouts.frontend-2')

@section('outside-main')
<!-- START JUMBOTRON -->
<div class="jumbotron jumbotron-fluid mb-6">
    <div class="container mt-4">
        <div class="row flex justify-content-between align-items-center">
            <div class="col-md-7">
                <img src="{{ asset('asset/img/jumbotron-image.png') }}" alt="">
            </div>
            <div class="col-md-4">
                <div>
                    <h1 class="text-white">Belajar Online</h1>
                    <span class="text-secondary-purple">Belajar dimanpun & kapanpun kamu mau</span>
                </div>
                <div class="form-group mt-5 input-with-icon">
                    <input type="text" class="form-control" placeholder="Cari Kelas...">
                    <span>
                        <img src="{{ asset('asset/icon/search-icon.png') }}" alt="">
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END JUMBOTRON -->
@endsection

@section('inside-main')
<div class="container">
    <h2 class="mt-5 d-flex justify-content-center text-gray mb-5">
        Kursus Terbaru
    </h2>
    <div class="px-5">
        <div class="d-inline category">
            <button class="btn-category bg-pink text-white font-montserrat font-semibold">SD</button>
            <button class="btn-outline-category bg-outline-pink text-gray font-montserrat font-semibold ml-2">SMP</button>
            <button class="btn-outline-category bg-outline-pink text-gray font-montserrat font-semibold ml-2">SMA</button>
            <button class="btn-outline-category bg-outline-pink text-gray font-montserrat font-semibold ml-2">UMUM</button>
        </div>
        <div class="d-flex justify-content-between mb-3 mt-5">
            <div class="card card-rounded font-montserrat" style="width: 19.5rem;">
                <img class="card-img-top mt-3" src="https://filedn.com/ltOdFv1aqz1YIFhf4gTY8D7/ingus-info/BLOGS/Photography-stocks3/stock-photography-slider.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text font-semibold text-gray mb-3">Mendirikan Startup dan Cara Membagi...</p>
                    <div class="d-inline">
                        <svg width="19" height="20" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.3859 6.33831L12.6901 5.51709L10.1439 0.396152C10.0743 0.255944 9.95993 0.142442 9.8186 0.0734507C9.46415 -0.100141 9.03343 0.0445188 8.85621 0.396152L6.31002 5.51709L0.614191 6.33831C0.457157 6.36057 0.313583 6.43401 0.20366 6.54529C0.0707685 6.68079 -0.00246073 6.86309 6.31408e-05 7.05213C0.00258702 7.24117 0.0806575 7.42149 0.21712 7.55345L4.33813 11.5394L3.36452 17.1677C3.34169 17.2987 3.35629 17.4333 3.40668 17.5564C3.45706 17.6795 3.54121 17.7862 3.64958 17.8643C3.75795 17.9424 3.8862 17.9887 4.0198 17.9982C4.1534 18.0077 4.28699 17.9798 4.40543 17.9177L9.50004 15.2605L14.5947 17.9177C14.7337 17.9912 14.8953 18.0157 15.0501 17.989C15.4404 17.9222 15.7029 17.555 15.6356 17.1677L14.662 11.5394L18.783 7.55345C18.8951 7.4444 18.9692 7.30197 18.9916 7.14618C19.0522 6.75671 18.7785 6.39618 18.3859 6.33831Z" fill="#FCCB06"/>
                        </svg>
                        <span>900</span>
                    </div>
                    <div class="d-inline ml-4">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 4.5C4.5 6.981 6.519 9 9 9C11.481 9 13.5 6.981 13.5 4.5C13.5 2.019 11.481 0 9 0C6.519 0 4.5 2.019 4.5 4.5ZM17 19H18V18C18 14.141 14.859 11 11 11H7C3.14 11 0 14.141 0 18V19H17Z" fill="#A5A5A5"/>
                        </svg>
                        <span>900</span>
                    </div>
                </div>
                <hr>
                <div class="card-user">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('asset/icon/avatar.png') }}" alt="">
                        <span class="ml-2 text-gray">Wahyu Syahputra</span>
                    </div>
                </div>
                <div class="card-footer mt-3">
                    <span class="text-gray">Rp. 200.000</span>
                </div>
            </div>
            <div class="card card-rounded font-montserrat" style="width: 19.5rem;">
                <img class="card-img-top mt-3" src="https://filedn.com/ltOdFv1aqz1YIFhf4gTY8D7/ingus-info/BLOGS/Photography-stocks3/stock-photography-slider.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text font-semibold text-gray mb-3">Mendirikan Startup dan Cara Membagi...</p>
                    <div class="d-inline">
                        <svg width="19" height="20" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.3859 6.33831L12.6901 5.51709L10.1439 0.396152C10.0743 0.255944 9.95993 0.142442 9.8186 0.0734507C9.46415 -0.100141 9.03343 0.0445188 8.85621 0.396152L6.31002 5.51709L0.614191 6.33831C0.457157 6.36057 0.313583 6.43401 0.20366 6.54529C0.0707685 6.68079 -0.00246073 6.86309 6.31408e-05 7.05213C0.00258702 7.24117 0.0806575 7.42149 0.21712 7.55345L4.33813 11.5394L3.36452 17.1677C3.34169 17.2987 3.35629 17.4333 3.40668 17.5564C3.45706 17.6795 3.54121 17.7862 3.64958 17.8643C3.75795 17.9424 3.8862 17.9887 4.0198 17.9982C4.1534 18.0077 4.28699 17.9798 4.40543 17.9177L9.50004 15.2605L14.5947 17.9177C14.7337 17.9912 14.8953 18.0157 15.0501 17.989C15.4404 17.9222 15.7029 17.555 15.6356 17.1677L14.662 11.5394L18.783 7.55345C18.8951 7.4444 18.9692 7.30197 18.9916 7.14618C19.0522 6.75671 18.7785 6.39618 18.3859 6.33831Z" fill="#FCCB06"/>
                        </svg>
                        <span>900</span>
                    </div>
                    <div class="d-inline ml-4">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 4.5C4.5 6.981 6.519 9 9 9C11.481 9 13.5 6.981 13.5 4.5C13.5 2.019 11.481 0 9 0C6.519 0 4.5 2.019 4.5 4.5ZM17 19H18V18C18 14.141 14.859 11 11 11H7C3.14 11 0 14.141 0 18V19H17Z" fill="#A5A5A5"/>
                        </svg>
                        <span>900</span>
                    </div>
                </div>
                <hr>
                <div class="card-user">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('asset/icon/avatar.png') }}" alt="">
                        <span class="ml-2 text-gray">Wahyu Syahputra</span>
                    </div>
                </div>
                <div class="card-footer mt-3">
                    <span class="text-gray">Rp. 200.000</span>
                </div>
            </div>
            <div class="card card-rounded font-montserrat" style="width: 19.5rem;">
                <img class="card-img-top mt-3" src="https://filedn.com/ltOdFv1aqz1YIFhf4gTY8D7/ingus-info/BLOGS/Photography-stocks3/stock-photography-slider.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text font-semibold text-gray mb-3">Mendirikan Startup dan Cara Membagi...</p>
                    <div class="d-inline">
                        <svg width="19" height="20" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.3859 6.33831L12.6901 5.51709L10.1439 0.396152C10.0743 0.255944 9.95993 0.142442 9.8186 0.0734507C9.46415 -0.100141 9.03343 0.0445188 8.85621 0.396152L6.31002 5.51709L0.614191 6.33831C0.457157 6.36057 0.313583 6.43401 0.20366 6.54529C0.0707685 6.68079 -0.00246073 6.86309 6.31408e-05 7.05213C0.00258702 7.24117 0.0806575 7.42149 0.21712 7.55345L4.33813 11.5394L3.36452 17.1677C3.34169 17.2987 3.35629 17.4333 3.40668 17.5564C3.45706 17.6795 3.54121 17.7862 3.64958 17.8643C3.75795 17.9424 3.8862 17.9887 4.0198 17.9982C4.1534 18.0077 4.28699 17.9798 4.40543 17.9177L9.50004 15.2605L14.5947 17.9177C14.7337 17.9912 14.8953 18.0157 15.0501 17.989C15.4404 17.9222 15.7029 17.555 15.6356 17.1677L14.662 11.5394L18.783 7.55345C18.8951 7.4444 18.9692 7.30197 18.9916 7.14618C19.0522 6.75671 18.7785 6.39618 18.3859 6.33831Z" fill="#FCCB06"/>
                        </svg>
                        <span>900</span>
                    </div>
                    <div class="d-inline ml-4">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.5 4.5C4.5 6.981 6.519 9 9 9C11.481 9 13.5 6.981 13.5 4.5C13.5 2.019 11.481 0 9 0C6.519 0 4.5 2.019 4.5 4.5ZM17 19H18V18C18 14.141 14.859 11 11 11H7C3.14 11 0 14.141 0 18V19H17Z" fill="#A5A5A5"/>
                        </svg>
                        <span>900</span>
                    </div>
                </div>
                <hr>
                <div class="card-user">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('asset/icon/avatar.png') }}" alt="">
                        <span class="ml-2 text-gray">Wahyu Syahputra</span>
                    </div>
                </div>
                <div class="card-footer mt-3">
                    <span class="text-gray">Rp. 200.000</span>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection