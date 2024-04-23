@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-column align-items-center p-5 ">

            <h1 class="p-3">Project Details of {{ $project->title }}</h1>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $project->img }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">title: {{ $project->title }}</h5>
                            <p class="card-text text-capitalize">description: {{ $project->description }}</p>
                            <p class="card-text text-capitalize">
                                <small class="text-body-secondary text-capitalize">
                                    tecnologies: {{ $project->tecnologies }}
                                </small>
                            </p>
                            <p class="card-text">
                                <small class="text-body-secondary">
                                    Project link:
                                    {{ $project->link }}
                                </small>
                            </p>
                            <p class="card-text">
                                <small class="text-body-secondary text-capitalize">
                                    Created: {{ $project->created_at }}
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card text-center">
                <div class="card-header">
                    Actions
                </div>
                <div class="card-body d-flex justify-content-center gap-3">
                    <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST">
                        <button class="btn btn-danger">Delete Project</button>
                        @csrf
                        @method('DELETE')
                    </form>
                    <a href="#" class="btn btn-warning">Update Project</a>
                </div>
                <div class="card-footer text-body-secondary">
                    last time updated: {{ $project->updated_at }}
                </div>
            </div>

        </div>




    </div>
@endsection
