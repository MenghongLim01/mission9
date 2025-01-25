@extends('layout.master')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Best Security Services</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Safe & Secure Home For Your Family</h1>
                            <a href="{{ route('weather.dashboard') }}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Real Weather Search</a>


                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Best Security Services</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Safe & Secure Home For Your Family</h1>
                            <a href="contact-page" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.3s" src="{{ asset('img/about.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h5>
                        <h1 class="display-5 mb-0">We Offers Quality Emergency Alert for out citizen</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">An emergency alert website serves as a crucial tool for promoting public safety, raising awareness, and facilitating effective communication during emergencies to minimize harm and save lives.</h4>
                    <p class="mb-4">The website prioritizes user privacy and security by implementing measures to protect personal information, secure communication channels, and prevent unauthorized access to the platform. 
                        The website provides real-time weather alerts for users based on their location. This includes alerts for severe weather events such as thunderstorms, hurricanes, tornadoes, floods, and winter storms.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary d-flex flex-column justify-content-center text-center border-bottom border-5 border-secondary rounded p-3" style="height: 200px;">
                                <i class="fa fa-star fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">20 Years Experience</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.9s">
                            <div class="bg-secondary d-flex flex-column justify-content-center text-center border-bottom border-5 border-primary rounded p-3" style="height: 200px;">
                                <i class="fa fa-award fa-4x text-white mb-4"></i>
                                <h4 class="text-white mb-0">Award Winning</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h5>
                <h1 class="display-5 mb-0">Our Emergency Alert System Service</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded" style="background-image: url('https://assets-global.website-files.com/62c609e220cfd73d2f4f179b/6345ef6cd3a0db8c9832d6e4_6341e56aca4cc15af6a82714_37_Real_Time_Vs_Near_Time.png'); background-size: cover;">
                        <div class="position-relative p-5">
                            <h3 class="mb-3">Real-Time Updates</h3>
                            <p>The system provides up-to-date information and updates during emergencies, keeping users informed of changing conditions and developments. This real-time communication fosters situational awareness and enables individuals to make informed decisions to stay safe.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded" style="background-image: url('https://www.wellington.ca/en/resident-services/resources/Emergency_Management/2021_EM_EPWeek_Bucket.jpg'); background-size: cover;">
                        <div class="position-relative p-5">
                            <h3 class="mb-3">Emergency Resources</h3>
                           <p>In addition to alerts, the system offers resources to help users prepare for emergencies. 
                            These resources include evacuation routes, shelter locations, and first aid tips, empowering individuals to proactively plan and respond to emergencies. The system boosts community emergency readiness.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded" style="background-image: url('https://www.sensolus.com/wp-content/uploads/2022/01/Location-options.png'); background-size: cover;">
                        <div class="position-relative p-5">
                            <h3 class="mb-3">GeolocateTech</h3>
                            <p>Leveraging advanced technology, the system delivers targeted alerts to users based on their
                                 precise location. This ensures that individuals receive alerts specific to their current whereabouts, enhancing the relevance and effectiveness of the information provided.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLhw11XKOSagzpx4j4GZIebEDCwFTVc125BRDAJjOXCm3tVSiyTnvnt6Ce4uwv6qiGcRY&usqp=CAU'); background-size: cover;">
                        <div class="position-relative p-5">
                            <h3 class="mb-3">Privasec</h3>
                            <p>The system prioritizes user privasec, implementing measures to protect personal information,
                                 secure communication channels, and prevent unauthorized access to the platform. By maintaining robust privasec protocols, the system ensures user trust and confidence in its security measures.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded" style="background-image: url('https://img.uxcel.com/tags/accessibility-1689755278465-2x.jpg'); background-size: cover;">
                        <div class="position-relative p-5">
                            <h3 class="mb-3">Accessibility</h3>
                            <p>The system is designed to be accessible to all members of the community, including those with disabilities and 
                                individuals who speak languages other than English. Information is provided in multiple languages, and accessibility features are implemented to ensure equal access to information.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light border-bottom border-5 border-primary rounded" style="background-image: url('https://i.pinimg.com/1200x/96/0f/e3/960fe381167a6661ef305498ed3ae575.jpg'); background-size: cover;">
                        <div class="position-relative p-5">
                            <h3 class="mb-3">TwowayComms</h3>
                            <p>User interaction fosters community collaboration, enhancing emergency response effectiveness.
                                 By facilitating direct user involvement, the system promotes transparency and inclusivity in emergency management processes, fostering a shared responsibility for safety and resilience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5 wow zoomIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="text-center mx-auto mb-4" style="max-width: 600px;">
                        <h5 class="text-white text-uppercase" style="letter-spacing: 5px;">
                            The Emergency Alert System (EAS)</h5>
                        <h1 class="display-5 text-white">We Offers Quality Emergency Alert for out citizen</h1>
                    </div>
                    <p class="text-white mb-4">The Emergency Alert System (EAS) is a national public warning system that requires 
                        broadcasters, satellite digital audio service, and direct broadcast satellite providers to provide the President with a communications capability to address the Cambodian people within 10 minutes during a national emergency. It also provides state and local authorities with the capability to disseminate emergency information regionally, tailored to specific areas, such as weather or AMBER alerts.</p>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Contact Us Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->
    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h5>
                <h1 class="display-5 mb-0">What People Say About Our Services</h1>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text bg-light rounded p-4 mt-n5">
                    <p class="mt-5">I've been using the emergency alert system for over a year now, and I'm extremely impressed 
                        with its reliability. During severe weather events, I receive timely alerts that help me prepare and stay safe. The website interface is straightforward, making it easy to manage my alert preferences. Keep up the excellent work!
                    </p>
                    <h4 class="text-truncate">Thida Kin</h4>
                    <i>Full-time Student</i>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text bg-light rounded p-4 mt-n5">
                    <p class="mt-5">Overall, I find the emergency alert system website helpful, but I think there's room for improvement in terms of 
                        customization options. It would be great to have the ability to select specific types of alerts I want to receive, like severe thunderstorm warnings or road closures. Additionally, more flexibility in setting notification preferences, such as quiet hours, would enhance the user experience
                    </p>
                    <h4 class="text-truncate">Phengang Chea</h4>
                    <i>President Of Football Club</i>
                </div>
            </div>
            <div class="text-center">
                <img class="img-fluid mx-auto rounded-circle" src="img/testimonial-4.jpg" style="width: 100px; height: 100px;">
                <div class="testimonial-text bg-light rounded p-4 mt-n5">
                    <p class="mt-5">Kudos to the emergency alert system website team! I recently moved to a new area and signed up for alerts, 
                        not knowing what to expect. I've been pleasantly surprised by how well the system works. The alerts are always timely and relevant, whether it's a severe weather warning or a local safety advisory. It's reassuring to know that I can count on this website to keep me informed and prepared during emergencies. Thank you for providing such a valuable service to our community!
                    </p>
                    <h4 class="text-truncate">Yong Ly</h4>
                    <i>MIS Student</i>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Map Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="text-primary text-uppercase" style="letter-spacing: 5px;">Emergency Alerts Map</h5>
                <h1 class="display-5 mb-0">Real-time Alerts for Cambodia</h1>
            </div>
            <div class="map-container" style="height: 500px;">
                <div id="map" style="height: 100%;"></div>
            </div>
        </div>
    </div>
    <!-- Map End -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const map = L.map('map').setView([12.5657, 104.991], 7); // Centered on Cambodia

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
            }).addTo(map);

            // Icons (base64-encoded images)
            const icons = {
                flood: L.icon({
                    iconUrl: 'img/floot.png', // Replace with the base64-encoded image for flood
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/images/marker-shadow.png',
                    shadowSize: [41, 41]
                }),
                drought: L.icon({
                    iconUrl: 'img/drought.png', // Replace with the base64-encoded image for drought
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/images/marker-shadow.png',
                    shadowSize: [41, 41]
                }),
                fire: L.icon({
                    iconUrl: 'img/flames.png', // Replace with the base64-encoded image for fire
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/images/marker-shadow.png',
                    shadowSize: [41, 41]
                }),
                storm: L.icon({
                    iconUrl: 'img/thunderstorm.png', // Replace with the base64-encoded image for storm
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/images/marker-shadow.png',
                    shadowSize: [41, 41]
                }),
                earthquake: L.icon({
                    iconUrl: 'img/earthquake.png', // Replace with the base64-encoded image for earthquake
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/images/marker-shadow.png',
                    shadowSize: [41, 41]
                }),
            };

            // Mock data for emergencies
            const emergencies = [
                { lat: 11.5564, lon: 104.9282, description: 'Flood in Phnom Penh', type: 'flood' },
                { lat: 10.6252, lon: 104.1640, description: 'Flood in Kampot', type: 'flood' },
                { lat: 11.5621, lon: 104.8885, description: 'Flood in Kandal', type: 'flood' },
                { lat: 12.0325, lon: 104.9210, description: 'Drought in Kampong Cham', type: 'drought' },
                { lat: 12.7111, lon: 104.8885, description: 'Drought in Kampong Thom', type: 'drought' },
                { lat: 11.3628, lon: 105.3205, description: 'Fire in Kampong Chhnang', type: 'fire' },
                { lat: 10.8113, lon: 104.9910, description: 'Storm in Kep', type: 'storm' },
                { lat: 12.6873, lon: 103.9204, description: 'Storm in Battambang', type: 'storm' },
                { lat: 13.0946, lon: 103.2022, description: 'Flood in Siem Reap', type: 'flood' },
                { lat: 11.5676, lon: 104.9232, description: 'Earthquake in Takeo', type: 'earthquake' },
            ];

            emergencies.forEach(emergency => {
                L.marker([emergency.lat, emergency.lon], { icon: icons[emergency.type] }).addTo(map)
                    .bindPopup(emergency.description);
            });
        });
    </script>
@endsection
