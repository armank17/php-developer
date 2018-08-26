<template>
    
    <form class="form-inline" v-on:submit.prevent="searchByEmail()">
        <label class="sr-only" for="user">Name</label>
        <input 
            type="text" 
            class="form-control mb-2 mr-sm-2" 
            id="user"
            name="user"
            placeholder="Email..."
            v-model="email"
        >
        <button type="submit" class="btn btn-success mb-2 mr-sm-2">Search</button>
        <button type="button" class="btn btn-warning mb-2" v-on:click="clearSearch()">Clear</button>
        
        
    </form>
    
</template>

<script>
    export default {
        data(){
            return{
                email: '',
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            searchByEmail(){
                const email = this.email;
                //this.email = '';
                axios.get('/users', {
                    params: {
                        email : email
                    }
                }).then((response) => {
                    const users = response.data;
                    
                    this.$emit('show', users);
                });  
            },
            clearSearch(){
                axios.get('/users?page=1').then( (response) => {
                    const users = response.data;
                    this.$emit('show', users);
                    this.email = '';
                });  
            },
        }
    }
</script>
