@extends('layout.master')

@section('content')
    <div class="container">
        <h1>User Stories</h1>
        <a href="{{ route('backlogs.user_stories.create', $backlog->id) }}" class="btn btn-primary">Créer une User Story</a>
        <ul>
            @foreach($userStories as $userStory)
                <li>
                    <a href="{{ route('backlogs.user_stories.edit', [$backlog->id, $userStory->id]) }}">{{ $userStory->title }}</a>
                    <form action="{{ route('backlogs.user_stories.destroy', [$backlog->id, $userStory->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

