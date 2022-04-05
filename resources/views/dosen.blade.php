@extends('layouts.main')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 p-2">
        <div class="card">
          <div class="card-body">
            <p>halaman dosen</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 p-2">
        <div class="card">
          <div class="card-body">
            <p>halaman dosen2</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('style')
  <link id="pagestyle" href="css/dosen"
    rel="stylesheet" />
@endpush

@push('script')
@endpush
