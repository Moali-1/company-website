<div class="container-xxl bg-primary page-header">
    <div class="container text-center">
        <h1 class="mb-3 text-white animated zoomIn">{{ $title }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('front.index') }}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="text-white breadcrumb-item active" aria-current="page">{{ $subtitle }}</li>
            </ol>
        </nav>
    </div>
</div>
