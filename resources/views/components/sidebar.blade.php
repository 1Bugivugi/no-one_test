<div class="sidebar-class px-3">
    <div class="wrapper">
        @foreach($tags as $tag)
            <a href="/tags/{{$tag->slug}}" class="single-tag">{{$tag->name}}</a>
        @endforeach
    </div>
</div>
