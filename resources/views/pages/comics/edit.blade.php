@extends('layout.app')

@section('titlePage')
    Comics DC | Comics Create
@endsection

@section('content')
    <div class="container-fluid bg-dark text-light py-4">
        <div class="container">
            <h1>Edit The Comic</h1>
        </div>

        {{-- ? FORM --}}
        <div class="container">
            <form action="{{ route('comics.update', $comic) }}" method="POST">

                {{-- ! TOKEN --}}
                @csrf

                @method('PUT')

                <div class="form-group">
                    <label class="form-label" for="">Title</label>
                    <input class="form-control" type="text" name="title" value="{{ old('title') ?? $comic->title }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description') ?? $comic->description }}</textarea>
                </div>
                <div class="form-group">
                    <label class="form-label" for="">Thumb</label>
                    <input class="form-control" type="text" name="thumb" value="{{ old('thumb') ?? $comic->thumb }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">price</label>
                    <input class="form-control" type="number" name="price" value="{{ old('price') ?? $comic->price }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">Series</label>
                    <input class="form-control" type="text" name="series" value="{{ old('series') ?? $comic->series }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">sale_date</label>
                    <input class="form-control" type="date" name="sale_date"
                        value="{{ old('sale_date') ?? $comic->sale_date }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">type</label>
                    <input class="form-control" type="text" name="type" value="{{ old('type') ?? $comic->type }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">artists</label>
                    <input class="form-control" type="text" name="artists"
                        value="{{ old('artists') ?? $comic->artists }}">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">writers</label>
                    <input class="form-control" type="text" name="writers"
                        value="{{ old('writers') ?? $comic->writers }}">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary mt-3">Edit Comic</button>
                    <a href="{{ route('home') }}" class="btn btn-primary mt-3 ms-3">Home</a>
                </div>
            </form>
        </div>
    </div>
@endsection
