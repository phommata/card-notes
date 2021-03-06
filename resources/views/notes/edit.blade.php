@extends('layout')

@section('content')

    <h1>Edit the Note</h1>

    <form method="POST" action="/notes/{{ $note->id }}">
        {{ method_field('PATCH') }}

        <div class="form-group">
            <textarea name="body" class="form-control" id="" rows="10">{{ $note->body }}</textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Note</button>
        </div>
    </form>
@stop