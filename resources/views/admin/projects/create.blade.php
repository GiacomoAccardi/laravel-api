@extends('layouts.dashboard')

@section('main-content')
    <div class="container-fluid p-5">
        <div class="row p-5 bg-light">
            <div class="col-12 mb-3">
                <h2>Aggiungi un nuovo progetto</h2>
            </div>
            <div class="col-12">
                @if ($errors->any())
                    <div>
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-12 mb-3">
                            <label class="control-lable">Nome progetto</label>
                            <input type="text" name="name" id="" class="form-control form-control-sm"
                                placeholder="Nome progetto" value="{{ old('name') }}">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="control-lable">Immagine</label>
                            <input type="file" name="image" id="image" class="form-control form-control-sm">
                        </div>
                        <div class="col-12 mb-3">
                            <label class="control-lable">Tipologia Progetto</label>
                            <select name="type_id" id="" class="form-select form-select-sm" required>
                                <option value="">--Seleziona tipologia--</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" @selected($type->id == old('type_id'))>{{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="col-12 mb-3"><label class="control-lable">Seleziona tecnologie</label></div>
                            @foreach ($technologies as $technology)
                                <div class="form-check-inline">
                                    <input type="checkbox" name="technologies[]" id="" class="form-check-inline"
                                        value="{{ $technology->id }}" @checked(is_array(old('technologies')) && in_array($technology->id, old('technologies')))>
                                    <label class="form-check-label">{{ $technology->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-12 mb-3">
                            <label class="control-lable">Sommario Progetto</label>
                            <textarea name="summary" id="" cols="30" rows="10" class="form-control form-control-sm">{{ old('summary') }}</textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <button type="submit" class="btn btn-sm btn-success">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
