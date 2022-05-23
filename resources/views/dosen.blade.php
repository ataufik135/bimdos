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


  <div class="card-body p-3">
    <div class="row gx-4">
    <div class="col-auto">
    <div class="avatar avatar-xl position-relative">
    <img src="https://e7.pngegg.com/pngimages/44/585/png-clipart-computer-icons-businessperson-company-logo-business-company-people.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
    </div>
    </div>
    <div class="col-auto my-auto">
    <div class="h-100">
    <h5 class="mb-1">
    Sayo Kravits
    </h5>
    <p class="mb-0 font-weight-bold text-sm">
    Public Relations
    </p>
    </div>
    </div>
    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
    <div class="nav-wrapper position-relative end-0">
    <ul class="nav nav-pills nav-fill p-1" role="tablist">
    <li class="nav-item">
    <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
    <i class="ni ni-app"></i>
    <span class="ms-2">App</span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
    <i class="ni ni-email-83"></i>
    <span class="ms-2">Messages</span>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
    <i class="ni ni-settings-gear-65"></i>
    <span class="ms-2">Settings</span>
    </a>
    </li>
    <div class="moving-tab position-absolute nav-link" style="padding: 0px; transition: all 0.5s ease 0s; transform: translate3d(0px, 0px, 0px); width: 156px;"><a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">-</a></div></ul>
    </div>
     </div>
    </div>
    </div>
  
    <div class="card-body p-3">
      <div class="row gx-4">
      <div class="col-auto">
      <div class="avatar avatar-xl position-relative">
      <img src="https://e7.pngegg.com/pngimages/44/585/png-clipart-computer-icons-businessperson-company-logo-business-company-people.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
      </div>
      </div>
      <div class="col-auto my-auto">
      <div class="h-100">
      <h5 class="mb-1">
      Dofflamingo s.pd
      </h5>
      <p class="mb-1 font-weight-bold text-sm">
      Public Relations
      </p>
      </div>
      </div>
      <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
      <div class="nav-wrapper position-relative end-0">
      <ul class="nav nav-pills nav-fill p-1" role="tablist">
      <li class="nav-item">
      <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
      <i class="ni ni-app"></i>
      <span class="ms-2">App</span>
      </a>
      </li>
      <li class="nav-item">
      <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
      <i class="ni ni-email-83"></i>
      <span class="ms-2">Messages</span>
      </a>
      </li>
      <li class="nav-item">
      <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
      <i class="ni ni-settings-gear-65"></i>
      <span class="ms-2">Settings</span>
      </a>
      </li>
      <div class="moving-tab position-absolute nav-link" style="padding: 0px; transition: all 0.5s ease 0s; transform: translate3d(0px, 0px, 0px); width: 156px;"><a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">-</a></div></ul>
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

