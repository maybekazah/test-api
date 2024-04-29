<nav class="nav">
    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Admin panel</a>
    <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">Posts panel</a>
    <a class="nav-link active" aria-current="page" href="{{route('blogs.index')}}">Blogs</a>
    <a class="nav-link active" aria-current="page" href="{{route('tags.index')}}">Tags</a>
    @auth()
        <a class="nav-link active" href="{{route('admin.logout')}}">Logout</a>
    @endauth
    @guest()
        <a class="nav-link active" href="{{route('admin.login')}}">Login</a>
    @endguest
</nav>
