<template>
    <div class="row justify-content-center mb-3">
    
    <modal :user="user"></modal>    
    
    <form-component @show="showUsers"></form-component>
    
    <table class="table">
    <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Position</th>
    <th scope="col">Salary</th>
    <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <user-component 
        v-for="(user, index) in users.data" 
        :key="user.id"
        :user="user"
        @show="showUser(index, ...arguments)">
       >

    </user-component>
    </tbody>
    </table>
    <pagination  
        :pagination="users"
        @paginate="getUsers()"
        :offset="4">
    </pagination>
    
        
    </div>
    
</template>
<script>
    export default {
        data(){
            return{
                user:{},
                users: {
                    total: 0,
                    per_page: 2,
                    from: 1,
                    to: 0,
                    current_page: 1
                },
                offset: 4,
            };
        },
        mounted() {
            this.getUsers(); 
        },
        methods:{
            getUsers() {
                axios.get(`/users?page=${this.users.current_page}`).then( (response) => {
                    this.users = response.data;
                    console.log('Component mounted.');
                }); 
            },
            showUsers(data){
                this.users = data;
            },
            showUser(index, user){
                this.user = user;
                //this.thoughts[index] = thought;
            }
        }
        

       
    }
</script>
