<!-- resources/views/homepage.blade.php -->
@extends('Components.Layout')

@section('title', 'Home Page')

@section('content') 
        <section class="hero">
            <div class="home-bg-blur"></div>
            <div class="home-content">
                <h1>Welcome to Bake & Brew, {{ $username }}!</h1>
                <h2>Where every bite is a <span>little joy.</span></h2>
                <p>Savor light meals, delightful snacks, and a cozy atmosphere crafted just for you.</p>
            </div>
        </section>

        <div class="welcome-section">
        <h2>Welcome</h2>
        <p>Great coffee, mouth-watering food, excellent service, and a smile. It's all we’ve ever focused on. Now, with our Catering Services, you can bring us with you for the comfort of your own home. Join us on this flavorful journey, and let’s do it together!</p>
        <div class="arrow-container">
            <a href="#home-heading" class="arrow-down">&#8595;</a> 
            <a href="#home-heading" class="arrow-down">&#8595;</a>
            <a href="#home-heading" class="arrow-down">&#8595;</a>
        </div>
        </div>

        <section class="home-heading">
    <div class="heading">Our <span>Features</span></div>

    <div class="menu-cards">
        <div class="menu-card">
            <div class="card-image">
                <img src="{{ asset('css/img13.jpg') }}" alt="Morning Delights & Snack Staples">
            </div>
            <h3>Morning Delights & Snack Staples</h3>
            <p>Start your day with our comforting breakfast classics or enjoy a quick, energizing snack. At Robiel Prince Cafe, we offer a delicious selection that balances taste and quality, perfect for any craving. Dive into our menu and discover your new favorite bite!</p>
            <a href="#">See Menu</a>
        </div>

        <div class="menu-card">
            <div class="card-image">
                <img src="{{ asset('css/img12.jpg') }}" alt="Delicious Tea">
            </div>
            <h3>Delicious Tea</h3>
            <p>Enjoy our fresh, flavorful tea options. Whether you're after a quick refreshment or a relaxed moment, we’ve got something to satisfy every craving. the heheheheheehhe. yayayayayyaya. ahahahahahaha. gegegeggeegeg. </p>
            <a href="#">See Menu</a>
        </div>

        <div class="menu-card">
            <div class="card-image">
                <img src="{{ asset('css/img11.jpg') }}" alt="Refreshing Drinks & Beverages">
            </div>
            <h3>Refreshing Drinks & Beverages</h3>
            <p>From energizing coffees to refreshing smoothies and indulgent shakes, our drink menu offers something for every taste. Whether you need a pick-me-up or the perfect pairing for your meal, we've got you covered!</p>
            <a href="#">See Menu</a>
        </div>
    </div>
</section>

@endsection
