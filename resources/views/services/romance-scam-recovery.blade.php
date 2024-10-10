<x-cresta-service-layout name="{{ $service->name }}" imagepath="{{ asset('assets/img/services/romance-scam.jpeg') }}"
    description="{{ $service->content }}" id="{{ $service->id }}">

    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            <div class="col-xl-12 ">
                {{-- <div class="tg-sv-details-thumb-sm">
                    <img src="{{ asset('assets/img/services/romance-scam-3.avif') }}" alt="" />
                </div> --}}
                <div class="tg-sv-details-content">
                    <h6 class=" mb-10" style="color: #351EE0">Healing Financial Heartbreak</h6>

                    <h5 class="tg-sv-details-title-sm mb-10">Reclaim Your Funds, Restore Your Trust
                    </h5>

                    <p>
                    <div class="tg-sv-details-thumb-sm">
                        <img src="{{ asset('assets/img/services/romance-scam-4.jpeg') }}"
                            style="
                        height: 430px;
                        object-fit: cover;
                    "
                            alt="" />
                    </div> A romance scam is a deceptive act where a scammer fakes romantic interest in a victim, builds
                    a
                    relationship to earn their affection, and then exploits that trust to extract money under false
                    pretenses or coerce the victim into committing financial fraud.</p>
                    <p>This type of scam typically involves unauthorized access to the victim’s financial assets, such
                        as bank accounts and credit cards, or personal information like passports and email accounts.
                        Organized crime rings often carry out these scams, targeting multiple individuals
                        simultaneously, leading to more significant financial losses compared to other internet scams
                        like technical support fraud.</p>
                    <a href="{{ route('pages.contact') }}" class="tg-btn-gradient mt-20 text-center">
                        Discover More
                    </a>
                </div>
            </div>
        </div>


        <div class="tg-sv-details-thumb mb-30">
            {{-- <img src="assets/img/service/details-1-2.jpg" alt=""> --}}
        </div>
        <div class="tg-sv-details-content">

            <h6 class=" mb-10" style="color: #351EE0">Reasons to Select Our Expertise</h6>
            <h2 class="tg-sv-details-title-sm mb-10">We provide a complete range of romance scam recovery services.
            </h2>
            <p class="mb-10">We provide comprehensive romance scam recovery services, tailored to the unique needs of
                our clients and powered by our sophisticated resources, ensuring efficient and swift resolution.</p>

        </div>
    </div>
    <div class="tg-sv-details-wrap">
        <div class="row gx-30">
            <div class="col-xl-6 mb-30">
                <div class="tg-sv-details-thumb-sm">
                    <img src="{{ asset('assets/img/services/romance-scam-2.jpeg') }}" alt="" />
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
                            Romance Scam Consultation </li>
                        <li><i class="fa-solid fa-circle-check"> </i>File a Report</li>
                        <li><i class="fa-solid fa-circle-check"> </i> Recover Money Lost to Romance Scam </li>
                    </ul>
                    <a href="{{ route('pages.contact') }}" class="tg-btn-gradient mt-20 w-100 text-center">
                        Message Us Now
                    </a>
                </div>
            </div>
        </div>


</x-cresta-service-layout>
