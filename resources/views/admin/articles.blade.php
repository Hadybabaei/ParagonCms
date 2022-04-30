<form action={{route('article-store')}} method="POST">
    @csrf
    <label for="title">title</label>
    <input name="title" type="text">
    <label for="title">description</label>
    <input name="description" type="text">
    <label for="title">body</label>
    <textarea name="body">Body</textarea>
    <button type="submit">Submit</button>
</form>
    @foreach ($articles as $article)
        <a href="{{route('article-edit',$article->id)}}">{{$article->title}}</a>
        <form method="POST" action={{route('article-delete',$article->id)}}>
            @method('delete')
            @csrf
            <button type="submit">delete</button>
        </form>
    @endforeach