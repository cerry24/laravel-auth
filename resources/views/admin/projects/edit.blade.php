@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="col-10">
        <form action="{{ route('admin.projects.update', $project) }}" method="POST">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-warning">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <label for="input-title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ old('title', $project->title) }}" id="input-title">
            </div>
            <div class="mb-3">
                <label for="input-description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="input-description" cols="30" rows="10">{{ old('title', $project->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="input-cover" class="form-label">Thumbnail</label>
                <input type="text" class="form-control" name="thumbnail" value="{{ old('title', $project->thumbnail) }}" id="input-thumbnail">
            </div>
            <div class="mb-3">
                <label for="input-price" class="form-label">Creation date</label>
                <input type="datetime" class="form-control" name="creation_date" value="{{ old('title', $project->creation_date) }}" id="input-creation_date">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection