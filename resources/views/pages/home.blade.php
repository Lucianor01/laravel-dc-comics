@extends('layout.app')

@section('titlePage')
    Comics DC
@endsection

@section('content')
    {{-- ! SECTION 1 HOME --}}
    <section id="sectionCSeries">
        <div class="container text-light text-center p-5" id="home-link">
            <ul class="d-flex justify-content-around list-unstyled mb-0">
                <li>
                    <a class="text-decoration-none" href="{{ route('comics.index') }}">Index</a>
                </li>
                <li>
                    <a class="text-decoration-none" href="{{ route('comics.create') }}">Create</a>
                </li>
            </ul>
        </div>
    </section>
    {{-- ! SECTION 2 HOME --}}
    <section class="section_2 bg-primary">
        <div class="p-5 w-75 container">
            <div class="row justify-content-between align-items-center">
                <div class="col-2">
                    <a href="#">
                        <img class="me-3 section2_img"
                            src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="Digital_Comics">
                        <span class="text-nowrap fs text-light">DIGITAL COMICS</span>
                    </a>
                </div>
                <div class="col-2">
                    <a href="#">
                        <img class="me-3 section2_img" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                            alt="Digital_Comics">
                        <span class="text-nowrap fs text-light">DC MERCHANDISE</span>
                    </a>
                </div>
                <div class="col-2">
                    <a href="#">
                        <img class="me-3 section2_img" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                            alt="Digital_Comics">
                        <span class="text-nowrap fs text-light">SUBSCRIPTION</span>
                    </a>
                </div>
                <div class="col-2">
                    <a href="#">
                        <img class="me-3" id="section2_img"
                            src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="Digital_Comics">
                        <span class="text-nowrap fs text-light">COMIC SHOP LOCATOR</span>
                    </a>
                </div>
                <div class="col-2">
                    <a href="#">
                        <img class="me-3 section2_img" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}"
                            alt="Digital_Comics">
                        <span class="text-nowrap fs text-light">DC POWER VISA</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
