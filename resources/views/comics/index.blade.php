@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">THUMB/IMAGE</th>
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
                            <td>R1C2</td>
                            <td>R1C3</td>
                        </tr>
                        <tr class="">
                            <td scope="row">Item</td>
                            <td>Item</td>
                            <td>Item</td>
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
