<x-cresta-service-layout name="{{ $service->name }}" imagepath="{{ asset('assets/img/services/phone.avif') }}">

    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            <div class="col-xl-12 ">
                <div class="tg-sv-details-content">
                    <h6 class=" mb-10" style="color: #351EE0">Your Gateway to Mobile Transparency</h6>

                    <h5 class="tg-sv-details-title-sm mb-10">Navigate Phone Privacy with Confidence </h5>

                    <p>
                    <div class="tg-sv-details-thumb-sm">
                        <img src="{{ asset('assets/img/services/phone-2.jpeg') }}"
                            style="
                        height: 350px;
                        object-fit: cover;
                    "
                            alt="" />
                    </div> Unlocking smartphones is a common need, whether you’re purchasing a new device or trying to
                    access a locked one. What does it mean for a phone to be unlocked, and how can you determine if
                    yours is? Moreover, is it secure to use an unlocked phone? We provide answers to these crucial
                    questions and offer specialized cellphone unlocking services.</p>
                    <p>The demand for access to mobile phones is surging globally. Parents want insights into their
                        children’s phone usage, while partners in relationships seek reassurance and aim to prevent
                        heartache by understanding their significant other’s phone activities.</p>
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
            <h2 class="tg-sv-details-title-sm mb-10">Comprehensive iPhone & Smartphone Services
            </h2>
            <p class="mb-10">We provide an extensive range of iPhone and smartphone solutions tailored to the unique
                requirements of our clients. Utilizing an advanced set of resources, we employ efficient strategies to
                deliver swift and effective results.</p>

        </div>
    </div>
    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            <div class="col-xl-6 mb-30">
                <div class="tg-sv-details-thumb-sm">
                    <img src="{{ asset('assets/img/services/phone-3.jpeg') }}" alt="" />
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
                            Iphone Unlock </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Smart Phone Hacking/ Spy </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Mac Unlock </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Carrier Unlock</li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Smart Phone MIrroring </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Call Monitoring and Recording </li>
                    </ul>
                    <a href="{{ route('pages.contact') }}" class="tg-btn-gradient mt-20 w-100 text-center">
                        Message Us Now
                    </a>
                </div>
            </div>
        </div>


</x-cresta-service-layout>
