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
    <div class="container">
        <ul class="list">
            <li class="list__item">
                <div class="left__side">
                    <img  class="left__side-img" src="{{asset('assets/img/1.jpg')}}" width="100" height="100" alt="">
                    <div class="info">
                        <H4 class="info__item">Oversize T-shirt</H4>
                        <h4>Size: L</h4>
                    </div>
                    <div class="button__item">
                        <button class="plus" type="button"><ion-icon name="add-outline" class="icon"></ion-icon></button>
                        <button class="minus" type="button"><ion-icon name="remove-outline" class="icon"></ion-icon></button>
                    </div>
                </div>
                <div class="right__side">
                    <h4 class="price__item">3200RUB</h4>
                </div>
            </li>
            <li class="list__item">
                <div class="left__side">
                    <img  class="left__side-img" src="{{asset('assets/img/1.jpg')}}" width="100" height="100" alt="">
                    <div class="info">
                        <H4 class="info__item">Oversize T-shirt</H4>
                        <h4>Size: L</h4>
                    </div>
                    <div class="button__item">
                        <button class="plus" type="button"><ion-icon name="add-outline" class="icon"></ion-icon></button>
                        <button class="minus" type="button"><ion-icon name="remove-outline" class="icon"></ion-icon></button>
                    </div>
                </div>
                <div class="right__side">
                    <h4 class="price__item">3200RUB</h4>
                </div>
            </li>
            <li class="list__item">
                <div class="left__side">
                    <img class="left__side-img" src="{{asset('assets/img/1.jpg')}}" width="100" height="100" alt="">
                    <div class="info">
                        <H4 class="info__item">Oversize T-shirt</H4>
                        <h4>Size: L</h4>
                    </div>
                    <div class="button__item">
                        <button class="plus" type="button"><ion-icon name="add-outline" class="icon"></ion-icon></button>
                        <button class="minus" type="button"><ion-icon name="remove-outline" class="icon"></ion-icon></button>
                    </div>
                </div>
                <div class="right__side">
                    <h4 class="price__item">3200RUB</h4>
                </div>
            </li>
            <li class="list__item">
                <div class="left__side">
                    <img  class="left__side-img" src="{{asset('assets/img/1.jpg')}}" width="100" height="100" alt="">
                    <div class="info">
                        <H4 class="info__item">Oversize T-shirt</H4>
                        <h4>Size: L</h4>
                    </div>
                    <div class="button__item">
                        <button class="plus" type="button"><ion-icon name="add-outline" class="icon"></ion-icon></button>
                        <button class="minus" type="button"><ion-icon name="remove-outline" class="icon"></ion-icon></button>
                    </div>
                </div>
                <div class="right__side">
                    <h4 class="price__item">3200RUB</h4>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>
@endsection