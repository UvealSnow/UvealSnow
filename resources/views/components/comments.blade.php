<div class="post__comments" id="comment-section">
    <h1>{{ $post->comments->count() }} Comments</h1>

    @forelse($comments as $comment)
        <div class="comment">
            <p class="comment__metadata">
                <span>{{ $comment->name }}</span>
                <span class="date">{{ $comment->created_at->format('d M Y, H:i') }}</span>
            </p>
            <p>{!! nl2br($comment->body) !!}</p>
        </div>
    @empty
        <p>No comments have been added yet.</p>
    @endforelse

    @if ($post->comments->count() > 10)
        {{ $comments->links() }}
    @endif

    <div class="comment__form" id="comment-form">
        <h1>Join in</h1>

        @if (session('success'))
            <div class="alert-success">
                <p>
                    <span>Great!</span>
                    {{ session('success') }}
                </p>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert-danger">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ url("/$category->uri/$post->uri/comment") }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label>Full name</label>
                <input class="form-control" type="text" name="name" placeholder="Your name (This WILL be public)" required="true">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="email" name="email" placeholder="Your name (This WON'T be public)" required="true">
            </div>

            <div class="form-group">
                <label>Comment</label>
                <textarea rows="5" class="form-control" name="body" placeholder="Type your comment here..." required="true"></textarea>
            </div>

            <div class="form-group">
                <button class="form-control">Add comment</button>
            </div>
        </form>
    </div>
</div>