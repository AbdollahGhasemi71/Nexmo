<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin panel</title>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>
<body style="background: url('{{asset('images/ocean.jpg')}}')">
<!--make panel-->

<section class="container-fluid p-0">

    <!--make menu-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('panel.allData')}}">Seo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('slider.index')}}">Slider</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('about.index')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('product.index')}}">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('team.index')}}">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('post.index')}}">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('info.index')}}">Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('social.index')}}">Social</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('link.index')}}">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('contact.index')}}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" target="_blank" href="{{route('home.page')}}">Show website</a>
                </li>
                <li class="nav-item">
                    <div class="nav-link">
                        <a class="text-light" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                            {{ __('Logout panel') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- end make menu-->

    <!-- make content-->
    <section class="container mt-5">
        @yield('content')
    </section>
    <!--  end make content-->
</section>
<!-- end make panel-->

<!-- link js-->
<script src="{{asset('js/app.js')}}"></script>

@yield('js')
</body>
</html>


