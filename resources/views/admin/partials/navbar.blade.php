<nav class="topnav navbar navbar-light">
    <button type="button" class="p-0 mt-2 mr-3 navbar-toggler text-muted collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <ul class="nav">
        <li class="nav-item">
            @include('admin.partials.language')
        </li>
        <li class="nav-item">
            <a class="my-2 nav-link text-muted" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="pr-0 nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mt-2 avatar avatar-sm">
                    <img src="{{ asset('assets-admin') }}/assets/avatars/face-1.jpg" alt="..."
                        class="avatar-img rounded-circle">
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>

                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">{{ __('keywords.logout') }}</button>
                </form>

            </div>
        </li>
    </ul>
</nav>
