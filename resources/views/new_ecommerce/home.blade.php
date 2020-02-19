
@extends('new_ecommerce.common.common')
   @section('content')

        <div class="carousel slide" data-ride="carousel" data-interval="3000">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#top-slide" data-slide-to="0" class="active"></li>
                <li data-target="#top-slide" data-slide-to="1"></li>
                <li data-target="#top-slide" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            @if(!empty($sliders))
                <div class="carousel-inner">

                    @for($i=1;$i<=1;$i++)
                        <div class="carousel-item active">
                            <img src="/images/slider/{{$sliders[0]->slider_image}}" alt="Los Angeles"
                                 width="100%"
                                 height="300px">
                        </div>
                    @endfor

                    @php($i=1)
                    @foreach($sliders as $slider)
                        @if($i>1)
                            <div class="carousel-item">
                                <img src="/images/slider/{{$slider->slider_image}}" alt="Los Angeles"
                                     width="100%"
                                     height="300px">
                            </div>
                        @endif
                        @php($i++)
                    @endforeach
                </div>
        @endif

        <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#top-slide" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#top-slide" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>


        <div class="block-section-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="promotion-banner style-1">
                            <div class="card bg-light mb-3">
                                <div style="background-color: orange; color: white" class="card-header text-uppercase"><i class="fa fa-list"></i>
                                    ক্যাটেগরি
                                </div>
                                <ul class="list-group category-list">

                                    @php($i=1)
                                    @foreach($categories as $category)
                                        <li class="list-group-item"><a
                                                href="/product/category/{{$category->category_id}}">- {{$category->category_name}}</a>
                                        </li>
                                        @if($i>=4)
                                            @break
                                        @endif

                                        @php($i++)
                                    @endforeach

                                    <li class="list-group-item"><a
                                            href="/categories">- সকল ক্যাটেগরি</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="promotion-banner style-1">
                            <a href="#" class="banner-img"><img src="assets/images/home2/banner-2.jpg"
                                                                alt="banner-2"></a>
                            <div class="promotion-banner-inner">
                                <h4>Integer adclorem</h4>
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
                <div class="title-of-section">বিশেষ প্রোডাক্ট</div>
                <div class="tab-product tab-product-fade-effect">
                    <ul class="box-tabs nav-tab">
                        <li class="active"><a data-animated="" data-toggle="tab" href="#tab-1">All Products </a></li>
                        <li><a data-animated="" data-toggle="tab" href="#tab-2">Performance</a></li>
                        <li><a data-animated="" data-toggle="tab" href="#tab-1">Exterior</a></li>
                        <li><a data-animated="" data-toggle="tab" href="#tab-2">Wheel</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-container">
                            <div id="tab-1" class="tab-panel active">
                                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="false"
                                     data-autoplay="false" data-dots="false" data-loop="true" data-margin="30"
                                     data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":4}}'>
                                    <div class="card-body">
                                        @if($hot_item!=null)
                                            <a href="/product/details/{{$hot_item->product_id}}/{{str_replace(' ', '-', $hot_item->product_name)}}">
                                                <img ng-src="/images/product/{{$hot_item->featured_image}}" class="img-thumbnail"
                                                     width="100%">
                                                <p class="card-title product-title">{{$hot_item->product_name}}</p>
                                                <p class="measurement">{{$hot_item->product_measurement}}</p>
                                                <p class="price">{{$hot_item->selling_price}} টাকা/ <span
                                                        class="price-discount">{{$hot_item->regular_price}} টাকা</span></p>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-outline-success btn-block"
                                                    ng-click="addToCart('{{$hot_item->product_id}}','{{$hot_item->product_name}}','{{$hot_item->featured_image}}','{{$hot_item->selling_price}}')">
                                                <i class="fa fa-shopping-cart"></i> কার্টে যুক্ত করুন
                                            </button>
                                        @endif
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-section-5">
            <div class="full-width background-section-5">
                <div class="container">
                    <div class="title-of-section style2">সর্বাধিক বিক্রিত</div>
                    <div class="tab-product tab-product-fade-effect">
                        <ul class="box-tabs nav-tab style2">
                            <li class="active"><a data-animated="" data-toggle="tab" href="#tab-3">All Products </a>
                            </li>
                            <li><a data-animated="" data-toggle="tab" href="#tab-4">Performance</a></li>
                            <li><a data-animated="" data-toggle="tab" href="#tab-3">Exterior</a></li>
                            <li><a data-animated="" data-toggle="tab" href="#tab-4">Interior</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-container">
                                <div id="tab-3" class="tab-panel active">
                                    <div class="owl-carousel" data-nav="false" data-autoplay="false" data-dots="false"
                                         data-loop="true" data-margin="30"
                                         data-responsive='{"0":{"items":1},"480":{"items":2},"1000":{"items":3}}'>
                                        <div class="owl-one-row">
                                            <div class="product-item style2">
                                                <div class="product-inner">
                                                    <div class="product-thumb style1">
                                                        <div class="thumb-inner">
                                                            <a href="#"><img src="assets/images/home2/t1.jpg"
                                                                             alt="t1"></a>
                                                        </div>
                                                    </div>
                                                    <div class="product-innfo">
                                                        <div class="product-name"><a href="#">মাল্টি-প্লেট ব্রেক
                                                            </a></div>
                                                        <span class="price">
                                                                <ins>1000 টাকা</ins>
                                                                <del>1500 টাকা</del>
                                                                <span class="onsale">-50%</span>
                                                            </span>
                                                        <span class="star-rating">
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                                <span class="review">5 পুনঃমূল্যায়ন(s)</span>
                                                            </span>
                                                        <a href="#" class="btn-add-to-cart">কার্ট যোগ করুন</a>
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
            </div>
        </div>
        <div class="block-section-6">
            <div class="container">
                <div class="promotion-banner box-single style-2">
                    <a href="#" class="banner-img"><img src="assets/images/home2/banner-3.jpg" alt="banner-3"></a>
                    <div class="promotion-banner-inner">
                        <h4>Performance to Drive The World</h4>
                        <h3>ALL NEW ENGINE ACCESSORIES</h3>
                        <a class="banner-link" href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-recent-view">
            <div class="container">
                <div class="title-of-section">নতুন পণ্য</div>
                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true"
                     data-autoplay="false" data-dots="false" data-loop="true" data-margin="30"
                     data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":4}}'>
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="assets/images/home2/r1.jpg" alt="r1"></a>
                                </div>
                                <span class="onsale">-50%</span>
                                <a href="#" class="quick-view">দ্রুত দেখা</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">জিএম মূল সরঞ্জাম</a></div>
                                <span class="price">
                                        <ins>270 taka</ins>
                                        <del>370 taka</del>
                                    </span>
                                <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 পুনঃমূল্যায়ন
(s)</span>
                                    </span>
                                <div class="group-btn-hover style2">
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag"
                                                                       aria-hidden="true"></i></a>
                                    <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="assets/images/home2/r2.jpg" alt="r2"></a>
                                </div>
                                <span class="onnew">new</span>
                                <a href="#" class="quick-view">Quick View</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Style Steering Wheel</a></div>
                                <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                <div class="group-btn-hover style2">
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag"
                                                                       aria-hidden="true"></i></a>
                                    <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="assets/images/home2/r3.jpg" alt="r3"></a>
                                </div>
                                <a href="#" class="quick-view">Quick View</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Headlights with DRL</a></div>
                                <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                <div class="group-btn-hover style2">
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag"
                                                                       aria-hidden="true"></i></a>
                                    <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="assets/images/home2/r4.jpg" alt="r4"></a>
                                </div>
                                <a href="#" class="quick-view">Quick View</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Homasy Portable Handheld</a></div>
                                <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                <span class="star-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span class="review">5 Review(s)</span>
                                </span>
                                <div class="group-btn-hover style2">
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag"
                                                                       aria-hidden="true"></i></a>
                                    <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="assets/images/home2/r5.jpg" alt="r5"></a>
                                </div>
                                <span class="onsale">-50%</span>
                                <a href="#" class="quick-view">Quick View</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Parka With a Hood</a></div>
                                <span class="price">
                                        <ins>$229.00</ins>
                                        <del>$259.00</del>
                                    </span>
                                <span class="star-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <span class="review">5 Review(s)</span>
                                    </span>
                                <div class="group-btn-hover style2">
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag"
                                                                       aria-hidden="true"></i></a>
                                    <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item style1">
                        <div class="product-inner equal-elem">
                            <div class="product-thumb">
                                <div class="thumb-inner">
                                    <a href="#"><img src="assets/images/home2/r6.jpg" alt="r6"></a>
                                </div>
                                <a href="#" class="quick-view">Quick View</a>
                            </div>
                            <div class="product-innfo">
                                <div class="product-name"><a href="#">Elite-X Sport Seats</a></div>
                                <span class="price price-dark">
                                        <ins>$229.00</ins>
                                    </span>
                                <span class="star-rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span class="review">5 Review(s)</span>
                                </span>
                                <div class="group-btn-hover style2">
                                    <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag"
                                                                       aria-hidden="true"></i></a>
                                    <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i></a>
                                    <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       @endsection


