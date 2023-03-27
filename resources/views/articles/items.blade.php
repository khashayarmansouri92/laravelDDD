<div class="col-md-5 col-lg-4 order-md-last">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-primary">Your articles</span>
        <span class="badge bg-primary rounded-pill">{{\Domain\Article\Models\Article::count()}}</span>
    </h4>
    <ul class="list-group mb-3">
        @foreach($articles as $article)
            <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                    <a class="my-0" href="{{route('articles.edit', $article->id)}}">{{$article->title}}</a>
                    <br>
                    <small class="text-body-secondary">{{$article->body}}</small>
                </div>
                <span class="text-body-white badge bg-info d-flex align-items-center rounded-pill">{{$article->commentCount}}</span>
                <form action="{{route('articles.destroy', $article->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
