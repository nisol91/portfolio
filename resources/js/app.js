

require('./bootstrap');

// Wait for window load
// $(window).load(function () {
//     // Animate loader off screen
// });

$(document).ready(function () {
    $(".se-pre-con").fadeOut(3000);
    $('.story').hide();
    $('.fa-caret-up').click(function (e) {
        $('.story').slideToggle();
        $(this).toggleClass('rotated');


    });


});


//---vue

window.Vue = require('vue');


Vue.component('project', require('./components/ProjectComponent.vue').default);


Vue.directive('scroll', {
    inserted: function (el, binding) {
        let f = function (evt) {
            if (binding.value(evt, el)) {
                window.removeEventListener('scroll', f)
            }
        }
        window.addEventListener('scroll', f)
    }
})


const projects = new Vue({
    el: '#projects',
    data: {
        projects: [
        {
            title: 'BoolBnB',
            img: 'images/boolbnb',
            tag: 'progetto_1',
        },
        {
            title: 'Proj_1',
            img: 'images/boolbnb',
            tag: 'progetto_1',

        },
        {
            title: 'Proj_1',
            img: 'images/boolbnb',
            tag: 'progetto_1',

        },
        {
            title: 'Proj_1',
            img: 'images/boolbnb',
            tag: 'progetto_1',

        },
        ],
    },
    methods: {
    }
});


const app = new Vue({
    el: '#navbar',
    data: {
        classes_1: ['nav_bar'],
        classes_btn: ['btn', 'mybtn'],
        show: false,
        projects: [


        ],
    },
    methods: {
        changeNavClass() {
            this.classes_1 = ['nav_scroll']
        },
        handleScroll: function (evt, el) {
            if (window.scrollY > 5) {

                this.classes_1.push('nav_scroll', 'box');

                this.show = true;

            } else if (window.scrollY < 1) {
                this.classes_1 = ['nav_bar'];
            }
                console.log(window.scrollY);
        },
    }
});

//parallax

Vue.config.devtools = true;

Vue.component('carda', {
    template: `
    <div class="card-wrap"
      @mousemove="handleMouseMove"
      @mouseenter="handleMouseEnter"
      @mouseleave="handleMouseLeave"
      ref="card">
      <div class="carda"
        :style="cardStyle">
        <div class="card-bg" :style="[cardBgTransform, cardBgImage]"></div>
        <div class="card-info">
          <slot name="header"></slot>
          <slot name="content"></slot>
        </div>
      </div>
    </div>`,
    mounted() {
        this.width = this.$refs.card.offsetWidth;
        this.height = this.$refs.card.offsetHeight;
    },
    props: ['dataImage'],
    data: () => ({
        width: 0,
        height: 0,
        mouseX: 0,
        mouseY: 0,
        mouseLeaveDelay: null
    }),
    computed: {
        mousePX() {
            return this.mouseX / this.width;
        },
        mousePY() {
            return this.mouseY / this.height;
        },
        cardStyle() {
            const rX = this.mousePX * 30;
            const rY = this.mousePY * -30;
            return {
                transform: `rotateY(${rX}deg) rotateX(${rY}deg)`
            };
        },
        cardBgTransform() {
            const tX = this.mousePX * -40;
            const tY = this.mousePY * -40;
            return {
                transform: `translateX(${tX}px) translateY(${tY}px)`
            }
        },
        cardBgImage() {
            return {
                backgroundImage: `url(${this.dataImage})`
            }
        }
    },
    methods: {
        handleMouseMove(e) {
            this.mouseX = e.pageX - this.$refs.card.offsetLeft - this.width / 2;
            this.mouseY = e.pageY - this.$refs.card.offsetTop - this.height / 2;
        },
        handleMouseEnter() {
            clearTimeout(this.mouseLeaveDelay);
        },
        handleMouseLeave() {
            this.mouseLeaveDelay = setTimeout(() => {
                this.mouseX = 0;
                this.mouseY = 0;
            }, 500);
        }
    }
});

const app_parallax = new Vue({
    el: '#app_parallax'
});
