<template> 
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">User detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row mb-2">
                <div class="col-sm-3"><span class="font-weight-bold">Name:</span></div>
                <div class="col-sm-9">{{user.name}}</div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3"><span class="font-weight-bold">Email:</span></div>
                <div class="col-sm-9">{{user.email}}</div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3"><span class="font-weight-bold">Phone:</span></div>
                <div class="col-sm-9">{{user.phone}}</div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3"><span class="font-weight-bold">Address:</span></div>
                <div class="col-sm-9">{{user.address}}</div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3"><span class="font-weight-bold">Position:</span></div>
                <div class="col-sm-9">{{user.position}}</div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3"><span class="font-weight-bold">Salary:</span></div>
                <div class="col-sm-9">{{user.salary}}</div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-12">
                    <div class="card" >
                        <div class="card-header">
                        <span class="font-weight-bold">Skills</span>
                        </div>
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item pt-2 pb-2" v-for="skill in user.skills">{{skill.skill}}</li>   
                            
                        </ul>
                    </div>
                </div>
               
                
                
                
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
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


    }
</script>
