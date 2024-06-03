<x-cresta-layout>
    <!-- breadcrumb-area-start -->
    <div class="tg-breadcrumb-area tg-breadcrumb-height tg-breadcrumb-overley black-bg p-relative"
        data-background="assets/img/breadcrumb/breadcrumb-1-1.jpg">
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
    <!-- breadcrumb-area-end -->
    {{ $slot }}
</x-cresta-layout>
