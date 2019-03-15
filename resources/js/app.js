

require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);


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


const app = new Vue({
    el: '#app',
    data: {
        classes_1: ['nav_bar'],
        classes_btn: ['btn', 'mybtn'],
        show: false,
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
