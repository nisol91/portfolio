@extends('app')
@section('main_content')
    <div class="main_cont">
        <div class="jumbotron jumbotron-fluid flex_1">
            <h1 class="display-4">Hello, world! I am Nicola, Full-Stack Dev.</h1>
            <p class="lead">I love coding, creating things.</p>
            <hr class="my-4">
            <img src="{{asset('images/jumbo_img.png')}}" alt="">
        </div>


        <div class="container skills_cont">
            <div class="row skills_head">
                <div class="col-12 flex_1">
                    <h2 class="lead">Here my skills.</h2>
                </div>
            </div>
            <div class="row skills">
                <div class="col-12 flex_3">
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

            <div class="container languages">
                <div class="row">
                    <div class="col-6 flex_1">
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
                    <div class="col-6 flex_1">
                        <h4>Back-end developer</h4>
                        <div class="card flex_1" style="width: 18rem; height: 350px;">
                            <img class="card-img-top" src="{{asset('images/backend.svg')}}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">It is very important to know how the databases and the most important frameworks work, in order to create modern webapps</p>
                            </div>
                            <div class="card-body">
                                <h2>Languages and frameworks:</h2>
                                <p class="card-text">PHP, Laravel, Vue.js, Wordpress</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container about_me">
                <div class="row flex_1">
                    <h1>About me</h1>
                    <p>ciao</p>
                </div>
            </div>

            <div class="container projects">
                 <div class="row flex_1">
                    <h1>My projects</h1>
                    <p>ciao</p>
                </div>
                <div class="row">
                    <div class="col-12 projects_container">
                        <div class="proj">

                        </div>
                        <div class="proj">

                        </div>
                        <div class="proj">

                        </div>
                        <div class="proj">

                        </div>
                        <div class="proj">

                        </div>
                        <div class="proj">

                        </div>
                        <div class="proj">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
