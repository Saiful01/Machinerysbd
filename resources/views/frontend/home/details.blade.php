@extends('frontend.layouts.common')
@section('content')
    <!-- MAIN -->
    <main class="site-main">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="/">হোম </a></li>
                <li class="active"><a href="#">বিস্তারিত</a></li>
            </ol>
        </div>
        <div class="container">
            <div class="product-content-single">
                <div class="row">
                    <div class="col-md-6 col-sm-12 padding-right">
                        <div class="product-media">
                            <div class="image-preview-container image-thick-box image_preview_container">
                                <img id="img_zoom" data-zoom-image="/images/product/{{$featured_item->featured_image}}"
                                     src="/images/product/{{$featured_item->featured_image}}" alt="">
                                <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                            </div>
                            <div class="product-preview image-small product_preview">
                                <div id="thumbnails" class="thumbnails_carousel owl-carousel nav-style4" data-nav="true"
                                     data-autoplay="false" data-dots="false" data-loop="true" data-margin="10"
                                     data-responsive='{"0":{"items":3},"480":{"items":5},"600":{"items":5},"1000":{"items":5}}'>
                                    <a href="#" data-image="/images/product/{{$featured_item->featured_image}}"
                                       data-zoom-image="/images/product/{{$featured_item->featured_image}}">
                                        <img src="/images/product/{{$featured_item->featured_image}}"
                                             data-large-image="/images/product/{{$featured_item->featured_image}}" alt="i1">
                                    </a>
                                    <a href="#" data-image="/images/product/{{$featured_item->featured_image}}"
                                       data-zoom-image="/images/product/{{$featured_item->featured_image}}">
                                        <img src="/images/product/{{$featured_item->featured_image}}"
                                             data-large-image="/images/product/{{$featured_item->featured_image}}"
                                             alt="i1">
                                    </a>
                                    <a href="#" data-image="/images/product/{{$featured_item->featured_image}}"
                                       data-zoom-image="/images/product/{{$featured_item->featured_image}}">
                                        <img src="/images/product/{{$featured_item->featured_image}}"
                                             data-large-image="/images/product/{{$featured_item->featured_image}}"
                                             alt="i1">
                                    </a>
                                    <a href="#" data-image="/images/product/{{$featured_item->featured_image}}"
                                       data-zoom-image="/images/product/{{$featured_item->featured_image}}">
                                        <img src="/images/product/{{$featured_item->featured_image}}"
                                             data-large-image="/images/product/{{$featured_item->featured_image}}"
                                             alt="i1">
                                    </a>
                                    <a href="#" data-image="/images/product/{{$featured_item->featured_image}}"
                                       data-zoom-image="/images/product/{{$featured_item->featured_image}}">
                                        <img src="/images/product/{{$featured_item->featured_image}}"
                                             data-large-image="/images/product/{{$featured_item->featured_image}}"
                                             alt="i1">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="product-info-main">
                            <div class="product-name"><a href="#"> {{$featured_item->product_name}}</a></div>
                            <span class="star-rating">

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <i class="fa fa-star" aria-hidden="true"></i>

                                    <span class="review">5 Review(s)</span>

                                </span>
                            <div class="product-info-stock-sku">
                                <div class="stock available">
                                    <span class="label-stock">Availability: </span>In Stock
                                </div>
                            </div>
                            <div class="product-infomation">
                                {{$featured_item->product_details}}
                            </div>
                            <div class="product-info-price">
                                <span class="price">

                                    <ins>{{$featured_item->selling_price}} টাকা/</ins>

                                    <del>{{$featured_item->selling_price}} টাকা/</del>

                                </span>
                                <div class="quantity">
                                    <h6 class="quantity-title">Quantity:</h6>
                                    <div class="buttons-added">
                                        <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                                        <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                        <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                                    </div>
                                </div>
                                <div class="single-add-to-cart">
                                    <a href="#" class="btn-add-to-cart"
                                       ng-click="addToCart('{{$featured_item->product_id}}','{{$featured_item->product_name}}','{{$featured_item->featured_image}}','{{$featured_item->selling_price}}')">Add
                                        to cart</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="tab-details-product">
                <ul class="box-tab nav-tab">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                    {{--                    <li><a data-toggle="tab" href="#tab-2">Addtional Infomation</a></li>--}}
                    {{--                    <li><a data-toggle="tab" href="#tab-3">Reviews</a></li>--}}
                </ul>
                <div class="tab-container">
                    <div id="tab-1" class="tab-panel active">
                        <div class="box-content">
                            <p> {{$featured_item->product_details}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-recent-view">
            <div class="container">
                <div class="title-of-section">You may be also interested</div>
                <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true"
                     data-autoplay="false" data-dots="false" data-loop="true" data-margin="30"
                     data-responsive='{"0":{"items":1},"480":{"items":2},"768":{"items":3},"992":{"items":4},"1200":{"items":4}}'>

                    @foreach($new_products as $new_product)
                        <div class="product-item style1">
                            <div class="product-inner equal-elem">
                                <div class="product-thumb">
                                    <div class="thumb-inner">
                                        <a href=/details/{{$new_product->product_id}}><img style="height: 150px"
                                                                                           src="/images/product/{{$new_product->featured_image}}"
                                                                                           alt="p1"></a>
                                    </div>
                                    <span class="onsale">-50%</span>
                                    {{--                                <a href="#" class="quick-view">Quick View</a>--}}
                                </div>
                                <div class="product-innfo">
                                    <div class="product-name"><a href="#">{{$new_product->product_name}}</a></div>
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
                                    <div class="group-btn-hover style2">
                                        <a href="#" class="add-to-cart"><i class="fa fa-shopping-bag"
                                                                           aria-hidden="true"></i></a>
                                        <a href="#" class="compare"><i
                                                class="flaticon-refresh-square-arrows"></i></a>
                                        <a href="#" class="wishlist"><i class="fa fa-heart-o"
                                                                        aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach


                </div>


            </div>
        </div>
    </main><!-- end MAIN -->
    <br>



@endsection

