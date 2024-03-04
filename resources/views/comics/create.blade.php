@extends('layouts.app')

@section('page-title', 'Comic Create')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                Comic Create
            </h1>

            <form action="{{ route('comics.store') }}" method="POST" class="p-2">
                @csrf
                
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo Comic</label>
                    <input type="text" name="title" id="title" placeholder="Inserisci il titolo..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="Description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="Inserisci Descrizione..."></textarea>
                </div>

                <div class="mb-3">
                    <label for="thumb" class="form-label">Thumb</label>
                    <input type="text" name="thumb" id="thumb" placeholder="Inserisci la thumb..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo Comic</label>
                    <input type="number" name="price" id="price" placeholder="Inserisci il prezzo..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Serie Comic</label>
                    <input type="text" name="series" id="series" placeholder="Inserisci la Series..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Sale Date Comic</label>
                    <input type="date" name="sale_date" id="sale_date" placeholder="Inserisci la Sale Date..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type Comic</label>
                    <input type="text" name="type" id="type" placeholder="Inserisci il Type..." class="form-control">
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artists Comic</label>
                    <input type="text" name="artists" id="artists" placeholder="Inserisci gli Artisti..." class="form-control">
                </div>
                
                <div class="mb-3">
                    <label for="writers" class="form-label">Writers Comic</label>
                    <input type="text" name="writers" id="writers" placeholder="Inserisci gli Scrittori..." class="form-control">
                </div>
            
                <div>
                    <button type="submit" class="btn btn-success">
                        + Aggiungi
                    </button>
                </div>
            
            </form>
        </div>
    </div>
</div>
@endsection
