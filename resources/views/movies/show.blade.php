@extends('layouts.app')

@section('page-title', $singleMovie->title)

@section('main-content')
<h2>
    {{ $singleMovie->title }}
</h2>

<div class="row">
    <div class="col-12">
        <div class="card mb-3">
            <div class="card-body">
                <div>
                    <div>
                        Original title:
                    </div>
                    <h4>
                        {{ $singleMovie->original_title }}
                    </h4>
                </div>

                <p>
                   Release date: {{ $singleMovie->date }}
                </p>
                <div>
                    Nationality: {{ $singleMovie->nationality }}
                </div>
                <div>
                    Vote: {{ $singleMovie->vote }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection