@extends('layouts.main')

@section('title', 'Comic')

@section('cdns')

{{-- FotAwesome --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endsection

@section('main-content')

{{-- Section View --}}
<section id="section-view">
    <div class="comic-container">
        <div class="comic-card">
            <img src="{{$comic['thumb']}}" alt="">
            <h4>View Gallery</h4>
            <span>Comic book</span>
        </div>
        <div class="button">
            <a href="{{route('comics.index')}}" class="btn btn-secondary">Torna alla lista</a>
            <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a>
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST" id="delete-form">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
        </div>
    </div>
</section>

{{-- Section Comic --}}
<section id="section-comic">
        <div class="comic-container">
            <div class="comic-info">
                <h1>{{$comic->title}}</h1>
                <div class="comic-price">
                    <div class="price">
                        <div class="price-info">
                            <h6>U.S. Price: <span>{{$comic->price}}</span></h6>
                        </div>
                        <div class="price-text">
                            <h6>Available</h6>
                        </div>
                    </div>
                    <div class="check">
                        <p>Check availability <i class="fa-solid fa-sort-down" ></i></p>
                    </div>
                </div>
                <div class="comic-description">
                    <p>{{$comic->description}}</p>
                </div>
            </div>
            <div class="comic-gallery">
                <h4>Advertisement</h4>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="ADV">
            </div>
        </div>
</section>

{{-- Section Info --}}
<section id="section-info">
    <div class="comic-container">
        <div class="talent">
            <div class="title">
                <h4>Talent</h4>
            </div>
            <div class="authors">
                <p class="name-title">Art By:</p>
                <p class="text">
                    {{$comic->artists}}
                </p>
            </div>
            <div class="writers">
                <p class="name-title">Written By:</p>
                <p class="text">
                    {{$comic->writers}}
                </p>
            </div>
        </div>
        <div class="specs">
            <div class="title">
                <h4>Specs</h4>
            </div>
            <div class="series">
                <p class="name-title">Series:</p>
                <p class="text">{{$comic->series}}</p>
            </div>
            <div class="specs-price">
                <p class="name-title">U.S. Price:</p>
                <p class="text black">{{$comic->price}}</p>
            </div>
            <div class="specs-date">
                <p class="name-title">On Sale Date:</p>
                <p class="text black">{{$comic->sale_date}}</p>
            </div>
        </div>
    </div>

</section>

@endsection

@section('scripts')
    <script>
        const deleteForm = document.getElementById('delete-form');

        deleteForm.addEventListener('submit', e => {
            e.preventDefault();

            const confirmation = confirm('Vuoi eliminare {{$comic->title}}?');

            if(confirmation) deleteForm.submit();
        })
    </script>
@endsection