@extends('layout.app')

@section('titlePage')
    Comics DC | Comics Create
@endsection

@section('content')
    <div class="container-fluid bg-dark text-light py-4">
        <div class="container">
            <h1>Create the comic</h1>
        </div>

        {{-- ? FORM --}}
        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">

                {{-- ! TOKEN --}}
                @csrf

                <div class="form-group">
                    <label class="form-label" for="">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="">Thumb</label>
                    <input class="form-control" type="text" name="thumb">
                    @error('thumb')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="">price</label>
                    <input class="form-control" type="number" name="price">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="">Series</label>
                    <input class="form-control" type="text" name="series">
                    @error('series')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="">sale_date</label>
                    <input class="form-control" type="date" name="sale_date">
                    @error('sale_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="">type</label>
                    <input class="form-control" type="text" name="type">
                    @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="">artists</label>
                    <input class="form-control" type="text" name="artists">
                    @error('artists')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="">writers</label>
                    <input class="form-control" type="text" name="writers">
                    @error('writers')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-primary mt-3">Crea Fumetto</button>
                    <a href="{{ route('home') }}" class="btn btn-primary mt-3 ms-3">Home</a>
                </div>
            </form>
        </div>
    </div>
@endsection
