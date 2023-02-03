@extends('layouts.app')

@section('content')

@include('layouts.menubar')

@php
    $site = DB::table('sitesetting')->first();
@endphp


<!-- Contact Info -->

<div class="contact_info">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><img src="{{ asset('public/frontend/images/contact_1.png') }}" alt=""></div>
                        <div class="contact_info_content">
                            <div class="contact_info_title">Phone</div>
                            <div class="contact_info_text">{{ $site->phone_one }}</div>
                        </div>
                    </div>

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><img src="{{ asset('public/frontend/images/contact_2.png') }}" alt=""></div>
                        <div class="contact_info_content">
                            <div class="contact_info_title">Email</div>
                            <div class="contact_info_text">{{ $site->email }}</div>
                        </div>
                    </div>

                    <!-- Contact Item -->
                    <div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
                        <div class="contact_info_image"><img src="{{ asset('public/frontend/images/contact_3.png') }}" alt=""></div>
                        <div class="contact_info_content">
                            <div class="contact_info_title">Address</div>
                            <div class="contact_info_text">{{ $site->company_address }}</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Form -->

<div class="contact_form">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="contact_form_container">
                    <div class="contact_form_title">Get in Touch</div>

                    <form action="{{ route('contact.form') }}" id="contact_form" method="POST">
                        @csrf
                        <div class="contact_form_inputs d-flex flex-md-row flex-column justify-content-between align-items-between">
                            <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Your name" required="required" data-error="Name is required." name="name">

                            <input type="email" id="contact_form_email" class="contact_form_email input_field" placeholder="Your email" required="required" data-error="Email is required." name="email">

                            <input type="text" id="contact_form_phone" class="contact_form_phone input_field" placeholder="Your phone number" name="phone">

                        </div>
                        <div class="contact_form_text">
                            <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
                        </div> 
                        <div class="contact_form_button">
                            <button type="submit" class="button contact_submit_button">Send Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="panel"></div>
</div>

<!-- Map -->
<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127118.32333446581!2d-4.049705624401616!3d5.348446126924715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1ea5311959121%3A0x3fe70ddce19221a6!2sAbidjan%2C%20C%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sen!2sin!4v1629814494838!5m2!1sen!2sin" width="1600" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

@endsection