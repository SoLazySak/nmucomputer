<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css"
        integrity="sha512-IuO+tczf4J43RzbCMEFggCWW5JuX78IrCJRFFBoQEXNvGI6gkUw4OjuwMidiS4Lm9Q2lILzpJwZuMWuSEeT9UQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Siemreap&display=swap');

        body {
            font-family: "Siemreap", sans-serif;
        }
    </style>
</head>

<body>



    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>

        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="{{ route('home') }}" class="brand-link">
                <img src="{{ asset('image/logo.webp') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">NMU COMPUTER</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('image/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                    <div class="sidebar-search-results">
                        <div class="list-group"><a href="#" class="list-group-item">
                                <div class="search-title"><strong class="text-light"></strong>N<strong
                                        class="text-light"></strong>o<strong class="text-light"></strong> <strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>l<strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>m<strong
                                        class="text-light"></strong>e<strong class="text-light"></strong>n<strong
                                        class="text-light"></strong>t<strong class="text-light"></strong> <strong
                                        class="text-light"></strong>f<strong class="text-light"></strong>o<strong
                                        class="text-light"></strong>u<strong class="text-light"></strong>n<strong
                                        class="text-light"></strong>d<strong class="text-light"></strong>!<strong
                                        class="text-light"></strong></div>
                                <div class="search-path"></div>
                            </a></div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('orderList') }}" class="nav-link">
                                <i class="fa-solid fa-caret-right"></i>
                                <p>
                                    ការបញ្ជាទិញ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class="nav-link">
                                <i class="fa-solid fa-caret-right"></i>
                                <p>
                                    ទំនិញ
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('addCate') }}" class="nav-link">
                                <i class="fa-solid fa-caret-right"></i>
                                <p>
                                    ប្រភេទទំនិញ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('addBrand') }}" class="nav-link">
                                <i class="fa-solid fa-caret-right"></i>
                                <p>
                                    ឈ្មោះយីហោ
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-caret-right"></i>
                                <p>
                                    របាយការណ៍
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>

        <div class="content-wrapper" style="min-height: 445.667px;">

            <div class="content-header">
                <div class="container-fluid">
                    <h1 class="m-0">@yield('pageHeader')</h1>
                </div>
            </div>


            <div class="content">
                @yield('content')
            </div>

        </div>


        <aside class="control-sidebar control-sidebar-dark" style="display: none;">

            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>


        <footer class="main-footer">

            <div class="float-right d-none d-sm-inline text-danger">
                ជំនាន់ទី១.០
            </div>

            <strong>បង្កើតឡើងដោយក្រុម BACKEND </strong>
        </footer>
        <div id="sidebar-overlay"></div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"
        integrity="sha512-KBeR1NhClUySj9xBB0+KRqYLPkM6VvXiiWaSz/8LCQNdRpUm38SWUrj0ccNDNSkwCD9qPA4KobLliG26yPppJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
