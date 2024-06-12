<x-cresta-layout title="{{ $name }}" description="{{ $description }}">
    <div class="tg-breadcrumb-area tg-breadcrumb-height tg-breadcrumb-overley black-bg p-relative"
        data-background="{{ $imagepath }}" id="{{ $id }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tg-breadcrumb__content z-index-3 text-center">
                        <h3 class="tg-breadcrumb__title">{{ $name }}</h3>
                        <div class="tg-breadcrumb__list">
                            <span><a href="{{ route('pages.index') }}">Home</a></span>
                            <span class="dvdr"><i class="fa-solid fa-chevron-right"></i></span>
                            <span>{{ $name }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tg-sv-details-area fix pt-50 pb-120">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xl-4 col-lg-4 order-1 order-lg-0">
                    <div class="tg-sv-sidebar-wrap">
                        <div class="tg-sv-sidebar-widget mb-65">
                            <h4 class="tg-sv-sidebar-title mb-30">Service lists</h4>
                            <div class="tg-sv-sidebar-list-box">
                                <ul>
                                    @foreach ($services as $service)
                                        <li>
                                            <a href="{{ route('pages.service', $service) }}">
                                                <div
                                                    class="tg-sv-sidebar-list-item d-flex justify-content-between align-items-center">
                                                    <span>{{ $service->name }}</span>
                                                    <i class="fa-regular fa-angle-right"></i>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="tg-sv-sidebar-widget">
                            <h4 class="tg-sv-sidebar-title mb-30">Get in Toucht</h4>
                            <div class="tg-sv-sidebar-contact">
                                <a href="tel:(+888)123456765">
                                    <i class="fa-solid fa-phone"></i>(+888) 123 456 765
                                </a>
                                <a href="mailto:infoname@mail.com">
                                    <i class="fa-solid fa-envelope"></i>infoname@mail.com
                                </a>
                                <span>
                                    <i class="fa-solid fa-clock"></i>Mon-Sun : 9AM-5PM
                                </span>
                                <a href="https://www.google.com/maps/@23.8370338,90.3623014,12z?entry=ttu"
                                    target="_blank">
                                    <i class="fa-solid fa-location-dot"></i>4140 Parker Rd. Allentown, <br> New Mexico
                                    31134
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 order-0 order-lg-1">
                    {{ $slot }}


                    <div class="tg-contact-form mt-50 mb-50">
                        <h2 class="tg-sv-details-title-sm mb-10">Comment
                        </h2>
                        <form id="contact-form" action="{{ route('service.comment') }}" method="POST">
                            @csrf
                            <input type="hidden" name="service_id" value="{{ $id }}">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-10">
                                    <div class="tg-contact-input-box-2">
                                        <input name="first_name" type="text" placeholder="First Name...">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-10">
                                    <div class="tg-contact-input-box-2">
                                        <input name="last_name" type="text" placeholder="Last Name...">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-10">
                                    <div class="tg-contact-input-box-2">
                                        <input name="email" type="email" placeholder="Your E-mail...">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 mb-10">
                                    <div class="tg-contact-input-box-2">
                                        <input name="phone" type="text" placeholder="Phone Number">
                                    </div>
                                </div>


                                <div class="col-xl-12 mb-10">
                                    <div class="tg-contact-textarea-box-2">
                                        <textarea name="comment" type="text" placeholder="Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="tg-contact-button">
                                        <button class="tg-btn-gradient w-100" type="submit">Comment</button>
                                        <p class="ajax-response"></p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="postbox__comment">
                        @if ($comments->count() > 0)
                            <h2 class="tg-sv-details-title-sm mb-10">Comments
                            </h2>
                            <ul>
                                @foreach ($comments as $comment)
                                    <li>
                                        <div class="postbox__comment-box p-relative">
                                            <div class="postbox__comment-info d-flex align-items-start">
                                                <div class="postbox__comment-avater">
                                                    <i class="fa-solid fa-user"></i>
                                                    {{-- <img src="assets/img/blog/avatar-1-1.jpg" alt=""> --}}
                                                </div>
                                                <div class="postbox__comment-name p-relative">
                                                    <h5>{{ $comment->first_name }} {{ $comment->last_name }}</h5>
                                                    <span>{{ $comment->created_at }}</span>
                                                    <div class="postbox__comment-text">
                                                        <p>{{ $comment->comment }}</p>
                                                        {{-- <div class="postbox__comment-reply">
                                                    <a class="tg-btn-gradient" href="#">Reply</a>
                                                </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            No Comments yet
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-cresta-layout>
