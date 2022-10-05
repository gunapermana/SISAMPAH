@extends('user.layout.main')
@section('title', 'Angkut')

@section('content')
<div class="container container-home">
  <div class="row align-items-center">
    <div class="col-sm-6">
      <h1 class="fs-1 mb-5 fw-bold">ANGKUT SAMPAH</h1>
      <form class="form-angkut p-4 rounded-4">
        <div class="row">
          <label for="inputPassword" class="col-sm-3 col-form-label">Kepala Keluarga</label>
          <div class="col-sm-9 mb-3">
          <input type="KK" class="form-control" id="exampleFormControlInput1">
          </div>

          <label for="inputPassword" class="col-sm-3 col-form-label">NIK</label>
          <div class="col-sm-9">
          <input type="NIK" class="form-control" id="exampleFormControlInput1">
          </div>

        </div>
      </form>
      <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>
    <div class="col-sm-6">
      <img src="./images/angkut.png" class="img-fluid" alt="Home Image">
    </div>
  </div>
</div>
@endsection