@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row g-2">
            @forelse ($projects as $project)
                <div class="col-12">
                    <div class="card">
                        <ul class="mb-0 p-3">
                            <li>
                                <a href="{{ route('admin.projects.show', $project) }}"
                                    class="fs-2 fw-bold text-secondary">{{ $project->name }}</a>
                            </li>
                            <li>
                                <a href="#" class="text-secondary-emphasis">{{ $project->link_github }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            @empty
                Nessun Progetto
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center my-3">{{ $projects->links() }}</div>
@endsection
