@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-1 text-center fw-semibold">I miei Progetti!</h1>


        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col"> #</th>
                    <th scope="col">
                        Titolo
                    </th>
                    <th scope="col">
                        Descrizione
                    </th>
                    <th scope="col">
                        Azioni disponibili
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">
                            {{ $project->id }}
                        </th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-outline-primary">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <button class="btn btn-outline-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </td>


                    </tr>

            </tbody>
            @endforeach
        </table>

    </div>
@endsection
