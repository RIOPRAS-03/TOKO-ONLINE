@extends('backend.v_layouts.app')
@section('content')
<!-- contentAwal -->

<div class="row">
    <div class="col-12">
        <div class="card-body border-top">
            <h5 class="card-title">{{$judul}}</h5>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Selamat Datang, {{ Auth::user()->nama }}</h4> 
                Aplikasi Toko Tiket Konser Online dengan hak akses yang anda miliki sebagai 
                <b>
                    @if (Auth::user()->role ==1)
                    Super Admin
                    @elseif(Auth::user()->role ==0)
                    Admin
                    @endif
                </b> 
                Mari Dengarkan Musik Konser Kesukaan mu
                <hr>
                <p class="mb-0">Tiket Konser Online Pontianank !!!</p>
            </div>
        </div>
    </div>
</div>

<!-- contentAkhir -->
@endsection