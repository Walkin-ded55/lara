<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPY</title>
</head>
@extends('layouts.headerandfooter')
@section('content')
<body>
    <div class="container hero">
        <div class="container__inner">
            <img class="img__product" src="{{asset('assets/img/1.jpg')}}" alt="">

            <div class="container__inner-img">
                <div class="img__item1">
                    <img class="img__1" src="{{asset('assets/img/1.jpg')}}" height="200px" width="200px" alt="">
                </div>
                <div class="img__item1">
                    <img class="img__1" src="{{asset('assets/img/1.jpg')}}"  height="200px" width="200px"alt="">
                </div>
                <div class="img__item1">
                    <img class="img__1" src="{{asset('assets/img/1.jpg')}}"height="200px" width="200px alt="">
                </div>
                <div class="img__item1">
                    <img class="img__1" src="{{asset('assets/img/1.jpg')}}"height="200px" width="200px alt="">
                </div>
            </div>
        </div>
        <div class="textbox">
            <h1 class="name">Oversize T-shirt</h1>
            <h3 class="price__product">3200RUB</h3>
            <h3 class="text__item">Size:</h3>
            <div class="size">
                <button class="button">S</button>
                <button class="button">M</button>
                <button class="button">L</button>
                <button class="button">XL</button>
            </div>
            <div class="add__button">
                <button class="button__add">Add Cart</button>
            </div>
            <div class="description">
                <h3 class="description__title">Product Details:</h3>
                <h4 class="description">- Composition: 100% cotton</h4>
                <h4 class="description">- Density: 270 g</h4>
            </div>
        </div>
    </div>
</body>
</html>
@endsection