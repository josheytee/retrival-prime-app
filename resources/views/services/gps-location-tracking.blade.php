<x-cresta-service-layout name="{{ $service->name }}" imagepath="{{ asset('assets/img/services/gps.avif') }}"
    description="{{ $service->content }}">

    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            <div class="col-xl-12 ">
                <div class="tg-sv-details-content">
                    <h6 class=" mb-10" style="color: #351EE0"> Precision at Every Turn</h6>

                    <h5 class="tg-sv-details-title-sm mb-10">Our GPS tracking keeps you connected to what's important
                    </h5>

                    <p>
                    <div class="tg-sv-details-thumb-sm">
                        <img src="{{ asset('assets/img/services/gps-2.jpeg') }}"
                            style="
                        height: 350px;
                        object-fit: cover;
                    "
                            alt="" />
                    </div>

                    RetrivalPrime provides cutting-edge GPS location tracking services designed to deliver precise
                    and real-time location data, ensuring peace of mind for a variety of needs. Whether you’re a
                    business looking to monitor assets, a concerned parent wanting to keep an eye on your
                    children’s whereabouts, or someone needing to track the location of a valuable item,
                    RetrivalPrime has the technology and expertise to provide reliable location solutions.</p>
                    <p>Our GPS tracking system offers an easy-to-use interface and detailed mapping, giving you the
                        power to stay informed about the locations that matter most to you. With RetrivalPrime, you
                        can set up geofences, receive instant alerts, and access historical location data for any
                        tracked entity. Our robust platform is designed for both individual and enterprise use,
                        ensuring scalability and adaptability to a wide range of tracking purposes.</p>
                    <p>At RetrivalPrime, we prioritize your security and convenience, integrating the most advanced
                        GPS technology to provide a service that is both accurate and user-friendly.</p>





                    <a href="{{ route('pages.contact') }}" class="tg-btn-gradient mt-20 text-center">
                        Request for specialist
                    </a>
                </div>
            </div>
        </div>


        <div class="tg-sv-details-thumb mb-30">
            {{-- <img src="assets/img/service/details-1-2.jpg" alt=""> --}}
        </div>
        <div class="tg-sv-details-content">

            <h6 class=" mb-10" style="color: #351EE0">Reasons to Select Our Expertise</h6>
            <h2 class="tg-sv-details-title-sm mb-10">We provide a complete range of Game activation and reactivation
                services</h2>
            <p class="mb-10">
                We deliver comprehensive game activation and reactivation solutions tailored to our clients’ specific
                requirements, leveraging our extensive resources and employing efficient strategies that prioritize
                time-saving results.</p>

        </div>
    </div>
    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            <div class="col-xl-6 mb-30">
                <div class="tg-sv-details-thumb-sm">
                    <img src="{{ asset('assets/img/services/gps-3.avif') }}" alt="" />
                </div>
            </div>
            <div class="col-xl-6 ">
                <div class="tg-sv-details-list pb-55">
                    <ul>
                        <li><i class="fa-solid fa-circle-check"></i>
                            Offer round-the-clock, seamless assistance. </li>
                        <li><i class="fa-solid fa-circle-check"></i>We approach our work with utmost dedication.</li>
                        <li><i class="fa-solid fa-circle-check"></i> Our team consists of certified professionals.</li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            GPS Tracking </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Track lost Vehicles </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Track Lost Devices </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Track live location </li>


                    </ul>
                    <a href="{{ route('pages.contact') }}" class="tg-btn-gradient mt-20 w-100 text-center">
                        Message Us Now
                    </a>
                </div>
            </div>
        </div>


</x-cresta-service-layout>
