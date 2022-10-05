@extends('user.layout.main')
@section('title', 'Dashboard')

@section('content')
    <div class="container container-home">
        <div class="row align-items-center pt-4">
            <div class="col-sm-6 text-home">
                <h1 class="fs-2">Halo Semeton Desa Saba,</h1>
                <h2 class="fs-2">ADA SAMPAH YANG PERLU DIANGKUT???</h2>
                <P class="fs-5">Yuk, langsung saja klik! tombol di bawah ini untuk pengangkutan sampah oleh petugas sampah
                    di Desa Saba.</P>
                <a class="btn btn-transparent btn-lg btn-angkut1" href="/angkut" role="button">Angkut Sampah!</a>
            </div>
            <div class="col-sm-6">
                <img src="./images/home.png" class="img-fluid" alt="Home Image">
            </div>
            {{-- <div class="">
      <div class="pb-2 fs-5" >Belum punya akun? Yuk buat dulu!</div>
      <a class=" btn btn-transparent btn-lg mb-5 border border-success btn-angkut " href="#" role="button">Registrasi</a>
    </div> --}}
        </div>
    </div>
@endsection
