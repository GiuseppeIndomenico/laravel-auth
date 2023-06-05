@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-1 text-center fw-semibold">I miei Progetti!</h1>

        <ul>
            @foreach ($projects as $project)
                <li>
                    <a href="">{{ $project->title }}</a>

                </li>
            @endforeach
        </ul>
    </div>
@endsection
