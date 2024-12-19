@extends('Components.Layout')

@section('title', 'Home Page')

@section('content') 
    <section class="hero1">
        <div class="home-content">
        <h1>About Our Shop</h1>
        <h2>We are a passionate team dedicated to providing the best products and service to our customers. Our shop is built on trust, quality, and commitment to customer satisfaction. 
            <p> <span>Meet the people who make it all happen:</span></h2></p>
        </div>
    </section>

    <div class="about-shop">
        <h2>Meet the Team</h2>
        <p>We are a group of BSIT-3C students working on this exciting project, combining our passion for technology, design, and customer service. Our goal is to create a unique and enjoyable experience for our customers through this shop, built on trust, quality, and dedication. Each team member brings their own expertise to the table, and together we’re making it all happen!</p>
    </div>

    <div class="team">
        <div class="card">
            <img src="{{ asset('css/jeth.jpg') }}" alt="Jethro Owen P. Acuña">
            <h3>Jethro Owen P. Acuña</h3>
            <p>Back-End Developer</p>
        </div>
        <div class="card">
            <img src="{{ asset('css/jet.jpg') }}" alt="Jethro J. Manzanillo">
            <h3>Jethro J. Manzanillo</h3>
            <p>UI Designer / Front-End Developer</p>
            
        </div>
        <div class="card">
        <img src="{{ asset('css/jella.jpg') }}" alt="Jella Marie B. Caceres">
            <h3>Jella Marie B. Caceres</h3>
            <p>UI Designer / Front-End Developer</p>
        </div>
    </div>

@endsection
