

require('./bootstrap');


var $ = require('jquery');
window.Vue = require('vue');
//



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('first-component');



$(document).ready(init);


function init(){

  console.log('hello world2');



  var app1 = new Vue({

     el: '#app1',
     data: {
       message: 'Hello Vue!',
       name: 'adriano',
       surname: 'de fiddippis'
     },

     computed: {

       fullname: function(){

         return this.name + " " + this.surname;
       },

       getRandNum: function(){

         return Math.floor(Math.random(1,100) * 10 );
       }
     },

     methods: {

       methRandNum: function(){

         return Math.floor(Math.random(1,50) * 10);
       },
     },

     mounted(){
       console.log(this.message,this.name, this.fullname);
     },

  });



  var app2 = new Vue({

    el: '#app2'

  });

}
