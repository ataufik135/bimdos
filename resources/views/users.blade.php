@extends('layouts.main')

@section('content')
  <div class="container-fluid py-4">
    <div class="card">
      <div class="card-header pb-0">
        <div class="d-lg-flex">
          <div>
            <h5 class="mb-0">Daftar Users

            </h5>
            <p class="text-sm mb-0">
              {{-- Days : Sun, Mon, Tues, Wed, Thurs, Fri, Sat --}}
            </p>
          </div>
          <div class="ms-auto my-auto mt-lg-0 mt-4">
            <div class="ms-auto my-auto">
              <a href="./new-product.html" class="btn bg-gradient-primary btn-sm mb-0" target="_blank">+&nbsp; Tambah User</a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"></th>
                <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">

                </th>
              </tr>
            </thead>
            <tbody>
              @for ($i = 0; $i < 10; $i++)
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg"
                          class="avatar avatar-sm me-3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs">Taufik S.kom, M.kom</h6>
                        <p class="text-xs text-secondary mb-0">19103041012</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">19103041012</p>
                  </td>
                  <td>
                    <span class="badge badge-sm badge-success">Dosen</span>
                  </td>
                  {{-- <td class="text-end">
                    <button class="btn btn-primary btn-sm" type="button" >Button</button>
                    <button class="btn btn-xs btn-danger" type="button" >Button</button>
                    <span class="badge badge-sm badge-success">Dosen</span>

                  </td> --}}
                  <td class="text-end">

                    <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                      data-bs-original-title="Edit user">
                      <i class="fas fa-user-edit text-secondary" aria-hidden="true"></i>
                    </a>
                    <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="hapus">
                      <i class="fas fa-trash text-danger" aria-hidden="true"></i>
                    </a>
                  </td>

                </tr>
              @endfor
            </tbody>
          </table>
        </div>
      </div>

    </div>
  @endsection

  @push('style')
    <link id="pagestyle" href="css/dosen" rel="stylesheet" />
  @endpush

  @push('script')
  @endpush
