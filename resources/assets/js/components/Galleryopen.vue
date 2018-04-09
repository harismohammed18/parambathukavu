<template>
    <div class="container">
      <div class="form-group">
        <select class="form-control text-bold" v-model="galleryName">
          <option v-for="name in galleryNames" v-bind:value="name.id">{{ name.name }}</option>
        </select>
        <p class="text-center text-danger p-t-10 text-bold" v-if="loading == false ">{{ msg }}</p>
        <p v-else class="text-center text-primary p-t-10"> <i class="fa fa-spin fa-2x fa-spinner" ></i> </p>
      </div>
      <div class="row" v-if="images.length > 0">
        <lightbox
          id="mylightbox"
          :images="images"
          :image_class=" 'img-fluid img-thumbnail ' "
          :album_class=" 'col' "
          :options="options">
        </lightbox>
      </div>
    </div>
</template>

<script>
import Lightbox from 'vue-simple-lightbox'

    export default {
        components: {
          Lightbox
        },
        mounted() {
          this.getGalleryNames();
        },
        data(){
          return{
            images : [
            ],
            options : {
              closeText : 'X',
              spinner: true,
              className: 'test',
            },
            galleryName:'',
            galleryNames:'',
            imageNames:'',
            loading:false,
            msg :'No gallery Selected',
          }
        },
        watch:{
          galleryName:function()
          {
            this.loading = true;
            axios.post('/getGalleryImages/'+this.galleryName).then((response)=>{
              this.loading = false;
              this.msg='';
              this.imageNames = response.data;
              this.makeImageArray();
            }).catch((error)=>{
              alert("no network 1 !! please try again");
              console.error();
            });
          }
        },
        methods:{
          getGalleryNames:function()
          {
            axios.post('/getGalleryNames').then((response)=>{
              this.galleryNames = response.data;
            }).catch((error)=>{
              alert("no network 2!! please try again");
              console.error();
            });
          },
          makeImageArray:function()
          {
            if(this.images.length > 0)
            {
              while(this.images.length != 0)
              {
                this.images.pop();
              }
            }
            if(this.images.length == 0)
            {
              for(let i=0;i < this.imageNames.length; i++)
              {
                this.images.push({
                      'src' : '/galleryImages/'+this.imageNames[i].imageName,
                      'title' : 'Parambathu Kavu'
                })
              }
            }
          }
        }
    }
</script>
