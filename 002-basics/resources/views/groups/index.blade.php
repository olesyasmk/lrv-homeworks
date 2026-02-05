@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>All Groups</h1>
        <a href="{{ route('groups.create') }}" class="btn btn-primary">Create New Group</a>
    </div>

    <table class="table table-striped table-hover mt-3">
        <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Start Date</th>
            <th>Active</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($groups as $group)
            <tr>
                <td>{{ $group->id }}</td>
                <td>{{ $group->title }}</td>
                <td>{{ $group->start_from }}</td>
                <td>
                    @if($group->is_active)
                        <span class="badge bg-success">Yes</span>
                    @else
                        <span class="badge bg-danger">No</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('groups.show', $group) }}" class="btn btn-sm btn-info text-white">View</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
