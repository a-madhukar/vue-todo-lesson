
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app', 


    data:
    {
    	item:'', 

    	todos:[], 
    }, 


    methods:{

    	init()
    	{
    		console.log("init method"); 


    		this.setUserToDos(); 
    	}, 




    	setUserToDos()
    	{
    		axios.get('/todos/index')
    		.then(data =>data.data.items)
    		.then(data => {
    			this.todos = data; 
    		})
    		.catch(error => console.log(error)); 
    	}, 



    	addItemToList()
    	{
    		console.log("attempting to add item into the list"); 

    		if(!this.item) return ; 
    		
    		// this.todos.push(this.item); 

    		this.persist(); 

    		// this.item = ""; 

    	}, 




    	persist()
    	{
    		console.log("persist the item"); 

    		let payload = {
    			item: this.item, 
    		}; 

    		axios.post('/todos', payload)
    		.then(data => data.data.data)
    		.then(data => {
    			// this.todos.push(data); 

    			this.setUserToDos(); 

    			this.item = ""; 
    		})
    		.catch(error => console.log(error)); 
    	}, 


    }, 


    created()
    {
    	console.log("instance got created"); 
    }, 

    mounted()
    {
    	console.log("instance got mounted");

    	this.init(); 

    }, 


});
