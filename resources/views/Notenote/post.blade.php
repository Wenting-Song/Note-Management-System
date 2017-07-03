
<div class="blog-post">
    <h2 class = "blog-post-title">
        <a href="/users/{{$post->id}}">
                 {{ $post->title}}
        </a>
    </h2>
    <p class ="blog-post-meta">
        
        Created by {{ $post->user->name}} on
        {{ $post->created_at->toDayDateTimeString()}}<a href="#"></a> [ edit / delete ]
    </p>
    <div class="list-group-item">
    {{ $post->body}}
   </div>
    
    
</div>