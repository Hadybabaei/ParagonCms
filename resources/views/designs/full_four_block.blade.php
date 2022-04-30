<div class="full_three_block">
    <h5>{{$cat->name}}</h5>
    <small>{{$cat->description}}</small>
    <div class="full_blocks">
        @foreach($cat->Article as $article)
        <div class="fulls card" style="border: 0; background-color: #ffffff00;">
            <img class="card-img-top" src={{$article->thumbnail}} style="border-radius: 50%;">
            <div class="fulld card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text">{{$article->description}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>