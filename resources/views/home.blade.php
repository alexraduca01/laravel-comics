@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main class="w-100 bg-black p-5">
        <div class="container">
            <div class="row">
                @foreach ( $comics as $comic)
                    <div class="col-2 g-3">
                        <img class="my-card-img" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <div>
                            <h5 class="text-white m-0">{{ $comic['title'] }}</h5>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center mt-5">
                    <button class="bg-primary py-3 px-5 text-white text-uppercase fs-5">
                        load more
                    </button>
                </div>
            </div>
        </div>
    </main>
@endsection
