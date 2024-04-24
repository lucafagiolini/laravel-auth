@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Update the {{ $project->title }} project</h1>

        <form action="{{ route('admin.project.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')



            {{-- title input --}}
            <div class="mb-4 pt-4">

                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name='title'
                    placeholder="" value="{{ old($project->title) }} {{ $project->title }}">

                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- description input --}}
            <div class="mb-4">
                <label for="description" class="form-label">Project description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name='description'
                    rows="3">{{ old($project->description) }} {{ $project->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            {{-- img input --}}
            <div class="mb-4 pt-4">
                <label for="img" class="form-label">Project image</label>
                <input type="text" class="form-control @error('img') is-invalid @enderror" id="img" name='img'
                    placeholder="" value="{{ old($project->img) }} {{ $project->img }}">
                @error('img')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- tecnologies input --}}
            <div class="mb-4">
                <label for="tecnologies @error('tecnologies') is-invalid @enderror" class="form-label">Tecnologies</label>
                <select class="form-select" id="tecnologies" name='tecnologies'>
                    <option value="0">Laravel</option>
                    <option value="1">Laravel - Vite</option>
                    <option value="2">Vite</option>
                    <option value="3">Vite - Vue</option>
                    <option value="4">Vue - JavaScript</option>
                    <option value="5">Html - CSS - JavaScript</option>
                </select>
                @error('tecnologies')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Project url input --}}
            <div class="mb-4 pt-4">
                <label for="link" class="form-label">Project link</label>
                <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name='link'
                    placeholder="" value="{{ old($project->link) }} {{ $project->link }}">
                @error('link')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-warning">Update</button>
        </form>


    </div>
@endsection
