@extends('layouts.frontend')

@push('style-after')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('cork/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('cork/assets/css/components/cards/card.css') }}" rel="stylesheet" type="text/css" />
<!--  END CUSTOM STYLE FILE  -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('jumbotron')
<div class="row mb-3">
    <div class="col-lg-12">
        <div class="jumbotron-fluid jumbotron-color-two">
            <div class="mx-5">
                <div class="d-flex justify-content-center">
                    <div class="col-8">
                        <div class="text-center">
                            <h2 class="display-4 mt-4">Checkout Kelas</h2>
                            <p class="lead mt-3 mb-4">
                                {{ $kelas->nama_kelas }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br/>
        </div>
    </div>
</div>
@endsection

@section('content')

<div class="container checkout-section">
    <div class="row">

        <div class="card-margin-two">
            <div class="row">
                <div class="col-xl-8">
                    <div class="card" style="width: 733px;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-3">
                                    <img src="{{ asset('storage/' . $kelas->thumbnail) }}" class="thumbnail-kelas">
                                </div>
                                <div class="col-xl-9">
                                    <h6 class="card-subtitle mb-2 text-muted ml-3 mt-3"><b>{{ $kelas->nama_kelas }}</b></h6>
                                    <p class="text-muted ml-3">Dibangun Oleh : {{ $kelas->user->name }}</p>
                                    @if ($kelas->harga != 0)
                                    <button class="btn btn-secondary ml-3 p-1">PREMIUM</button>
                                    @else
                                    <button class="btn btn-success ml-3 p-1">FREE</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card" style="width: 348px;">
                        <div class="card-body">
                            <h5 class="card-title">Pembayaran</h5>
                            <div class="d-flex justify-content-between mt-2 align-items-center">
                                <h6 class="card-subtitle text-muted">Harga Kelas</h6>
                                <h5 class="card-title">Rp. {{ number_format($kelas->harga) }}</h5>
                            </div>
                            <h6 class="card-subtitle text-muted mt-2">Diskon</h6>
                            <div class="form-group mt-2">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-gift"><polyline points="20 12 20 22 4 22 4 12"></polyline><rect x="2" y="7" width="20" height="5"></rect><line x1="12" y1="22" x2="12" y2="7"></line><path d="M12 7H7.5a2.5 2.5 0 0 1 0-5C11 2 12 7 12 7z"></path><path d="M12 7h4.5a2.5 2.5 0 0 0 0-5C13 2 12 7 12 7z"></path></svg></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Kode Promo">
                                  </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="card-subtitle text-muted mt-2">Kode Unik</h6>
                                <h5 class="card-title">170</h5>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Total</h5>
                                <h5 class="card-title">Rp. 123,170</h5>
                            </div>
                            <button class="btn btn-primary btn-block p-2 mt-4"><h5 class="text-white">Lanjutkan Pembayaran</h5></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection