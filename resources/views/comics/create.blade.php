@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1 class="p-3 bg_dc_primary text-white mb-5">Updating New Comics </h1>
        <form action="{{ route('comics.store') }}" method="post">
            @csrf


            <div class="mb-3">
                <label for="title" class="form-label text-primary">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper" />
                <small id="titleHelper" class="form-text text-muted">
                    Type the comic's title <i class="fa fa-book" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label text-primary">Image url</label>
                <textarea class="form-control" name="thumb" id="thumb" rows="3"></textarea>
                <small id="sale_dateHelper" class="form-text text-muted">
                    Type the comic's image url
                    <i class="fa fa-image" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label text-primary">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                <small id="sale_dateHelper" class="form-text text-muted">
                    Type the comic's sale Descriptio/Plot
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </small>
            </div>



            <div class="mb-3">
                <label for="price" class="form-label text-primary">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper" />
                <small id="priceHelper" class="form-text text-muted">
                    Type the comic's price
                    <i class="fa fa-dollar" aria-hidden="true">$</i>
                </small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label text-primary">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper" />
                <small id="seriesHelper" class="form-text text-muted">
                    Type the comic's series
                    <i class="fa fa-bookmark-o" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label text-primary">Sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelper" />
                <small id="sale_dateHelper" class="form-text text-muted">
                    Type the comic's sale date
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label text-primary">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper" />
                <small id="typeHelper" class="form-text text-muted">
                    Type the comic's type
                    <i class="fa fa-book" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label text-primary">Writers</label>
                <input type="text" class="form-control" name="writers" id="writers" aria-describedby="writersHelper" />
                <small id="writersHelper" class="form-text text-muted">
                    Type story writers
                    <i class="fa fa-address-card" aria-hidden="true"></i>
                </small>
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label text-primary">Artists</label>
                <input type="text" class="form-control" name="artists" id="artists"
                    aria-describedby="artistsHelper" />
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
