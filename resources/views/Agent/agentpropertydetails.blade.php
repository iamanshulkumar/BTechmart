{{-- -------------------------------------------------🔱HAR HAR MAHADEV🔱--------------------------------------------------------------- --}}
<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Property Details</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">BTech Mart</a></li>
                            <li class="breadcrumb-item active">Property Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row gx-lg-5">


                            <div class="col-xl-4 col-md-8 mx-auto">
                                <div class="product-img-slider sticky-side-div">
                                    <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/sliderthree.jpeg') }}" alt=""
                                                    class="img-fluid d-block" >
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/slidertwo.jpeg') }}" alt=""
                                                    class="img-fluid d-block" >
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/sliderthree.jpeg') }}" alt=""
                                                    class="img-fluid d-block" >
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('assets/images/sliderfour.jpeg') }}" alt=""
                                                    class="img-fluid d-block" >
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <!-- end swiper thumbnail slide -->
                                    <div class="swiper product-nav-slider mt-2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="nav-slide-item ">
                                                    <img src="{{ asset('assets/images/sliderthree.jpeg') }}" alt=""
                                                        class="img-fluid d-block">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="nav-slide-item">
                                                    <img src="{{ asset('assets/images/slidertwo.jpeg') }}" alt=""
                                                        class="img-fluid d-block" >
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="nav-slide-item">
                                                    <img src="{{ asset('assets/images/sliderthree.jpeg') }}" alt=""
                                                        class="img-fluid d-block" >
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="nav-slide-item">
                                                    <img src="{{ asset('assets/images/sliderfour.jpeg') }}" alt=""
                                                        class="img-fluid d-block" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-xl-4 col-md-8 mx-auto">
                                <div class="product-img-slider sticky-side-div">
                                    <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/products/img-6.png" alt="" class="img-fluid d-block" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block" />
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                    <!-- end swiper thumbnail slide -->
                                    <div class="swiper product-nav-slider mt-2">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="nav-slide-item ">
                                                    <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="nav-slide-item">
                                                    <img src="assets/images/products/img-6.png" alt="" class="img-fluid d-block" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="nav-slide-item">
                                                    <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block" />
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="nav-slide-item">
                                                    <img src="assets/images/products/img-8.png" alt="" class="img-fluid d-block" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end swiper nav slide -->
                                </div>
                            </div> --}}




                            <div class="col-xl-8">
                                <div class="mt-xl-0 mt-5">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <h4>4BHK Alexander Court,New York</h4>
                                            <div class="hstack gap-3 flex-wrap">
                                                <div><a href="#" class="text-primary d-block">Agent name</a></div>
                                                <div class="vr"></div>
                                                <div class="vr"></div>
                                                <div class="text-muted">Published : <span class="text-body fw-medium">26
                                                        Mar, 2021</span>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="flex-shrink-0">
                                            <div>
                                                <a href="apps-ecommerce-add-product.html" class="btn btn-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i
                                                        class="ri-pencil-fill align-bottom"></i></a>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <div class="d-flex flex-wrap gap-2 align-items-center mt-3">
                                        <div class="text-muted fs-16">
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                        </div>
                                        <div class="text-muted">( Ratings )</div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-lg-12 col-sm-6">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div
                                                            class="avatar-title rounded bg-transparent text-success fs-24">
                                                            <i class="ri-money-dollar-circle-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">Price :</p>
                                                        <h5 class="mb-0">$390,000 - $430,000</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        {{-- <div class="col-lg-3 col-sm-6">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div
                                                            class="avatar-title rounded bg-transparent text-success fs-24">
                                                            <i class="ri-file-copy-2-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">No. of Orders :</p>
                                                        <h5 class="mb-0">2,234</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <!-- end col -->
                                        {{-- <div class="col-lg-3 col-sm-6">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div
                                                            class="avatar-title rounded bg-transparent text-success fs-24">
                                                            <i class="ri-stack-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">Available Stocks :</p>
                                                        <h5 class="mb-0">1,230</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <!-- end col -->
                                        {{-- <div class="col-lg-3 col-sm-6">
                                            <div class="p-2 border border-dashed rounded">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar-sm me-2">
                                                        <div
                                                            class="avatar-title rounded bg-transparent text-success fs-24">
                                                            <i class="ri-inbox-archive-fill"></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted mb-1">Total Revenue :</p>
                                                        <h5 class="mb-0">$60,645</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <!-- end col -->
                                    </div>

                                    <div class="mt-4 text-muted">
                                        <h5 class="fs-13">Description :</h5>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content of a page when looking at its layout. The point of using
                                            Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                            opposed to using 'Content here, content here', making it look like readable
                                            English. Many desktop publishing packages and web page editors now use Lorem
                                            Ipsum as their default model text, and a search for 'lorem ipsum' will
                                            uncover many web sites still in their infancy..</p>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="mt-3">
                                                <h5 class="fs-13">Features :</h5>
                                                <ul class="list-unstyled">
                                                    <li class="py-1"><i
                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            $390,000</li>
                                                    <li class="py-1"><i
                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            FOR SALE</li>
                                                    <li class="py-1"><i
                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            Radio</li>
                                                    <li class="py-1"><i
                                                            class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                        Balcony</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="mt-5">
                                                <h5 class="fs-13">Quick Enquiry</h5>
                                                <form action="javascript:void(0);">
                                                    <div class="row row-cols-lg-auto g-3 align-items-center">
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="fullname">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="email" class="form-control" id="inlineFormInputGroupUsername" placeholder="email">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="mobile no">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content mt-5">
                                        <h5 class="fs-13 mb-3">Property Description :</h5>
                                        <nav>
                                            <ul class="nav nav-tabs nav-tabs-custom nav-success" id="nav-tab"
                                                role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="nav-speci-tab"
                                                        data-bs-toggle="tab" href="#nav-speci" role="tab"
                                                        aria-controls="nav-speci" aria-selected="true">Details</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="nav-detail-tab" data-bs-toggle="tab"
                                                        href="#nav-detail" role="tab" aria-controls="nav-detail"
                                                        aria-selected="false">General
                                                        Amenities</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="tab-content border border-top-0 p-4" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-speci" role="tabpanel"
                                                aria-labelledby="nav-speci-tab">
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" style="width: 200px;">
                                                                    Price</th>
                                                                <td>$390,000</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Contract type:</th>
                                                                <td><span class="badge rounded-pill border border-success text-success">For Sale</span></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Bathrooms:</th>
                                                                <td>1.5</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Square ft:</th>
                                                                <td>468</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Land Size:</th>
                                                                <td>721m<super>2</super></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Available:</th>
                                                                <td>Immediately</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-detail" role="tabpanel"
                                                aria-labelledby="nav-detail-tab">
                                                <div>
                                                    <h5 class="mb-3">Tommy Hilfiger Sweatshirt for Men
                                                        (Pink)</h5>
                                                    <p>Tommy Hilfiger men striped pink sweatshirt. Crafted
                                                        with cotton. Material composition is 100% organic
                                                        cotton. This is one of the world’s leading designer
                                                        lifestyle brands and is internationally recognized
                                                        for celebrating the essence of classic American cool
                                                        style, featuring preppy with a twist designs.</p>
                                                    <div>
                                                        <p class="mb-2"><i
                                                                class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            Machine Wash</p>
                                                        <p class="mb-2"><i
                                                                class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            Fit Type: Regular</p>
                                                        <p class="mb-2"><i
                                                                class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            100% Cotton</p>
                                                        <p class="mb-0"><i
                                                                class="mdi mdi-circle-medium me-1 text-muted align-middle"></i>
                                                            Long sleeve</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product-content -->

                                    <div class="mt-5">
                                        <div>
                                            <h5 class="fs-13 mb-3">Geographic Location</h5>
                                        </div>
                                        <div class="row gy-4 gx-0">
                                            <div class="col-lg-12">
                                                <div class="ps-lg-4">
                                                    <div class="">
                                                        <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114306.49103824802!2d74.55331221140281!3d26.45321956796727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396be6d8fcb7cd01%3A0xcbaf8f12eb8100ee!2sAjmer%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1712039785159!5m2!1sen!2sin"
                                                            width="100%" height="450" style="border:0;" allowfullscreen=""
                                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end col -->
                                        </div>
                                        <!-- end Ratings & Reviews -->
                                    </div>
                                    <!-- end card body -->
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
</x-app-layout>
