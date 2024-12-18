<!-- resources/views/Components/Layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bake & Brew Co. - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    @if(!isset($hideNavAndFooter) || !$hideNavAndFooter)
        <header class="site-header">
            <a href="#" class="logo"> <i class="fa-solid fa-mug-hot"></i>Bake & Brew Co.</a>
            <nav class="nav">
                <a href="{{ route('homepage', ['username' => $username]) }}" class="{{ request()->is('homepage/*') ? 'active' : '' }}">Home</a>
                <a href="{{ route('menu', ['username' => $username]) }}" class="{{ request()->is('menu/*') ? 'active' : '' }}">Menu</a>
                <a href="{{ route('aboutus', ['username' => $username]) }}" class="{{ request()->is('aboutus/*') ? 'active' : '' }}">About Us</a>
                <a href="{{ route('contactus', ['username' => $username]) }}" class="{{ request()->is('contactus/*') ? 'active' : '' }}">Contact Us</a>
            </nav>

            <div class="icons">
                <div class="fa-solid fa-bars" id="menu-hmbtn"></div>
                <div class="fa-solid fa-magnifying-glass" id="search-btn"></div>
                <div class="fa-solid fa-cart-shopping" id="cart-btn"></div>
                <a href="{{ route('profile', ['username' => $username]) }}" class="fa-solid fa-user"></a>
            </div>

            <form action="" class="search-form">
                <input type="search" id="search-box" placeholder="Search here..">
                <label for="search-box" class="fa-solid fa-magnifying-glass"></label>
            </form>

            <div class="shopping-cart">
                <h2>My Cart</h2>
                <div class="cart-box">
                    <div class="cart-content">
                    <i class="fa-solid fa-trash"></i>
                    </div>
                    <div class="checkout-btn">Check out</div>
                </div>
            </div>
        </header>
    @endif

    <main>
        <!-- This is where the content of the child views will be displayed -->
        @yield('content') <!--call the webpages to display its content-->
    </main>

    @if(!isset($hideNavAndFooter) || !$hideNavAndFooter)
    <footer>
        <section class="footer">
                <div class="footer__column">
                    <h1 class="footer__title">Bake & Brew Co. © </h1>
                    <p class="footer__contact-info">
                        <span><a href="bakedandbrew@gmail.com" class="footer__link"><i
                                    class="fas fa-envelope"></i></a></span>
                        <span>bakedandbrew@gmail.com</span><br>
                        <span><a href="tel:09076409605" class="footer__link"><i class="fas fa-phone"></i></a></span>
                        <span>09123456789</span>
                    </p>
                </div>
            </div>
            <div class="footer__bottom">
                <p>&copy; 2024 All rights reserved.</p>
            </div>
        </section>
    </footer>
    @endif

    <script src="{{ asset('javascript/script.js') }}"></script>
</body>
</html>
