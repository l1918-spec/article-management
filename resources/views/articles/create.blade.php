@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Add New Article</h1>

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn" style="background-color: #ffb3d9; color: #fff; border-color: #ffb3d9;">Add Article</button>
    </form>
</div>
@endsection
