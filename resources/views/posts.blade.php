{{-- @foreach ($posts as $post)
    <div>
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
    </div>
@endforeach

<div>
    {{ $posts->links() }}
</div> --}}
<!-- resources/views/posts/partials/posts.blade.php -->
<div class="row">
    @foreach ($posts as $post)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->body }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $posts->links() }}
</div>

