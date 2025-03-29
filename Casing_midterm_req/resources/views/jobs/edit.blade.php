@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Edit Job</h2>
    <form action="{{ route('jobs.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Job Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $job->title }}" required>
        </div>
        <div class="mb-3">
            <label for="company_id" class="form-label">Company</label>
            <select name="company_id" id="company_id" class="form-control">
                @foreach($companies as $company)
                <option value="{{ $company->id }}" {{ $company->id == $job->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="salary" class="form-label">Salary</label>
            <input type="number" name="salary" id="salary" class="form-control" value="{{ $job->salary }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" required>{{ $job->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Job</button>
        <a href="{{ route('jobs.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection