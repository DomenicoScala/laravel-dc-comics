@extends('layouts.app')

@section('page-title', 'Comic Index')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="py-4">
                Comic Index
            </h1>

            <div class="mb-3">
                <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi un Comic</a>
            </div>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale Date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Action</th>


                  </tr>
                </thead>

                <tbody>
                  @foreach ($comics as $comic)
                    <tr>
                      <th scope="row">{{ $comic->id }}</th>
                      <td>{{ $comic->title }}</td>
                      <td>$ {{ $comic->price }}</td>
                      <td>{{ $comic->series }}</td>
                      <td>{{ $comic->sale_date }}</td>
                      <td>{{ $comic->type }}</td>
                      <td><a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Dettagli</a></td>
                      <td><a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">Modifica</a></td>
                      <td>
                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST" class="d-inline-block">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Elimina</button>
                        </form> 
                      </td>

                    </tr>
                  @endforeach
                </tbody>

              </table>

        </div>
    </div>
</div>
@endsection
