<!-- resources/views/posts/create.blade.php -->

<form method="post" action="{{ route('posts.store') }}">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">
    
    <label for="content">Content:</label>
    <textarea name="amount" id="amount"></textarea>
    
    <button type="submit">Submit</button>
</form>
