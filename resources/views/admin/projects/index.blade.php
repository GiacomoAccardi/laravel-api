@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid p-5">
        <div class="row p-5 bg-light">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <h2>Elenco progetti</h2>
                    <a href="{{ route('admin.projects.create') }}">
                        <div class="btn btn-sm btn-primary">Aggiungi progetto</div>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Slug</th>
                            <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->name }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}">
                                            <button class="btn btn-sm btn-primary me-1"><i class="fas fa-eye"></i></button>
                                        </a>
                                        <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">
                                            <button class="btn btn-sm btn-warning me-4"><i class="fas fa-edit"></i></button>
                                        </a>
                                        <form action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}"
                                            method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger delete-project"
                                                onclick="return confirm('Sei sicuro di voler eliminare questo progetto? Non potrai tornare indietro.')"><i
                                                    class="fas fa-trash"></i></button>
                                            {{-- <button type="button" class="btn btn-sm btn-danger delete-project"><i
                                                    class="fas fa-trash"></i></button> --}}
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- @include('admin.projects.partials.modal_delete') --}}
@endsection
