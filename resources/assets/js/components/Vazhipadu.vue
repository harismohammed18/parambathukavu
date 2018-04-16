<template>
  <div class="container">
    <div class="row m-t-50">
      <div class="col-sm-7  col-md-7  ">
        <div class="table-responsive">
          <table class="table  table-hover text-center" style="width:100%;">
            <thead>
              <tr>
                <th> Vazhipadu Name </th>
                <th>Unit Price</th>
              </tr>
            </thead>
            <tbody class="mouse-hand">
              <tr  v-for="vazhipadus in vazhipadu" @click="getDetails(vazhipadus.id)">
                <td>{{vazhipadus.name}}</td>
                <td><i class="fa fa-inr"></i> &nbsp;{{vazhipadus.price}}</td>
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
              <p v-html="details.aim"></p>
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
      vazhipadu:'',
      loading:false,
      details:'',
    }
  },
  mounted(){
    axios.post('/getVazhipade').then((response)=>{
      this.vazhipadu=response.data;
    }).catch((error)=>{
      alert("No network! Please try again !!");
    })
  },
  methods:{
    getDetails:function(id){
      $('#modal-1').modal('show');
      this.loading = true;
      axios.post('/getVazhipadeDetails/'+id).then((response)=>{
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
