<!DOCTYPE html>
<html lang="en">

@include('front.partials.head')


<body>
    <div class="p-0 bg-white container-xxl">
        @include('front.partials.spinner')


        <!-- Navbar & Hero Start -->
        <div class="p-0 container-xxl position-relative">
            @include('front.partials.navbar')

            @yield('hero')
        </div>
        <!-- Navbar & Hero End -->

        @yield('content')


        @include('front.partials.footer')



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @include('front.partials.scripts')

</body>

</html>
