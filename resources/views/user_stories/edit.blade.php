@extends('layouts.app')

@section('content')
    <h1>Edit User Story</h1>
    <form action="{{ route('user_stories.update', $userStory->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $userStory->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required>{{ $userStory->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="priority">Priority</label>
            <input type="number" name="priority" class="form-control" value="{{ $userStory->priority }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
