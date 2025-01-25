
@extends('layout.master')

@section('content')
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
                        <a href="{{ route('contact.page') }}" class="btn btn-primary py-md-3 px-md-5 me-3">Contact Us Now</a>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


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
                                 precise location. This ensures that individuals receive alerts specific to their current whereabouts, enhancing the relavence and effectiveness of the information provided.
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
                            <p> The system is designed to be accessible to all members of the community, including those with disabilities and 
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
    @endsection

