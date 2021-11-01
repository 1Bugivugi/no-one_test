<x-layout banner="{{$article->title}}">
    <section class="py-8">
        <div class="container">
            <div class="detail-page__body d-flex flex-row py-5">
                <div class="right-side pe-5">
                    <img class="detail-page__cover rounded" src="https://picsum.photos/seed/{{$article->id}}/300/300">
                </div>

                <div class="left-side">
                    <h1 class="">
                        {{$article->title}}
                    </h1>

                    <div class="">
                        {{$article->body}}
                    </div>

                    <div class="mt-2">
                        <a href="/articles" class="">
                            Back to Articles
                        </a>
                    </div>
                </div>
            </div>
            {{-- Comments section --}}
            <section class="">
                <x-article.panel>
                    <form action="/articles/{{$article->slug}}/comments" method="post" class="">
                        @csrf
                        <header class="d-flex items-center">
                            <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" class="rounded-full"
                                 width="40" height="40">
                            <h2 class="ml-4">Want to participate?</h2>
                        </header>

                        <div class="mt-6">
                            <input type="text" name="theme" value="">
                            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" id=""
                                      placeholder="Quick, think of something to say!" rows="5"
                                      required></textarea>
                            @error('body')
                            <span class="text-red text-sm">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="justify-end flex mt-6 pt-6 border-t border-gray-200">
                            <button type="submit"
                                    class="bg-blue-500 text-white font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">
                                Post
                            </button>
                        </div>
                    </form>
                </x-article.panel>

                @foreach($article->comments as $comment)
                    <x-article.post-comment :comment="$comment"/>
                @endforeach
            </section>
        </div>

    </section>
</x-layout>
