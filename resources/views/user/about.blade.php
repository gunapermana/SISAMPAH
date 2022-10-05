@extends('user.layout.main')
@section('title', 'About')

@section('content')
<div class="container container-home pt-5">
  <div class="row align-items-center">
    <div class="col-lg-6 text-home">
      <h1 class="fs-1 fw-bold">TENTANG KAMI</h1>
      <P class="fs-4 pt-4">Halo warga Desa Saba, Kabupaten Gianyar.
        Website ini merupakan sistem tepat guna
        yang digunakan dalam pengelolaan sampah
        di Desa Saba, Kabupaten Gianyar.
        Website ini dapat digunakan oleh
        warga dan petugas pengelola sampah
        di Desa Saba, Kabupaten Gianyar.
      </P>
    </div>
    <div class="col-lg-6">
      <img src="./images/about.png" class="img-fluid" alt="Home Image">
    </div>
  </div>
</div>
@endsection