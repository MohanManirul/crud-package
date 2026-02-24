
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
    
<h1>Edit Post</h1>
<form method="POST" action="/posts/{{ $post->id }}">
    @csrf
    <input type="text" name="title" value="{{ $post->title }}"><br>
    <textarea name="body">{{ $post->body }}</textarea><br>
    <button type="submit">Update</button>
</form>
</div>

