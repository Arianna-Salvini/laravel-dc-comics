@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="p-3 bg_dc_primary text-white mb-5">Updating New Comics </h1>
        <form action="{{ route('comics.update', '$comic') }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label text-primary">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    value="{{ $comic->title }}" />
                <small id="titleHelper" class="form-text text-muted">
                    Type the comic's title <i class="fa fa-book" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label text-primary">Image url</label>
                <textarea class="form-control" name="thumb" id="thumb" rows="3">{{ $comic->thumb }}</textarea>
                <small id="sale_dateHelper" class="form-text text-muted">
                    Type the comic's image url
                    <i class="fa fa-image" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label text-primary">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3">{{ $comic->description }}</textarea>
                <small id="sale_dateHelper" class="form-text text-muted">
                    Type the comic's sale Descriptio/Plot
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </small>
            </div>



            <div class="mb-3">
                <label for="price" class="form-label text-primary">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    value="{{ $comic->price }}" />
                <small id="priceHelper" class="form-text text-muted">
                    Type the comic's price
                    <i class="fa fa-dollar" aria-hidden="true">$</i>
                </small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label text-primary">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    value="{{ $comic->series }}" />
                <small id="seriesHelper" class="form-text text-muted">
                    Type the comic's series
                    <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label text-primary">Sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelper" value="{{ $comic->sale_date }}" />
                <small id="sale_dateHelper" class="form-text text-muted">
                    Type the comic's sale date
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label text-primary">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    value="{{ $comic->type }}" />
                <small id="typeHelper" class="form-text text-muted">
                    Type the comic's type
                    <i class="fa fa-book" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label text-primary">Writers</label>
                <input type="text" class="form-control" name="writers" id="writers" aria-describedby="writersHelper"
                    value="{{ $comic->writers }}" />
                <small id="writersHelper" class="form-text text-muted">
                    Type story writers
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label text-primary">Artists</label>
                <input type="text" class="form-control" name="artists" id="artists"
                    aria-describedby="artistsHelper" value="{{ $comic->artists }}" />
                <small id="artistsHelper" class="form-text text-muted">
                    Type story artists
                    <i class="fa fa-address-card-o" aria-hidden="true"></i>
                </small>
            </div>
            <button type="submit" class="btn btn-primary p-3 px-5 mt-4">
                Update
            </button>

        </form>
    </div>
@endsection
