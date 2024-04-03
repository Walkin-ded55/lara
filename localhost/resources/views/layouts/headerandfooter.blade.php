<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COPY</title>
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Manrope:wght@200..800&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="header__inner">
      <nav class="nav">
        <button class="nav__cross" type="button"><ion-icon name="close-outline"></ion-icon></button>
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#" class="nav__link">Man</a>
          </li>
          <li class="nav__item">
            <a href="#" class="nav__link">Woman</a>
          </li>
        </ul>
        <div class="list__us">
        <ul class="nav__list1">
        <li class="nav__list-item"><a href="{{route("catalog")}}" class="nav__link1">T-shirts</a></li>
        <li class="nav__list-item"><a href="{{route("catalog")}}" class="nav__link1">Shirts</a></li>
        <li class="nav__list-item"><a href="{{route("catalog")}}" class="nav__link1">Pants</a></li>  
        <li class="nav__list-item"><a href="{{route("catalog")}}" class="nav__link1">Sweaters</a></li>
        <li class="nav__list-item"><a href="{{route("catalog")}}" class="nav__link1">Hoodie</a></li>
        </ul>
        <ul class="nav__list2">
        <li class="nav__list-item"><a href="{{route("catalog")}}" class="nav__link2">T-shirts</a></li>
        <li class="nav__list-item"><a href="{{route("catalog")}}" class="nav__link2">Shirts</a></li>
        <li class="nav__list-item"><a href="{{route("catalog")}}" class="nav__link2">Pants</a></li>  
        <li class="nav__list-item"><a href="{{route("catalog")}}" class="nav__link2">Sweaters</a></li>
        <li class="nav__list-item"><a href="{{route("catalog")}}" class="nav__link2">Hoodie</a></li>
        </ul>
        </div>
      </nav>
      <div class="header__left-side">
        <button type="button" class="header__burger">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a href="{{route("home")}}" class="header__logo">COPY</a>
      </div>
      <div class="header__right-side">
        <ul class="header__list">
          <li class="header__item">
            <a href="{{route("cart")}}" class="header__link">CART</a>
          </li>
          <li class="header__item">
            <a href="#" class="header__link">SIGN UP</a>
          </li>
        </ul>
      </div>
    </div>
    <script>const nav = document.querySelector(".nav");
const headerBurger = document.querySelector(".header__burger");
const navCross = document.querySelector(".nav__cross");

// вешаем событие, которе будет происходит при клике на бургер
headerBurger.addEventListener("click", function(){
  nav.style.left = "0";
;})
navCross.addEventListener("click", function(){
    nav.style.left = "-100" + "%";
  })</script>
  </header>
  @yield('content')
  <footer class="footer">
  <div class="footer__inner">
        <div class="link">
              <div class="link__right-side">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="{{route("aboutus")}}">about us</a></li>
                        <li class="footer__item"><a href="{{route("cart")}}">cart</a></li>
                        <li class="footer__item"><a href="#">instagram</a></li>
                        <li class="footer__item"><a href="#">vk</a></li>
                    </ul>
              </div>
              
        </div>
  </div>
  </footer>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>  
</body>
</html>