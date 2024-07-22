<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/img/favicon-32x32.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>

<body ng-app = "tcApp" ng-controller = "tcCtrl">

    <header>
        @include('layouts.header')
    </header>

    <div ng-controller = "viewCtrl">
        @yield('heading')

        @yield('categories')

        @yield('content')

        @yield('recommend')
    </div>
    <footer>
        @include('layouts.footer')
    </footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/263e4bfa4a.js" crossorigin="anonymous"></script>
<script src="{{ asset('/') }}js/angular.min.js"></script>
<script>
    var app = angular.module('tcApp', [])
    app.controller('tcCtrl', function($scope, $http, $filter) {
        $scope.cart = {!! json_encode(session('cart')) !!} || [];
        $scope.addToCart = function(id, quantity) {
            $http.post('/api/cart', {
                id: id,
                quantity: quantity,
            }).then(function(res) {
                $scope.cart = res.data.data;
            });
        }

        $scope.totalPrice = function() {
            var total = 0;
            $scope.cart.forEach(sp => {
                total += sp.price * sp.quantity;
            });
            return total
        };

        $scope.removeCart = function(index){
            $http.delete('api/cart/'+index).then(function(res){
                $scope.cart = res.data.data;
            });
        }

    });

    var viewFunction = function($scope, $http) {

    }
</script>
@yield('viewFunction')
<script>
    app.controller('viewCtrl', viewFunction);
</script>
