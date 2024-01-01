<!-- resources/views/posts/index.blade.php -->

@foreach ($posts as $post)
    <p>{{ $post->message }} - Comments: {{ $post->post_count }}</p>
@endforeach
