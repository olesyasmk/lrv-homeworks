@extends('layouts.app')

@section('content')
<div class="mb-3">
    <a href="{{ route('groups.show', $group) }}" class="btn btn-secondary">Back to Group</a>
</div>

<div class="card">
    <div class="card-header bg-primary text-white">
        <h2>Student Details: {{ $student->name }} {{ $student->surname }}</h2>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $student->id }}</p>
        <p><strong>Surname:</strong> {{ $student->surname }}</p>
        <p><strong>Name:</strong> {{ $student->name }}</p>
        <p><strong>Group:</strong> <a href="{{ route('groups.show', $group) }}">{{ $group->title }}</a></p>
        <p><strong>Created At:</strong> {{ $student->created_at }}</p>
        <p><strong>Updated At:</strong> {{ $student->updated_at }}</p>
    </div>
</div>
@endsection
