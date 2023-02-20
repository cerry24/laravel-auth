@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">title</th>
                            <th scope="col">creation date</th>
                            <th scope="col"><a class="btn btn-success" href="">add new project</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->creation_date }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.projects.show', $project->id) }}">show</a>
                                <a class="btn btn-warning" href="">edit</a>
                                <a class="btn btn-danger" href="">delete</a>
                            </td>
                        </tr>
                        @empty
                            <p>There are no projects to be shown</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection