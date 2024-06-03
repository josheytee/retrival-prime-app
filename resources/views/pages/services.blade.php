<x-cresta-layout>

    <!-- breadcrumb-area-start -->
    <div class="tg-breadcrumb-area tg-breadcrumb-height tg-breadcrumb-overley black-bg p-relative"
        data-background="assets/img/breadcrumb/breadcrumb-1-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tg-breadcrumb__content z-index-3 text-center">
                        <h3 class="tg-breadcrumb__title">FAQ</h3>
                        <div class="tg-breadcrumb__list">
                            <span><a href="{{ route('pages.index') }}">Home</a></span>
                            <span class="dvdr"><i class="fa-solid fa-chevron-right"></i></span>
                            <span>FAQ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->
    <div class="tg-service-3-area tg-service-3-inner-style z-index-3 pt-110 pb-115">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                        <div class="tg-service-3-item text-center">
                            <div class="tg-service-3-icon mb-25">
                                <span>
                                    <i class="{{ $service->icon }}"></i>
                                </span>
                            </div>
                            <div class="tg-service-3-content">
                                <h5 class="tg-service-3-title pb-20"> <a href="">{{ $service->name }} </a>
                                </h5>
                                <p>{{ $service->content }} </p>
                                <a class="mt-3 tg-btn-gradient d-none d-md-block"
                                    href="{{ route('pages.service', $service) }}">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- service-area-start -->
    {{-- <div class="tg-service-3-area tg-service-3-inner-style z-index-3 pt-110 pb-115">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="tg-service-3-item text-center">
                        <div class="tg-service-3-icon mb-25">
                            <span>
                                <i class="flaticon-001-laptop"></i>
                            </span>
                        </div>
                        <div class="tg-service-3-content">
                            <h5 class="tg-service-3-title pb-20"> <a href="service-details.html">Lost Crypto- Currency
                                    Recovery </a>
                            </h5>
                            <p>Retrieve missing digital currencies including Bitcoin, Ethereum, both
                                ERC20 and TRC20 USDT, Litecoin, Dogecoin, and beyond. </p>
                            <a class="mt-3 tg-btn-gradient d-none d-md-block" href="contact.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="tg-service-3-item text-center">
                        <div class="tg-service-3-icon mb-25">
                            <span>
                                <i class="flaticon-002-api"></i>
                            </span>
                        </div>
                        <div class="tg-service-3-content">
                            <h5 class="tg-service-3-title pb-20"> <a href="service-details.html">Romance Scam Recovery
                                </a>
                            </h5>
                            <p>Reclaim funds lost on dating platforms, retrieve misplaced assets,
                                salvage loans from romance scams, and recoup finances from fraudulent
                                love-related accounts. </p>
                            <a class="mt-3 tg-btn-gradient d-none d-md-block" href="contact.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="tg-service-3-item text-center">
                        <div class="tg-service-3-icon mb-25">
                            <span>
                                <i class="flaticon-006-cloud-computing"></i>
                            </span>
                        </div>
                        <div class="tg-service-3-content">
                            <h5 class="tg-service-3-title pb-20"> <a href="service-details.html">iPhone &amp; Smartphone
                                    Services
                                </a>
                            </h5>
                            <p>Unlock iPhones, smartphones, perform iOS upgrades and downgrades, mobile
                                hacking, carrier unlocks, and more mobile services for unrestricted
                                device use.</p>
                            <a class="mt-3 tg-btn-gradient d-none d-md-block" href="contact.html">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="tg-service-3-item text-center">
                        <div class="tg-service-3-icon mb-25">
                            <span>
                                <i class="flaticon-015-email"></i>
                            </span>
                        </div>
                        <div class="tg-service-3-content">
                            <h5 class="tg-service-3-title pb-20"> <a href="service-details.html">Investment Scam
                                    Recovery</a>
                            </h5>
                            <p>Regain lost investment capital, unfreeze trading accounts, rectify mining
                                scams, and recoup losses from money-doubling schemes and untrustworthy
                                trading platforms. </p>
                            <a class="mt-3 tg-btn-gradient d-none d-md-block" href="contact.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="tg-service-3-item text-center">
                        <div class="tg-service-3-icon pl mb-25">
                            <span>
                                <i class="flaticon-022-ssd"></i>
                            </span>
                        </div>
                        <div class="tg-service-3-content">
                            <h5 class="tg-service-3-title pb-20"> <a href="service-details.html">Bank Transfer
                                    Scam/Money Laundering</a>
                            </h5>
                            <p>Retrieve funds sent to incorrect bank accounts, resolve unsettled bank
                                transfers, e-transfers, MoneyGram mishaps, P2P transactions, and cash
                                deposits. </p>
                            <a class="mt-3 tg-btn-gradient d-none d-md-block" href="contact.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="tg-service-3-item text-center">
                        <div class="tg-service-3-icon mb-25">
                            <span>
                                <i class="flaticon-029-webcam"></i>
                            </span>
                        </div>
                        <div class="tg-service-3-content">
                            <h5 class="tg-service-3-title pb-20"> <a href="service-details.html">Crypto Tracing</a>
                            </h5>
                            <p>Track cryptocurrency movements, trace crypto transactions, pinpoint
                                crypto user IPs, identify user addresses, verify usernames, and conduct
                                background checks on crypto users.</p>
                            <a class="mt-3 tg-btn-gradient d-none d-md-block" href="contact.html">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="tg-service-3-item text-center">
                        <div class="tg-service-3-icon pl mb-25">
                            <span>
                                <i class="flaticon-036-smartphone"></i>
                            </span>
                        </div>
                        <div class="tg-service-3-content">
                            <h5 class="tg-service-3-title pb-20"> <a href="service-details.html">Extortion/ Blackmail
                                    Help </a>
                            </h5>
                            <p>Receive assistance with blackmail cases, retrieval of personal files and
                                information, and support for extortion and sextortion situations.</p>
                            <a class="mt-3 tg-btn-gradient d-none d-md-block" href="contact.html">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                    <div class="tg-service-3-item text-center">
                        <div class="tg-service-3-icon mb-25">
                            <span>
                                <i class="flaticon-004-server"></i>
                            </span>
                        </div>
                        <div class="tg-service-3-content">
                            <h5 class="tg-service-3-title pb-20"> <a href="service-details.html"> Social Media
                                    Hack/Recovery</a>
                            </h5>
                            <p>Regain control of social platforms: Recover Facebook and Instagram
                                accounts, access WhatsApp, Snapchat, and iMessage, including My Eyes
                                Only content, and restore Twitter access.</p>
                            <a class="mt-3 tg-btn-gradient d-none d-md-block" href="contact.html">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- service-area-end -->

</x-cresta-layout>
