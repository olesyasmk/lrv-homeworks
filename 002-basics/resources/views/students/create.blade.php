@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('groups.show', $group) }}" class="btn btn-secondary">Back to Group</a>
</div>

<h1>Add Student to Group: {{ $group->title }}</h1>

<form action="{{ route('groups.students.store', $group) }}" method="POST" class="mt-4">
    @csrf
    <div class="mb-3">
        <label for="surname" class="form-label">Surname</label>
        <input type="text" name="surname" id="surname" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Add Student</button>
</form>
@endsection
