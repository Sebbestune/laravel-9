<!DOCTYPE html>
<html>

<head>
    <title>All posts</title>
</head>

<body>
    <h1>All posts</h1>
    <ul>
        @foreach ($posts as $post)
        <li>{{ $post->title }} --
            {{ $post->description }}
            @forelse ($post->comments as $comment)
            <ul>
                <li>{{$comment->body}}</li>
            </ul>
            @empty
            <ul>
                <li>No comments</li>
            </ul>
            @endforelse
        </li>
        @endforeach
    </ul>
</body>