@extends('layouts.base')
@section('content')
    <section class="pt-0 poster-section">




        <div class="right-side-contain">
            <div class="social-image">
                <h6>Facebook</h6>
            </div>

            <div class="social-image">
                <h6>Instagram</h6>
            </div>

            <div class="social-image">
                <h6>Twitter</h6>
            </div>
        </div>
    </section>
    <!-- banner section start -->
    <!-- banner section end -->



    <!-- category section start -->
    <section class="category-section ratio_40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title title-2 text-center">
                        <h2>Our Category</h2>
                        <h5 class="text-color">Our collection</h5>
                    </div>
                </div>
            </div>
            <div class="row gy-3">
                <div class="col-xxl-2 col-lg-3">
                    <div class="category-wrap category-padding category-block theme-bg-color">
                        <div>
                            <h2 class="light-text">Top</h2>
                            <h2 class="top-spacing">Our Top</h2>
                            <span>Categories</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 col-lg-9">
                    <div class="category-wrapper category-slider1 white-arrow category-arrow">
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/1.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Saffran</h3>
                                    <span class="text-dark">red</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="assets/images/fashion/category/2.jpg" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="theme-color">Argane</h3>
                                    <span class="text-dark">Oil</span>
                                </div>
                            </a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category section end -->



    <style>
        .products-c .bg-size {
            background-position: center 0 !important;
        }
    </style>


@endsection