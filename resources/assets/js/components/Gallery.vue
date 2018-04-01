<template>
    <div class="container">
        <div class="row ">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-title">
                      <b>Gallery</b>
                    </div>
                    <div class="col-md-12 text-center" v-if="loading">
                      <p>
                        <h4>Please Wait</h4>
                        <i class="fa fa-spinner text-info fa-spin fa-2x "></i>
                      </p>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                          <label>Gallery Name</label>
                          <input type="text" name="galleryName" v-model="galleryName" placeholder="Gallery Name" class="form-control" v-validate="'required'" v-if="imageUploadArea == false"/>
                          <h4 v-else>{{ galleryName }}</h4>
                          <i v-show="errors.has('galleryName')" class="fa fa-warning text-warning"></i>
                          <span v-show="errors.has('galleryName')" class="help text-danger">{{ errors.first('galleryName') }}</span>
                        </div>
                        <button class="btn btn-primary" @click="createGallery" v-if="imageUploadArea == false">Create</button>
                        <div class="form-group " v-if="imageUploadArea">
                          <vue-clip :options="options">
                            <template slot="clip-uploader-action">
                              <div>
                                 <div class="btn btn-info">
                                   <div class="dz-message">
                                       <i class="fa fa-upload fa-lg" aria-hidden="true"></i>Update images to gallery {{ galleryName }}
                                   </div>
                                 </div>
                              </div>
                            </template>
                            <template slot="clip-uploader-body" slot-scope="props">
                              <div v-for="file in props.files">
                                <img v-bind:src="file.dataUrl" class="img-thumbnail m-t-10" />
                                {{ file.name }} {{ file.status }}
                              </div>
                            </template>

                          </vue-clip>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            options:{
              url: '/uploadGalleryImages',
              paramName: 'file',
              acceptedFiles: {
                 extensions:['image/*'],
                 message: 'You are uploading an invalid file'
               },
            },
            imageUploadArea:false,
            galleryName:'',
            loading:false,
          }
        },
        methods:{
          createGallery:function()
          {
            this.$validator.validateAll({galleryName:this.galleryName}).then(result => {
               if(result) {
                 this.loading=true;
                axios.post('/createNewGallery',{
                  'name' : this.galleryName,
                }).then((response)=>{
                  this.loading=false;
                  this.imageUploadArea=true;
                }).catch((error)=>{
                  alert("no network !! please try again");
                  console.error();
                });
               }
             }).catch(() => {
               alert("Please refresh the page");
             });
          }
        }
    }
</script>
