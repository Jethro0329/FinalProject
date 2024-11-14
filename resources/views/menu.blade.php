@extends('Components.Layout', ['username' => $username])

@section('title', 'Menu')

@section('content')
<main class="content-main">
    <section class="Trending">
        <div class="heading"><span></span></div> 
        <div class="Trending-box"> 
            <div class="bfast">Trending <span><i class="fa-solid fa-fire"></i></span></div>
            <div class="first-section"> 

                <div class="firstsection-box"> 
                    <img src="{{ asset('css/bfast.jpg') }}" alt="">
                    <h3>Classic Croissants</h3>
                    <div class="price">₱150</div>
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
                    <h3>Lavander Latte</h3>
                    <div class="price">₱120</div>
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
                    <h3>Banana Walnut Muffin </h3>
                    <div class="price">₱100</div>
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
                    <img src="{{ asset('css/img4.jpg') }}" alt="">
                    <h3>Chai Latte</h3>
                    <div class="price">₱120</div>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#" class="check-btn">Buy</a>
                </div>

                <div class="firstsection-box"> 
                    <img src="{{ asset('css/img5.jpg') }}" alt="">
                    <h3>Chicken Salad Croissant </h3>
                    <div class="price">₱350</div>
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
                    <img src="{{ asset('css/img6.jpg') }}" alt="">
                    <h3>Espresso</h3>
                    <div class="price">₱110</div>
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
@endsection
