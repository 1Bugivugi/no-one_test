<div class="container">
    <div class="inner-wrapper d-flex flex-wrap justify-content-between py-5">
        <div class="row gx-4">
            @foreach($articles as $article)
                <div class="col-4">
                    <div class="card mb-5">
                        <img src="https://picsum.photos/seed/{{$article->id}}/300/300" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <p class="card-text">{{$article->excerpt}}</p>
                            <a href="/articles/{{$article->slug}}" class="btn btn-primary">Read article</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
