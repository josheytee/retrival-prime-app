<x-cresta-service-layout name="{{ $service->name }}" imagepath="{{ asset('assets/img/services/social.jpeg') }}">

    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            <div class="col-xl-12 ">
                <div class="tg-sv-details-content">
                    <h6 class=" mb-10" style="color: #351EE0">Social Media Account Specialists</h6>

                    <h5 class="tg-sv-details-title-sm mb-10">
                        Professionals in the Social Media space </h5>

                    <p>
                    <div class="tg-sv-details-thumb-sm">
                        <img src="{{ asset('assets/img/services/social-2.jpeg') }}"
                            style="
                        height: 350px;
                        object-fit: cover;
                    "
                            alt="" />
                    </div> Social media is defined as a technology that operates through computers, facilitating the
                    exchange of thoughts, ideas, and information via virtual networks and communities. It is a branch of
                    the internet that enables fast electronic communication of various types of content, including
                    videos, photos, personal messages, and documents.</p>
                    <p>Users interact with social media platforms using computers, tablets, or smartphones through
                        web-based software or apps. Despite widespread use in America and Europe, Asia, particularly
                        Indonesia, is seeing the highest engagement rates. As of October 2021, the global social media
                        user count has reached over 4.5 billion.</p>
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
            <h2 class="tg-sv-details-title-sm mb-10">We provide a complete range of Investment scam recovery services.
            </h2>
            <p class="mb-10">We deliver a comprehensive suite of services for investment scam recovery, specifically
                aligned with our clients’ requirements. Leveraging our sophisticated arsenal of resources, we utilize
                strategic approaches to facilitate expedient and effective solutions.</p>

        </div>
    </div>
    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            <div class="col-xl-6 mb-30">
                <div class="tg-sv-details-thumb-sm">
                    <img src="{{ asset('assets/img/services/social-3.jpeg') }}" alt="" />
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
                            Facebook Hack or Recovery Services </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            WhatsApp Hack or Recovery Services </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Instagram Hack or Recovery Services </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Snapchat Hack or Recovery Services </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            TikTol Hack or Recovery Services </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Discord Hack or Recovery Services </li>
                    </ul>
                    <a href="{{ route('pages.contact') }}" class="tg-btn-gradient mt-20 w-100 text-center">
                        Message Us Now
                    </a>
                </div>
            </div>
        </div>


</x-cresta-service-layout>
