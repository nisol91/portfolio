<div id="navbar">
    <div :class="classes_1" v-scroll="handleScroll">
        <div class="container flex_2">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{asset('images/logo.png')}}" alt=""></a>

            </div>
            <div class="contatti">
            <a href="{{ route('form') }}" :class="classes_btn">Contact Me!</a>
            </div>
        </div>
    </div>
</div>
