<div class="sidebar-class px-3">
    <div class="tags-wrapper">
        @foreach($tags as $tag)
            <a href="/tags/{{$tag->name}}" class="single-tag">{{$tag->name}}</a>
        @endforeach
    </div>
</div>
