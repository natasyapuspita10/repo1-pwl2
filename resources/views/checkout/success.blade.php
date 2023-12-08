@extends('_layouts.app')
@section('content')    
    <section class="checkout">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-12">
                    <img src="{{secure_asset('images/ill_register.png') }}" height="400" class="mb-5" alt="Illustration">
                </div>
                <div class="col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        WHAT A DAY!
                    </p>
                    <h2 class="primary-header">
                        Checkout Berhasil
                    </h2>
                    <p>
                        Silahkan menuju halaman Dashboard dan melakukan pembayaran ya!
                    </p>
                    <a href="{{route('dashboard')}}" class="btn btn-primary mt-3">
                        Ke Dashboard Saya
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
