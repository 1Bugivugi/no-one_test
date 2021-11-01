@props(['comment'])

<x-article.panel class="">
    <article class="flex space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u={{$comment->user_id}}" alt="" class="" width="60" height="60">
        </div>
        <div class="">
            <header class="mb-4">
{{--                <h3 class="font-bold">{{$comment->author->username}}</h3>--}}
                <p class="text-xs">Posted
                    <time>{{$comment->created_at->format('F j, Y, g:i a')}}</time>
                </p>
            </header>

            <h5>{{$comment->theme}}</h5>
            <p>{{$comment->body}}</p>
        </div>
    </article>
</x-article.panel>
