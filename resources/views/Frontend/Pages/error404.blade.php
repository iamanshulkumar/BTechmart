@extends('frontend.website')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <div class="page-title" style="background:#017efa url(assets/frontend-assets/img/page-title.png) no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <h2 class="ipt-title">Error Page</h2>
                    <span class="ipn-subtitle">Here is error page</span>

                </div>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ User Dashboard ================================== -->
    <section class="error-wrap">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-6 col-md-10">
                    <div class="text-center">

                        <img src="{{ asset('assets/frontend-assets/img/404.png')}}" class="img-fluid" alt="error404">
                        <p>Oooops Error 404</p>
                        <a class="btn btn-primary" href="/">Back To Home</a>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================ User Dashboard End ================================== -->
@endsection
