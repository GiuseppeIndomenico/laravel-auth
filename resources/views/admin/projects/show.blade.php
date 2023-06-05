@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-1 text-center fw-semibold"> {{ $project->title }}</h1>

        <p>{{ $project->description }}</p>


    </div>
@endsection
