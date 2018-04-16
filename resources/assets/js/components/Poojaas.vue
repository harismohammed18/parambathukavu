<template>
  <div class="container">
    <div class="row m-t-50">
      <div class="col-sm-7  col-md-7  ">
        <div class="table-responsive">
          <table class="table  table-hover text-center" style="width:100%;">
            <thead>
              <tr>
                <th>  Name </th>
                <th></th>
              </tr>
            </thead>
            <tbody class="mouse-hand">
              <tr  v-for="poojaass in poojaas" @click="getDetails(poojaass.id)">
                <td>{{poojaass.name}}</td>
                <td><img :src="'/poojaasImage/'+poojaass.image" alt="" class="img-thumbnail " style="width:50px;height:50px;"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal fade" id="modal-1">
        <div class="modal-dialog" role="document">
          <div class="text-center" v-if="loading">
            <i class="fa fa-spin fa-spinner text-info fa-2x"></i>
          </div>
          <div class="modal-content"  v-else >
            <div class="modal-header">
              <h4 class="modal-title " ><label v-html="details.name"></label></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
              </button>
            </div>
            <div class="modal-body text-justify">
              <p class="text-center">
                <img :src="'/poojaasImage/'+details.image" alt="" class="img-thumbnail ">
              </p>
              <p v-html="details.about"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    </div>
  </div>
</template>
<script>
export default{
  data(){
    return{
      poojaas:'',
      loading:false,
      details:'',
    }
  },
  mounted(){
    axios.post('/getPoojaas').then((response)=>{
      this.poojaas=response.data;
    }).catch((error)=>{
      alert("No network! Please try again !!");
    })
  },
  methods:{
    getDetails:function(id){
      $('#modal-1').modal('show');
      this.loading = true;
      axios.post('/getPoojaDetails/'+id).then((response)=>{
        this.loading = false;
        this.details=response.data;
      }).catch((error)=>{
        this.loading = false;
        this.details='';
        alert("No network! Please try again !!");
        $('#modal-1').modal('hide');
      })
    }
  }
}
</script>
