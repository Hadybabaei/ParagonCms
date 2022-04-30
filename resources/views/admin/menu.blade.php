<form action={{route('menu-store')}} method="POST">
    @csrf
    <label for="name">name</label>
    <input name="name" type="text">
    <button type="submit">Submit</button>
</form>
    @isset($menus)
        @foreach ($menus as $menu)
            <a href="{{route('menu-edit',$menu->id)}}">{{$menu->name}}</a>
            <button type="button" class="btn btn-success">submenu</button>
            <form method="Post" action={{route('menu-update',$menu->id)}}>
                @csrf
                @method('put')
                <label for="html">Visibility</label><br>
                @if ($menu->visibility > 0)
                    <input type="checkbox" id="vehicle1" name="visibility" value=1 checked>
                @else
                    <input type="checkbox" id="vehicle1" name="visibility" value=1>
                @endif
                <button type="submit">Edit </button>
            </form>
            <form method="POST" action={{route('menu-delete',$menu->id)}}>
                @method('delete')
                @csrf
                <button type="submit">delete</button>
            </form>
        @endforeach
    @endisset