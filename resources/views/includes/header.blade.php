<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL('user') }}">Data User</a>
    </div>
    <ul class="nav navbar-nav">
	@if(Request::path() == 'user')
        <li><a href="{{ URL('user') }}">Lihat Daftar User</a></li>
        <li><a href="{{ URL('user/create') }}">Buat Data User</a></li>
		<li><a href="{{ URL('user/role') }}">Buat Data Permission</a></li>
		<li><a href="{{ URL('user/logout') }}">Logout</a></li>
	@else
		<li><a href="{{ URL('home') }}">Home</a></li>
		<li><a href="{{ URL('home/login') }}">Login</a></li>
    </ul>
	@endif
</nav>