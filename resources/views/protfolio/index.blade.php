@extends('protfolio.master')

@section('title', 'Homepage')

@section('content')

@include('protfolio.includes.header', [
    'title' => 'START BOOTSTRAP Mohammed',
    'image' => 'assets/img/avataaars.svg'
])

{{-- @unless ((3 > 5))
<h1>{{ 'Done' }}</h1>
@endunless --}}

{{-- @if((10 > 5))
<h1>{{ 'Done' }}</h1>
@endif --}}


<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">

            @foreach( $portfolios as $portfolio )
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal{{ $loop->index }}">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="{{ asset('assets/img/' . $portfolio['image']) }}" alt="{{ $portfolio['title'] }}" />
                </div>
                <div class="portfolio-modal modal fade" id="portfolioModal{{ $loop->index }}" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                            <div class="modal-body text-center pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8">
                                            <!-- Portfolio Modal - Title-->
                                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">{{ $portfolio['title'] }}</h2>
                                            <!-- Icon Divider-->
                                            <div class="divider-custom">
                                                <div class="divider-custom-line"></div>
                                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                <div class="divider-custom-line"></div>
                                            </div>
                                            <!-- Portfolio Modal - Image-->
                                            <img class="img-fluid mb-5" src="{{ asset('assets/img/' . $portfolio['image']) }}" alt="{{ $portfolio['title'] }}" />
                                            <!-- Portfolio Modal - Text-->
                                            <p class="mb-4">{{ $portfolio['text'] }}</p>
                                            <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                <i class="fas fa-times fa-fw"></i>
                                                Close Window
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto"><p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.</p></div>
            <div class="col-lg-4 me-auto"><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                <i class="fas fa-download me-2"></i>
                Free Download!
            </a>
        </div>
    </div>
</section>

@include('protfolio.includes.contactform')

@stop
{{-- @endsection --}}
