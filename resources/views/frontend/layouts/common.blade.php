<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.header.head')
</head>
<body class="index-opt-1" ng-app="myApp" ng-controller="myCtrl">


<div class="wrapper">

@include('frontend.header.header')

@yield('content')

<!-- FOOTER -->

    @include('frontend.footer.footer')

</div>

@include('frontend.footer.foot')


</body>
</html>
