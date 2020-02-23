@extends('frontend.layouts.common')
@section('content')
    <!-- MAIN -->
    <main class="site-main">
        <div class="block-section-1">
            <div class="main-slide slide-opt-1 full-width">


                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="height: 500px" src="/images/slider/{{$sliders[0]->slider_image}}"
                                 alt="Los Angeles" width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 500px" src="/images/slider/{{$sliders[0]->slider_image}}" alt="Chicago"
                                 width="1100" height="500">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 500px" src="/images/slider/{{$sliders[0]->slider_image}}" alt="New York"
                                 width="1100" height="500">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>
        </div>

        <div class="block-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="promotion-banner style-1">
                            @foreach($promotions as $promotion)
                                <a href="#" class="banner-img">
                                    <img style="height: 240px" src="/images/promotion/{{$promotion->promotion_image}}"
                                         alt="banner-1">
                                </a>

                                <div class="promotion-banner-inner">
                                    <h4>{{$promotion->promotion_name}}</h4>
                                    <h3>Sale Up to <strong>40%</strong> Off</h3>
                                    {{--                                <a class="banner-link" href="#">Shop now</a>--}}
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="promotion-banner style-1">
                            <a href="#" class="banner-img"><img style="height: 240px"
                                                                src="/images/promotion/{{$promotion->promotion_image}}"
                                                                alt="banner-2"></a>
                            <div class="promotion-banner-inner">
                                <h4>{{$promotion->promotion_name}}</h4>
                                <h3>Get <strong>25%</strong> Flat Off</h3>
                                <a class="banner-link" href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-section-4">
            <div class="container">
                <div class="title-of-section">Featured Products</div>
                <div class="tab-product tab-product-fade-effect">
                    @foreach($featured_items as $featured_item)
                        <div class="col-md-4">
                            <div class="product-item style1">
                                <div class="product-inner equal-elem">
                                    <div class="product-thumb">
                                        <div class="thumb-inner">
                                            <a href="/details/{{$featured_item->product_id}}"><img height="200px"
                                                                                                   src="/images/product/{{$featured_item->featured_image}}"
                                                                                                   alt="p1"></a>
                                        </div>
                                        <span class="onsale">-50%</span>
                                        <a href="#" class="quick-view">Quick View</a>
                                    </div>
                                    <div class="product-innfo">
                                        <div class="product-name"><a
                                                    href="/images/product/">{{$featured_item->product_name}}
                                            </a></div>
                                        <span class="price">
                                                            <ins>{{$featured_item->selling_price}} টাকা/ </ins>
                                                            <del>{{$featured_item->selling_price}} টাকা/</del>
                                                        </span>
                                        <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                        <div class="group-btn-hover">
                                            <div class="inner">

                                                <button type="button" class="add-to-cart"  ng-click="addToCart('{{$featured_item->product_id}}','{{$featured_item->product_name}}','{{$featured_item->featured_image}}','{{$featured_item->selling_price}}')">Add to cart</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="block-section-5">
            <div class="full-width background-section-5">
                <div class="container">
                    <div class="title-of-section style2">Top Selling</div>
                    <div class="tab-product tab-product-fade-effect">
                        @foreach($new_products as $new_product)
                            <div class="col-md-4">
                                <div class="product-item style1">
                                    <div class="product-inner equal-elem">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href=/details/{{$new_product->product_id}}><img style="height: 150px"
                                                                                                   src="/images/product/{{$new_product->featured_image}}"
                                                                                                   alt="p1"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            {{--                                            <a href="#" class="quick-view">Quick View</a>--}}
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">{{$new_product->product_name}}
                                                </a></div>
                                            <span class="price">
                                                            <ins>{{$new_product->selling_price}} টাকা/ </ins>
                                                            <del>{{$new_product->regular_price}} টাকা</del>
                                                        </span>
                                            <span class="star-rating">
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <i class="fa fa-star" aria-hidden="true"></i>
                                                            <span class="review">5 Review(s)</span>
                                                        </span>
                                            <div class="group-btn-hover">
                                                <div class="inner">

                                                    <button type="button" class="add-to-cart"  ng-click="addToCart('{{$new_product->product_id}}','{{$new_product->product_name}}','{{$new_product->featured_image}}','{{$new_product->selling_price}}')">Add to cart</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="block-section-6">
            <div class="container">
                <div class="promotion-banner box-single style-2">
                    <a href="#" class="banner-img"><img style="height: 200px"
                                                        src="/images/promotion/{{$promotion->promotion_image}}"
                                                        alt="banner-3"></a>
                    <div class="promotion-banner-inner">
                        <h4>Performance to Drive The World</h4>
                        <h3>ALL NEW ENGINE ACCESSORIES</h3>
                        <a class="banner-link" href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-section-7">
            <div class="full-width background-section-5">
                <div class="container">
                    <div class="title-of-section style2">Recently Products</div>
                    <div class="tab-product tab-product-fade-effect">
                        @foreach($new_products as $new_product)
                            <div class="col-md-4">
                                <div class="product-item style1">
                                    <div class="product-inner equal-elem">
                                        <div class="product-thumb">
                                            <div class="thumb-inner">
                                                <a href="/details/{{$new_product->product_id}}"><img
                                                            src="/images/product/{{$new_product->featured_image}}"
                                                            alt="p1"></a>
                                            </div>
                                            <span class="onsale">-50%</span>
                                            {{--                                            <a href="#" class="quick-view">Quick View</a>--}}
                                        </div>
                                        <div class="product-innfo">
                                            <div class="product-name"><a href="#">{{$new_product->product_name}}
                                                </a></div>
                                            <span class="price">
                                                            <ins>{{$new_product->selling_price}} টাকা/ </ins>
                                                            <del>{{$new_product->regular_price}} টাকা</del>
                                                        </span>
{{--                                            <span class="star-rating">--}}
{{--                                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                            <i class="fa fa-star" aria-hidden="true"></i>--}}
{{--                                                            <span class="review">5 Review(s)</span>--}}
{{--                                                        </span>--}}
                                            <div class="group-btn-hover">
                                                <div class="inner">

                                                    <button type="button" class="add-to-cart"  ng-click="addToCart('{{$new_product->product_id}}','{{$new_product->product_name}}','{{$new_product->featured_image}}','{{$new_product->selling_price}}')">Add to cart</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </main><!-- end MAIN -->

@endsection
