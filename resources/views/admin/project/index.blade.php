@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('admin.project.create') }}" class="btn btn-sm btn-outline-success">crate a new project</a>
    </div>
@endsection
