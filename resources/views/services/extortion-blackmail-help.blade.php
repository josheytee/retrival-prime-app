<x-cresta-service-layout name="{{ $service->name }}" imagepath="{{ asset('assets/img/services/blackmail.jpeg') }}">

    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            <div class="col-xl-12 ">
                <div class="tg-sv-details-content">
                    <h6 class=" mb-10" style="color: #351EE0"> Precision at Every Turn</h6>

                    <h5 class="tg-sv-details-title-sm mb-10">Providing a safe haven for victims of extortion, coercion,
                        and undue commercial pressure </h5>

                    <p>
                    <div class="tg-sv-details-thumb-sm">
                        <img src="{{ asset('assets/img/services/blackmail-2.jpeg') }}"
                            style="
                        height: 350px;
                        object-fit: cover;
                    "
                            alt="" />
                    </div>
                    Blackmail is a crime where someone demands payment or another advantage by threatening to
                    disclose sensitive or harmful information about someone else. It can occur under various
                    situations but generally falls into one of three categories: extortion, coercion, or
                    commercial pressure. Typically, extortion involves a financial demand to keep information
                    secret.</p>
                    <p>RetrivalPrime provides support to those affected by online blackmail, assisting victims of
                        sextortion, online threats, and the broader spectrum of extortion, coercion, and commercial
                        exploitation.</p>

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
                RetrivalPrime delivers comprehensive solutions against blackmail, tailored to individual needs and
                backed
                by sophisticated resources for prompt and effective resolution.</p>

        </div>
    </div>
    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            <div class="col-xl-6 mb-30">
                <div class="tg-sv-details-thumb-sm">
                    <img src="{{ asset('assets/img/services/blackmail-3.jpeg') }}" alt="" />
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
                            Sextortion Help </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Online Threats victims </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Extortion </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Commercial pressure victims </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Help to Victim of Online Blackmail </li>
                        <li><i class="fa-solid fa-circle-check"> </i>
                            Coercion </li>


                    </ul>
                    <a href="{{ route('pages.contact') }}" class="tg-btn-gradient mt-20 w-100 text-center">
                        Message Us Now
                    </a>
                </div>
            </div>
        </div>


</x-cresta-service-layout>
