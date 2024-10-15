@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid p-5">
        <div class="row bg-light">
            <div class="col-12 p-5 project-ref">
                <h2 class="mb-3">{{ $project->name }}</h2>
                <h4 class="mb-3">{{ $project->type !== null ? $project->type->name : '' }}</h4>
                <div class="mb-3 d-flex">
                    <span class="me-2">Tecnologie: </span>
                    <p>
                        @forelse($project->technologies as $technology)
                            {{ $technology->name }}
                        @empty
                            Nessuna Tecnologia utilizzata per il progetto
                        @endempty
                </p>
            </div>
            <img src="{{ $project->image !== null ? asset('./storage/' . $project->image) : 'https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg' }}"
                alt="{{ $project->name }}" class="mb-3">
            <p>{{ $project->slug }}</p>
            <p>{{ $project->summary }}</p>
        </div>
    </div>
</div>
@endsection
