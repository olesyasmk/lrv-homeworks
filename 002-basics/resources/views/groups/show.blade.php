@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <a href="{{ route('groups.index') }}" class="btn btn-secondary">Back to Groups</a>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h2>Group Details: {{ $group->title }}</h2>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $group->id }}</p>
            <p><strong>Start Date:</strong> {{ $group->start_from }}</p>
            <p><strong>Active:</strong> {{ $group->is_active ? 'Yes' : 'No' }}</p>
            <p><strong>Created At:</strong> {{ $group->created_at }}</p>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Students in this Group</h3>
        <a href="{{ route('groups.students.create', $group) }}" class="btn btn-primary">Add New Student</a>
    </div>

    @if($group->students->isEmpty())
        <div class="alert alert-info">No students in this group yet.</div>
    @else
        <table class="table table-striped table-hover mt-3">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Surname</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($group->students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->surname }}</td>
                    <td>{{ $student->name }}</td>
                    <td>
                        <a href="{{ route('groups.students.show', [$group, $student]) }}" class="btn btn-sm btn-info text-white">View Details</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
