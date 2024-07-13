@extends('layouts.app')

@section('content')
    <h1>{{ $userStory->title }}</h1>
    <p>{{ $userStory->description }}</p>
    <p>Priority: {{ $userStory->priority }}</p>
    <a href="{{ route('user_stories.index') }}" class="btn btn-secondary">Back to list</a>
@endsection
