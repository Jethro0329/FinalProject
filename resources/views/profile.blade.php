@extends('Components.Layout')

@section('title', 'Profile')

@section('content')
@section('content') 
<section class="hero4">
    <div class="home-content">
        <h1><i class="fa fa-user" aria-hidden="true"></i> Profile</h1>
    </div>
</section>
<div class="profile-container">
    <div class="profile-card">
        <img src="{{ asset('css/pfp.jpg') }}" alt="Profile Picture" class="profile-img">
        <div class="profile-info">
            <h2>Profile Info</h2>
            <p>Name: {{ $username }}</p>
            <hr class="divider">
            <div class="sms-alerts">
                <span>Get Updates on New Specials: </span>
                <div class="sms-toggle">
                    <span class="enabled">ON</span>
                    <span class="disabled">OFF</span>
                </div>
            </div>
            <button class="save-btn">Save Preferences</button>
        </div>
    </div>

    <div class="accounts-card">
        <h2>My Orders</h2>
        <hr class="divider">
        <div class="account-status">
            <span>Last Order:</span>
            <p>Espresso and Croissant</p>
        </div>
        <div class="account-status blocked">
            <span>Order Status:</span>
            <p>Pending</p>
        </div>
    </div>

    <div class="bills-card">
        <h2>My Coffee Orders</h2>
        <hr class="divider">
        <div class="bill-item">
            <span>Espresso</span>
            <span class="status paid">Paid</span>
        </div>
        <div class="bill-item">
            <span>Cappuccino</span>
            <span class="status unpaid">Unpaid</span>
        </div>
        <div class="bill-item">
            <span>Croissant</span>
            <span class="status paid">Paid</span>
        </div>
        <div class="bill-item">
            <span>Chocolate Cake</span>
            <span class="status unpaid">Unpaid</span>
        </div>
    </div>
</div>
@endsection