@foreach($cat->Article as $article)
<div class="two-block">
    <div class="two-left">
        <h5>{{$article->body}}</h5>
        <img src="/images/info-block.png"><small>{{$article->title}}</small>
    </div>
    <div class="two-right">
        <h5>{{$article->body}}</h5>
        <a href=#>اطلاعات بیشتر ... </a>
    </div>
</div>
@endforeach