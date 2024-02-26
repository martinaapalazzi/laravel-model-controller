@extends('layouts.app')

@section('page-title', 'Movies:')

@section('main-content')
<h1>
    Movies:
</h1>

<div class="row">
    @foreach ($movies as $index => $movie)
        <div class="col-12 col-sm-3 text-center">
            <div class="card mb-3">
                <div class="card-body">
                    <h3>
                        {{ $movie->title }}
                    </h3>

                    <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="btn btn-outline-dark">
                        Go to movies info!
                    </a> 
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection