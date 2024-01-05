@if(Session::has('message'))
    <div class="w-100 alert alert-success mt-3 mr-3 ml-3" style="max-width: 500px;position: fixed; left: 50%;
    transform: translate(-50%, 0);" role="alert">
        <h4 class="alert-heading">{{Session::get('title')}}</h4>
        <p>{{Session::get('message')}}</p>
        <hr>
        <p class="mb-0">A equipe BlogText agradece!</p>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger m-3" role="alert">
        <h4 class="alert-heading">Erro ao enviar!</h4>
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        <hr>
        <p class="mb-0">Verifique o(s) dado(s), e tente novamente!</p>
    </div>
@endif

@if(Route::currentRouteName() != 'welcome')
<div class="site-mobile-menu site-navbar-target bg-dark">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>


<nav class="site-nav bg-dark">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <a href="{{route('home.view')}}" class="logo m-0 float-start">BlogText</a>
                    </div>
                    <div class="col-8 text-center">

                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li class="text-white @if(Route::getCurrentRoute()->getName() == 'home.view') active @endif"><a href="{{route('home.view')}}">Home</a></li>
                            {{-- <li class="has-children">
                                <a href="category.html">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="search-result.html">Search Result</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single.html">Blog Single</a></li>
                                    <li><a href="category.html">Category</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#">Menu One</a></li>
                                    <li><a href="#">Menu Two</a></li>
                                    <li class="has-children">
                                        <a href="#">Dropdown</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Sub Menu One</a></li>
                                            <li><a href="#">Sub Menu Two</a></li>
                                            <li><a href="#">Sub Menu Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            {{-- <li @if(Route::getCurrentRoute()->getName() == 'home.view')class="active"@endif><a href="#">Culture</a></li>
                            <li @if(Route::getCurrentRoute()->getName() == 'home.view')class="active"@endif><a href="#">Business</a></li> --}}
                            <li class="text-white @if(Route::getCurrentRoute()->getName() == 'perfil.view') active @endif"><a href="#" class="text-15">Perfil</a></li>
                        </ul>
                    </div>
                    <div class="col-2 text-end bg-dark">
                        <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none">
                            <span></span>
                        </a>
                        <form action="#" class="search-form d-none d-lg-inline-block">
                            <input type="text" class="form-control" placeholder="Pesquisar...">
                            <span class="bi-search"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
@endif