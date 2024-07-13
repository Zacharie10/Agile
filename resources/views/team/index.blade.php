
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Team Members</h1>
    <ul>
        @foreach($users as $user)
            <li>
                {{ $user->name }} - 
                @foreach($user->roles as $role)
                    {{ $role->name }}
                @endforeach
                <a href="{{ route('teams.edit', $user) }}" class="btn btn-primary">Edit Roles</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection
