@extends('app')
@section('main_content')
<div class="main_cont">
    <div class="jumbotron jumbotron-fluid flex_1">
        <h1 class="display-4 main_title">Hello, world! I am Nicola, Full-Stack Dev.</h1>
        <p class="lead">I love coding, creating things.</p>
        <hr class="my-4">
        <img src="{{asset('images/jumbo_img.png')}}" alt="">
        <div id="particles-js"></div>
    </div>

    {{-- //particles --}}
    <script src="{{ asset('js/particlejs/particles.js') }}"></script>
    <script src="{{ asset('js/particlejs/demo/js/app.js') }}"></script>

    <div class="container skills_cont">
        <div class="row skills_head">
            <div class="col-12 flex_1">
                <h2 class="lead">Here my skills.</h2>
            </div>
        </div>
        <div class="row skills ">
            <div class="col-12 flex_3 ">
                <img src="{{asset('images/html.svg')}}" alt="">
                <img src="{{asset('images/css.png')}}" alt="">
                <img src="{{asset('images/sass.png')}}" alt="">
                <img src="{{asset('images/bootstrap.svg')}}" alt="">

                <img src="{{asset('images/js.svg')}}" alt="">
                <img src="{{asset('images/jquery.png')}}" alt="">
                <img src="{{asset('images/vue.png')}}" alt="">

                <img src="{{asset('images/php.png')}}" alt="">
                <img src="{{asset('images/mysql.svg')}}" alt="">
                <img src="{{asset('images/wp.svg')}}" alt="">
                <img src="{{asset('images/laravel.png')}}" alt="">
            </div>
        </div>

        <div class="container languages col-12">
            <div class="flex_1">
                <h4>Front-end developer</h4>
                <div class="card flex_1" style="width: 18rem; height: 350px;">
                    <img class="card-img-top" src="{{asset('images/frontend.svg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">I really love to create and style complex layouts with modern tools</p>
                    </div>
                    <div class="card-body">
                        <h2>Languages and frameworks:</h2>
                        <p class="card-text">HTML, CSS, Scss, Bootstrap, Bulma, JQuery, Vue.js</p>
                    </div>
                </div>
            </div>
            <div class="flex_1">
                <h4>Back-end developer</h4>
                <div class="card flex_1" style="width: 18rem; height: 350px;">
                    <img class="card-img-top" src="{{asset('images/backend.svg')}}" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">It is very important to know how the databases and the most important
                            frameworks work, in order to create modern webapps</p>
                    </div>
                    <div class="card-body">
                        <h2>Languages and frameworks:</h2>
                        <p class="card-text">PHP, Laravel, Vue.js, Wordpress</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container about_me">
            <div class="row flex_1">
                <h1>About me <i class="fas fa-caret-up"></i></h1>

                <div class="story">
                    <p>
                        Junior Full Stack Web Developer,
                        graduated in Civil Engineering.
                        Knowledges in both Frontend and Backend
                        Web Development.
                    </p>
                </div>

            </div>
        </div>

        <div class="container projects" id="projects">
            <div class="row flex_1">
                <h1>My projects</h1>
                <p></p>
            </div>
            <div class="row">
                {{-- <project v-bind:project="project" v-for="project in projects"></project> --}}

                <div class="container projects projects_container">

                    <div id="app_parallax" class="container_parallax">
                        <carda
                        data-image="https://images.unsplash.com/photo-1479660656269-197ebb83b540?dpr=2&auto=compress,format&fit=crop&w=1199&h=798&q=80&cs=tinysrgb&crop=">
                            <h1 slot="header">Canyons</h1>
                            <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </carda>
                        <carda
                            data-image="https://images.unsplash.com/photo-1479659929431-4342107adfc1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
                            <h1 slot="header">Beaches</h1>
                            <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </carda>
                        <carda
                            data-image="https://images.unsplash.com/photo-1479644025832-60dabb8be2a1?dpr=2&auto=compress,format&fit=crop&w=1199&h=799&q=80&cs=tinysrgb&crop=">
                            <h1 slot="header">Trees</h1>
                            <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </carda>
                        <carda
                            data-image="https://images.unsplash.com/photo-1479621051492-5a6f9bd9e51a?dpr=2&auto=compress,format&fit=crop&w=1199&h=811&q=80&cs=tinysrgb&crop=">
                            <h1 slot="header">Lakes</h1>
                            <p slot="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </carda>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
