@extends('Components.Layout')

@section('title', 'Contact Us')

@section('content')
<main class="contact-page">

<section class="hero2">
        <div class="home-content">
        <h1 class="contact-title">Contact Us</h1>
        <p class="contact-subtitle">
        Have any questions, feedback, or inquiries? Whether you need support, want to collaborate, or just want to say hello, feel free to reach out. We're here to help!
        </p>
            <p></p>
        </div>
    </section>


    <!-- Contact Information Section -->
    <section class="contact-info-section">
        <div class="contact-info-card">
            <h3>📞 Phone</h3>
            <p>207-8767-452</p>
        </div>
        <div class="contact-info-card">
            <h3>💬 Facebook</h3>
            <p>082-123-234-345</p>
        </div>
        <div class="contact-info-card">
            <h3>📧 Email</h3>
            <p>support@yoursite.com</p>
        </div>
        <div class="contact-info-card">
            <h3>🏠 Our Shop</h3>
            <p>2443 Oak Ridge Omaha, QA 45056</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="form-container">
            <h2 class="form-title">Get In Touch</h2>
            <p class="form-subtitle">
            Have questions, suggestions, or feedback? Drop us a message, and we’ll be happy to assist you as soon as possible!
            </p>
            <form action="/welcome" method="POST" onsubmit="showConfirmation(event)">
                @csrf
                <input type="text" name="name" class="form-input" placeholder="Name" required>
                <input type="email" name="email" class="form-input" placeholder="Email" required>
                <input type="text" name="subject" class="form-input" placeholder="Subject" required>
                <textarea name="message" rows="5" class="form-textarea" placeholder="Message" required></textarea>
                <button type="submit" class="form-button">Send Now</button>
            </form>
        </div>

        <!-- Embedded Map -->
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243646.24030104883!2d-74.24789580293029!3d40.69767006684409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDU4JzEwLjUiTiA3NMKwMTQnMjAuMSJX!5e0!3m2!1sen!2sus!4v1607040453410!5m2!1sen!2sus"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </section>

</main>

<!-- Modal Popup -->
<div id="confirmationModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <p>Your message has been sent! Thank you!</p>
    </div>
</div>

<script>
    function showConfirmation(event) {
        event.preventDefault();
        document.getElementById('confirmationModal').style.display = 'block';
    }

    function closeModal() {
        document.getElementById('confirmationModal').style.display = 'none';
    }
</script>
@endsection
