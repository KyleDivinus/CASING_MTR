@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Edit Company</h2>
    <form action="{{ route('companies.update', $company->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Company Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $company->name }}" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ $company->location }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Company</button>
        <a href="{{ route('companies.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection