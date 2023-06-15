@extends('layout.app')

@section('titlePage')
    Comics DC | Comics Details
@endsection

@section('content')
    {{-- ! SECTION DETAILS 1 --}}
    <section>
        <div id="container-details">
            <div class="blue-line"></div>
            <div class="container">
                <div class="position-relative">
                    <img class="img-top" src="{{ $singoloComic->thumb }}" alt="{{ $singoloComic->title }}">
                </div>
                <div id="container-details-comics->" class="p-4">
                    <div class="row my-4">
                        <div class="col-8">
                            <h2 class="card-title mb-3 text-uppercase">{{ $singoloComic->title }}</h2>
                            <div class="d-flex mb-3 price text-light justify-content-between">
                                <div class="col-9 border-end border-black">
                                    <div class="d-flex justify-content-between p-2 px-4">
                                        <div>
                                            <span class="c-green">U.S. Price:</span>
                                            <span>{{ $singoloComic->price }}</span>
                                        </div>
                                        <div>
                                            <span class="c-green">AVAILABLE</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 ms-2 p-2">
                                    <span>Check Availability &#9662;</span>
                                </div>
                            </div>
                            <p>{{ $singoloComic->description }}</p>
                        </div>
                        <div class="col-4 right-container">
                            <h3 class="text-end">ADVERTISEMENT</h3>
                            <img class="float-end" src="{{ Vite::asset('resources/img/advertisement.jpg') }}"
                                alt="adv">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- ! SECTION DETAILS 2 --}}
    <section id="section-details-2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6 pt-4">
                    <h4 class="border-bottom pb-3">Talent</h4>
                    <div class="row">
                        <div class="col-4 border-bottom">
                            <h5>Art by:</h5>
                        </div>
                        <div class="col-8 border-bottom">
                            <p class="mb-2">{{ $singoloComic->artists }}</p>
                        </div>
                        <div class="col-4 border-bottom mt-2">
                            <h5>Written by:</h5>
                        </div>
                        <div class="col-8 border-bottom mt-2">
                            <p class="mb-2">{{ $singoloComic->writers }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-5 pt-4">
                    <h4 class="border-bottom pb-3">Specs</h4>
                    <div class="row">
                        <div class="col-4 border-bottom my-2">
                            <h5 class="mb-3">Series:</h5>
                        </div>
                        <div class="col-8 border-bottom my-2">
                            <p class="mb-3 text-uppercase">{{ $singoloComic->series }}</p>
                        </div>
                        <div class="col-4 border-bottom my-2">
                            <h5 class="mb-3">U.S. Price:</h5>
                        </div>
                        <div class="col-8 border-bottom my-2">
                            <span class="mb-3">{{ $singoloComic->price }}</span>
                        </div>
                        <div class="col-4 border-bottom my-2">
                            <h5 class="mb-3">On Sale Date:</h5>
                        </div>
                        <div class="col-8 border-bottom my-2">
                            <span class="mb-3">{{ date('M d Y', strtotime($singoloComic->sale_date)) }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center container-button-home">
            <a class="button-home" href="{{ route('home') }}">Home</a>
        </div>
    </section>
    {{-- ! SECTION DETAILS 3 --}}
    <section id="section-details-3" class=" border border-2">
        <div class="container">
            <div class="row container-card-sd3">
                <div class="col-3 d-flex justify-content-around border-start border-2 py-3">
                    <h4 class="card-title">DIGITAL COMICS</h4>
                    <img class="card-img-sd3" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}"
                        alt="DIGITAL COMICS">
                </div>
                <div class="col-3 d-flex justify-content-around border-start border-2 py-3">
                    <h4 class="card-title">SHOP DC</h4>
                    <img class="card-img-sd3" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}"
                        alt="SHOP DC">
                </div>
                <div class="col-3 d-flex justify-content-around border-start border-2 py-3">
                    <h4 class="card-title">COMIC SHOP LOCATOR</h4>
                    <img class="card-img-sd3" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}"
                        alt="COMIC SHOP LOCATOR">
                </div>
                <div class="col-3 d-flex justify-content-around border-start border-end border-2 py-3">
                    <h4 class="card-title">SUBSCRIPTIONS</h4>
                    <img class="card-img-sd3" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}"
                        alt="SUBSCRIPTIONS">
                </div>
            </div>
        </div>
    </section>
@endsection
