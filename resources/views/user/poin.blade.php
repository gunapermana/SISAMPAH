@extends('user.layout.main')
@section('title', 'Poin')

@section('content')
<div class="container container-home">
  <div class="row align-items-center pt-5">
    <div class="col-sm-6">
      <h1 class="fs-1 mb-5 fw-bold">TOTAL POIN</h1>
      <h2 class="fs-4 mb-0">Total poin anda saat ini...</h2>
      <p class="fw-bold text-poin">1678</p>
    </div>
    <div class="col-sm-6">
      <img src="./images/poin.png" class="img-fluid" alt="Home Image">
    </div>
    <div class="">
      <div class="pb-2 fs-6">Yuk tukar poin anda dengan produk <br>
        yang disediakan oleh Desa Saba
      </div>
      <a class=" btn btn-transparent btn-lg mb-5 border border-success fs-5 fw-semibold " href="#" role="button">Tukar</a>
    </div>
  </div>
</div>
@endsection