@extends('Components.Layout', ['username' => $username])

@section('title', 'Menu')

@section('content')
<section class="hero3">
    <div class="home-content">
        <h1>Welcome to Our Menu</h1>
        <h2>Discover the best pastries and drinks we have to offer!</h2>
        <p>From trending flavors to all-time favorites, explore our wide selection of delicious breads and coffees. Whether you're craving something new or in the mood for a classic, we've got something for everyone.</p>
    </div>
</section>
<main class="content-main">
    <section class="Trending">
        <div class="heading"><span> Trending <i class="fa-solid fa-fire"></i></span></div> 
        <div class="Trending-box"> 
            <div class="first-section">
                @foreach ($menuItems as $item)
                    <div class="firstsection-box">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                        <h3>{{ $item->name }}</h3>
                        <div class="price">{{ $item->price }}</div>
                        <a href="#" class="check-btn">Buy</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
