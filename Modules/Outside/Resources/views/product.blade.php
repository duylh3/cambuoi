@extends('outside::layouts.master')
@section('content')
<!-- hero area start -->
<section class="theme2 hero-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="hero-area-content">
                    <h1>A Place of All Organic Products</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    <a href="#" class="krishok-btn">Shop Now <i class="fa fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!-- all product area start -->
<section class="all-product ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-dropdown max-width-360">
                    <div class="dropdowns-select">
                        <select>
                            <option value="Product">Select Product</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-dropdown max-width-360">
                    <div class="dropdowns-select">
                        <select>
                            <option value="Catagory">Select Catagory</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-dropdown max-width-360">
                    <div class="dropdowns-select">
                        <select>
                            <option value="Brand">Select Brand</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-dropdown max-width-360">
                    <div class="dropdowns-select">
                        <select>
                            <option value="Price">Price Rang</option>
                            <option value="Price1">$120 - $150</option>
                            <option value="Price2">$200 - $280</option>
                            <option value="Price3">$70 - $190</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/1.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$45</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/2.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$32</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/3.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$22</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/4.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$27</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/5.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$25</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/6.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$12</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/7.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$27</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/8.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$21</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/9.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$25</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/10.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$19</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/11.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$27</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/12.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$29</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="product-tab">
                    <i class="fa fa-shopping-cart"></i>
                    <h4>Free Shipping</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-tab product-tab-2">
                    <i class="fa fa-thermometer-quarter"></i>
                    <h4>Quality Product</h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-tab product-tab-3">
                    <i class="fa fa-thumbs-up"></i>
                    <h4>Money Back Guarantee</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title pt-75">
                    <h2>New Products</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et  consectetur adipisicing eiusmod dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/1.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$45</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/2.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$32</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/3.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$22</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <img src="{{asset('outside/img/main-product/4.jpg')}}" alt="">
                            <div class="product-img-overlay">
                                <<a href="#" class="krishok-btn">View detail <i class="fa fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="product-detail"><h4>Product Name</h4></a>
                            <p>Brand Name will be Here</p>
                            <span class="price">Price: <strong>$27</strong></span>
                        </div>
                        <div class="product-icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                            <a href="#"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- all product area end -->
@endsection