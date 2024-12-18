@extends('Components.Layout')

@section('title', 'Home Page')

@section('content') 
<section class="hero">
    <div class="logo-container" style="text-align: center; margin: 50px 0;">
        <img src="{{ asset('css/logo.png') }}" alt="Coffee Logo" class="logo-animation" style="width: 300px; height: auto; filter: brightness(0) invert(1);">
    </div>
</section>

<div class="welcome-section">
    <h2>Welcome</h2>

    <p>
        Whether you’re here for a morning pick-me-up, a quiet place to work, or an afternoon catch-up with friends,
        Bake & Brew Co. offers a warm atmosphere and a menu that celebrates the art of baking and brewing.
        From creamy lattes to rich espresso shots, buttery croissants to decadent cakes, each item is made with care to provide comfort and delight.
    </p>

    <div class="arrow-container">
        <p>Great coffee, mouth-watering food, excellent service, and a smile.</p>
        <a href="#home-heading" class="arrow-down">&#8595;</a> 
        <a href="#home-heading" class="arrow-down">&#8595;</a>
        <a href="#home-heading" class="arrow-down">&#8595;</a>
    </div>
</div>

<section class="home-heading">
    <div class="heading">Signature <span> Offerings</span></div>

    <div class="menu-cards">
        <div class="menu-card">
            <div class="card-image">
                <img src="{{ asset('css/img13.jpg') }}" alt="Breakfast Classic">
            </div>
            <h3>Sunrise Specials</h3>
            <p>
                Whether you're craving a flaky croissant, a buttery scone, or a seasonal tart, our Sunrise Specials offer a perfect blend of classic 
                and inventive treats to energize your morning. Drop by to indulge in a moment of joy and sweetness as the day begins!
            </p>
            <a href="{{ route('menu', ['username' => $username]) }}" class="{{ request()->is('menu/*') ? 'active' : '' }}">See Menu</a>
        </div>

        <div class="menu-card">
            <div class="card-image">
                <img src="{{ asset('css/img12.jpg') }}" alt="Delicious Tea">
            </div>
            <h3>Soothing Steeps</h3>
            <p>
                A selection of calming teas to help you relax and recharge. From fragrant herbs to classic blends, 
                each cup offers a moment of tranquility. Sip, unwind, and enjoy the peaceful warmth in every brew.
            </p>
            <a href="{{ route('menu', ['username' => $username]) }}" class="{{ request()->is('menu/*') ? 'active' : '' }}">See Menu</a>
        </div>

        <div class="menu-card">
            <div class="card-image">
                <img src="{{ asset('css/img11.jpg') }}" alt="Refreshing Drinks & Beverages">
            </div>
            <h3>Fresh Brews</h3>
            <p>
                This offers a selection of aromatic, expertly brewed coffees and hot drinks to kickstart your day.
                From rich, bold flavors to smooth, mellow blends, each cup is made to refresh and energize you. Savor the perfect brew with every sip.
            </p>
            <a href="{{ route('menu', ['username' => $username]) }}" class="{{ request()->is('menu/*') ? 'active' : '' }}">See Menu</a>
        </div>
    </div>
</section>
@endsection
