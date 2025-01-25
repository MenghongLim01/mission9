@extends('layout.master')

@section('content')
<!-- Header Start -->
<header class="bg-light py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 600px;">
            <h5 class="section-title px-3 text-primary">About Us</h5>
            <h1 class="mb-0">About Fire Emergencies</h1>
        </div>
    </div>
</header>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <img class="img-fluid rounded shadow-lg" src="img/about.jpg" alt="Fire Emergency Image">
            </div>
            <div class="col-lg-6">
                <h3 class="mb-4">Understanding Fire Emergencies</h3>
                <p>Fire emergencies can happen unexpectedly and can cause significant damage to property and pose serious threats to human life. It is essential to be prepared and understand the necessary steps to take in the event of a fire.</p>
                <div class="mb-4">
                    <h4 class="mb-3 text-primary">Common Causes of Fires</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-bolt text-warning me-2"></i>Electrical faults and malfunctions</li>
                        <li class="mb-2"><i class="fas fa-utensils text-warning me-2"></i>Unattended cooking</li>
                        <li class="mb-2"><i class="fas fa-candle-holder text-warning me-2"></i>Careless use of candles or open flames</li>
                        <li class="mb-2"><i class="fas fa-smoking text-warning me-2"></i>Smoking materials</li>
                        <li class="mb-2"><i class="fas fa-fire text-warning me-2"></i>Arson or deliberate fire-setting</li>
                    </ul>
                </div>
                <div>
                    <h4 class="mb-3 text-primary">Fire Safety Tips</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-bell text-success me-2"></i>Install and regularly test smoke alarms</li>
                        <li class="mb-2"><i class="fas fa-route text-success me-2"></i>Have a fire escape plan and practice it with your family</li>
                        <li class="mb-2"><i class="fas fa-ban text-success me-2"></i>Keep flammable materials away from heat sources</li>
                        <li class="mb-2"><i class="fas fa-plug text-success me-2"></i>Use electrical appliances safely and avoid overloading circuits</li>
                        <li class="mb-2"><i class="fas fa-utensils text-success me-2"></i>Never leave cooking unattended</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection