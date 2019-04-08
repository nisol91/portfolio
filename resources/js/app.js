

require('./bootstrap');

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
        },
        {
            title: 'Proj_1',
            img: 'images/boolbnb',
        },
        {
            title: 'Proj_1',
            img: 'images/boolbnb',
        },
        {
            title: 'Proj_1',
            img: 'images/boolbnb',
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
