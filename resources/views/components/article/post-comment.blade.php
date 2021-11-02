@props(['comment'])

<x-article.panel class="mt-5">
    <div class="">
        <header class="mb-4">
            <p class="text-xs">Posted
                <time>{{$comment->created_at->format('F j, Y, g:i a')}}</time>
            </p>
        </header>

        <h5>{{$comment->theme}}</h5>
        <p>{{$comment->body}}</p>
    </div>
</x-article.panel>
