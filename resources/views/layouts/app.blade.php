<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') </title>

    <!-- Style -->
    @vite('resources/css/app.css')
</head>

<body>
    <div class="navbar bg-base-100">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href=" {{url('tambah')}} ">Tambah Postinagn</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-center">
            <a href=" {{url('/')}} " class="btn btn-ghost normal-case text-xl">Like Like Shy</a>
        </div>
        <div class="navbar-end">
            @yield('cari')
            <div class="dropdown dropdown-end">
                <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://via.placeholder.com/380x380" />
                    </div>
                </label>
                <ul tabindex="0"
                    class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Login</a></li>
                    <li><a>Register</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- <!-- @include('layouts.app.navbar') --> --}}

    @yield('content')

    @include('layouts.app.footer')

</body>

</html>