<x-layout banner="{{$article->title}}">
    <section class="py-8 detail_page mb-5">
        <div class="container">
            <div class="detail-page__body d-flex flex-row py-5">
                <div class="right-side pe-5">
                    <img class="detail-page__cover rounded" src="https://picsum.photos/seed/{{$article->id}}/300/300">

                    <div class="stats">
                        <div class="views">
                            <i class="fas fa-eye"></i>
                            <span class="views-count">{{$article->views}}</span>
                        </div>
                        <form action="#" class="likesForm" data-slug="{{$article->slug}}">
                            @csrf
                            <button type="submit" id="submitLikes"><i class="far fa-heart"></i></button>
                            <label class="likes-count">
                                {{$article->likes}}
                            </label>
                        </form>
                    </div>
                </div>

                <div class="left-side">
                    <div class="tags-wrapper">
                        <a class="single-tag" href="/tags/{{$article->tag->name}}">{{$article->tag->name}}</a>
                    </div>

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
                <x-article.panel class="align-items-center">
                    <form action="/articles/{{$article->slug}}/comments" id="commentForm" method="post" class="">
                        @csrf

                        <div class="">
                            <div class="form-group mb-3">
                                <label for="nameInput">Theme</label>
                                <input type="text" name="theme" class="form-control" id="nameInput"
                                       placeholder="Comment theme here..." required>
                            </div>
                            <div class="form-group">
                                <label for="bodyInput">Message</label>
                                <textarea class="form-control" name="body" id="bodyInput" placeholder="Your comment..."
                                          rows="3" required></textarea>
                            </div>
                            @error('body')
                            <span class="text-danger fs-6">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mt-3">
                            <button type="submit"
                                    class="btn btn-primary">
                                Post
                            </button>
                        </div>
                    </form>
                    <p class="align-center msg-success mb-0">Ваше сообщение успешно отправлено</p>
                </x-article.panel>

                @foreach($article->comments as $comment)
                    <x-article.post-comment :comment="$comment"/>
                @endforeach
            </section>
        </div>

    </section>

    <script>
        $(function () {
            $('.msg-success').hide();

            setTimeout(() => {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: `/articles/{{$article->slug}}/views`,
                    data: {},
                    success: function (response) {
                        document.querySelector('.detail_page .views-count').innerHTML = response;
                    },
                    error: function (res) {
                        console.log(res)
                        alert('Что-то пошло не так, попробуйте позже');
                    }
                })
            }, 5000)


            $('#commentForm').submit(function (e) {
                e.preventDefault();

                let form = $(this);
                let url = form.attr('action');

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: form.serialize(),
                    success: function (res) {
                        form.toggle()
                        // document.querySelector('.msg-success').style.display = 'block';
                        $('.msg-success').toggle();
                    }
                })
            })
        })
    </script>

</x-layout>
