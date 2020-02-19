@extends('frontend.layouts.common')
@section('content')
    <!-- MAIN -->
    <main class="site-main shopping-cart">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="#">Home </a></li>
                <li class="active"><a href="#">Shopping Cart</a></li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <form class="form-cart" action="/checkout" method="get">
                        <div class="table-cart">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="tb-image"></th>
                                    <th class="tb-product">Product Name</th>
                                    <th class="tb-price">Unit Price</th>
                                    <th class="tb-qty">Qty</th>
                                    <th class="tb-total">SubTotal</th>
                                    <th class="tb-remove"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr  ng-repeat="item in cartItemPList">
                                    <td class="tb-image"><a href="#" class="item-photo"><img
                                                    src="/images/product/@{{ item.image}}"
                                                    alt="cart"></a></td>
                                    <td class="tb-product">
                                        <div class="product-name"><a href="#">@{{ item.name}}</a></div>
                                    </td>
                                    <td class="tb-price">
                                        <span class="price">@{{ item.price}}</span>
                                    </td>
                                    <td class="tb-qty">
                                        <div class="quantity">
                                            <div class="buttons-added">
                                                <input type="text" value="@{{ item.qnt}}" title="Qty" class="input-text qty text"
                                                       size="1">
                                                <a href="#" class="sign plus" ng-click="itemAdd(item)"><i class="fa fa-plus"></i></a>
                                                <a href="#" class="sign minus"  ng-click="itemMinus(item)"><i class="fa fa-minus"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="tb-total">
                                        <span class="price">@{{ item.qnt* item.price}}</span>
                                    </td>
                                    <td class="tb-remove">
                                        <button href="#" class="btn-sm action-remove" ng-click="removeItem(item)"><span><i class="fa fa-times"
                                                                                   aria-hidden="true"></i></span></button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="cart-actions">
                            <a href="/" type="submit" class="btn btn-continue text-danger">
                                <span>Continue Shopping</span>
                            </a>
                           {{-- <button type="submit" class="btn-clean">
                                <span>Update Shopping Cart</span>
                            </button>
                            <button type="submit" class="btn-update">
                                <span>Clear Shopping Cart</span>
                            </button>--}}
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <div class="order-summary">
                        <h4 class="title-shopping-cart">Order Summary</h4>
                        <div class="checkout-element-content">
                            <span class="order-left">Subtotal:<span>@{{ totalPriceCountAll}} টাকা</span></span>
                            <span class="order-left">Shipping:<span>@{{ shipping_cost}} টাকা</span></span>
                            <span class="order-left">Total:<span>@{{ shipping_cost+totalPriceCountAll }} টাকা</span></span>
                            <ul>
                                <li><label class="inline"><input type="checkbox"><span class="input"></span>I have promo
                                        code</label></li>
                            </ul>
                            <a href="/checkout" type="submit" class="btn-checkout">
                                <span>Check Out</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- end MAIN -->
    <!-- FOOTER -->
@endsection