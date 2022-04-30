<div class="header">
    <div class="users">
        @auth
        <a href={{route('pannel')}}>پنل کاربری </a>
        <form id='logout' action={{route('logout')}} method="POST">
        @csrf
        </form>
        <span onclick='logout()'>خروج</span> 
        @else
        <a id='login' href={{route('login')}}> ورود </a>
        <a id='register' href={{route('register')}}>ثبت نام </a>
        @endauth
    </div>
    <div class="menu">
        <a href="{{route('home')}}">صفحه اصلی </a>
        @isset($menus)
            @if(sizeof($menus)>0)
                @foreach ($menus as $menu)
                    <a href={{route('menu',$menu->name)}}>{{$menu->name}}</a>
                @endforeach
            @else 
                <a href=#>test</a>
                <a href=#>test</a>
                <a href=#>test</a>
                <a href=#>test</a>
                <a href=#>test</a>
            @endif
        @endisset
    </div>
    <div class="logo">
        <img src="/images/logo.png" alt="logo">
    </div>
</div>
