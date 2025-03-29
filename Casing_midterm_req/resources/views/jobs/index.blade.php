@extends('layouts.app')
@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

<div class="container">
    <h2>Job Listings</h2>
    <a href="{{ route('jobs.create') }}" class="btn btn-success">Add Job</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Company</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobs as $job)
            <tr>
                <td>{{ $job->title }}</td>
                <td>{{ $job->company->name }}</td>
                <td>{{ $job->salary }}</td>
                <td>
                    <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection