
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Roles for {{ $user->name }}</h1>
    <form action="{{ route('teams.update', $user) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            @foreach($roles as $role)
                <div>
                    <input type="checkbox" name="roles[]" value="{{ $role->id }}" 
                        {{ $user->roles->contains($role) ? 'checked' : '' }}>
                    <label>{{ $role->name }}</label>
                </div>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Update Roles</button>
    </form>
</div>
@endsection
