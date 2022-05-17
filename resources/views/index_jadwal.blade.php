@extends('layouts.main')

@section('content')
  <div class="container-fluid py-4">

    <div class="card">
      <div class="card-header pb-0">
        <div class="d-lg-flex">
          <div class="pb-4">
            <h5 class="mb-0">Adi Krisna Buana, S.Kom., M.Kom.</h5>
            <p class="text-sm mb-0">
              Days : Sun, Mon, Tues, Wed, Thurs, Fri, Sat
            </p>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Prodi</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Mulai</th>
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
                        <h6 class="mb-0 text-xs">John Michael</h6>
                        <p class="text-xs text-secondary mb-0">19103041012</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">Teknik Informatika</p>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">17 Mei 2022</p>
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
