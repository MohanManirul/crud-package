<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <h1>Posts</h1>
    <a href="/posts/create">Add New</a>

    @foreach($posts as $post)
        <p>{{ $post->title }}</p>
        <a href="/posts/{{ $post->id }}/edit">Edit</a>
        <a href="/posts/{{ $post->id }}/delete">Delete</a>
    @endforeach
</div>

