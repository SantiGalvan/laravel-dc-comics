@extends('layouts.main')

@section('title', 'Crea un Comic')

@section('main-content')
    {{-- Section form --}}
    <section id="create-comic">
        <div class="main-container py-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="m-0">Aggiungi nuovo Comic</h1>
                <a href="{{route('comics.index')}}" class="btn btn-secondary">Torna alla lista</a>
            </div>
            <div class="form mt-5">
                <form action="{{route('comics.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="title" class="form-label">Titolo</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="mb-3">
                                <label for="series" class="form-label">Serie</label>
                                <input type="text" class="form-control" id="series" name="series">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="mb-3">
                                <label for="type" class="form-label">Tipo</label>
                                <input type="text" class="form-control" id="type" name="type">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="price" class="form-label">Prezzo</label>
                                <input type="number" class="form-control" id="price" name="price">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="thumb" class="form-label">Immagine</label>
                                <input type="text" class="form-control" id="thumb" name="thumb">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-3">
                                <label for="date" class="form-label">Data</label>
                                <input type="text" class="form-control" id="date" name="sale_date">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="artists" class="form-label">Artisti</label>
                                <input type="email" class="form-control" id="artists" name="artists">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="writers" class="form-label">Scrittori</label>
                                <input type="text-area" class="form-control" id="writers" name="writers">
                            </div>
                        </div>
                        <div class="offset-2 col-8">
                            <div class="mb-3">
                                <label for="description" class="form-label">Descrizione</label>
                                <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-4">
                        <button type="reset" class="btn btn-warning">Reset</button>
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection