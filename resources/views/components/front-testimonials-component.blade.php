@if (count($testimonials) > 0)
    <div class="py-6 container-xxl">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="px-4 mb-3 border d-inline-block rounded-pill text-primary">Testimonial</div>
                <h2 class="mb-5">What Our Clients Say!</h2>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                @foreach ($testimonials as $testimonial)
                    <div class="p-4 rounded testimonial-item">
                        <i class="mb-3 fa fa-quote-left fa-2x text-primary"></i>
                        <p>{{ $testimonial->description }}</p>
                        <div class="d-flex align-items-center">
                            <img class="flex-shrink-0 img-fluid rounded-circle"
                                src="{{ asset("storage/testimonials/$testimonial->image") }}">
                            <div class="ps-3">
                                <h6 class="mb-1">{{ $testimonial->name }}</h6>
                                <small>{{ $testimonial->position }}</small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
