@foreach($cat->Article as $article)
<div class="single-block">
    <div class="singleimg">
        <img src={{$article->thumbnail}} alt='image'>
    </div>
    <div class="singlebody">
        <h3>{{$article->title}}</h3>
        <h4>{{$article->description}}</h4>
        <p>{{$article->body}}</p>
    </div>
</div>
@endforeach