
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

                <div class="d-flex justify-content-center w-100 mb-4 gap-3">
                    <a href="{{route('comics.index')}}" class="btn btn-secondary">Torna alla lista</a>
                </div>

                @foreach ($comics as $index => $comic)
                <div class="dc-card">
                    <a href="{{route('comics.show', $comic->id)}}">
                        <figure>
                            <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                        </figure>
                        <h5>{{$comic->title}}</h5>
                    </a>
                    <div class="trash-form mb-4">
                        <form action="{{route('comics.restore', $comic->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success btn-sm">Ripristina</button>
                        </form>
                        <form action="{{route('comics.drop', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Cancella</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
@endsection