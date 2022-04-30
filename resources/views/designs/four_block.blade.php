<div class="three_block">
  <div class="three_title">
    <h5>{{$cat->name}}</h5>
    <small>{{$cat->description}}</small>
  </div>
    <div class="three_blocks">
@foreach($cat->Article as $article)
        <div class="my card" style="width: 18rem;">
            <img class="card-img-top" src={{$article->thumbnail}} alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$article->title}}</h5>
              <p class="card-text">{{$article->description}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
@endforeach
    </div>
</div>
