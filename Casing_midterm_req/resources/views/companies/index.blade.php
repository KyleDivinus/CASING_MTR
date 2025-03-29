@extends('layouts.app')
@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

<div class="container">
    <h2>Companies</h2>
    <a href="{{ route('companies.create') }}" class="btn btn-success">Add Company</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->location }}</td>
                <td>
                    <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST" style="display:inline;">
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