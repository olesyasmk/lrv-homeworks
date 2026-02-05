@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <a href="{{ route('groups.index') }}" class="btn btn-secondary">Back to Groups</a>
    </div>

    <h1>Create New Group</h1>

    <form action="{{ route('groups.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="start_from" class="form-label">Start Date</label>
            <input type="date" name="start_from" id="start_from" class="form-control" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="is_active" id="is_active" class="form-check-input" value="1" checked>
            <label for="is_active" class="form-check-label">Is Active</label>
        </div>
        <button type="submit" class="btn btn-success">Create Group</button>
    </form>
@endsection
