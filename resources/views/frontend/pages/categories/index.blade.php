@extends('frontend.layouts.common')
@section('content')
    <!-- MAIN -->
    <main class="site-main">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="/">হোম </a></li>
                <li class="active"><a href="#">{{$category_name}} </a></li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 padding-right-5">
                    <div class="main-content">

                        @if(count($products)<=0)

                            <h4>Result Not found</h4>
                            @endif

                        <div class="products products-list">
                            @foreach($products as $featured_item)
                                <div class="product-items">
                                    <div class="product-image">
                                        <a href="/details/{{$featured_item->product_id}}"><img style="width: 300px; height: 200px"
                                                src="/images/product/{{$featured_item->featured_image}}" alt="p1"></a>
                                        <span class="onsale">-50%</span>
                                        {{--                    <a href="#" class="quick-view">Quick View</a>--}}
                                    </div>
                                    <div class="product-info">
                                        <div class="product-name"><a href="#">{{$featured_item->product_name}}
                                            </a></div>
                                        {{--<span class="star-rating">

                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <i class="fa fa-star" aria-hidden="true"></i>

                                            <span class="review">5 Review(s)</span>

                                        </span>--}}
                                        <div class="product-infomation">
                                            {{$featured_item->product_details}}
                                        </div>
                                    </div>
                                    <div class="product-info-price">
                                        <div class="product-info-stock-sku">
                                            <div class="stock available">
                                                <span class="label-stock">Avability:</span> In Stock
                                            </div>
                                        </div>
                                        <span class="price">

                                            <ins>{{$featured_item->selling_price}}টাকা</ins>

                                            <del>{{$featured_item->regular_price}}
                                                    টাকা</del>

                                        </span>
                                        <div class="single-add-to-cart">
                                            <button class="btn-add-to-cart"
                                               ng-click="addToCart('{{$featured_item->product_id}}','{{$featured_item->product_name}}','{{$featured_item->featured_image}}','{{$featured_item->selling_price}}')">Add
                                                to cart</button>
                                            {{--                <a href="#" class="compare"><i class="flaticon-refresh-square-arrows"></i>Compare</a>--}}
                                            {{--                <a href="#" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Wishlist</a>--}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </main><!-- end MAIN -->

    <!-- MAIN -->

@endsection
