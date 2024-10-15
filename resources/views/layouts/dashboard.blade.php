@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex flex-row">
        <div class="sidebar p-5">
            <ul class="list-unstyled text-center">
                <li class="mb-3">
                    <i class="fa-solid fa-list-check"></i>
                    <a href="{{ route('admin.projects.index') }}">Projects</a>
                </li>
            </ul>
        </div>

        <div class="dash-content bg-material">
            @yield('main-content')
        </div>
    </div>
@endsection
