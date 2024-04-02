@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-3 g-3">
            <div class="col-12">
                <div class="card bg-dark-subtle p-3">
                    <h2>{{ $project->name }}</h2>
                    <span class="fst-italic">{{ $project->author }}</span>
                </div>
            </div>
            <div class="col-12">
                <div class="card bg-secondary-subtle p-3">
                    <span class="mb-2 subtitle">Description of the project:</span>
                    <p>{{ $project->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
