@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-4">
                {{ $comic->title }}
            </h1>

            <a href="{{ route('comics.index') }}" class="btn btn-primary my-4"> Ritorna alla Home</a>

            <div class="card">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $comic->title }}</h5>
                  <ul>
                    <li>
                        Price: $ {{ $comic->price }}
                    </li>

                    <li>
                        Series: {{ $comic->series }}
                    </li>

                    <li>
                        Sale Date: {{ $comic->sale_date }}
                    </li>

                    <li>
                        Type: {{ $comic->type }}
                    </li>

                    <li>
                        Description: {{ $comic->description }}
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
