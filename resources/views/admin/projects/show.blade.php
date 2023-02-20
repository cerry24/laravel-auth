@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="card mt-3">
                    <img src="{{ $project->thumbnail }}" class="card-img-top" alt="Project thumbnail">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <p class="card-text"><small class="text-muted">{{ $project->creation_date }}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection