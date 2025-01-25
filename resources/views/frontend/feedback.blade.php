@extends('layout.master')

@section('title', 'Feedback')

@section('content')
    <!-- Feedback Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Feedback</h5>
                <h1 class="display-5 mb-0">We Value Your Feedback</h1>
            </div>
            <div class="row justify-content-center g-5">
                <div class="col-lg-7">
                    <form action="{{ route('feedback.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <h5 class="mb-4">Get In Touch</h5>
                    <p class="mb-4">If you have any questions or need further assistance, feel free to contact us. Our team is here to help you.</p>
                    <div class="d-flex mb-4">
                        <i class="bi bi-geo-alt text-primary me-2"></i>
                        <p class="mb-0">Paragon, Phnom Penh</p>
                    </div>
                    <div class="d-flex mb-4">
                        <i class="bi bi-envelope-open text-primary me-2"></i>
                        <p class="mb-0">Team2@gmail.com</p>
                    </div>
                    <div class="d-flex mb-0">
                        <i class="bi bi-telephone text-primary me-2"></i>
                        <p class="mb-0">+012 345 67890</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feedback End -->
@endsection
