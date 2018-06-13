@extends('outside::layouts.master')
@section('content')
        <!-- hero area start -->
        <section class="hero-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-sm-10">
                        <div class="hero-area-content ptb-80">
                            <h1>A Place of All Organic Products</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-slider">
                <div class="item-content">
                    <div class="item-slider item-slider1"></div>
                    <div class="item-slider item-slider2"></div>
                </div>
            </div>
            <div class="item-thumbnail">
                <a href="#" data-slide-index="0">
                    <div class="list-thumb list-thumb1"></div>
                </a>
                <a href="#" data-slide-index="1">
                    <div class="list-thumb list-thumb2"></div>
                </a>
            </div><!--/Slider thumbnail-->
        </section><!-- hero area end -->
        <!-- shopping product area start -->
        <section class="shopping-product ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="shopping-product-menu max-width-360">
                            <ul>
                                <li data-filter="*" class="active">All</li>
                                <li data-filter=".new">New</li>
                                <li data-filter=".best">Best Sells</li>
                                <li data-filter=".seasonal">Seasonal</li>
                                <li data-filter=".other">Others</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row product-item">
                    <div class="col-lg-3 col-sm-6 new other">
                        <div class="sell-item max-width-360">
                            <div class="product-img">
                                <img src="{{asset('outside/img/main-product/5.jpg')}}" alt="">
                                <div class="product-img-overlay">
                                    <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <p><a href="product-detail">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 best seasonal">
                        <div class="sell-item max-width-360">
                            <div class="product-img">
                                <img src="{{asset('outside/img/main-product/6.jpg')}}" alt="">
                                <div class="product-img-overlay">
                                    <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <p><a href="product-detail">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 other">
                        <div class="sell-item max-width-360">
                            <div class="product-img">
                                <img src="{{asset('outside/img/main-product/7.jpg')}}" alt="">
                                <div class="product-img-overlay">
                                    <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <p><a href="product-detail">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 new best">
                        <div class="sell-item max-width-360">
                            <div class="product-img">
                                <img src="{{asset('outside/img/main-product/8.jpg')}}" alt="">
                                <div class="product-img-overlay">
                                    <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <p><a href="product-details">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 other seasonal">
                        <div class="sell-item max-width-360">
                            <div class="product-img">
                                <img src="{{asset('outside/img/main-product/9.jpg')}}" alt="">
                                <div class="product-img-overlay">
                                    <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <p><a href="product-details">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 new best">
                        <div class="sell-item max-width-360">
                            <div class="product-img">
                                <img src="{{asset('outside/img/main-product/10.jpg')}}" alt="">
                                <div class="product-img-overlay">
                                    <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <p><a href="product-detail">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 seasonal">
                        <div class="sell-item max-width-360">
                            <div class="product-img">
                                <img src="{{asset('outside/img/main-product/11.jpg')}}" alt="">
                                <div class="product-img-overlay">
                                    <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <p><a href="product-detail">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 best">
                        <div class="sell-item max-width-360">
                            <div class="product-img">
                                <img src="{{asset('outside/img/main-product/12.jpg')}}" alt="">
                                <div class="product-img-overlay">
                                    <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                </div>
                            </div>
                            <p><a href="product-details">Product Name</a></p>
                            <h5>$50.00</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="pagination">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- shopping product area end -->
        <!-- product area start -->
        <section class="product ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title">
                            <h2>New Products</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et  consectetur adipisicing eiusmod dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
                        <div class="tab-accordion pt-75">
                            <div class="tab-content">
                                <div id="menu1" class="tab-pane fade">
                                    <img src="{{asset('outside/img/single-product.jpg')}}" alt="">
                                </div>
                                <div id="menu2" class="tab-pane fade active show">
                                    <img src="{{asset('outside/img/single-product.jpg')}}" alt="">
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <img src="{{asset('outside/img/single-product.jpg')}}" alt="">
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                    <img src="{{asset('outside/img/single-product.jpg')}}" alt="">
                                </div>
                                <div id="menu5" class="tab-pane fade">
                                    <img src="{{asset('outside/img/single-product.jpg')}}" alt="">
                                </div>
                                <div id="menu6" class="tab-pane fade">
                                    <img src="{{asset('outside/img/single-product.jpg')}}" alt="">
                                </div>
                                <div id="menu7" class="tab-pane fade">
                                    <img src="{{asset('outside/img/single-product.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-75">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a data-toggle="tab" href="#menu1">
                                    <div class="product-list">
                                        <div class="product-list-img">
                                            <img src="{{asset('outside/img/main-product/1.jpg')}}" alt="">
                                        </div>
                                        <div class="product-list-info">
                                            <div class="product-list-info-table">
                                                <p>Product Name Will be Here</p>
                                                <h5>$45.99</h5>
                                                <div class="product-list-icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="nav-item"><a class="active" data-toggle="tab" href="#menu2">
                                    <div class="product-list">
                                        <div class="product-list-img">
                                            <img src="{{asset('outside/img/main-product/2.jpg')}}" alt="">
                                        </div>
                                        <div class="product-list-info">
                                            <div class="product-list-info-table">
                                                <p>Product Name Will be Here</p>
                                                <h5>$45.99</h5>
                                                <div class="product-list-icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#menu3">
                                    <div class="product-list">
                                        <div class="product-list-img">
                                            <img src="{{asset('outside/img/main-product/3.jpg')}}" alt="">
                                        </div>
                                        <div class="product-list-info">
                                            <div class="product-list-info-table">
                                                <p>Product Name Will be Here</p>
                                                <h5>$45.99</h5>
                                                <div class="product-list-icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#menu4">
                                    <div class="product-list">
                                        <div class="product-list-img">
                                            <img src="{{asset('outside/img/main-product/4.jpg')}}" alt="">
                                        </div>
                                        <div class="product-list-info">
                                            <div class="product-list-info-table">
                                                <p>Product Name Will be Here</p>
                                                <h5>$45.99</h5>
                                                <div class="product-list-icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#menu5">
                                    <div class="product-list">
                                        <div class="product-list-img">
                                            <img src="{{asset('outside/img/main-product/5.jpg')}}" alt="">
                                        </div>
                                        <div class="product-list-info">
                                            <div class="product-list-info-table">
                                                <p>Product Name Will be Here</p>
                                                <h5>$45.99</h5>
                                                <div class="product-list-icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#menu6">
                                    <div class="product-list">
                                        <div class="product-list-img">
                                            <img src="{{asset('outside/img/main-product/1.jpg')}}" alt="">
                                        </div>
                                        <div class="product-list-info">
                                            <div class="product-list-info-table">
                                                <p>Product Name Will be Here</p>
                                                <h5>$45.99</h5>
                                                <div class="product-list-icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#menu7">
                                    <div class="product-list">
                                        <div class="product-list-img">
                                            <img src="{{asset('outside/img/main-product/1.jpg')}}" alt="">
                                        </div>
                                        <div class="product-list-info">
                                            <div class="product-list-info-table">
                                                <p>Product Name Will be Here</p>
                                                <h5>$45.99</h5>
                                                <div class="product-list-icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- product area end -->
        <!-- sell area start -->
        <section class="ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title">
                            <h2>Best Sells</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et  consectetur adipisicing eiusmod dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sell-area owl-carousel">
                            <div class="sell-item">
                                <div class="product-img">
                                    <img src="{{asset('outside/img/main-product/1.jpg')}}" alt="">
                                    <div class="product-img-overlay">
                                        <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <p><a href="product-detail">Product Name</a></p>
                                <h5>$50.00</h5>
                            </div>
                            <div class="sell-item">
                                <div class="product-img">
                                    <img src="{{asset('outside/img/main-product/2.jpg')}}" alt="">
                                    <div class="product-img-overlay">
                                        <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <p><a href="product-detail">Product Name</a></p>
                                <h5>$50.00</h5>
                            </div>
                            <div class="sell-item">
                                <div class="product-img">
                                    <img src="{{asset('outside/img/main-product/3.jpg')}}" alt="">
                                    <div class="product-img-overlay">
                                        <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <p><a href="product-detail">Product Name</a></p>
                                <h5>$50.00</h5>
                            </div>
                            <div class="sell-item">
                                <div class="product-img">
                                    <img src="{{asset('outside/img/main-product/4.jpg')}}" alt="">
                                    <div class="product-img-overlay">
                                        <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <p><a href="product-detail">Product Name</a></p>
                                <h5>$50.00</h5>
                            </div>
                            <div class="sell-item">
                                <div class="product-img">
                                    <img src="{{asset('outside/img/main-product/5.jpg')}}" alt="">
                                    <div class="product-img-overlay">
                                        <a href="#" class="krishok-btn">Add to cart <i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                                <p><a href="product-detail">Product Name</a></p>
                                <h5>$50.00</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- sell area end -->
        @endsection
        
