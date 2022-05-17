@extends('layouts.main')

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="d-flex">
              <div class="avatar avatar-xl bg-gradient-dark border-radius-md p-2">
                <img src="https://e7.pngegg.com/pngimages/44/585/png-clipart-computer-icons-businessperson-company-logo-business-company-people.png" alt="slack_logo">
              </div>
              <div class="ms-3 my-auto">
                <h6>Adi Krisna Buana, S.Kom., M.Kom.</h6>
              </div>
              <div class="ms-auto">
                <div class="dropdown">
                  <button class="btn btn-link text-secondary ps-0 pe-2" id="navbarDropdownMenuLink"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v text-lg"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-end me-sm-n4 me-n3" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="javascript:;">Disable</a>
                    <a class="dropdown-item text-danger" href="javascript:;">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-sm mt-3"> If everything I did failed - which it doesn&#39;t, I think that it actually
              succeeds. </p>
            <hr class="horizontal dark">
            <div class="row">
              <div class="col-6">
                <h6 class="text-sm mb-0">5</h6>
                <p class="text-secondary text-sm font-weight-bold mb-0">Participants</p>
              </div>
              <div class="col-6 text-end">
                <h6 class="text-sm mb-0">Sun, Mon, Tues, Wed, Thurs, Fri, Sat</h6>
                <p class="text-secondary text-sm font-weight-bold mb-0">Days</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('style')
  <link id="pagestyle" href="css/dosen" rel="stylesheet" />
@endpush

@push('script')
@endpush
