<!-- HEADER -->
<header class="site-header header-opt-1">
    <!-- header-top -->
    <div class="header-top">
        <div class="container">
            <!-- hotline -->
            <ul class="nav-top-left">
                <li><a href="#">Welcome to Machinery Shop BD</a></li>
            </ul><!-- hotline -->
            <!-- heder links -->
            <ul class="nav-top-right rhyssa-nav">

                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Register / Sign in</a></li>
            </ul><!-- heder links -->
        </div>
    </div> <!-- header-top -->
    <!-- header-content -->
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-md-2 nav-left">
                    <!-- logo -->
                    <strong class="logo">
                        <a href="/"><img src="/assets/images/logo.png" alt="logo" height="50px" width="50px"></a>
                    </strong><!-- logo -->
                </div>
                <div class="col-md-8 nav-mind">
                    <!-- block search -->
                    <div class="block-search">
                        <div class="block-content">
                            <div class="categori-search  ">
                                <select data-placeholder="All Categories"
                                        class="chosen-select categori-search-option">
                                    <option value="">All Categories</option>
                                    @foreach($categories as $category)

                                        <option>{{$category->category_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-search">
                                <form>
                                    <div class="box-group">
                                        <input type="text" class="form-control"
                                               placeholder="Search keyword here...">
                                        <button class="btn btn-search" type="button"><span
                                                    class="fa fa-search"></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- block search -->
                </div>
                <div class="col-md-2 nav-right">
                    <!-- block mini cart -->
                    <span data-action="toggle-nav" class="menu-on-mobile hidden-md style2">
                                <span class="btn-open-mobile home-page">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="title-menu-mobile">Main menu</span>
                            </span>
                    <div class="block-minicart dropdown style2">
                        <a class="minicart" href="/customer/checkout">

                                    <span class="counter qty">

                                        <span class="cart-icon"><i class="fa fa-shopping-bag"
                                                                   aria-hidden="true"></i></span>

                                        <span class="counter-number">@{{ getProductCartInfo().totalCount}} টি</span>

                                    </span>
                            <span class="counter-your-cart">

                                        <span class="counter-label">সর্বমোট:</span>

                                        <span class="counter-price"> @{{ totalPriceCountAll}}টাকা</span>

                                    </span>
                        </a>
                        <div class="parent-megamenu">
                            <form>
                                <div class="minicart-content-wrapper">
                                    <div class="subtitle">
                                        You have <span>@{{ getProductCartInfo().totalCount}}</span> item(s) in your
                                        cart
                                    </div>
                                    <div class="minicart-items-wrapper">
                                        <ol class="minicart-items">


                                            <li class="product-inner" ng-repeat="item in cartItemPList">
                                                <div class="product-thumb style1">
                                                    <div class="thumb-inner">
                                                        <a href="#"><img ng-src="/images/product/@{{ item.image}}"
                                                                         alt="c1"></a>
                                                    </div>
                                                </div>
                                                <div class="product-innfo">
                                                    <div class="product-name"><a href="/product/details/@{{ item.id }}">@{{ item.name}}
                                                        </a></div>
                                                    <a href="#" class="remove" ng-click="removeItem(item)"><i class="fa fa-times"
                                                                                  aria-hidden="true"></i></a>
                                                    <span class="price price-dark">

                                                                <ins>@{{ item.qnt* item.price}} BDT</ins>

                                                            </span>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="subtotal">
                                        <span class="label">Total :</span>
                                        <span class="price">@{{ totalPriceCountAll}}টাকা</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-viewcart" href="/customer/checkout">View cart</a>
                                        <a class="btn btn-checkout" href="/customer/checkout">Checkout</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- block mini cart -->
                </div>
            </div>
        </div>
    </div><!-- header-content -->
    <!-- header-menu-bar -->
    <div class="header-menu-bar header-sticky">
        <div class="header-menu-nav menu-style-1">
            <div class="container">
                <div class="header-menu-nav-inner ">
                    <div class="header-menu header-menu-resize">
                        <ul class="header-nav rhyssa-nav">
                            <li class="btn-close hidden-md"><i class="fa fa-times" aria-hidden="true"></i></li>
                            <li class="menu-item-has-children ">
                                <a href="/">হোম</a>
                            </li>
                            <li class="menu-item-has-children ">
                                <a href="#">{{$categories[0]->category_name}}</a>
                            </li>
                            <li class="menu-item-has-children  item-megamenu">
                                <a href="#">{{$categories[1]->category_name}}</a>

                            </li>
                            <li class="menu-item-has-children ">
                                <a href="#">আমাদের সম্পর্কে</a>

                            </li>
                            <li class="menu-item-has-children ">
                                <a href="#">যোগাযোগ</a>

                            </li>

                            <li class="text-white" style="margin-left: 400px">
                                 <span class="counter qty">

                                        <span class="cart-icon"><i class="fa fa-shopping-bag"
                                                                   aria-hidden="true"></i></span>

                                        <span class="counter-number">@{{ getProductCartInfo().totalCount}} টি</span>

                                    </span>
                            </li>


                            <li class="text-white">
                                সর্বমোট: @{{ totalPriceCountAll}}টাকা
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!-- end HEADER -->
