<aside class="bg-white shadow sidebar-left border-right" id="leftSidebar" data-simplebar>
    <a href="#" class="mt-3 ml-2 btn collapseSidebar toggle-btn d-lg-none text-muted" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="mb-4 w-100 d-flex">
            <a class="mx-auto mt-2 text-center navbar-brand flex-fill" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <ul class="mb-2 navbar-nav flex-fill w-100">

            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">{{ __('keywords.home') }}</span>
                </a>
            </li>


        </ul>
        <p class="mt-4 mb-1 text-muted nav-heading">
            <span>{{ __('keywords.components') }}</span>
        </p>
        <ul class="mb-2 navbar-nav flex-fill w-100">
            {{-- Services --}}
            <x-sidebar-tap href="{{ route('admin.services.index') }}" icon="fe-codesandbox"
                name="{{ __('keywords.services') }}"></x-sidebar-tap>

            {{-- Features --}}
            <x-sidebar-tap href="{{ route('admin.features.index') }}" icon="fe-bookmark"
                name="{{ __('keywords.features') }}"></x-sidebar-tap>

            {{-- Messages --}}
            <x-sidebar-tap href="{{ route('admin.messages.index') }}" icon="fe-message-square"
                name="{{ __('keywords.messages') }}"></x-sidebar-tap>

            {{-- Subscribers --}}
            <x-sidebar-tap href="{{ route('admin.subscribers.index') }}" icon="fe-users"
                name="{{ __('keywords.subscribers') }}"></x-sidebar-tap>

            {{-- Testimonials --}}
            <x-sidebar-tap href="{{ route('admin.testimonials.index') }}" icon="fe-message-circle"
                name="{{ __('keywords.testimonials') }}"></x-sidebar-tap>

            {{-- Settings --}}
            <x-sidebar-tap href="{{ route('admin.settings.index') }}" icon="fe-settings"
                name="{{ __('keywords.settings') }}"></x-sidebar-tap>
        </ul>
    </nav>
</aside>
