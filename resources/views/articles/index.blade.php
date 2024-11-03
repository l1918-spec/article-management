@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Articles</h1>
    <div class="text-center mb-3">
        <a href="{{ route('articles.create') }}" class="btn" style="background-color: #ffb3d9; color: #fff; border-color: #ffb3d9;">Add Article</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">Title</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td class="text-center">{{ $article->title }}</td>
                <td class="text-center">
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm" style="background-color: #ffb3d9; color: #fff; border-color: #ffb3d9;">Edit</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm" style="background-color: #ffb3d9; color: #fff; border-color: #ffb3d9;">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
