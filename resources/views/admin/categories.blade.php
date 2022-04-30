<form action={{route('category-store')}} method="POST">
    @csrf
    <label for="name">name</label>
    <input name="name" type="text">
    <label for="description">Description</label>
    <input type="text" name="description">
    <label for="position">position</label>
    <select id="postionid" name="position_id">
        @foreach ($positions as $position)
                <option value={{$position->id}}>{{$position->name}}</option>
        @endforeach
        </select>
        <select id="postionid" name="design">
            @foreach ($designs as $design)
                    <option value={{$design->id}}>{{$design->name}}</option>
            @endforeach
            </select>
    <button type="submit">Submit</button>
</form>
    @isset($categories)
        @foreach ($categories as $category)
            {{$category->name}}
            <form method="POST" action={{route('category-delete',$category->id)}}>
                @method('delete')
                @csrf
                <button type="submit">delete</button>
            </form>
        @endforeach
    @endisset
    