
@extends('layouts.main')

@section('title', 'Comics')

@section('main-content')



        {{-- Section Content --}}
        <section id="section-content">
            <div class="main-container container-card">
                @foreach ($comics as $index => $comic)
                <div class="dc-card">
                    <a href="{{route('comics.show', $index)}}">
                        <figure>
                            <img src="{{$comic['thumb']}}" alt="">
                        </figure>
                        <h5>{{$comic['title']}}</h5>
                    </a>
                </div>
                @endforeach
            </div>
        </section>

        {{-- Section Links --}}
        <section id="section-links">
            <div class="main-container links-content">
                <div class="links-col">
                    <a href="#">
                        <img src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="Digital comics">
                    </a>
                    <h5>Digital comics</h5>
                </div>
                <div class="links-col">
                    <a href="#">
                        <img src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="Dc merchandise">
                    </a>
                    <h5>Dc merchandise</h5>
                </div>
                <div class="links-col">
                    <a href="#">
                        <img src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="Subscriptions">
                    </a>
                    <h5>Subscriptions</h5>
                </div>
                <div class="links-col">
                    <a href="#">
                        <img class="img-small" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="Comic shop locator">
                    </a>
                    <h5>Comic shop locator</h5>
                </div>
                <div class="links-col">
                    <a href="#">
                        <img src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="Dc power visa">
                    </a>
                    <h5>Dc power visa</h5>
                </div>
            </div>
        </section>

@endsection