@extends('frontend.layouts.common')
@section('content')




    <!-- MAIN -->
    <main class="site-main checkout">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="#">হোম </a></li>
                <li class="active"><a href="#">চেকআউট</a></li>
            </ol>
        </div>
        <div class="container">
            <form action="#" class="checkout" method="post" name="checkout">
                <h4 class="title-checkout">বিলিং ঠিকানা</h4>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="title">পুরো নাম*</label>
                        <input type="text" class="form-control" id="firstname"
                               name="customer_name" required=""
                               ng-model="customer_name">
                        <input class="form-control" type="hidden" name="_token"
                               value="{{csrf_token()}}" autocomplete="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="title">ইমেইল:</label>
                        <input type="email" class="form-control" id="input-payment-email"
                               name="customer_email" ng-model="customer_email">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="title"> ফোন *</label>
                        <input type="text" class="form-control" id="input-payment-lastname"
                               name="customer_phone" required=""
                               ng-model="customer_phone">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="title">ঠিকানা:</label>
                        <textarea type="text" class="form-control" id="input-payment-telephone"
                                  name="customer_address1"
                                  required="" ng-model="customer_address1"></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="title">জেলা*</label>
                        <input type="text" class="form-control" id="input-payment-fax"
                               name="customer_city" required=""
                               ng-model="customer_city">
                    </div>

                    <div class="form-group payment col-md-6">
                        <span class="grand-total">Grand Total<span>@{{ shipping_cost+totalPriceCountAll }} টাকা</span></span>
                        <button type="button" class="btn-order" ng-click="saveProducts(cartItemPList)">অর্ডার
                            করুন</button>
                    </div>
                </div>
            </form>
        </div>
    </main><!-- end MAIN -->


@endsection
