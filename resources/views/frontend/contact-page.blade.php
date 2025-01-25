@extends('layout.master')

@section('title', 'Contact Us')

@section('content')
<!-- Header Start -->
<div class="container py-5">
    <div class="mx-auto text-center mb-5" style="max-width: 600px;">
        <h1 class="mb-0">Contact Us</h1>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-4">
                <div class="bg-white rounded p-4 shadow">
                    <div class="text-center mb-4">
                        <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                        <h4 class="text-primary mt-2">Address</h4>
                        <p class="mb-0">123 Street, <br> Phnom Penh, CAMBODIA</p>
                    </div>
                    <div class="text-center mb-4">
                        <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                        <h4 class="text-primary mt-2">Mobile</h4>
                        <p class="mb-0">+855 172 76477</p>
                        <p class="mb-0">+855 125 67890</p>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                        <h4 class="text-primary mt-2">Email</h4>
                        <p class="mb-0">pphok1@gmail.com</p>
                        <p class="mb-0">railwaycambo@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <h3 class="mb-2">Send us a message</h3>
                <p class="mb-4">We are here to answer any questions you may have about our railway services. Reach out to us and we'll respond as soon as we can.</p>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 shadow-sm" id="name" name="name" placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0 shadow-sm" id="email" name="email" placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 shadow-sm" id="subject" name="subject" placeholder="Subject" required>
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0 shadow-sm" placeholder="Leave a message here" id="message" name="message" style="height: 160px" required></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 mt-5">
                <div class="rounded shadow">
                    <iframe class="rounded w-100" style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3908.573419471038!2d104.8954066749396!3d11.582407943810729!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109517bf7757d23%3A0x965c34888684bf1!2sParagon%20International%20University!5e0!3m2!1sen!2skh!4v1717598919853!5m2!1sen!2skh" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection
