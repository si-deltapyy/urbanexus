@extends('layout.master2')

@section('content')
<div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center min-vh-100">
                                <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                                    <div class="row">
                                        <!-- <div class="col-lg-5 d-none d-lg-block bg-register rounded-left">
                                          <img src="{{ url('assets/images/bg-login.jpg') }}" alt="">
                                        </div> -->
                                        <div class="col-lg-12">
                                            <div class="p-5">
                                                <div class="text-center mb-5">
                                                    <a href="index.html" class="text-dark font-size-22 font-family-secondary">
                                                        <i class="mdi mdi-alpha-x-circle"></i> <b>Urban Nexus</b>
                                                    </a>
                                                </div>
                                                
                                                <div class="text-center">
                                                    <img src="{{ url('assets/images/others/404.svg') }}" alt="error" height="140">
                                                    <h1 class="h4 mb-3 mt-4 fw-bolder mb-22 mt-2 tx-80 text-muted">404</h1>
                                                    <h1 class="h4 mb-3 mt-4">Page Not Found</h1>
                                                    <p class="text-muted mb-4 w-75 m-auto">Oopps!! The page you were looking for doesn't exist.</p>
                                                </div>
        
                                                <div class="row mt-4">
                                                    <div class="col-12 text-center">
                                                        <a href="{{ url('/') }}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-home mr-2"></i>Back to Home </a>
                                                    </div> <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div> <!-- end .padding-5 -->
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div> <!-- end .w-100 -->
                            </div> <!-- end .d-flex -->
                        </div> <!-- end col-->
                    </div> <!-- end row -->
                </div>
                <!-- end container -->
            </div>
{{-- 
  

<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto d-flex flex-column align-items-center">
      <img src="{{ url('assets/images/others/404.svg') }}" class="img-fluid mb-2" alt="404">
      <h1 class="fw-bolder mb-22 mt-2 tx-80 text-muted">404</h1>
      <h4 class="mb-2">Page Not Found</h4>
      <h6 class="text-muted mb-3 text-center">Oopps!! The page you were looking for doesn't exist.</h6>
      <a href="{{ url('/') }}">Back to home</a>
    </div>
  </div>

</div>

--}}
@endsection