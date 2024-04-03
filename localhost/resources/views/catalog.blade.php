<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <title>COPY</title>
</head>
@extends('layouts.headerandfooter')
@section('content')
<body>
    <div class="container">
        <div class="grid">
            <div class="cart__product">
                <a href="{{route("cartproduct")}}">
                    <div class="img"> 
                        <img class="img__item" src="{{asset('assets/img/1.jpg')}}" alt="">
                </div>
                    <H4 class="name__product">Oversize T-shirt</H4>
                    <h6 class="price">3200RUB</h6>
                </a>
            </div>
            <div class="cart__product">
                <a href="{{route("cartproduct")}}">
                <div class="img"> 
                        <img class="img__item" src="{{asset('assets/img/1.jpg')}}" alt="">
                </div>
                    <H4 class="name__product">Oversize T-shirt</H4>
                    <h6 class="price">3200RUB</h6>
                </a>
            </div>
            <div class="cart__product">
                <a href="{{route("cartproduct")}}">
                <div class="img"> 
                        <img class="img__item" src="{{asset('assets/img/1.jpg')}}" alt="">
                </div>
                    <H4 class="name__product">Oversize T-shirt</H4>
                    <h6 class="price">3200RUB</h6>
                </a>
            </div>
            <div class="cart__product">
                <a href="{{route("cartproduct")}}">
                <div class="img"> 
                        <img class="img__item" src="{{asset('assets/img/1.jpg')}}" alt="">
                </div>
                    <H4 class="name__product"   >Oversize T-shirt</H4>
                    <h6 class="price">3200RUB</h6>
                </a>
            </div>
            <div class="cart__product">
                <a href="{{route("cartproduct")}}">
                <div class="img"> 
                        <img class="img__item" src="{{asset('assets/img/1.jpg')}}" alt="">
                </div>
                    <H4 class="name__product">Oversize T-shirt</H4>
                    <h6 class="price">3200RUB</h6>
                </a>
            </div>
            <div class="cart__product">
                <a href="{{route("cartproduct")}}">
                <div class="img"> 
                        <img class="img__item" src="{{asset('assets/img/1.jpg')}}" alt="">
                </div>
                    <H4 class="name__product">Oversize T-shirt</H4>
                    <h6 class="price">3200RUB</h6>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
@endsection