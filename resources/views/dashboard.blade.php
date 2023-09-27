@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/flatpickr/flatpickr.min.css') }}" rel="stylesheet" />
@endpush

@section('content')

@role('admin')
<div class="row">
  <div class="col-12 col-xl-12 stretch-card">
    <div class="row flex-grow-1">
      <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class=" col-md col-xl">
                <div class="row mb-3">
                    <div class="col-12 col-xl stretch-card">
                      <div class="row flex-grow-1">
                          <h3>Selamat Datang Kembali! <span class="text-primary">{{ Auth::user()->name }}</span></h3>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div> <!-- row -->

<div class="row">
  <div class="col-8 col-xl-9 grid-margin stretch-card">
    <div class="card overflow-hidden">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
          <h6 class="card-title mb-0">Grafik</h6>
        </div>
        <div class="row align-items-start mb-2">
          <div class="col-md-7">
            <p class="text-muted tx-13 mb-3 mb-md-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eum rem nihil sint pariatur sapiente quo! Recusandae, assumenda non? Facere culpa nam, nemo error sed deleniti minus cupiditate odit quam.</p>
          </div>
        </div>
        <div class="mt-5" id="apexLine"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-xl-3 grid-margin grid-margin-xl-0 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">History</h6>
        </div>
        <div class="d-flex flex-column">
          <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
            <div class="me-3">
              <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
            </div>
            <div class="w-100">
              <div class="d-flex justify-content-between">
                <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 1</h6>
                <p class="text-muted tx-12">12.30 PM</p>
              </div>
            </div>
          </a>
          <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
            <div class="me-3">
              <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
            </div>
            <div class="w-100">
              <div class="d-flex justify-content-between">
                <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 2</h6>
                <p class="text-muted tx-12">08.22 PM</p>
              </div>
            </div>
          </a>
          <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
            <div class="me-3">
              <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
            </div>
            <div class="w-100">
              <div class="d-flex justify-content-between">
                <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 2</h6>
                <p class="text-muted tx-12">05.49 AM</p>
              </div>
              <p class="text-muted tx-13">Mengisi Kuesioner 2</p>
            </div>
          </a>
          <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
            <div class="me-3">
              <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
            </div>
            <div class="w-100">
              <div class="d-flex justify-content-between">
                <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 2</h6>
                <p class="text-muted tx-12">01.19 AM</p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div> <!-- row -->
@endrole

@role('RT')
<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow-1">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class=" col-md col-xl">
                  <div class="row mb-3">
                      <div class="col-12 col-xl stretch-card">
                        <div class="row flex-grow-1">
                            <h3>Selamat Datang Kembali! <span class="text-primary">{{ Auth::user()->name }}</span></h3>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div> <!-- row -->

  <div class="row">
    <div class="col-8 col-xl-9 grid-margin stretch-card">
      <div class="card overflow-hidden">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
            <h6 class="card-title mb-0">Grafik</h6>
          </div>
          <div class="row align-items-start mb-2">
            <div class="col-md-7">
              <p class="text-muted tx-13 mb-3 mb-md-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eum rem nihil sint pariatur sapiente quo! Recusandae, assumenda non? Facere culpa nam, nemo error sed deleniti minus cupiditate odit quam.</p>
            </div>
          </div>
          <div class="mt-5" id="apexLine"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-xl-3 grid-margin grid-margin-xl-0 stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">History</h6>
          </div>
          <div class="d-flex flex-column">
            <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
              <div class="me-3">
                <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
              </div>
              <div class="w-100">
                <div class="d-flex justify-content-between">
                  <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 1</h6>
                  <p class="text-muted tx-12">12.30 PM</p>
                </div>
              </div>
            </a>
            <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
              <div class="me-3">
                <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
              </div>
              <div class="w-100">
                <div class="d-flex justify-content-between">
                  <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 2</h6>
                  <p class="text-muted tx-12">08.22 PM</p>
                </div>
              </div>
            </a>
            <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
              <div class="me-3">
                <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
              </div>
              <div class="w-100">
                <div class="d-flex justify-content-between">
                  <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 2</h6>
                  <p class="text-muted tx-12">05.49 AM</p>
                </div>
                <p class="text-muted tx-13">Mengisi Kuesioner 2</p>
              </div>
            </a>
            <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
              <div class="me-3">
                <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
              </div>
              <div class="w-100">
                <div class="d-flex justify-content-between">
                  <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 2</h6>
                  <p class="text-muted tx-12">01.19 AM</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- row -->
@endrole

@role('RW')
<div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow-1">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class=" col-md col-xl">
                  <div class="row mb-3">
                      <div class="col-12 col-xl stretch-card">
                        <div class="row flex-grow-1">
                            <h3>Selamat Datang Kembali! <span class="text-primary">{{ Auth::user()->name }}</span></h3>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div> <!-- row -->

  <div class="row">
    <div class="col-8 col-xl-9 grid-margin stretch-card">
      <div class="card overflow-hidden">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
            <h6 class="card-title mb-0">Grafik</h6>
          </div>
          <div class="row align-items-start mb-2">
            <div class="col-md-7">
              <p class="text-muted tx-13 mb-3 mb-md-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi eum rem nihil sint pariatur sapiente quo! Recusandae, assumenda non? Facere culpa nam, nemo error sed deleniti minus cupiditate odit quam.</p>
            </div>
          </div>
          <div class="mt-5" id="apexLine"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-xl-3 grid-margin grid-margin-xl-0 stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">History</h6>
          </div>
          <div class="d-flex flex-column">
            <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
              <div class="me-3">
                <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
              </div>
              <div class="w-100">
                <div class="d-flex justify-content-between">
                  <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 1</h6>
                  <p class="text-muted tx-12">12.30 PM</p>
                </div>
              </div>
            </a>
            <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
              <div class="me-3">
                <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
              </div>
              <div class="w-100">
                <div class="d-flex justify-content-between">
                  <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 2</h6>
                  <p class="text-muted tx-12">08.22 PM</p>
                </div>
              </div>
            </a>
            <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
              <div class="me-3">
                <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
              </div>
              <div class="w-100">
                <div class="d-flex justify-content-between">
                  <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 2</h6>
                  <p class="text-muted tx-12">05.49 AM</p>
                </div>
                <p class="text-muted tx-13">Mengisi Kuesioner 2</p>
              </div>
            </a>
            <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
              <div class="me-3">
                <img src="{{ url('https://via.placeholder.com/35x35') }}" class="rounded-circle wd-35" alt="user">
              </div>
              <div class="w-100">
                <div class="d-flex justify-content-between">
                  <h6 class="fw-normal text-body mb-1">Mengisi Kuesioner 2</h6>
                  <p class="text-muted tx-12">01.19 AM</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- row -->

@endrole

@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/apexcharts.js') }}"></script>
@endpush

