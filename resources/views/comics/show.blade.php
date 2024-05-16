@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="d-flex">
            <div class="comic_img mx-5">
                <img src="{{ $comic->thumb }}" alt="Image of {{ $comic->title }}" class="shadow-lg">
            </div>
            <div class="comic_details p-5">
                <h2 class="text-uppercase comic_primary_dark">{{ $comic->title }}</h2>
                <p class="comic_color_light">{{ $comic->description }}</p>
            </div>
        </div>
    </div>
    <div class="specific_details bg-light">
        <div class="container d-flex justify-content-between">
            <div class="talent ps-5 flex-grow-1 specific_details_box left">
                <div class="border-bottom">
                    <h5 class="text-uppercase comic_primary_dark p-3">talent</h5>
                </div>
                <div class="border-bottom d-flex">
                    <div class="comic_primary_dark p-3 pe-5">Art by:</div>
                    <a href="#"
                        class="comic_primary_light p-3 flex-grow-1 text-decoration-none">{{ $comic->artists }}</a>
                </div>
                <div class="border-bottom d-flex">
                    <div class="comic_primary_dark p-3  ">Written by:</div>
                    <a href="#"
                        class="comic_primary_light p-3 flex-grow-1 text-decoration-none">{{ $comic->writers }}</a>
                </div>
                <div class="border-bottom d-flex">
                    <div class="comic_primary_dark p-3 ">Type:</div>
                    <div class="comic_primary_light p-3 flex-grow-1">{{ $comic->type }}</div>
                </div>
            </div>
            <div class="specs px-5 flex-grow-1 specific_details_box right">
                <div class="border-bottom">
                    <h5 class="text-uppercase comic_primary_dark p-3">specs</h5>
                </div>
                <div class="border-bottom d-flex">
                    <div class="comic_primary_dark p-3 ">Series:</div>
                    <div class="comic_primary_light p-3 flex-grow-1">{{ $comic->series }}</div>
                </div>
                <div class="border-bottom d-flex">
                    <div class="comic_primary_dark p-3 ">U.S. Price:</div>
                    <div class="comic_primary_light p-3 flex-grow-1">{{ $comic->price }}</div>

                </div>
                <div class="border-bottom d-flex">
                    <div class="comic_primary_dark p-3 ">On Sale Date:</div>
                    <div class="comic_primary_light p-3 flex-grow-1">{{ $comic->sale_date }}</div>
                </div>
            </div>
        </div>
        </a>
    </div>
    </div>
@endsection
