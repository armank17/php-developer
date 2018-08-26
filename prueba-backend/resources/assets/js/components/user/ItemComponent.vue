<template>
    <tr>
        <th scope="row"></th>
        <td>{{user.name}}</td>
        <td>{{user.email}}</td>
        <td>{{user.position}}</td>
        <td>${{user.salary}}</td>
        <td>
            <button type="button" class="btn btn-primary" v-on:click="showDetail()">Detail</button>
           
        </td>
    </tr>
       
</template>

<script>
    export default {
        props:['user'],
        data(){
            return{
                editMode: false,
            };  
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            showDetail(){
                
                $('#myModal').modal('show');
               
                axios.get(`/users/${this.user.id}`).then((response) => {
                     
                    const user = response.data;
                    
                    this.$emit('show', user);
                });
                
            },
        }

    }
</script>
