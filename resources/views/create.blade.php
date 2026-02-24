<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<h1 class="mb-4">Create Post</h1>

<form method="POST" action="/posts" class="container mt-4">
    @csrf

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input 
            type="text" 
            name="title" 
            class="form-control" 
            placeholder="Enter title">
    </div>

    <div class="mb-3">
        <label class="form-label">Body</label>
        <textarea 
            name="body" 
            class="form-control" 
            rows="5"
            placeholder="Write your post..."></textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        Save
    </button>
</form>