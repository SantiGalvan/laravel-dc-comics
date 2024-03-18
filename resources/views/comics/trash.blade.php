
@extends('layouts.main')

@section('title', 'Comics eliminati')

@section('main-content')


        {{-- Section alert --}}
        <section id="section-alert">
            <div class="main-container py-2">
                @session('message')
                <div class="alert alert-success mb-0">
                    {{$value}}
                </div>
                @endsession
            </div>
        </section>


        {{-- Section Content --}}
        <section id="section-content">
            <div class="main-container container-card">

                @foreach ($comics as $index => $comic)
                <div class="dc-card">
                    <a href="{{route('comics.show', $comic->id)}}">
                        <figure>
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        </figure>
                        <h5>{{$comic->title}}</h5>
                    </a>
                </div>
                @endforeach
            </div>
        </section>
@endsection