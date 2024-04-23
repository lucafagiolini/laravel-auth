@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a new project</h1>

        <form action="{{ route('admin.project.store') }}" method="POST">

            @csrf

            {{-- title input --}}
            <div class="mb-4 pt-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="">
                @error('title')
                    <div class="invalid-feedback ">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- description input --}}
            <div class="mb-4">
                <label for="description" class="form-label">Project description</label>
                <textarea class="form-control" id="description" rows="3"></textarea>
            </div>

            {{-- img input --}}
            <div class="mb-4 pt-4">
                <label for="img" class="form-label">Project image</label>
                <input type="text" class="form-control" id="img" placeholder="">
            </div>

            {{-- tecnologies input --}}
            <div class="mb-4">
                <label for="tecnologies" class="form-label">Tecnologies</label>
                <select class="form-select" id="tecnologies">
                    <option value="0">Laravel</option>
                    <option value="1">Laravel - Vite</option>
                    <option value="2">Vite</option>
                    <option value="3">Vite - Vue</option>
                    <option value="4">Vue - JavaScript</option>
                    <option value="5">Html - CSS - JavaScript</option>
                </select>
            </div>

            {{-- Project url input --}}
            <div class="mb-4 pt-4">
                <label for="link" class="form-label">Project link</label>
                <input type="text" class="form-control" id="link" placeholder="">
            </div>

            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
@endsection
