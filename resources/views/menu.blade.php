<!-- resources/views/menu.blade.php -->
@extends('Components.Layout', ['username' => $username])

@section('title', 'Menu')
 
@section('content')
    <main class="content-main">
    <section class="best-seller">
                            <div class="heading">Our <span>Best Seller</span></div> 
                            <div class="seller-box"> 
                                <div class="bfast">Trending <span><i class="fa-solid fa-fire"></i></span></div>
                                <div class="first-section"> 

                                    <div class="firstsection-box"> 
                                        <img src="{{ asset('css/img1.jpg') }}" alt="">
                                        <h3>Egg Sandwinch</h3>
                                        <div class="price">$1.2</div>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <a href="#" class="check-btn">Buy</a>
                                    </div>

                                    <div class="firstsection-box"> 
                                        <img src="{{ asset('css/img2.jpg') }}" alt="">
                                        <h3>Tapsilog</h3>
                                        <div class="price">$1.2</div>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <a href="#" class="check-btn">Buy</a>
                                    </div>

                                    <div class="firstsection-box"> 
                                        <img src="{{ asset('css/img3.jpg') }}" alt="">
                                        <h3>Pancit Bihon</h3>
                                        <div class="price">$1.2</div>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </div>
                                        <a href="#" class="check-btn">Buy</a>
                                    </div> 
                                </div>
                            </div>
                        </section>
    </main>
        <section class="menu">
            <div class="menu-box"> 
                <div class="bfast">Breakfast</div>
                    <div class="menu-a"> 

                        <div class="a-box"> 
                            <img src="{{ asset('css/img1.jpg') }}" alt="">
                            <h3>Egg Sandwinch</h3>
                            <div class="price">$1.2</div>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <a href="#" class="check-btn">Buy</a>
                        </div>

                        <div class="a-box"> 
                            <img src="{{ asset('css/img2.jpg') }}" alt="">
                            <h3>Red Velvet Cake</h3>
                            <div class="price">$1.2</div>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <a href="#" class="check-btn">Buy</a>
                        </div>

                        <div class="a-box"> 
                            <img src="{{ asset('css/img3.jpg') }}" alt="">
                            <h3>Cheesecake</h3>
                            <div class="price">$1.2</div>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <a href="#" class="check-btn">Buy</a>
                        </div>

                        <div class="a-box"> 
                            <img src="{{ asset('css/img1.jpg') }}" alt="">
                            <h3>Pancit Bihon</h3>
                            <div class="price">$1.2</div>
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <a href="#" class="check-btn">Buy</a>
                        </div>                   
                </div>
            </div>
        </section>
@endsection