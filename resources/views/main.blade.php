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
            <div class="row">
                <div class="col-12 flex_1">
                    <p class="lead">Here my skills.</p>
                </div>
            </div>
            <div class="row skills flex_4">
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
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                    One of three columns
                    </div>
                    <div class="col-sm">
                    One of three columns
                    </div>
                    <div class="col-sm">
                    One of three columns
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
