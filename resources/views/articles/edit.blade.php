@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Edit Article</h1>

    <form action="{{ route('articles.update', $article->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="3" required>{{ $article->content }}</textarea>
        </div>
        <button type="submit" class="btn" style="background-color: #ffb3d9; color: #fff; border-color: #ffb3d9;">Update Article</button>
    </form>
</div>
@endsection
