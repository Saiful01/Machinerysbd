@extends('new_ecommerce.common.common')

@section('title', 'কেনারহাট')

@section('content')
@include('new_ecommerce.home.slide')
@include('new_ecommerce.home.product_row')
@include('new_ecommerce.home.category_row')
@include('new_ecommerce.home.new_product_row')

@include('new_ecommerce.home.shipping')

@include('new_ecommerce.home.universal_cart')
@endsection



