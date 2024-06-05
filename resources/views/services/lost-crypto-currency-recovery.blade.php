<x-cresta-service-layout name="{{ $service->name }}" imagepath="{{ asset('assets/img/services/lost-coin-2.avif') }}"
    id="{{ $service->id }}">

    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            {{-- <div class="col-xl-6 mb-30">
                <div class="tg-sv-details-thumb-sm">
                    <img src="{{ asset('assets/img/services/hacker-hunting-crypto-currency_1029473-107573.jpg') }}"
                        alt="" />
                </div>
            </div> --}}
            <div class="col-xl-12 ">

                <div class="tg-sv-details-content">
                    <h5 class="tg-sv-details-title-sm mb-10">Navigating the Complex Terrain of Cryptocurrency Scams
                    </h5>
                    <div>
                        <p>
                        <div class="tg-sv-details-thumb-sm">
                            <img src="{{ asset('assets/img/services/lost-coin.jpg') }}"
                                style="
                                height: 350px;
                                object-fit: cover;
                            "
                                alt="" />
                        </div>
                        Bitcoin’s meteoric rise as a standout in the cryptocurrency market has drawn the
                        attention of
                        both eager investors and cunning scammers. These bad actors often hide behind the facade
                        of
                        legitimate crypto exchanges, baiting investors with the promise of exponential gains,
                        only
                        to dupe them out of their funds.</p>
                        <p>RetrivalPrime’s Cryptocurrency Recovery Initiative is a fortress of resilience against
                            cybercrimes. It’s a concerted effort that pools intelligence and deploys asset tracing
                            services for the victims of digital theft. We bridge the gap between those affected by
                            cybercrime and our cadre of professionals who specialize in the retrieval of stolen
                            cryptocurrencies.</p>
                        <p>&nbsp;</p>
                    </div>

                </div>
            </div>
        </div>



        <div class="tg-sv-details-thumb mb-30">
            {{-- <img src="assets/img/service/details-1-2.jpg" alt=""> --}}
        </div>
        <div class="tg-sv-details-content">

            <h6 class=" mb-10" style="color: blue">Reasons to Select Our Expertise</h6>
            <h2 class="tg-sv-details-title-sm mb-10">We provide a complete range of cryptocurrency recovery
                services.
            </h2>
            <p class="mb-10">We deliver comprehensive cryptocurrency recovery solutions tailored to our clients’
                specific
                requirements, leveraging our extensive resources and employing efficient strategies that prioritize
                time-saving results.</p>
        </div>
    </div>
    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            <div class="col-xl-6 mb-30">
                <div class="tg-sv-details-thumb-sm">
                    <img src="{{ asset('assets/img/services/lost-coin.jpg') }}" alt="" />
                </div>
            </div>
            <div class="col-xl-6 ">
                <div class="tg-sv-details-list pb-55">
                    <ul>
                        <li><i class="fa-solid fa-circle-check"></i>Offer round-the-clock, seamless assistance. </li>
                        <li><i class="fa-solid fa-circle-check"></i>We approach our work with utmost dedication.</li>
                        <li><i class="fa-solid fa-circle-check"></i> Our team consists of certified professionals.</li>
                        <li><i class="fa-solid fa-circle-check"> </i>Tether (USDT) Retrieval Services</li>
                        <li><i class="fa-solid fa-circle-check"> </i>Bitcoin (BTC) Retrieval Services</li>
                        <li><i class="fa-solid fa-circle-check"> </i>Ethereum (ETH) Retrieval Services</li>
                        <li><i class="fa-solid fa-circle-check"></i> Dogecoin Retrieval Solutions </li>
                    </ul>
                </div>
            </div>
        </div>

        <a href="{{ route('pages.contact') }}" class="tg-btn-gradient w-100 text-center">
            Request For Specialist
        </a>

</x-cresta-service-layout>
