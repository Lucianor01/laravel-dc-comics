@extends('layout.app')

@section('titlePage')
    Comics DC
@endsection

@section('content')
    {{-- ! SECTION 1 HOME --}}
    <section id="sectionCSeries">
        <div id="containerSeries">
            <div id="titleCS" class="position-absolute">
                <h3>CURRENT SERIES</h3>
            </div>
            <div class="container pt-5 pb-4">
                <div class="row">
                    @foreach ($comics as $elem)
                        <div class="col-2">
                            <a href="{{ route('details', ['link' => $elem['link']]) }}">
                                <img src="{{ $elem['thumb'] }}" alt="{{ $elem['title'] }}" class="pb-3">
                                <h4 class="text-light mb-5">{{ $elem['title'] }}</h4>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center pb-5">
                <a class="button-load" href="#">LOAD MORE</a>
            </div>
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
