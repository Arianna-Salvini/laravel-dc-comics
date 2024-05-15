@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table">
            <table class="table table-primary m-5">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">THUMB/IMAGE</th>
                        <th scope="col">TITLE</th>
                        {{-- <th scope="col">DESCRIPTION</th> --}}
                        <th scope="col">PRICE</th>
                        <th scope="col">SERIES</th>
                        <th scope="col">SALE DATE</th>
                        <th scope="col">TYPE</th>
                        <th scope="col">WRITERS</th>
                        <th scope="col">ARTISTS</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr class="">
                            <td scope="row">{{ $comic->id }}</td>
                            <td>
                                <img src="{{ $comic->thumb }}" alt="" style="width:150px">
                            </td>
                            <td>{{ $comic->title }} </td>
                            {{-- <td>{{ $comic->description }}</td> --}}
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->writers }}</td>
                            <td>{{ $comic->artists }}</td>
                            <td>
                                <a href="#">edit</a>
                                <a href="#">view</a>
                                <a href="#">delete</a>
                            </td>


                        </tr>
                    @empty
                        <td scope="row">Nothing to show</td>
                        <td scope="row">Nothing to show</td>
                        <td scope="row">Nothing to show</td>
                        <td scope="row">Nothing to show</td>
                        <td scope="row">Nothing to show</td>
                        <td scope="row">Nothing to show</td>
                        <td scope="row">Nothing to show</td>
                        <td scope="row">Nothing to show</td>
                        <td scope="row">Nothing to show</td>
                        <td scope="row">Nothing to show</td>
                    @endforelse

                </tbody>
            </table>
        </div>

    </div>
@endsection
