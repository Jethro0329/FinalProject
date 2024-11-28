@extends('Components.Layout', ['username' => $username])

@section('title', 'Menu')

@section('content')
<main class="content-main">
    <section class="Trending">
        <div class="heading"><span></span></div> 
        <div class="Trending-box"> 
            <div class="bfast">Trending <span><i class="fa-solid fa-fire"></i></span></div>
            <div class="first-section">
                @foreach ($menuItems as $item)
                    <div class="firstsection-box">
                        <img src="{{ asset($item['image']) }}" alt="{{ $item['name'] }}">
                        <h3>{{ $item['name'] }}</h3>
                        <div class="price">{{ $item['price'] }}</div>
                        <a href="#" class="check-btn">Buy</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
