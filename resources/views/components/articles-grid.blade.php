@foreach($articles as $article)
    <div class="col-4">
        <div class="card mb-5">
            <img src="https://picsum.photos/seed/{{$article->id}}/300/300" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text">{{$article->excerpt}}</p>
                <a href="/articles/{{$article->slug}}" class="btn btn-primary">Read article</a>

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
        </div>
    </div>
@endforeach
