// Define a new component called button-counter
Vue.component('button-counter', {
	props: ['name'] ,
 
  template: '#card-template'
})

new Vue({
	el: '#app'

})