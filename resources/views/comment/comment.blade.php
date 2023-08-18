<section>
    <div class="container">
        
        <h2>Comments:</h2>
        <ul>
            @foreach ($post->comments as $comment)
                <li>
                    <strong>{{ $comment->user->name }}:</strong> {{ $comment->content }}
                </li>
            @endforeach
        </ul>
    </div>
</section>