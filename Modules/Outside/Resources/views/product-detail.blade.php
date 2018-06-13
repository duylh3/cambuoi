@extends('outside::layouts.master')
@section('content')
<section class="product pt-75">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <div class="carousel-inner">
                        <div class="item active carousel-item">
                            <div class="item-carousel-wrap zoom" data-zoom="{{asset('outside/img/slide-bg-1.jpg')}}">
                                <img src="{{asset('outside/img/slide-bg-1.jpg')}}" alt="product-details">
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="item-carousel-wrap zoom" data-zoom="{{asset('outside/img/slide-bg-5.jpg')}}">
                                <img src="{{asset('outside/img/slide-bg-5.jpg')}}" alt="product-details">
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="item-carousel-wrap zoom" data-zoom="{{asset('outside/img/slide-bg-6.jpg')}}">
                                <img src="{{asset('outside/img/slide-bg-6.jpg')}}" alt="product-details">
                            </div>
                        </div>
                        <div class="item carousel-item">
                            <div class="item-carousel-wrap zoom" data-zoom="{{asset('outside/img/slide-bg-3.jpg')}}">
                                <img src="{{asset('outside/img/slide-bg-3.jpg')}}" alt="product-details">
                            </div>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0">
                            <img src="{{asset('outside/img/slide-bg-1.jpg')}}" alt="product">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1">
                            <img src="{{asset('outside/img/slide-bg-5.jpg')}}" alt="product">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2">
                            <img src="{{asset('outside/img/slide-bg-6.jpg')}}" alt="product">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="3">
                            <img src="{{asset('outside/img/slide-bg-3.jpg')}}" alt="product">
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-md-7">
                <div class="product-details-content pb-75">
                    <div class="product-details-left">
                        <div class="product-details-title">
                            <h3>Product Name Will be here</h3>
                        </div>
                        <div class="product-details-price">
                            <p>$50.00<del>(5% off)</del></p>
                        </div>
                        <div class="review-star">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-details-category">
                            <p>In Stock</p>
                        </div>
                    </div>
                    <div class="product-icon">
                        <a href="#"><i class="fa fa-heart-o"></i></a>
                        <a href="#"><i class="fa fa-share-alt"></i></a>
                    </div>
                    <div class="product-details-descrip">
                        <h3>Description</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- product detail area end -->
<!-- sell area start -->
<section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title mb-30">
                    <h2>Simila Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et  consectetur adipisicing eiusmod dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="{{asset('outside/img/main-product/1.jpg')}}" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">Product Name</a></p>
                    <h5>$50.00</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="{{asset('outside/img/main-product/2.jpg')}}" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">Product Name</a></p>
                    <h5>$50.00</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="{{asset('outside/img/main-product/3.jpg')}}" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">Product Name</a></p>
                    <h5>$50.00</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="{{asset('outside/img/main-product/4.jpg')}}" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">Product Name</a></p>
                    <h5>$50.00</h5>
                </div>
            </div>
        </div>
    </div>
</section><!-- sell area end -->
<!-- shopping product area start -->
<section class="product shopping-product ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title mb-30">
                    <h2>Recently Viewed</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et  consectetur adipisicing eiusmod dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="{{asset('outside/img/main-product/8.jpg')}}" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">Product Name</a></p>
                    <h5>$50.00</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="{{asset('outside/img/main-product/9.jpg')}}" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">Product Name</a></p>
                    <h5>$50.00</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="{{asset('outside/img/main-product/5.jpg')}}" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">Product Name</a></p>
                    <h5>$50.00</h5>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <img src="{{asset('outside/img/main-product/10.jpg')}}" alt="">
                        <div class="product-img-overlay">
                            <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                        </div>
                    </div>
                    <p><a href="product-details.html">Product Name</a></p>
                    <h5>$50.00</h5>
                </div>
            </div>
        </div>
    </div>
</section><!-- shopping product area end -->
@endsection

